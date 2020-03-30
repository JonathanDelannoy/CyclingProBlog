<?php
// require_once '../includes/connect.php';

require_once '../includes/header.php';

?>
<!-- <link rel="stylesheet" href="../css/app.css"> -->

<div class="container-fluid d-lg-flex">
    <div class="nav d-none d-lg-block col-lg-2 bg-primary ">
        <ul>
            <li><a class="text-white align-center" href="dashboard.php">Dashboard</a></li>
            <li><a class="text-white align-center" href="gestionUsers.php">Gestions des utilisateurs</a></li>
            <li><a class="text-white align-center" href="articleManagement.php">Gestion des articles</a></li>
            <li><a class="text-white align-center" href="gestionProduit.php">Géstion des produits</a></li>
        </ul>
    </div>
    <!-- NAVBAR PHONE -->
    <div>
        <nav id="menu-hamburger" class="navbar navbar-expand-lg navbar-light bg-green d-lg-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul>
                    <li>
                        <a class="dropdown-item text-white" href="dashboard.php">Dashboard</a>
                        <a class="dropdown-item text-white" href="gestionUsers.php">Gestion des utilisateusr</a>
                        <a class="dropdown-item text-white" href="updateArticles.php">Gestion des atticles</a>
                        <a class="dropdown-item text-white" href="gestionProduit.php">Gestion des produits</a>
                    </li>
            </div>

    </div>
    <div class="d-flex  offset-2  col-2  col-lg-6  formArticles pt-60">
        <div class="container">
            <h1 class="titleAdmin text-lg-center  text-white">Bienvenue dans la partie administration de notre
                site</h1>
        </div>
    </div>
</div>
</div>