<?php

require_once __DIR__ . '/Product.php';

class Food extends Product{
    protected $type;
    protected $ingredients = [];
    protected $expirationDate;
    protected $ageRange;
    protected $weight;


    public function __construct($_product_name, $_animal, $_brand, $_price, $_id, $_type, $_ingredients, $_ageRange,
    $_expirationDate, $_weight)
    {
        parent:: __construct($_product_name, $_animal, $_brand, $_price, $_id);
        $this->type = $_type;
        $this->ingredients = $_ingredients;
        $this->expirationDate = $_expirationDate;
        $this->ageRang = $_ageRange;
        $this->weight = $_weight;
    }
}