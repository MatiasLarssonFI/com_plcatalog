<?php

class Product {
    private $_id;
    private $_name;
    private $_description;
    private $_price;
    private $_img_url;
    
    
    public function __construct($id, $name, $description, $prices, $img_url) {
        $this->_id = $id;
        $this->_name = $name;
        $this->_description = $description;
        $this->_prices = $prices;
        $this->_img_url = $img_url;
    }
    
    
    public function id() { return $this->_id; }
    public function name() { return $this->_name; }
    public function description() { return $this->_description; }
    public function prices() { return $this->_prices; }
    public function imgUrl() { return $this->_img_url; }
}
