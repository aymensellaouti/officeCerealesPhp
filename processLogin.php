<?php
/*
 * 1 Récupérer les variables
 * 2 Tester si le username et le pwd correspondent à ce qu'on attend
 * 3 Si oui
 *  Envoyer vers home
 * 4 Si non
 * Envoyer vers login avec message d'erreur
 */

if (isset($_POST['username']) && isset($_POST['pwd'])) {
    if($_POST['username'] == "root" && $_POST['pwd']=="secret") {
        header("location:home.php");
    } else {
        $errorMessage = "Veuillez Vérifier vos credentials";
        header("location:login.php?errorMessage=$errorMessage");
    }
} else {
    $errorMessage = "Veuillez renseigner le login et le mot de passe";
    header("location:login.php?errorMessage=$errorMessage");
}