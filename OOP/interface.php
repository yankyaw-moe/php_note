<?php

interface Animal{
    public function move();
}

class Dog implements Animal{
    public function move(){
        echo "The dog is running";
    }
}

class Fish implements Animal{
    public function move(){
        echo "The fish is swimming";
    }
}

function app(Animal $obj){
    $obj->move();
}

app(new Dog);
app(new Fish);