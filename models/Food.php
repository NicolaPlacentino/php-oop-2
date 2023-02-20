<?php 
require_once __DIR__ . '/Product.php';

class Food extends Product{
    public $ingredients;


    public function __construct($title, $description, $img, $animal, $price, $category, array $ingredients){
        $this->ingredients = $ingredients;
    }
}