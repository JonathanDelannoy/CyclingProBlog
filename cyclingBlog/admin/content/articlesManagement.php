<?php 
require_once'../includes/header.php';

// $id = $_GET['id'];
$req = $bdd->query('SELECT * FROM articles a INNER JOIN users u ON a.idUser = u.id ');
?>
<link rel="stylesheet" href="../css/app.css">
<div class="container-fluid d-lg-flex">
    <div class="nav d-none d-lg-block col-2 col-lg-2 bg-primary ">
        <ul>
            <li><a class="text-white align-center" href="dashboard.php">Dashboard</a></li>
            <li><a class="text-white align-center" href="gestionUsers.php">Gestions des utilisateurs</a></li>
            <li><a class="text-white align-center" href="articleManagement.php">Gestion des articles</a></li>
            <li><a class="text-white align-center" href="gestionProduit.php">Géstion des produits</a></li>
        </ul>
    </div>
    <!-- NAVBAR PHONE -->
    <div>
        <nav id="menu-hamburger" class="navbar navbar-expand-lg navbar-light bg-green d-block d-lg-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul>
                    <li>
                        <a class="dropdown-item text-white" href="./dashboard.php">Dashboard</a>
                        <a class="dropdown-item text-white" href="./gestionUsers.php">Gestion des utilisateusr</a>
                        <a class="dropdown-item text-white" href="./updateArticles.php">Gestion des atticles</a>
                        <a class="dropdown-item text-white" href="./gestionProduit.php">Gestion des produits</a>
                    </li>
            </div>
    </div>
    <div class="d-lg-flex offset-2  col-2  col-lg-6   ">
        <div class="container ">
            <h1 class="text-center text-white">Liste des articles</h1>
            <table id="listArticles"
                class="table table-striped table-bordered table-dark table-responsive detailArticles">
                <thead>
                    <tr class="bg-secondary text-center">
                        <th>id</th>
                        <th>Titre</th>
                        <th>Autheur</th>
                        <th>Date de mise en ligne</th>
                        <th>Article</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
while ($donnees =$req->fetch()) {
            ?>
                    <tr class="">
                        <td class="font-weight-bolder">
                            <?= $donnees['id'] ?>
                        </td>
                        <td class="font-weight-bolder">
                            <?= $donnees['title'] ?>
                        </td>
                        <td class="font-weight-bolder">
                            <?= $donnees['name'] ?>
                        </td>
                        <td class="font-weight-bolder">
                            <?= $donnees['creationDate'] ?>
                        </td>
                        <td>
                            <div class="font-weight-bolder article">
                                <?= $donnees['article'] ?>
                            </div>
                        </td>
                        <td>
                            <button type="button" data-id="<?= $donnees['id'] ?>" data-toggle="modal"
                                data-target="#modalUpdateArticle" class="btn btn-warning">Modifier</button>
                            <!-- <a type="button"  date-target="#modalUpdateArticle"
                                class="btn btn-warning updatesArticle">Modifier
                            </a>  -->
                        </td>
                        <td>
                            <a class="" href=".php?id=<?= $donnees['id'] ?>">
                                <button type="button" class="btn btn-danger deleteQuestions">Supprimer</button>
                            </a>
                        </td>
                    </tr>
                    <?php
        }
        ?>
                </tbody>
        </div>
    </div>
    <!-- table pour telephone -->


</div>

<script src="../../js/ajax/updateArticle.js"></script>



<?php
require("../modal/modalUpdateArticle.php");
?>












<?php
require_once'../includes/footer.php';