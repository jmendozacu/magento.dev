<?php
	class SWW_Settings_Model_Source_Font {
		public function toOptionArray()	{
			return array(
				array('value' => 'georgia-verdana', 'label' => Mage::helper('settings')->__('Georgia, Verdana')),
				array('value' => 'helvetica-garamond', 'label' => Mage::helper('settings')->__('Helvetica (Bold), Garamond')),
				array('value' => 'bodoni-futura', 'label' => Mage::helper('settings')->__('Bodoni, Futura')),
                array('value' => 'franklin-baskerville', 'label' => Mage::helper('settings')->__('Franklin Gothic, Baskerville'))
			);
		} 
	}


