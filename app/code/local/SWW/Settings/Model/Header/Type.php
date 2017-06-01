<?php
	class SWW_Settings_Model_Header_Type {
		public function toOptionArray() {
			return array(
                    array('value' => 'NULL', 'label' => Mage::helper('settings')->__('Choose a header')),
					array('value' => 'header-1', 'label' => Mage::helper('settings')->__('Header 1')),
					array('value' => 'header-2', 'label' => Mage::helper('settings')->__('Header 2')),
					array('value' => 'header-3', 'label' => Mage::helper('settings')->__('Header 3')),
					array('value' => 'header-4', 'label' => Mage::helper('settings')->__('Header 4')),
					array('value' => 'header-5', 'label' => Mage::helper('settings')->__('Header 5')),
                    array('value' => 'header-6', 'label' => Mage::helper('settings')->__('Header 6'))
            );
		}
	}