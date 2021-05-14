<?php

class index2 {

    public $quantity;
    public $method;
    public $price;


    function set_quantity($quantity) {
        $this -> quantity = $quantity;
    }
    function get_quantity() {
        return $this -> quantity;
    }

    function set_method($method) {
        $this -> method = $method;
    }
    function get_method() {
        return $this -> method;
    }

    function set_price($price) {
        $this -> price = $price;
    }
    function get_price() {
        return $this -> price;
    }

}

$index = new index2();
$index -> set_quantity('4'); 
$index -> set_method('ABA');
print_r("1. Numbers of sales are " . $index -> get_quantity() . " by " . $index -> get_method());
