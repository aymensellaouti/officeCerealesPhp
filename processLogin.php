<?php
/*
 * 1 Récupérer les variables
 * 2 Tester si le username et le pwd correspondent à ce qu'on attend
 * 3 Si oui
 *  Envoyer vers home
 * 4 Si non
 * Envoyer vers login avec message d'erreur
 */
session_start();
require_once 'getConnexion.php';
if (isset($_POST['username']) && isset($_POST['pwd'])) {
    $username = htmlspecialchars($_POST['username']);
    $pwd = htmlspecialchars($_POST['pwd']);
    //requete ma ase pour chercher le user
    $query = "select * from user where email = ? and password = ?";
    $request = $bdd->prepare($query);
    $request->execute([
      $username,
      $pwd
    ]);
    $user = $request->fetch(PDO::FETCH_OBJ);
    if($user) {
        unset($user->password);
        $_SESSION["username"]= $user;
        header("location:home.php");
    } else {
        $errorMessage = "Veuillez Vérifier vos credentials";
        header("location:login.php?errorMessage=$errorMessage");
    }
} else {
    $errorMessage = "Veuillez renseigner le login et le mot de passe";
    header("location:login.php?errorMessage=$errorMessage");
}