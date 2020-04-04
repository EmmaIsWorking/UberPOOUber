<?php
class Account {
    private $id;
    public $name;
    public $document;
    public $email;
    private $password;

    public function __construct(Account $name, $document){
        $this->name = $name;
        $this->document = $document;       
    }
}
?>