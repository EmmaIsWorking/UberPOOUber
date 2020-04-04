<?php<?php
require_once("account.php")

class Paypal extends Account{


    public function construct($name, $document, $mail, $password){
        parent::__construct($name, $document, $mail, $password)
        
    }
}