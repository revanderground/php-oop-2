<?php

   class Card{
      private $owner;
      private $number;
      private $expirationDate;
      private $cvv;

      public function __construct($_owner, $_number, $_expirationDate, $_cvv)
      {
         $this->holder = $_owner;
         $this->number = $_number;
         $this->expirationDate = $_expirationDate;
         $this->cvv = $_cvv;
      }
   }