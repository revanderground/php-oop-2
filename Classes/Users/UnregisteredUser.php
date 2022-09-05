<?php 
    require_once __DIR__ .  '/User.php';

    class Guest extends User{
        

        public function __construct($_name, $_surname, $_email, $_id)
        {
            parent:: __construct($_name, $_surname, $_email, $_id);
        }

    }


?>