<?php

session_start();

if (!isset($_SESSION['user'])) {
    header('location: index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-5">Yan Kyaw (Manager)</h1>

        <?php if (isset($_GET['error'])) : ?>
            <div class="alert alert-warning">
                Cannot Upload File
            </div>
        <?php endif ?>

        <?php if (file_exists('_actions/photos/profile.jpg')) : ?>
            <img src="_actions/photos/profile.jpg" alt="Profile Photo" width="200" class="img-thumbnail mb-3">
        <?php endif ?>

        <form action="_actions/upload.php" method="POST" enctype="multipart/form-data">
            <div class="input-group mb-3">
                <input type="file" name="photo" class="form-control">
                <button class="btn btn-secondary">Upload</button>
            </div>
        </form>

        <ul class="list-group">
            <li class="list-group-item">
                <b>Email:</b> yankyaw@gmail.com
            </li>
            <li class="list-group-item">
                <b>Phone:</b> (09) 450992340
            </li>
            <li class="list-group-item">
                <b>Address:</b> No.611, Main Street, Dawei.
            </li>
        </ul>
        <br>

        <a href="_actions/logout.php">Logout</a>
    </div>
</body>

</html>