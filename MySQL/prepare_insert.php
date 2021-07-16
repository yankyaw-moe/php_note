<?php

$db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

$sql = "insert into roles (name, value) values (:name, :value)";

$statement = $db->prepare($sql);

$statement->execute([
    ':name' => 'God',
    ':value' => 999
]);

echo $db->lastInsertId();
