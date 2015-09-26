<?php

defined('_JEXEC') or die('Restricted access');


interface IProductsRenderer {
    public function __construct(array $products);
    
    
    /**
     * Writes the HTML to STDOUT.
     * 
     * @param Product[]
     */
    public function render();
    
    
    /**
     * Returns the CSS file URI.
     * 
     * @return string
     */
    public function cssUri();
}
