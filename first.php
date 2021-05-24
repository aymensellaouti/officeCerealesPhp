<?php
$titlePage = 'First';
require_once 'fragments/header.php';
?>
</head>
</body>
    <div class="alert alert-success">
        Cc <i class="fa fa-smile-o" aria-hidden="true"></i>
    </div>
    <p>
        <?php
            echo "Bonjour $name";
        ?>
    </p>
    <div>
        cc
        <?php
            echo 'Bonjour $name<br>';
            echo "Bonjour {$name}<br>";
        ?>
    </div>
<?php
require_once 'fragments/footer.php';
?>
