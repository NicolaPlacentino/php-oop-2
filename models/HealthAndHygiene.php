<?php 
require_once __DIR__ . '/Product.php';

class HealthAndHygiene extends Product{
    public $use_instructions;
    public $is_medicine;


    public function __construct($title, $description, $img, $animal, $price, $category, $use_instructions, $is_medicine){
        $this->use_instructions = $use_instructions;
        $this->is_medicine = $is_medicine;
    }
}