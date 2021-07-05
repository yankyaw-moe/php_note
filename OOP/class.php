<?php 

class Animal{

    public $name;

    private function __construct(){
        echo "Creating animal object";
    }

    public function run(){
        echo "$this->name is running...";
    }
}

$dog = new Animal;
$dog->name = "Mg Me";
$dog->run();