<?php

class Math {

    public function __call($name, $args){
        echo "$name method doesn't exist";
    }

    // public function add(){
    //     echo "Add function";
    // }

    static function __callStatic($name, $args){
        echo "$name static method doesn't exist";
    }

    // static function multiple(){
    //     echo "Multiple function";
    // }

    public function __invoke(){
        echo "This is not a function";
    }

    private $PI = 3.14;

    public function __get($name){
        echo "Cannot get $name";
    }

    public function __set($name, $value){
        echo "Cannot set $name with $value";
    }

    public function __toString(){
        return "PI = $this->PI";
    }


}

$math = new Math;
$math->add();   // add method doesn't exist

Math::multiple(); // multiple static method doesn't exist

$math(); // This is not a function

echo $math->PI; // Cannot get PI

$math->PI = 3.145; // Cannot set PI with 3.145

echo $math;