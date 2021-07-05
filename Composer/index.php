<?php

include ('vendor/autoload.php');

use Carbon\Carbon;
use App\Library\Math;

echo Carbon::now()->addDay();
echo ", ";
echo Math::add(3,4);