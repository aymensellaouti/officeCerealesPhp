<?php
require_once 'isAuthenticated.php';
$user = $_SESSION['username'];
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


    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
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
<?php
    require_once 'menu.php';
?>
