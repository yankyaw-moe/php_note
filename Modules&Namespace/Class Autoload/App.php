<?php

// include 'Library/Helper/Calculator.php';

include "Autoload.php";

use Library\Helper\Calculator;

$cal = new Calculator;

echo $cal->add([1,2,3]);