<?php
require_once 'isAuthenticated.php';
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
    <title><?php
        if (isset($titlePage)) {
            echo $titlePage ;
        } else {
            echo 'Office des cérélaes';
        }
        ?>
</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../home.php">Home
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../first.php">First</a>
                </li>
            </ul>
            <form class="d-flex">
                <a href="../changeMode.php?mode=light" class="btn btn-light"> Light Mode</a>
                <a href="../changeMode.php?mode=dark" class="btn btn-dark"> Dark Mode</a>
                <a href="../logout.php" class="btn btn-secondary my-2 my-sm-0" type="submit">Logout</a>
            </form>
        </div>
    </div>
</nav>
