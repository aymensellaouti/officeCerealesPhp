<?php
session_start();

require_once 'classes/TicketRepository.php';
require_once 'isAuthenticated.php';
$user = $_SESSION['username'];
if ($user->role != 'client') {
    header('location:home.php');
}

if (isset($_POST['designation']) && isset($_POST['description'])) {
    $designation = htmlspecialchars($_POST['designation']);
    $description = htmlspecialchars($_POST['description']);
    $ticketRepository = new TicketRepository();
    $ticketRepository->addTicket($user->id, $designation, $description);
    //requete ma ase pour chercher le user
    header('location:listeTickets.php');
} else {
    $errorMessage = "Veuillez renseigner le login et le mot de passe";
    header("location:login.php?errorMessage=$errorMessage");
}