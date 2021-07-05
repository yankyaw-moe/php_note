<?php

$two = fn ($n) => $n*2;

echo $two(3); // 6


$x = 3; // global variable can be used directly from array function
$add = fn ($y) => $x + $y; 

echo $add(4); // 7