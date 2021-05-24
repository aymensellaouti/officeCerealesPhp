<?php
$name = "Houda";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            echo "Bonjour $name";
        ?>
    </p>
    <div>
        <?php
            echo 'Bonjour $name<br>';
            echo "Bonjour {$name}<br>";
        ?>
    </div>
</body>
</html>
