<?php
	class SWW_Settings_Model_Source_Fontsize {
		public function toOptionArray() {
			return array(
				array('value' => '12px', 'label' => Mage::helper('settings')->__('12px')),
				array('value' => '13px', 'label' => Mage::helper('settings')->__('13px')),
				array('value' => '14px', 'label' => Mage::helper('settings')->__('14px')),
				array('value' => '15px', 'label' => Mage::helper('settings')->__('15px')),
				array('value' => '16px', 'label' => Mage::helper('settings')->__('16px')),
				array('value' => '17px', 'label' => Mage::helper('settings')->__('17px'))
			); 
		}
	}