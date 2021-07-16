<?php

$db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

$sql = "insert into roles (name, value) values ('Supervisor', 4)";

$db->query($sql);

echo $db->lastInsertId(); // id = 4