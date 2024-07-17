<?php

/**
 * Klaviyo
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Commercial License
 * you can't distribute, modify or sell this code
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file
 * If you need help please contact extensions@klaviyo.com
 *
 * @author    Klaviyo
 * @copyright Klaviyo
 * @license   commercial
 */

namespace KlaviyoPs\Classes;

if (!defined('_PS_VERSION_')) {
    exit;
}

use Address;
use Country;
use Configuration;
use Context;
use Customer;
use CustomerCore;
use FormField;
use Tools;
use Validate;
use KlaviyoPsModule;
use KlaviyoPs\Classes\PrestashopServices\LoggerService;
use KlaviyoV3Sdk\Exception\KlaviyoApiException;

class HooksHandler
{
    /**
     * @var KlaviyoPsModule
     */
    const NEWSLETTER_SUBSCRIPTION = 0;
    const NEWSLETTER_UNSUBSCRIPTION = 1;
    const ERROR_SUBSCRIBING_CUSTOMER = 'Error while trying to subscribe to Klaviyo list, customer with email: ';
    const ERROR_SUBSCRIBING_SMS_CUSTOMER = 'Error while trying to subscribe to Klaviyo list, customer with sms: ';
    const ERROR_UPDATING_CUSTOM_PROPERTIES = 'Error while trying to update custom properties for customer with email: ';

    private $klaviyoModule;

    /**
     * HooksHandler constructor.
     *
     * @param KlaviyoPsModule $klaviyopsModule
     */
    public function __construct(KlaviyoPsModule $klaviyopsModule)
    {
        $this->klaviyoModule = $klaviyopsModule;
    }

    /**
     * Handle actionCustomerAccount hooks. Includes add and update. Subscribe customer
     * to the Klaviyo list selected in module settings if they subscribed, are active
     * and aren't deleted.
     *
     * @param array $params
     */
    public function handleActionCustomerAccount(array $params)
    {
        $api = new KlaviyoApiWrapper();
        $customer = $this->getCustomerFromHookParams($params);
        $logger = new LoggerService();

        if (
            $customer->newsletter &&
            $customer->active &&
            !$customer->deleted &&
            Configuration::get('KLAVIYO_PRIVATE_API')
        ) {
            try {
                $api->subscribeCustomer($customer->email);
            } catch (KlaviyoApiException $e) {
                $logger->log('error', self::ERROR_SUBSCRIBING_CUSTOMER . $customer->email);
            }
        }

        $customProperties = $this->getPropertiesFromCustomer($customer);
        if (!empty($customProperties)) {
            try {
                $api->updateProfileCustomProperties($customer->email, $customProperties);
            } catch (KlaviyoApiException $e) {
                $logger->log('error', self::ERROR_UPDATING_CUSTOM_PROPERTIES . $customer->email);
            }
        }
    }

    /**
     * Handle actionNewsletterSubscriptionAfter hook used in the default PrestaShop
     * Newsletter Subscription module.
     *
     * @param array $params
     */
    public function handleActionNewsletterSubscription(array $params)
    {
        if (
            $params['action'] == static::NEWSLETTER_SUBSCRIPTION &&
            !$params['error'] &&
            Configuration::get('KLAVIYO_PRIVATE_API')
        ) {
            try {
                $api = new KlaviyoApiWrapper();
                $api->subscribeCustomer($params['email']);
            } catch (KlaviyoApiException $e) {
                $logger = new LoggerService();
                $logger->log('error', self::ERROR_SUBSCRIBING_CUSTOMER . $params['email']);
            }
        }
    }

    /**
     * Return new Webservice Resource definition to use specific management interface.
     *
     * @param array $resources
     * @return array[]
     */
    public function handleAddWebserviceResources(array $resources)
    {
        return [
            'klaviyo' => [
                'description' => 'Klaviyo custom endpoints',
                'specific_management' => true,
            ]
        ];
    }

    /**
     * Add SMS Consent to customer address form
     *
     * @param  array $params
     * @return array
     */
    public function handleAdditionalCustomerAddressFields(array $params)
    {
        try {
            if (!$this->klaviyoModule->getConfigurationValueOrNull('KLAVIYO_IS_SYNCING_SMS_SUBSCRIBERS')) {
                throw new KlaviyoApiException('Sync SMS Subscribers disabled');
            }

            $trigger = $this->klaviyoModule->getConfigurationValueOrNull('KLAVIYO_SMS_SUBSCRIBE_TRIGGER');
            if (!$trigger) {
                throw new KlaviyoApiException('SMS Subscribe trigger not configured');
            }

            $idLang = (int) Context::getContext()->language->id;

            $smsConsentLabel = $this->klaviyoModule->getConfigurationValueOrNull('KLAVIYO_SMS_CONSENT_LABEL', $idLang);
            $smsConsentDisclosure = $this->klaviyoModule->getConfigurationValueOrNull('KLAVIYO_SMS_CONSENT_DISCLOSURE_TEXT', $idLang);
            $label = "{$smsConsentLabel}<br><em>{$smsConsentDisclosure}</em>";

            $formField = new FormField();
            $formField->setName('kl_sms_consent');
            $formField->setType('checkbox');
            $formField->setLabel($label);
            $formField->setRequired(false);

            return [$formField];
        } catch (KlaviyoApiException $e) {
            return [];
        }
    }

    /**
     * Subscribe mobile to klaviyo list
     *
     * @param  array $params
     * @return void
     */
    public function handleActionSubmitCustomerAddressForm(array $params)
    {
        if (
            !empty($params['address']) &&
            is_object($params['address']) &&
            Configuration::get('KLAVIYO_PRIVATE_API') &&
            isset($params['address']->kl_sms_consent) &&
            !empty($params['address']->kl_sms_consent)
        ) {
            if (!$this->klaviyoModule->getConfigurationValueOrNull('KLAVIYO_IS_SYNCING_SMS_SUBSCRIBERS')) {
                return;
            }

            $trigger = $this->klaviyoModule->getConfigurationValueOrNull('KLAVIYO_SMS_SUBSCRIBE_TRIGGER');
            if ($trigger === 'place_order') {
                // Save information in cookie to be triggered after payment (place order)
                $cookie = Context::getContext()->cookie;
                $addressFields = [
                    $params['address']->phone ?? '',
                    $params['address']->phone_mobile ?? '',
                ];
                $addressToHash = implode('', array_map('strval', $addressFields));
                $cookie->kl_sms_consent = Tools::hash($addressToHash);
                return;
            }

            // Trigger start checkout
            $mobile = $params['address']->phone_mobile ?? $params['address']->phone ?? '';
            $isoCode = '';
            if (!empty($params['address']->id_country)) {
                $country = new Country($params['address']->id_country);
                if (Validate::isLoadedObject($country)) {
                    $isoCode = $country->iso_code;
                }
            }

            $attributes = ['mobile' => $mobile];

            $customer = new Customer((int)$params['address']->id_customer);
            if (Validate::isLoadedObject($customer)) {
                $attributes['email'] = $customer->email;
            }

            $this->sendSMSConsentRequestAPI($attributes, $isoCode);
        }
    }

    /**
     * Subscribe mobile to klaviyo list (place order trigger)
     *
     * @param  array $params
     * @return void
     */
    public function handleDisplayOrderConfirmation($params)
    {
        $cookie = Context::getContext()->cookie;

        if (
            !empty($params['order']) &&
            Validate::isLoadedObject($params['order']) &&
            Configuration::get('KLAVIYO_PRIVATE_API') &&
            isset($cookie->kl_sms_consent) &&
            !empty($cookie->kl_sms_consent)
        ) {
            if (!$this->klaviyoModule->getConfigurationValueOrNull('KLAVIYO_IS_SYNCING_SMS_SUBSCRIBERS')) {
                return;
            }

            $trigger = $this->klaviyoModule->getConfigurationValueOrNull('KLAVIYO_SMS_SUBSCRIBE_TRIGGER');
            if ($trigger !== 'place_order') {
                return;
            }

            // Check consent to invoice address
            $consentAddress = null;
            foreach (
                [
                    $params['order']->id_address_invoice,
                    $params['order']->id_address_delivery
                ] as $idAddress
            ) {
                $address = new Address((int)$idAddress);
                if (Validate::isLoadedObject($address)) {
                    $addressFields = [
                        $address->phone ?? '',
                        $address->phone_mobile ?? '',
                    ];
                    $addressToHash = implode('', array_map('strval', $addressFields));
                    $addressHash = Tools::hash($addressToHash);

                    if ($cookie->kl_sms_consent === $addressHash) {
                        $consentAddress = $address;
                        break;
                    }
                }
            }

            // Get mobile on invoice address
            if (is_null($consentAddress)) {
                return;
            }

            $mobile = $address->phone_mobile ?? $address->phone ?? '';
            $isoCode = '';
            if (!empty($address->id_country)) {
                $country = new Country($address->id_country);
                if (Validate::isLoadedObject($country)) {
                    $isoCode = $country->iso_code;
                }
            }

            $attributes = ['mobile' => $mobile];

            $customer = new Customer((int)$params['order']->id_customer);
            if (Validate::isLoadedObject($customer)) {
                $attributes['email'] = $customer->email;
            }

            $this->sendSMSConsentRequestAPI($attributes, $isoCode);
        }
    }

    /**
     * Extract Customer object from hook params.
     *
     * @param array $hookParams
     * @return CustomerCore
     */
    private function getCustomerFromHookParams(array $hookParams)
    {
        if (isset($hookParams['customer']) && $hookParams['customer'] instanceof CustomerCore) {
            return $hookParams['customer'];
        }

        if (isset($hookParams['newCustomer']) && $hookParams['newCustomer'] instanceof CustomerCore) {
            return $hookParams['newCustomer'];
        }
    }

    /**
     * Format custom properties for Klaviyo Subscribe request e.g. birthday, first and last name.
     *
     * @param CustomerCore $customer
     * @return array
     */
    private function getPropertiesFromCustomer(CustomerCore $customer)
    {
        $customerPropertiesMap = [
            'birthday' => 'Birthday',
            'firstname' => 'first_name',
            'lastname' => 'last_name',
        ];

        $customerProperties = [];
        foreach ($customerPropertiesMap as $customerProp => $klaviyoProp) {
            if (isset($customer->{$customerProp})) {
                $customerProperties[$klaviyoProp] = $customer->{$customerProp};
            }
        }

        return $customerProperties;
    }

    /**
     * Subscribe mobile to a list
     *
     * @param  array $address
     * @param  string $isoCode
     * @return void
     */
    private function sendSMSConsentRequestAPI($address = [], $isoCode = '')
    {
        if (empty($address) || !is_array($address)) {
            return;
        }
        if (empty($address['mobile'])) {
            return;
        }

        try {
            $address['mobile'] = KlaviyoUtils::formatPhone($address['mobile'], $isoCode);

            $api = new KlaviyoApiWrapper();
            $api->subscribeSMSCustomer($address);
        } catch (KlaviyoApiException $e) {
            $logger = new LoggerService();
            $logger->log('error', self::ERROR_SUBSCRIBING_SMS_CUSTOMER . $address['mobile']);
        }
    }
}
