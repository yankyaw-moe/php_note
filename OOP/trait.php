<?php

trait Math{
    public function add($a, $b){
        echo $a+$b;
    } 
}

trait Area{
    private $PI = 3.14;

    public function circle($r){
        echo $this->PI * $r * $r;
    }
}

class Calculator{
    use Math, Area;
}

$calc = new Calculator;
$calc->add(1,2);
echo "+++++";
echo Calculator::class;