<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../home.php">Home
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../listeTickets.php">Liste des Tickets</a>
                </li>
                <?php if ($user->role == 'client'): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="../addTicket.php">Ajouter un ticket</a>
                    </li>
                <?php endif; ?>
            </ul>
            <ul class="navbar-nav d-flex"">
            <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>  <?= $user->role ?>
                </a>
                <div class="dropdown-menu">
                    <a  href="../changeMode.php?mode=light" class="btn btn-light dropdown-item"> Light Mode</a>
                    <a href="../changeMode.php?mode=dark" class="btn btn-dark dropdown-item"> Dark Mode</a>
                    <a href="../logout.php" class="btn btn-secondary my-2 my-sm-0 dropdown-item" type="submit">Logout</a>
                </div>
            </li>
            </ul>
        </div>
    </div>
</nav>