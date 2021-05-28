<?php
require_once 'classes/TicketRepository.php';
require_once 'isAuthenticated.php';
$user = $_SESSION['username'];
if ($user->role != 'agent') {
    header('location:home.php');
}

if (isset($_GET['id'])) {
    $ticketId = htmlspecialchars($_GET['id']);
    $ticketRepository = new TicketRepository();
    $ticketRepository->priseEnChargeTicket($user, $ticketId);
    //requete ma ase pour chercher le user
    header('location:listeTickets.php');
} else {
    $errorMessage = "Veuillez renseigner le login et le mot de passe";
    header("location:login.php?errorMessage=$errorMessage");
}