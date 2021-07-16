<?php

$db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

$sql = "update roles set name=:name where value = 999";

$statement = $db->prepare($sql);

$statement->execute([
    ':name' => 'Superman'
]);

echo $statement->rowCount();
