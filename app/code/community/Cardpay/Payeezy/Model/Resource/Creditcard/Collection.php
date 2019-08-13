<?php
/**
 * Cardpay Solutions, Inc.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 * 
 * @category  Cardpay
 * @package   Cardpay_Payeezy
 * @copyright Copyright (c) 2015 Cardpay Solutions, Inc. (http://www.cardpaysolutions.com)
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */
 
/**
 * First Data Payeezy credit card collection resource model.
 *
 * @category Cardpay
 * @package  Cardpay_Payeezy
 * @author   Cardpay Solutions, Inc. <sales@cardpaysolutions.com>
 */
class Cardpay_Payeezy_Model_Resource_Creditcard_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * Internal constructor.
     */
    public function _construct()
    {
        parent::_construct();
        $this->_init('payeezy/creditcard');
    }
}