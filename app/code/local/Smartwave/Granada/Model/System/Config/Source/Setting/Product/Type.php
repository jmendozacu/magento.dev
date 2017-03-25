<?php

class Smartwave_Granada_Model_System_Config_Source_Setting_Product_Type
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'product-view-type1', 'label' => Mage::helper('granada')->__('Type 1')),
            array('value' => 'product-view-type2', 'label' => Mage::helper('granada')->__('Type 2'))
        );
    }
}