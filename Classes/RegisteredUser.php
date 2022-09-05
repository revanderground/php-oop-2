<?php 
    require_once __DIR__ .  '/User.php';

    class Member extends User{
        
        private $address;
        private $username;

        public function __construct($_name, $_surname, $_email, $_id, $_address, $_username)
        {
            parent::__construct($_name, $_surname, $_email, $_id);
            $this->address = $_address;
            $this->username = $_username;

        }

    }


?>