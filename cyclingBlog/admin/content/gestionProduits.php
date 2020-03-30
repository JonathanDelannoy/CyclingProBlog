
<?php
require_once'../includes/header.php';
?>
<div class="container-fluid d-flex">
    <div class="nav col-2 col-lg-2 bg-primary ">
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
                <ul >
                    <li>
                            <a class="dropdown-item text-white" href="./dashboard.php">Dashboard</a>
                            <a class="dropdown-item text-white" href="./gestionUsers.php">Gestion des utilisateusr</a>
                            <a class="dropdown-item text-white" href="./updateArticles.php">Gestion des atticles</a>
                            <a class="dropdown-item text-white" href="./gestionProduit.php">Gestion des produits</a>
                    </li>
            </div>


    <div class="d-flex  offset-2  col-2  col-lg-6  formArticles pt-60">
    <div class="container">
    <h1 class="text-center text-light">Gestion des produits</h1>
    <table id="listArticles" class="table table-striped table-bordered table-dark">
        <thead>
        <tr class="bg-success">
            <th>id</th>
            <th>Nom</th>
            <th>prenom</th>
            <th>Article</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
        </thead>
        <tbody>
        <?php

while ($donnees = $reponse->fetch()) {
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
                <td class="font-weight-bolder">
                    <?= $donnees['article'] ?>
                </td>
                
                <td>
                    <button type="button" data-id="<?= $donnees['id'] ?>" data-toggle="modal"
                            data-target="#updateArticle" class="btn btn-warning updateArticle">Modifier
                    </button>
                </td>
                <td>
                    <a class="" href="supp_questions.php?id=<?= $donnees['id'] ?>">
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




require_once'../includes/footer.php';