<?php
$titlePage = 'Condition';
$temperature = -35;
require_once 'fragments/header.php';
?>
    </head>
    <body>
    <?php
    if ($temperature < 0) {
        $message = 'Froid';
        $classe = 'info';
        } elseif ($temperature < 30 ) {
        $message = 'modéré';
        $classe = 'success';
    } else {
        $message = 'chaud';
        $classe = 'danger';
    }
        ?>

    <div class="alert alert-<?=$classe?>"> <?=$message?> </div>
    <?php
    include_once 'fragments/footer.php';

