<?php
    session_start();
    if (isset($_SESSION['username'])) {
        header('location:home.php');
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    if (isset($_COOKIE['mode']) && $_COOKIE['mode']=='dark') {
        ?>
        <link
                rel="stylesheet"
                href="node_modules/bootswatch/dist/cyborg/bootstrap.css">
    <?php } else {?>
        <link
                rel="stylesheet"
                href="node_modules/bootswatch/dist/cerulean/bootstrap.css">
    <?php } ?>
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
    <title>Login</title>
</head>
<body>
<div class="container">
    <form action="processLogin.php" method="post">
        username : <input name="username" type="text" class="form-control" required>
        password : <input name="pwd" type="password" class="form-control" required>
        <input type="submit" class="btn btn-outline-primary">
    </form>
    <?php
     if (isset($_GET['errorMessage'])) {
         ?>
        <div class="alert alert-danger">
           <?=$_GET['errorMessage'] ?>
        </div>
    <?php
     }
    ?>
</div>
