<?php

require_once(dirname(__FILE__) . "/../classes/product.php");
require_once(dirname(__FILE__) . "/../classes/products_grid.php");
/**
 * @package     Joomla.Administrator
 * @subpackage  com_plcatalog
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
/**
 * Product Model
 */
class PLCatalogModelPLCatalog extends JModelItem
{   
    public function getTitle() {
        return "Hinnasto";
    }
    
    
    public function getRenderer() {
        return new ProductsGrid($this->loadProducts());
    }
    
    
    private function loadProducts() {
        $ret = array();
        $db = JFactory::getDbo();
         
        $query = $db->getQuery(true);
        $query->select($db->quoteName(array("id", "name", "description", "prices", "img_url")));
        $query->from($db->quoteName('#__plcatalog_product'));
        $query->where($db->quoteName('published') . ' = 1 ');
        $query->order('time_created DESC');
        
        $db->setQuery($query);
        
        foreach ($db->loadObjectList() as $result) {
            $ret[] = new Product(
                $result->id,
                $result->name,
                nl2br($result->description),
                $result->prices,
                $result->img_url
            );
        }
        
        return $ret;
    }
}
