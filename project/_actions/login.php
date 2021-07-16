<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if ($email === 'yankyaw@gmail.com' && $password === '123456') {
    $_SESSION['user'] = ['username' => 'Yan Kyaw'];
    header('location: ../profile.php');
} else {
    header('location: ../index.php?incorrect=1');
}
