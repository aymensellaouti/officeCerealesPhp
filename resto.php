<?php
$titlePage = 'Login';
require_once 'fragments/header.php';
?>
    </head>
    <body>
<div class="container">
    <div class="alert alert-info">
        Bienvenu chez Malek Moulouk les Sandwitchs
    </div>
    <form action="resa.php" method="post"  enctype="multipart/form-data">
        Nom : <input type="text" name="nom" class="form-control">
        Prénom : <input type="text" name="prenom" class="form-control">
        Nombre de sandwitch : <input type="number" name="nbre" class="form-control">
        Quels sandwitch voulez vous ?
        <select name="type"  class="form-control">

            <option <?php if(isset($_COOKIE['typeViande']) && $_COOKIE['typeViande'] =="viande") { echo "selected=\"selected";} ?>  value="viande">Viande</option>
            <option <?php if(isset($_COOKIE['typeViande']) && $_COOKIE['typeViande'] =="poulet") { echo "selected=\"selected";} ?> value="poulet">Poulet</option>
            <option <?php if(isset($_COOKIE['typeViande']) && $_COOKIE['typeViande'] =="escalope") { echo "selected=\"selected";} ?> value="escalope">Escalope</option>
        </select>
        Harissa <input class="form-check-input" type="checkbox" value="harissa" name="ingredients[]">
        Salade <input class="form-check-input" type="checkbox" value="salade" name="ingredients[]">
        Mayo <input class="form-check-input" type="checkbox" value="mayo" name="ingredients[]"><br>
        Veuillez mentionner votre adresse : <textarea name="adresse" cols="30" rows="3"
                                                      class="form-control"></textarea>
        Veuillez uploader votre CIN afin de valider votre demande : <input name="cin" type="file" class="form-control">
        <input type="submit" class="btn btn-outline-primary">
    </form>
</div>
<?php
