<?php
 class User {
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function sayHello(){
        return "Hello, " . $this->name;
    }
 }

?>