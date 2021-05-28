<?php
require_once 'isAuthenticated.php';
require_once 'getConnexion.php';
$titlePage = 'Mes tickets';
$user = $_SESSION['username'];
if ($user->role == 'client') {
    $query = "select * from ticket where owner_id = {$user->id}";
} elseif ($user->role == 'admin') {
    $query = "select * from ticket";
} else {
    $query = "select * from ticket where agent_id = {$user->id} or statut = 'En Attente'";
}

$result = $bdd->query($query);
$tickets = $result->fetchAll(PDO::FETCH_OBJ);
require_once 'fragments/header.php';
?>
    <div class="container">
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Designation</th>
                <th>Description</th>
                <th>Statut</th>
                <th>Réponse</th>
            </tr>
            <?php
            foreach ($tickets as $ticket):
                if($ticket->statut == 'En Attente') {
                    $classe = 'danger';
                } elseif ($ticket->statut == 'En Cours') {
                    $classe = 'info';
                } else {
                    $classe = 'success';
                }
                ?>
                <tr class="table-<?=$classe?>">
                    <td><?=$ticket->id ?></td>
                    <td><?=$ticket->designation ?></td>
                    <td><?=$ticket->description ?></td>
                    <td><?=$ticket->statut ?></td>
                    <td><?=$ticket->reponse ?></td>
                </tr>
            <?php
            endforeach;
            ?>
        </table>
    </div>
<?php
require_once 'fragments/footer.php';
?>