<?php
        /**
        * Ak  Customattribute
        * This module is adding custom attribute in customer section and displaying in customer grid .
        * @category    Ak
        * @package     Ak_Customattribute
        */

        /**
        * Ak  Customattribute
        *
        * @category   Ak
        * @package    Ak_Customattribute
        * @author     Adesh Kumar <adeshsuryan2005@gmail.com>
        */
class Ak_Customattribute_Model_Observer extends Varien_Event_Observer
{
    /**
     * Adds column to admin customers grid
     *
     * @param Varien_Event_Observer $observer
     * @return Ak_Customattribute_Model_Observer
     */
    public function appendCustomColumn(Varien_Event_Observer $observer)
    {
        $block = $observer->getBlock();
        if (!isset($block)) {
            return $this;
        }
 
        if ($block->getType() == 'adminhtml/customer_grid') {
            /* @var $block Mage_Adminhtml_Block_Customer_Grid */
            $block->addColumnAfter('customattribute', array(
                'header'    => 'Custom Attribute',
                'type'      => 'text',
                'index'     => 'customattribute',
            ), 'email');
        }
    }
}