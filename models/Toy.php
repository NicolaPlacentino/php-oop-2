<?php 
require_once __DIR__ . '/Product.php';

class Toy extends Product{
    public $materials;


    public function __construct($title, $description, $img, $animal, $price, $category, array $materials){
        $this->materials = $materials;
    }
}