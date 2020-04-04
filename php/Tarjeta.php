<?php
require_once("account.php")

class Tarjeta extends Account{

    public $cardNumber;
    public $cvv;
    public $dueDate;

    public function construct($name, $document, $mail, $password, $cardNumber, $cvv, $dueDate ){
        parent::__construct($name, $document, $mail, $password)
        this->cardNumeber = $cardNumber;
        this->cvv = $cvv;
        this->dueDate $dueDate;
    }
}