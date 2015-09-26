<?php

class Product {
    private $_name;
    private $_description;
    private $_price;
    
    
    public function __construct($name, $description, $price) {
        $this->_name = $name;
        $this->_description = $description;
        $this->_price = $price;
    }
    
    
    public function name() { return $this->_name; }
    public function description() { return $this->_description; }
    public function price() { return $this->_price; }
}
