<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product{
    protected $materials = [];
    protected $countryOfFabrication;
    protected $color;

    public function __construct($_product_name, $_animal, $_brand, $_price, $_materials, $_countryOfFabrication, $_color)
    {
        parent::__construct($_product_name, $_animal, $_brand, $_price);
        $this->materials = $_materials;
        $this->height = $_countryOfFabrication;
        $this->height = $_color;
    }
}