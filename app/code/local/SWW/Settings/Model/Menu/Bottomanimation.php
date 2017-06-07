<?php
class SWW_Settings_Model_Menu_Bottomanimation {
    public function toOptionArray()	{
        return array(
            array('value' => 'default', 'label' => Mage::helper('settings')->__('Default')),
            array('value' => 'bounce', 'label' => Mage::helper('settings')->__('Bounce')),
            array('value' => 'bounceIn', 'label' => Mage::helper('settings')->__('BounceIn')),
            array('value' => 'bounceInDown', 'label' => Mage::helper('settings')->__('BounceInDown')),
            array('value' => 'bounceInLeft', 'label' => Mage::helper('settings')->__('BounceInLeft')),
            array('value' => 'bounceInRight', 'label' => Mage::helper('settings')->__('BounceInRight')),
            array('value' => 'bounceInUp', 'label' => Mage::helper('settings')->__('BounceInUp')),
            array('value' => '', 'label' => Mage::helper('settings')->__('')),

            array('value' => 'fadeIn', 'label' => Mage::helper('settings')->__('FadeIn')),
            array('value' => 'fadeInDown', 'label' => Mage::helper('settings')->__('FadeInDown')),
            array('value' => 'fadeInLeft', 'label' => Mage::helper('settings')->__('FadeInLeft')),
            array('value' => 'fadeInRight', 'label' => Mage::helper('settings')->__('FadeInRight')),
            array('value' => 'fadeInUp', 'label' => Mage::helper('settings')->__('FadeInUp')),
            array('value' => '', 'label' => Mage::helper('settings')->__('')),

            array('value' => 'flip', 'label' => Mage::helper('settings')->__('Flip')),
            array('value' => 'flipInX', 'label' => Mage::helper('settings')->__('FlipInX')),
            array('value' => 'fadeInY', 'label' => Mage::helper('settings')->__('FadeInY')),
            array('value' => '', 'label' => Mage::helper('settings')->__('')),

            array('value' => 'rotateIn', 'label' => Mage::helper('settings')->__('RotateIn')),
            array('value' => 'rotateInDownLeft', 'label' => Mage::helper('settings')->__('RotateInDownLeft')),
            array('value' => 'rotateInDownRight', 'label' => Mage::helper('settings')->__('RotateInDownRight')),
            array('value' => 'rotateInUpLeft', 'label' => Mage::helper('settings')->__('RotateInUpLeft')),
            array('value' => 'rotateInUpRight', 'label' => Mage::helper('settings')->__('RotateInUpRight')),
            array('value' => '', 'label' => Mage::helper('settings')->__('')),

            array('value' => 'slideInDown', 'label' => Mage::helper('settings')->__('SlideInDown')),
            array('value' => 'slideInLeft', 'label' => Mage::helper('settings')->__('SlideInLeft')),
            array('value' => 'slideInRight', 'label' => Mage::helper('settings')->__('SlideInRight')),
            array('value' => 'slideInUp', 'label' => Mage::helper('settings')->__('SlideInUp')),
            array('value' => '', 'label' => Mage::helper('settings')->__('')),

            array('value' => 'zoomIn', 'label' => Mage::helper('settings')->__('ZoomIn')),
            array('value' => 'zoomInDown', 'label' => Mage::helper('settings')->__('ZoomInDown')),
            array('value' => 'zoomInLeft', 'label' => Mage::helper('settings')->__('ZoomInLeft')),
            array('value' => 'zoomInRight', 'label' => Mage::helper('settings')->__('ZoomInRight')),
            array('value' => 'zoomInUp', 'label' => Mage::helper('settings')->__('ZoomInUp')),
            array('value' => '', 'label' => Mage::helper('settings')->__('')),


            array('value' => 'flash', 'label' => Mage::helper('settings')->__('Flash')),
            array('value' => 'hinge', 'label' => Mage::helper('settings')->__('Hinge')),
            array('value' => 'lightSpeedIn', 'label' => Mage::helper('settings')->__('LightSpeedIn')),
            array('value' => 'pulse', 'label' => Mage::helper('settings')->__('Pulse')),
            array('value' => 'rubberBand', 'label' => Mage::helper('settings')->__('RubberBand')),
            array('value' => 'shake', 'label' => Mage::helper('settings')->__('Shake')),
            array('value' => 'swing', 'label' => Mage::helper('settings')->__('Swing')),
            array('value' => 'tada', 'label' => Mage::helper('settings')->__('Tada')),
            array('value' => 'wobble', 'label' => Mage::helper('settings')->__('wobble')),
            array('value' => '', 'label' => Mage::helper('settings')->__('')),

        );
    }
}