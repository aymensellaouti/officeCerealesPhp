<?php
$titlePage = 'Condition';
$temperature = 35;
require_once 'fragments/header.php';
?>
    </head>
    <body>
    <?php
    if ($temperature < 0) {?>
        <div class="alert alert-info"> froid </div>
    <?php
        } elseif ($temperature < 30 ) {
    ?>
        <div class="alert alert-success"> Tempéré </div>
    <?php } else { ?>
    <div class="alert alert-danger"> Chaud </div>
    <?php
    }
    include_once 'fragments/footer.php';

