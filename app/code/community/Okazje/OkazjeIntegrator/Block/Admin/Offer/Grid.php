<?php
class Okazje_Integrator_Block_Admin_Offer_Grid extends Mage_Adminhtml_Block_Widget_Grid {
    
    public function __construct() {
        parent::__construct();
        $this->setId('okazjeintegrator_offer_grid');
        $this->setDefaultSort('entity_id');
        $this->setDefaultDir('desc');
    }
    
    protected function _getStore() {
        $storeId = (int) $this->getRequest()->getParam('store', 0);
        return Mage::app()->getStore($storeId);
    }
    
    // protected function _prepareCollection(){
    //     $store = $this->_getStore();
    //     $collection = Mage::getModel('catalog/product')->getCollection()
    //         ->addAttri
    //         buteToSelect('name')
    //         ->addAttributeToSelect('sku')
    //         ->addAttributeToSelect('okazjeintegrator_category_id', 'left');
    //     if ($store->getId()) {
    //         $collection->addStoreFilter($store);
    //     }
    //     $this->setCollection($collection);
    //     return parent::_prepareCollection();
    // }
    
    protected function _prepareColumns() {
        $this->addColumn('entity_id', array(
            'header' => Mage::helper('catalog')->__('ID'),
            'align' => 'right',
            'width' => '50px',
            'index' => 'entity_id',
        ));
        $this->addColumn('sku', array(
            'header' => Mage::helper('catalog')->__('SKU '),
            'align' => 'right',
            'width' => '100px',
            'index' => 'sku',
        ));
        $this->addColumn('name', array(
            'header' => Mage::helper('catalog')->__('Name'),
            'align' => 'left',
            'index' => 'name',
        ));
       
        // $this->addColumn('action', array(
        //     'header' => Mage::helper('catalog')->__('Action'),
        //     'width' => '50px',
        //     'type' => 'action',
        //     'getter' => 'getId',
        //     'actions' => array(
        //         array(
        //             'caption' => Mage::helper('catalog')->__('Edit'),
        //             'url' => array(
        //                 'base'=>'adminhtml/catalog_product/edit',
        //                 'params'=>array('store'=>$this->getRequest()->getParam('store'))
        //             ),
        //             'field' => 'id'
        //         )
        //     ),
        //     'filter' => false,
        //     'sortable' => false,
        //     'index' => 'stores',
        // ));
        return parent::_prepareColumns();
    }
    
    
}