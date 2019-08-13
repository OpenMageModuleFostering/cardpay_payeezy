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


/* @var $installer Cardpay_Payeezy_Model_Resource_Creditcard */
$installer = $this;
$installer->startSetup();

/**
 * Create table 'payeezy_credit_card'
 */
$table = $installer->getConnection()
    ->newTable($installer->getTable('payeezy_credit_card'))
    ->addColumn('payeezy_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'unsigned' => true,
        'identity' => true,
        'nullable' => false,
        'primary' => true,
    ), 'Payeezy Id')
    ->addColumn('customer_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'unsigned' => true,
        'nullable' => false,
    ), 'Customer Id')
    ->addColumn('token', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        'nullable' => true,
    ), 'Token')
    ->addColumn('cc_exp_month', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        'nullable' => true,
    ), 'Cc Exp Month')
    ->addColumn('cc_exp_year', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        'nullable' => true,
    ), 'Cc Exp Year')
    ->addColumn('cc_type', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        'nullable' => true,
    ), 'Cc Type')
    ->addColumn('is_default', Varien_Db_Ddl_Table::TYPE_SMALLINT, null, array(
        'unsigned' => true,
        'nullable' => false,
        'default' => '0',
    ), 'Is Default')
    ->addIndex($installer->getIdxName('payeezy_credit_card', array('customer_id')),
        array('customer_id'))
    ->setComment('Payeezy Credit Card');

$installer->getConnection()->createTable($table);
$installer->endSetup();