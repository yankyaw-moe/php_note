<?php

$name = "YKM";

$result = function() use($name){
    echo "Hello $name";
};

$result(); // Hello YKM