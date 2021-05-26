<?php
$titlePage = 'Login';
require_once 'fragments/header.php';
?>
</head>
<body>
<div class="container">
    <p>Nom : <?=$_POST['nom']?></p>
    <p>Prénom : <?=$_POST['nom']?></p>
    <p>Adresse : <?=$_POST['adresse']?></p>
    <p>Type du Sandwitch : <?=$_POST['type']?></p>
    <p>Quantité : <?=$_POST['nbre']?></p>
    <p>Ingrédients : <?=implode(' - ',$_POST['ingredients'])?></p>
    <p>Prix : <?=($_POST['nbre']<10)?$_POST['nbre']*4 : $_POST['nbre']*3.6?></p>

</div>

</body>
</html>