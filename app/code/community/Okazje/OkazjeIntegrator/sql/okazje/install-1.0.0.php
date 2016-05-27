<?php
$installer = $this;
$installer->startSetup();

$OkazjeData = $installer->getConnection()
    ->newTable('okazje_data')
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'identity'  => true,
        'unsigned'	=> true,
        'nullable'  => false,
        'primary'   => true,
    ), 'ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        'nullable' => false
    ), 'Name')
    ->addColumn('value', Varien_Db_Ddl_Table::TYPE_TEXT, 255, array(
        'nullable' => false
    ), 'value');
$installer->getConnection()->createTable($OkazjeData);

$installer->endSetup();