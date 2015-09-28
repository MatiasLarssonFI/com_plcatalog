<?php

require_once(dirname(__FILE__) . "/iproducts_renderer.php");

defined('_JEXEC') or die('Restricted access');


class ProductsGrid implements IProductsRenderer {
    private $_products;
    
    
    public function __construct(array $products) {
        $this->_products = $products;
    }
    
    
    public function render() {
        $cells_html = "";
        
        foreach ($this->_products as $product) {
            $img_html = "";
            $img_url = $product->imgUrl();
            if (!empty($img_url)) {
                $img_html .= "
                    <div class='plcatalog-product-image'>
                        <img src='{$img_url}' alt='Tuotekuva?' />
                    </div>
                ";
            }
            
            $cells_html .= "
                <div class='plcatalog-product'>
                    <div class='plcatalog-product-head'>{$product->name()}</div>
                    {$img_html}
                    <div class='plcatalog-product-description'>{$product->description()}</div>
                    <div class='plcatalog-product-price'>{$product->price()} &euro;</div>
                </div>
            ";
        }
        
        echo "
        <div class='plcatalog-products-grid-container'>
            {$cells_html}
        </div>
        ";
    }
    
    
    public function cssUri() {
        return JUri::base() . "components/com_plcatalog/css/products_grid.css";
    }
}
