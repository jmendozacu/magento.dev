<?php
class SWW_Settings_Model_Menu_Leftanimation {
    public function toOptionArray()	{
        return array(
            array('value' => 'default', 'label' => Mage::helper('settings')->__('Default')),
            array('value' => 'bounce', 'label' => Mage::helper('settings')->__('Bounce')),
            array('value' => 'flip', 'label' => Mage::helper('settings')->__('Flip')),
        );
    }
}