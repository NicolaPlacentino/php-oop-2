<?php 
require_once __DIR__ . '/Product.php';

class Toy extends Product{
    public $name;
    public $materials;


    public function __construct($title, $description, $img, $animal, $category, $name, array $materials){
        $this->name = $name;
        $this->materials = $materials
    }
}