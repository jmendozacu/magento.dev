<?php
class SWW_Settings_Model_Header_Paragraph {
    public function toOptionArray() {
        return array(
            array('value' => 'Header 1', 'label' => Mage::helper('settings')->__('Header 1')),
            array('value' => 'Header 2', 'label' => Mage::helper('settings')->__('Header 2')),
            array('value' => 'Header 3', 'label' => Mage::helper('settings')->__('Header 3')),
            array('value' => 'Header 4', 'label' => Mage::helper('settings')->__('Header 4')),
            array('value' => 'Header 5', 'label' => Mage::helper('settings')->__('Header 5'))
        );
    }
}