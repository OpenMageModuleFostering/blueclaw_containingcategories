<?php
/**
 * Blueclaw
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * Available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 *
 * @category    Blueclaw
 * @package     Blueclaw_ContainingCategories
 * @copyright   Copyright (c) 2011 Blueclaw Conversion Ltd. (http://blueclawecommerce.co.uk)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
 
/**
 * ContainingCategories list
 *
 * @category    Blueclaw
 * @package     Blueclaw_ContainingCategories
 * @author      John Hickling <john@blueclaw.co.uk>
 */
class Blueclaw_ContainingCategories_Block_List extends Mage_Core_Block_Template
{
    protected $_product = null;

    function getProduct()
    {
        if (!$this->_product) {
            $this->_product = Mage::registry('product');
        }
        return $this->_product;
    }
	
}