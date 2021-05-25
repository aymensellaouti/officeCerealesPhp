<?php
//$name = 'houda';
//$profession = 'Ingénieur';
$classe = 'success';
$message = '';
function testPortee() {
    var_dump($GLOBALS);
}

function whoIAm() {
    global $message, $classe;
    if (isset($GLOBALS['name']) && isset($GLOBALS['profession'])) {
        $message =  "Je suis {$GLOBALS['name']} et ma profession est {$GLOBALS['profession']}";
    } else {
        $classe = 'danger';
        $message =  'Anonyme';
    }
}
whoIAm();

//testPortee();
include_once 'fragments/header.php';
?>
</head>
<body>

<div class="alert alert-<?=$classe ?>">
    <?php
        echo $message;
    ?>
</div>
<?php

var_dump(get_defined_constants());

phpinfo(INFO_ALL);


