<?php

class User{
    // attributes
    public $name;
    public $surname;
    // method

    public function __construct($name, $surname){
        $this->name = $name;
        $this->surname = $surname;
    }
    public function login(){
        echo "Hello, " . $this->name . "<br>";
}
}

$user = new User(
"S Doe", "Smith"
);
var_dump($user->login());