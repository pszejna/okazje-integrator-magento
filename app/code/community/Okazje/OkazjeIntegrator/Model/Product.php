
<?php

class Orba_okazje_Model_Product extends Mage_Catalog_Model_Product {

    protected function getConfig() {
        return Mage::getModel('okazje/config');
    }

    public function getOffers() {
        echo 'kaszanka2';
        // $store = $this->getConfig()->getStore();
        // $conditions = $this->getConfig()->getCoreAttributesConditions();
        // $mappings = $this->getConfig()->getAttributesMappings();
        // $additional_attributes = array();
        // $_attribute = Mage::getModel('okazje/attribute');
        // foreach ($mappings as $group) {
        //     foreach ($group as $mapping) {
        //         if (!empty($mapping)) {
        //             if (!in_array($mapping, $additional_attributes)) {
        //                 $additional_attributes[$mapping] = $_attribute->getOptionsByCode($mapping);
        //             }
        //         }
        //     }
        // }
        // $product_collection = $this->getCollection()
        //         ->addStoreFilter($store->getStoreId())
        //         ->addAttributeToSelect('sku')
        //         ->addAttributeToSelect('ceneo_category_id')
        //         ->addAttributeToSelect('price')
        //         ->addAttributeToSelect('special_price')
        //         ->addAttributeToSelect('special_from_date')
        //         ->addAttributeToSelect('special_to_date')
        //         ->addAttributeToSelect('weight')
        //         ->addAttributeToSelect('name')
        //         ->addAttributeToSelect('description')
        //         ->addAttributeToSelect('short_description')
        //         ->addAttributeToSelect('tax_class_id')
        //         ->addAttributeToSelect('visibility')
        //         ->addAttributeToSelect('status')
        //         ->addAttributeToFilter('ceneo_category_id', array(
        //     'notnull' => true,
        //     'neq' => ''
        // ));
        // foreach ($additional_attributes as $code => $options) {
        //     $product_collection->addAttributeToSelect($code);
        // }
        // $product_collection = $this->addMediaGalleryAttributeToCollection($product_collection);
        // $offers = array('other' => array());
        // $_stock = Mage::getModel('cataloginventory/stock_item');
        // $_category = Mage::getModel('okazje/category');
        // foreach ($product_collection as $product) {
        //     if ($product->isVisibleInSiteVisibility() && $product->isVisibleInCatalog()) {
        //         $core_attrs = array();
        //         $_stock = $_stock->loadByProduct($product);
        //         if ($_stock->getManageStock()) {
        //             $core_attrs['stock'] = (int) $_stock->getQty();
        //         }
        //         foreach ($conditions as $attr => $data) {
        //             if (array_key_exists('code', $data)) {
        //                 if (!empty($data['code']) && $product->getData($data['code']) !== null) {
        //                     $options = $additional_attributes[$data['code']];
        //                     if (empty($options)) {
        //                         $core_attrs[$attr] = (int) ($product->getData($data['code']) == $data['value']);
        //                     } else {
        //                         $key = $product->getData($data['code']);
        //                         if ($key) {
        //                             $option = array_key_exists($key, $options) ? $options[$key] : null;
        //                             $core_attrs[$attr] = $option ? (int) ($option == $data['value']) : 0;
        //                         }
        //                     }
        //                 }
        //             } else if (array_key_exists('values', $data)) {
        //                 if (is_array($data['values'])) {
        //                     foreach ($data['values'] as $value => $value_data) {
        //                         if (!empty($value_data['code'])) {
        //                             $options = $additional_attributes[$value_data['code']];
        //                             if (empty($options)) {
        //                                 if ($product->getData($value_data['code']) == $value_data['value']) {
        //                                     $core_attrs[$attr] = $value;
        //                                     break;
        //                                 }
        //                             } else {
        //                                 if ($product->getData($value_data['code'])) {
        //                                     $option = $options[$product->getData($value_data['code'])];
        //                                     if ($option == $value_data['value']) {
        //                                         $core_attrs[$attr] = $value;
        //                                         break;
        //                                     }
        //                                 }
        //                             }
        //                         }
        //                     }
        //                 }
        //                 if (!isset($core_attrs[$attr]) && isset($data['default'])) {
        //                     $core_attrs[$attr] = $data['default'];
        //                 }
        //             }
        //         }
        //         $group = 'other';
        //         $group_attrs = array();
        //         foreach ($mappings[$group] as $attr => $mapping) {
        //             if (!empty($mapping)) {
        //                 $value = $product->getData($mapping);
        //                 if (!empty($value)) {
        //                     $options = $additional_attributes[$mapping];
        //                     if (!empty($options)) {
        //                         $group_attrs[$attr] = $options[$value];
        //                     } else {
        //                         $group_attrs[$attr] = $value;
        //                     }
        //                 }
        //             }
        //         }
        //         $imgs = array();
        //         $media_gallery = $product->getMediaGallery();
        //         $images = (isset($media_gallery['images'])) ? $media_gallery['images'] : array();
        //         $i = 0;
        //         foreach ($images as $image) {
        //             $imgs[] = $this->_getImageUrl($image['file']);
        //             if ($i == 1) {
        //                 break;
        //             }
        //             $i++;
        //         }
        //         $cat = $_category->getPathArray($product->getCeneoCategoryId());
        //         $price = $this->getFinalPriceIncludingTax($product);
        //         $offers[$group][] = array(
        //             'id' => $product->getSku(),
        //             'url' => $product->getProductUrl(),
        //             'price' => $price,
        //             'name' => $product->getName(),
        //             'desc' => $product->getDescription() ? $product->getDescription() : $product->getShortDescription(),
        //             'weight' => $product->getWeight(),
        //             'imgs' => $imgs,
        //             'cat' => $cat,
        //             'group_attrs' => $group_attrs,
        //             'core_attrs' => $core_attrs
        //         );
        //     }
        // }
        return $offers;
    }

}
