<?php

abstract class Shape{
    protected $name;
    abstract public function calculate();

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}

class Circle extends Shape{
    private $radius;

    public function __construct($name, $radius){
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function calculate(){
        return pi() * pow($this->radius, 2);
    }
}
class Rectangle extends Shape{
    private $width;
    private $height;

    public function __construct($name, $width, $height){
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
    public function calculate(){
        return $this->width * $this->height;
    }
}
$circle = new Circle('Circle', 5);
var_dump($circle);

$rectangle = new Rectangle('Rectangle', 4 , 6);

var_dump($rectangle);
echo $rectangle-> getName() . ' Area: ' . $rectangle->calculate() . '<br>';