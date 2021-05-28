<?php
require_once 'isAuthenticated.php';
$user = $_SESSION['username'];
if ($user->role != 'client') {
   header('location:home.php');
}
$titlePage = 'Add Ticket';
require_once 'fragments/header.php';
?>
    <div class="container">
        <div class="alert alert-info">
            <h1>
                Ajouter un nouveau ticket
            </h1>
        </div>
        <form action="processAddTicket.php" method="post">
            designation : <input name="designation" type="text" class="form-control" required>
            description : <input name="description" type="text" class="form-control" required>
            <input type="submit" class="btn btn-outline-primary">
        </form>
        <?php
        if (isset($_GET['errorMessage'])) {
            ?>
            <div class="alert alert-danger">
                <?=$_GET['errorMessage'] ?>
            </div>
            <?php
        }
        ?>
    </div>
<?php
    require_once 'fragments/footer.php';
?>