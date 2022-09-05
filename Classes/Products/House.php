<?php

require_once __DIR__ . '/Product.php';

class House extends Product{
    protected $materials = [];
    protected $length;
    protected $height;
    protected $color;

    public function __construct($_product_name, $_animal, $_brand, $_price, $_materials, $_length, $_height, $_color)
    {
        parent:: __construct($_product_name, $_animal, $_brand, $_price);
        $this->materials = $_materials;
        $this->length = $_length;
        $this->height = $_height;
        $this->height = $_color;
    }
}