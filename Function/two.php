<?php

$name = "YKM";

$hello = function() use ($name){
    $name = "MoeMoe";
    echo "Hello $name";
};

$hello(); // Hello MoeMoe

echo $name; // YKM