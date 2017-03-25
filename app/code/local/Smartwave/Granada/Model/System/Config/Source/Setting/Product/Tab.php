<?php

class Smartwave_Granada_Model_System_Config_Source_Setting_Product_Tab
{
    public function toOptionArray()
    {
        return array(
            array('value' => '0', 'label' => Mage::helper('granada')->__('Default')),
            array('value' => 'vertical_tab', 'label' => Mage::helper('granada')->__('Vertical Tab')),
            array('value' => 'accordion_tab', 'label' => Mage::helper('granada')->__('Accordion Tab'))
        );
    }
}