<?php 
require_once __DIR__ . '/Animal.php';

class Product{
    public $title;
    public $description;
    public $img;
    public $animal;
    public $price;
    public $category;

    public function __construct($title, $description, $img, $animal, $price, $category){
        $this->title = $title;
        $this->description = $description;
        $this->img = $img;
        $this->animal = $animal;
        $this->price = $price;
        $this->category = $category;

    }
}