<?php<?php
require_once("account.php")

class Efectivo extends Account{


    public function construct($name, $document, $mail, $password){
        parent::__construct($name, $document, $mail, $password)
        
    }
}