<?php

class User
{
  // Properties
  public $name;
  public $email;
  protected $status = 'active';

  public function __construct($name, $email, $status)
  {
    $this->name = $name;
    $this->email = $email;
    $this->status = $status;
  }

  // Methods
  public function login()
  {
    echo $this->name . ' logged in <br>';
  }
  // setter

    public function setStatus($status){
      echo $this->status = $status;
    }

  // getter
  public function getStatus() {
      echo $this->status;
  }
}

// Instantiate a new object
$user1 = new User('John Doe', 'john@gmail.com', 'active');

$user1->login();
$user1->getStatus();
$user1->setStatus('gay');
$user2 = new User('Jane Doe', 'jane@gmail.com', 'gay');

$user2->login();
$user2->getStatus();
// var_dump($user2);
