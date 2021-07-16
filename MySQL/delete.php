<?php

$db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

$sql = "delete from roles where id > 3";

$statement = $db->prepare($sql);

$statement->execute();

echo $statement->rowCount();
