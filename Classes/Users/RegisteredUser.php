<?php 
    require_once __DIR__ .  '/User.php';

    class Member extends User{
        
        private $address;
        private $username;
        private $password;
        private $discount = 20;

        public function __construct($_name, $_surname, $_email, $_id, $_address, $_username,  $_password)
        {
            parent::__construct($_name, $_surname, $_email, $_id);
            $this->address = $_address;
            $this->username = $_username;
            $this->username = $_password;

        }

    }


?>