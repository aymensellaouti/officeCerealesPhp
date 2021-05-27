<?php
require_once 'isAuthenticated.php';
require_once './classes/ConnexionBD.php';
$titlePage = 'Users List';

$bdd = ConnexionBD::getInstance();
$result = $bdd->query("select * from user");
$users = $result->fetchAll(PDO::FETCH_OBJ);
require_once 'fragments/header.php';
?>
    <div class="container">
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
        </tr>
        <?php
            foreach ($users as $user):
        ?>
        <tr>
            <td><?=$user->id ?></td>
            <td><?=$user->email ?></td>
            <td><?=$user->password ?></td>
            <td><?=$user->role ?></td>
        </tr>
        <?php
            endforeach;
        ?>
    </table>
    </div>
<?php
require_once 'fragments/footer.php';
?>