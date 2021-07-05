<?php

$num = [1,2,3,4];

function two($n){
    return $n*2;
}

$result = array_map('two', $num);

print_r($result);