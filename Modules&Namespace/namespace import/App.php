<?php

include 'Calculator.php';

use Library\Helper\Math\Basic\Calculator as Math;

// use Library\Helper\Math\Basic\Calculator;

// $cal1 = new Library\Helper\Math\Basic\Calculator;
// $cal2 = new Library\Helper\Math\Basic\Calculator;

$cal1 = new Math;
$cal2 = new Math;

echo $cal1->add([1,2,3]) . ", ";

echo $cal2->add([3,4,5]);
