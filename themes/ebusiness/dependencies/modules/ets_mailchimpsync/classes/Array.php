<?php
/**
* 2007-2017 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2017 PrestaShop SA
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  @version  Release: $Revision$
*  International Registered Trademark & Property of PrestaShop SA
*/

require_once dirname(__FILE__) . '/Synchronizer.php';

/** @see Galahad_MailChimp_User */
require_once dirname(__FILE__) . '/User.php';

/**
 * Array Synchronizer
 *
 * Mostly used for testing and example purposes.  Takes an
 * array of users and lets you sync with your MailChimp account.
 *
 * @category  Galahad
 * @package   Galahad_MailChimp
 * @copyright Copyright (c) 2009 Chris Morrell <http://cmorrell.com>
 * @license   GPL <http://www.gnu.org/licenses/>
 */
class Galahad_MailChimp_Synchronizer_Array extends Galahad_MailChimp_Synchronizer
{
	/**
	 * Array of users
	 *
	 * @var array
	 */
	protected $_users;

	/**
	 * Whether or not the users need to be batched (automatic)
	 *
	 * @var bool
	 */
	protected $_batched = false;

	/**
	 * Array of e-mail addresses only
	 *
	 * @var array
	 */
	protected $_keys = null;

	/**
	 * Constructor
	 *
	 * @param string $mailChimpUser
	 * @param string $mailChimpPassword
	 * @param array $users
	 */
	public function __construct($mcApiKey, Array $users)
	{	   
		$this->_users = $users;
		unset($users);

		foreach ($this->_users as $i => $user) {
			$this->_keys[$user['EMAIL']] = $i;
		}

		parent::__construct($mcApiKey);
	}

	/**
	 * Determines if a user exists based on his or her e-mail address
	 *
	 * @param string $email
	 * @param string $listId
	 * @return bool
	 */
	protected function userExists($email, $listId = null)
	{
	   unset($listId);
		return isset($this->_keys[$email]);
	}

	/**
	 * Gets an array of users
	 *
	 * @param string $listId
	 * @return array
	 */
	protected function getUsers($listId = null, $batchNumber)
	{
		if (!$this->_batched) {
			$this->_users = array_chunk($this->_users, $this->_batchSize);
			$this->_batched = true;
		}

		if (!isset($this->_users[$batchNumber])) {
			return false;
		}
        unset($listId);
		return $this->_users[$batchNumber];
	}
}