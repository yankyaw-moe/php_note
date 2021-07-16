<?php

setcookie("name", "Yan", time() + 60);
setcookie("theme", "light");

setcookie("age", 30, time() + 3600, "/form/"); // path

echo "See view-cookie.php";