<?php

require_once(dirname(__FILE__) . "/iproducts_renderer.php");

defined('_JEXEC') or die('Restricted access');


class ProductsGrid implements IProductsRenderer {
    private $_products;
    
    
    public function __construct(array $products) {
        $this->_products = $products;
    }
    
    
    public function render() {
        echo "grid";
    }
    
    
    public function cssUri() {
        return JUri::base() . "components/com_plcatalog/css/products_grid.css";
    }
}
