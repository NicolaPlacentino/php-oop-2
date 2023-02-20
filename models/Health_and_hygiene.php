<?php 
require_once __DIR__ . '/Product.php';

class Health_and_hygiene extends Product{
    public $name;
    public $use_instructions;
    public $is_medicine;


    public function __construct($title, $description, $img, $animal, $category, $name, $use_instructions, $is_medicine){
        $this->name = $name;
        $this->use_instructions = $use_instructions;
        $this->is_medicine = $is_medicine
    }
}