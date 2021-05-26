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
    <form action="resa.php" method="post">
        Nom : <input type="text" name="nom" class="form-control">
        Prénom : <input type="text" name="prenom" class="form-control">
        Nombre de sandwitch : <input type="number" name="nbre" class="form-control">
        Quels sandwitch voulez vous ?
        <select name="type" id="" class="form-control">
            <option value="viande">Viande</option>
            <option value="poulet">Poulet</option>
            <option value="escalope">Escalope</option>
        </select>
        Harissa <input class="form-check-input" type="checkbox" value="harissa" name="ingredients[]">
        Salade <input class="form-check-input" type="checkbox" value="salade" name="ingredients[]">
        Mayo <input class="form-check-input" type="checkbox" value="mayo" name="ingredients[]"><br>
        Veuillez mentionner votre adresse : <textarea name="adresse" cols="30" rows="3"
                                                      class="form-control"></textarea>
        <input type="submit" class="btn btn-outline-primary">
    </form>
</div>
<?php
