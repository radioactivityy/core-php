<?php

class User
{
  public $name;
  public $email;
  protected $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . ' logged in <br>';
  }
}
// inheritance
class Admin extends User{

    public $level;
    public function __construct($name, $email, $level) {
        $this->level = $level;
        parent::__construct($name, $email); //its calling user constructer
    }
// example of a polymorphismn
    public function login() {
        echo 'Admin '. $this->name . ' logged in <br>';
    }
    public function getStatus(){
        echo $this->status;
    }
}
$admin1 = new Admin('Jane Doe', 'jane@gmail.com', 1);
var_dump($admin1);
echo $admin1->name;
echo $admin1->getStatus();
echo $admin1->login();
