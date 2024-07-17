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

class Galahad_MailChimp_User
{
	protected $_email;
	protected $_mergeVariables = array();
	protected $_emailType = 'html';
	protected $_doubleOptIn = false;

	/**
	 * Constructor
	 *
	 * @param string $email
	 * @param array $mergeVariables
	 * @param string $emailType "html" or "text"
	 * @param bool $doubleOptIn
	 */
	public function __construct($email, $mergeVariables = array(), $emailType = 'html', $doubleOptIn = false)
	{
		$this->_email = $email;

		if (is_array($mergeVariables)) {
			$this->_mergeVariables = $mergeVariables;
		}

		if (in_array($emailType, array('html', 'text'))) {
			$this->_emailType = $emailType;
		}

		if (is_bool($doubleOptIn)) {
			$this->_doubleOptIn = $doubleOptIn;
		}
	}

	/**
	 * Get the users email address
	 *
	 * @return string
	 */
	public function getEmail()
	{
		return $this->_email;
	}

	/**
	 * Get additional merge variables
	 *
	 * @return array
	 */
	public function getMergeVariables()
	{
		return $this->_mergeVariables;
	}

	/**
	 * Whether the user prefers html or text e-mails
	 *
	 * @return string
	 */
	public function getEmailType()
	{
		return $this->_emailType;
	}

	/**
	 * Should MailChimp send a double opt-in request?
	 *
	 * @return bool
	 */
	public function getDoubleOptIn()
	{
		return $this->_doubleOptIn;
	}
}