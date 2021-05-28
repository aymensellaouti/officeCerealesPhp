<?php
session_start();
require_once 'isAuthenticated.php';
$user = $_SESSION['username'];
require_once 'getConnexion.php';
if (isset($_POST['designation']) && isset($_POST['description'])) {
    $designation = htmlspecialchars($_POST['designation']);
    $description = htmlspecialchars($_POST['description']);
    //requete ma ase pour chercher le user
    $query = "INSERT INTO `ticket` (`id`, `designation`, `description`, `statut`, `reponse`, `owner_id`, `agent_id`) VALUES (NULL, :designation, :description, 'En Attente', NULL, :owner, NULL);";
    $request = $bdd->prepare($query);
    $request->execute([
        'owner'=>$user->id,
        'designation'=>$designation,
        'description'=>$description,
    ]);
    header('location:listeTickets.php');
} else {
    $errorMessage = "Veuillez renseigner le login et le mot de passe";
    header("location:login.php?errorMessage=$errorMessage");
}