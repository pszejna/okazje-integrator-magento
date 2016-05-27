<?php
class Okazje_Integrator_Block_Admin_Offer extends Mage_Adminhtml_Block_Widget_Container {
    
    public function __construct() {
        parent::__construct();
        $this->setTemplate('okazjeintegrator/offer.html');
    }

    protected function _prepareLayout() {
        $this->setChild('grid', $this->getLayout()->createBlock('okazjeintegrator/admin_offer_grid', 'okazjeintegrator_offer_grid'));
        return parent::_prepareLayout();
    }

    /**
     * Render grid
     *
     * @return string
     */
    public function getGridHtml() {
        return $this->getChildHtml('grid');
    }

    /**
     * Check whether it is single store mode
     *
     * @return bool
     */
    public function isSingleStoreMode() {
        if (!Mage::app()->isSingleStoreMode()) {
               return false;
        }
        return true;
    }
    
}
