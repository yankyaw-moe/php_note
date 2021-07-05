<?php

class Area{
    const PI = 3.14;

    public function circle($r){
        echo PI * $r * $r;
    }
}

echo Area::PI;