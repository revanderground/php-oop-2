<?php

trait CodeID{
    protected $codeID;

    public function setcodeID($_codeID){
        $this->barcode = $_codeID;
    }

    public function getcodeID(){
       return $this->codeID; 
    }
}

?>