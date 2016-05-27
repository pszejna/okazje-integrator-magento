<?php

$installer = $this;

$connection = $installer->getConnection();

$categories = array(
    array('id' => '1','name' => 'okazje_color','value' => 'Kolor'),
    array('id' => '2','name' => 'okazje_size','value' => 'Rozmiar'),
    array('id' => '3','name' => 'shop_color','value' => 'Kolor'),
    array('id' => '4','name' => 'shop_rozmiar','value' => 'Rozmiar'),
);

$connection->insertMultiple($installer->getTable("okazje/okazje_data"), $categories);