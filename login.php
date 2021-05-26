<?php
$titlePage = 'Login';
require_once 'fragments/header.php';
?>
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
