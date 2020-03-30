<?php
require_once '../../partial/connect.php';

require_once '../includes/header.php';

// $id = intval($_GET['id']);
$reponse = $bdd->query('SELECT * FROM users ');
$results = $reponse->fetchAll(); ?>
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
    <div class="d-lg-flex  offset-lg-2  col-12  col-lg-6  formArticles pt-60">
        <div class="container">
            <h1 class="text-center text-white">Liste des Abonnés</h1>
            <table id="listArticles" class="table table-striped table-bordered table-dark">
                <thead>
                    <tr class="bg-primary">
                        <th>id</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>voir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

foreach($results as $elements){
    ?>
                    <tr class="">
                        <td class="font-weight-bolder">
                            <?=$elements['id']?>
                        </td>
                        <td class="font-weight-bolder">
                            <?=$elements['name']?>
                        </td>
                        <td class="font-weight-bolder">
                            <?=$elements['surname']?>
                        </td>

                        <td>
                            <a type="submit" href="infosUsers.php?id=<?= $elements['id'] ?>"
                                class="btn btn-warning updateArticle">Dètail
                            </a></td>
                         
                    </tr>
                    <?php
}
?>

                </tbody>




        </div>

    </div>
</div>
</div>

<?php
require_once '../includes/footer.php';
?>