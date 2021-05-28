<?php
require_once 'isAuthenticated.php';
require_once 'classes/TicketRepository.php';
$titlePage = 'Mes tickets';
$user = $_SESSION['username'];
$ticketRepository = new TicketRepository();
$tickets = $ticketRepository->findAllTickets($user);
require_once 'fragments/header.php';
?>
    <div class="container">
        <table id="dtable" class="table display nowrap">
            <thead>
            <tr>
                <th>Id</th>
                <th>Designation</th>
                <th>Description</th>
                <th>Statut</th>
                <th>Réponse</th>
                <?php if ($user->role == 'client' || $user->role == 'agent'): ?>
                <th>Actions</th>
                <?php endif;?>
            </tr>
            </thead>
            <tbody>
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
                    <?php if ($user->role == 'client' || $user->role == 'agent'): ?>
                        <td>
                            <?php if ($user->role == 'client' && $ticket->statut == 'En Attente'): ?>
                            <a href="processDeleteTicket.php?id=<?=$ticket->id ?>">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                            <?php endif;?>
                            <?php if ($user->role == 'agent' && $ticket->statut == 'En Attente'): ?>
                                <a href="processPriseEnChargeTicket.php?id=<?=$ticket->id ?>">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            <?php endif;?>
                        </td>
                    <?php endif;?>
                </tr>
            <?php
            endforeach;
            ?>
            </tbody>
        </table>
    </div>
<?php
require_once 'fragments/footer.php';
?>