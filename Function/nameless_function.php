<?php

$num = [1,2,3,4];

$result = array_map(function($n){
    return $n*2;
}, $num);

print_r($result);