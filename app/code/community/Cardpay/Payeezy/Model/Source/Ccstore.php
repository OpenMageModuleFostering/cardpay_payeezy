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
 * First Data Payeezy credit card store source model.
 *
 * @category Cardpay
 * @package  Cardpay_Payeezy
 * @author   Cardpay Solutions, Inc. <sales@cardpaysolutions.com>
 */
class Cardpay_Payeezy_Model_Source_Ccstore
{
    /**
     * Allowed credit cards to be stored
     */
	public function toOptionArray()
    {
        return array(
            array(
                'value' => false,
                'label' => 'Disabled'
            ),
            array(
                'value' => 1,
                'label' => 'Ask the customer'
            ),
            array(
                'value' => 2,
                'label' => 'Save without asking'
            ),
        );
    }
}