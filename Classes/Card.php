<?php

   class Card{
      private $owner;
      private $number;
      private $expirationDate;
      private $cvv;

      public function __construct($_owner, $_number, $_expirationDate, $_cvv)
      {
         $this->owner= $_owner;
         $this->number = $_number;
         $this->expirationDate = $_expirationDate;
         $this->cvv = $_cvv;
      }

    
      public function getOwner(){
        return $this->owner;
    }

    public function getNumber(){
        return $this->number;
    }

    public function getExpirationDate(){
        return $this->expirationDate;
    }

    public function getCvv(){
        return $this->cvv ;
    }
 

    protected function setOwner($_owner){
        $this->owner = $_owner;
    }
    protected function setNumber($_number){
        $this->number = $_number;
    }
    protected function setexpirationDate($_expirationDate){
        return $this->expirationDate = $_expirationDate;
    }
    protected function setCvv($_cvv){
        return $this->cvv = $_cvv;
    }



   }