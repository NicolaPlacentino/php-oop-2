<?php 
require_once __DIR__ . '/Product.php';

class Food extends Product{
    public $name;
    public $ingredients;


    public function __construct($name, array $ingredients){
        $this->name = $name;
        $this->ingredients = $ingredients
    }
}