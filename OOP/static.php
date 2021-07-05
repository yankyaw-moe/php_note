<?php

class Animal{

    static $type = "Mammal";

    static function info(){
        echo "Group: " . static::$type;
    }
}

echo Animal::$type;

Animal::info();