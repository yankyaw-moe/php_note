<?php

class Animal{

    

    public function __construct(public $name){
        // $this->name = $name;
    }

    public function run(){
        echo "$this->name is running...";
    }
}

$dog = new Animal("aung aung");
$dog->name = 'bobo';
$dog->run();