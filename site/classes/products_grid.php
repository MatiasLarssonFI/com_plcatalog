<?php

require_once(dirname(__FILE__) . "/iproducts_renderer.php");

defined('_JEXEC') or die('Restricted access');


class ProductsGrid implements IProductsRenderer {
    private $_products;
    
    
    public function __construct(array $products) {
        $this->_products = $products;
    }
    
    
    public function render() {
        $cols_html = array(0 => "", 1 => "");
        $current_col = 0;
        
        foreach ($this->_products as $product) {
            $img_html = "";
            $img_url = $product->imgUrl();
            if (!empty($img_url)) {
                $img_html .= "<img src='{$img_url}' alt='Tuotekuva?' />";
            }
            
            $price_groups_html = "";
            foreach ($product->priceGroups() as $price_group) {
                $prices_html = "";
                foreach (explode(";", $price_group->text) as $price) {
                    $prices_html .= "<span class='plcatalog-product-price'>" . nl2br(htmlspecialchars($price)) . " &euro;</span>";
                }
                
                $price_group_name_html = "";
                if ($price_group->name !== "default") {
                    $price_group_name_html = "<span class='plcatalog-price-group-name'>" . htmlspecialchars($price_group->name) . "</span>";
                }
                
                $price_groups_html .= "
                    <div title='{$price_group->tooltip}' class='plcatalog-product-price-group'>{$price_group_name_html}{$prices_html}</div>";
            }
            
            $cols_html[$current_col] .= "
                <div class='plcatalog-product'>
                    <div class='plcatalog-product-head'>{$product->name()}</div>
                    <div class='plcatalog-product-image'><div class='plcatalog-product-frame'>{$img_html}</div></div>
                    <div class='plcatalog-product-description'>" . nl2br(htmlspecialchars($product->description())) . "</div>
                    <div class='plcatalog-product-price-groups'>{$price_groups_html}</div>
                </div>
            ";
            
            $current_col = (int)!$current_col;
        }
        
        echo "
        <div class='plcatalog-products-grid-container-outer'>
            <div class='plcatalog-products-grid-container-inner'>
                <div class='plcatalog-product-col'>
                    {$cols_html[0]}
                </div>
                <div class='plcatalog-product-col'>
                    {$cols_html[1]}
                </div>
            </div>
        </div>
        ";
    }
    
    
    public function cssUri() {
        return JUri::base() . "components/com_plcatalog/css/products_grid.css";
    }
}
