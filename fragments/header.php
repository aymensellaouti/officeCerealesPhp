<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
          rel="stylesheet"
          href="node_modules/bootswatch/dist/cerulean/bootstrap.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">
    <title><?php
        if (isset($titlePage)) {
            echo $titlePage ;
        } else {
            echo 'Office des cérélaes';
        }
        ?>
</title>

