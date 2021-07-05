<?php

class Animal {

    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function run(){
        echo "$this->name is running...";
    }

    // abstract function walk();
}

class Dog extends Animal{

    private $color;

    public function __construct($name, $color){
        parent::__construct($name);
        $this->color = $color;
    }

    public function run(){
        echo "$this->name of $this->color is running...";
    }

    public function bark(){
        echo "$this->name Woof...Woof... $this->color";
    }
}

$dog = new Dog('bobo', 'brown');

// $dog->bark();

$dog->run();

$dog->bark();