<?php

$db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

// print_r($db);

$statement = $db->query("select * from roles");

// $result = $statement->fetchAll();
$row1 = $statement->fetch();
$row2 = $statement->fetch();
$row3 = $statement->fetch();

print_r($row1);



// if ($db) {
//     echo "db connected...";
// }
