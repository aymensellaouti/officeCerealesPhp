<?php

require_once 'ConnexionBD.php';
class TicketRepository
{
    private $bdd;
    public function __construct()
    {
        $this->bdd = ConnexionBD::getInstance();

    }

    public function addTicket($userID, $designation, $description) {
        $query = "INSERT INTO `ticket` (`id`, `designation`, `description`, `statut`, `reponse`, `owner_id`, `agent_id`) VALUES (NULL, :designation, :description, 'En Attente', NULL, :owner, NULL);";
        $request = $this->bdd->prepare($query);
        $request->execute([
            'owner'=>$userID,
            'designation'=>$designation,
            'description'=>$description,
        ]);
    }

    public function findAllTickets( $user) {
        if ($user->role == 'client') {
            $query = "select * from ticket where owner_id = {$user->id}";
        } elseif ($user->role == 'admin') {
            $query = "select * from ticket";
        } else {
            $query = "select * from ticket where agent_id = {$user->id} or statut = 'En Attente'";
        }
        $result = $this->bdd->query($query);
        return $result->fetchAll(PDO::FETCH_OBJ);
    }

    public function deleteTicket($user, $ticketId) {
        $query = "delete from ticket where id = :ticketId and statut = 'En Attente' and owner_id = :owner";
        $request = $this->bdd->prepare($query);
        $request->execute([
            'owner'=>$user->id,
            'ticketId'=>$ticketId
        ]);
    }
}