<?php
class Orba_okazje_Model_Config extends Mage_Core_Model_Abstract {

    public function _construct() {
        $this->_init('okazje/config');
    }

    public function getStore() {
        return Mage::app()->getStore();
    }
}