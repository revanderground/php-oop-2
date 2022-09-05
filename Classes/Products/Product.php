<?php 

class Product {

    protected $product_name;
    protected $animal;
    protected $brand; 
    protected $price = 0;
    protected $id; 


    public function __construct($_product_name, $_animal, $_brand, $_price, $_id) {
        $this->product_name = $_product_name;
        $this->animal = $_animal;
        $this->brand = $_brand;
        $this->price = $_price;
        $this->id = $_id;   
    }

    
    public function getProductName() {
        return $this->product_name;
    }

    public function getAnimal() {
        return $this->animal;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getPrice() {
        return $this->price;
    }    

    public function getId() {
        return $this->id;
    }    

    public function setProductName($_product_name){
        $this->product_name = $_product_name;
    }    

    public function setAnimal($_animal){
        $this->product_name = $_animal;
    }    

    public function setBrand($_brand){
        $this->product_name = $_brand;
    }    

    public function setPrice($_price){
        $this->product_name = $_price;
    }    

    public function setId($_id){
        $this->product_name = $_id;
    }    


}

?>
