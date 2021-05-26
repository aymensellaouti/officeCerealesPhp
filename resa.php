<?php
setcookie('typeViande', $_POST['type'], time()+60*60*24*30);
$titlePage = 'Login';
//on va uploader le fichier
try {
    setcookie('typeViande', $_POST['type'], time()*60*60*24*30);
    } catch(Exception $e) {
        echo 'Exception reçue : ',  $e->getMessage(), "\n";
    }
if ($_FILES['cin']) {
$file= $_FILES['cin'];
$newName = uniqid().$file['name'];
$to = "documents".DIRECTORY_SEPARATOR."cins".DIRECTORY_SEPARATOR.$newName;
copy($file['tmp_name'], $to);
}
$name = strip_tags($_POST['nom']);
require_once 'fragments/header.php';
?>
</head>
<body>
<div class="container">
    <p>Nom : <?=$name?></p>
    <p>Prénom : <?=$_POST['prenom']?></p>
    <p>Adresse : <?=$_POST['adresse']?></p>
    <p>Type du Sandwitch : <?=$_POST['type']?></p>
    <p>Quantité : <?=$_POST['nbre']?></p>
    <p>Ingrédients : <?=implode(' - ',$_POST['ingredients'])?></p>
    <p>Prix : <?=($_POST['nbre']<10)?$_POST['nbre']*4 : $_POST['nbre']*3.6?></p>
    <img src="<?=$to ?>" alt="cin">
</div>

</body>
</html>