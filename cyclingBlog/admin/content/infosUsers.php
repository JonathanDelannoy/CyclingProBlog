<?php
require_once '../includes/header.php';
// $id = ($_GET['id']);
$req = $bdd->query('SELECT * FROM users  INNER JOIN addresses  on users.idAddress = addresses.id INNER JOIN addressCommandes on users.idAddressCommandes = addressCommandes.id ');
$elements = $req->fetch();

?>
<div class="container-fluid d-lg-flex">
    <div class="nav d-none d-lg-block col-lg-2 bg-primary ">
        <ul>
            <li><a class="text-white align-center" href="/dashboard.php">Dashboard</a></li>
            <li><a class="text-white align-center" href="/gestionUsers.php">Gestions des utilisateurs</a></li>
            <li><a class="text-white align-center" href="/articlesManagement.php">Gestion des articles</a></li>
            <li><a class="text-white align-center" href="/gestionProduit.php">Géstion des produits</a></li>
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
    <div class="d-flex  offset-lg-2  col-2  col-lg-6  formArticles pt-60">
        <div class=" d-none d-lg-block">
            <h1 class="text-center text-white">Détail Abonné</h1>
            <table id="listArticles" class="table table-striped table-bordered  table-dark">
                <thead>
                    <tr class="bg-success">
                        <th>id</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>mail</th>
                        <th>adresse</th>
                        <th>Date d' inscription</th>
                        <th>Adresse de commande</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>
                <tbody>

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
                        <td class="font-weight-bolder">
                            <?=$elements['mail']?>
                        </td>
                        <td class="font-weight-bolder">
                            <?=$elements['streetNumber'],' ',$elements['streetName'],' ',$elements['postalCode'],' ',$elements['city'],' ',$elements['country']?>
                        </td>
                        <td class="font-weight-bolder">
                            <?=$elements['creationDate']?>
                        </td>
                        <td class="font-weight-bolder">
                            <?=$elements['CommandeStreetNumber'],' ',$elements['CommandeStreetName'],' ',$elements['CommandePostalCode'],' ',$elements['CommandeCity'],' ',$elements['CommandeCountry']?>
                        </td>
                        <td>
                            <a class="" href="../treatment/deleteUsers.php?id=<?=$elements['id']?>">
                                <button type="submit" name="delete" class="btn btn-danger">Supprimer</button>
                            </a>
                        </td>
                </tbody>
            </table>
        </div>
    </div>
    <!-- table petit ecran -->
    <div class="   col-12  pt-60">
        <table id="listArticles" class="table table-striped table-bordered  table-dark  d-lg-none">
            <tr class="">
                <th>id</th>
                <td class="font-weight-bolder">
                    <?=$elements['id']?>
                </td>
            </tr>
            <tr>
                <th>Nom</th>
                <td class="font-weight-bolder">
                    <?=$elements['name']?>
                </td>
            </tr>
            <tr>
                <th>Prénom</th>
                <td class="font-weight-bolder">
                    <?=$elements['surname']?>
                </td>
            </tr>
            <tr>
                <th>mail</th>
                <td class="font-weight-bolder">
                    <?=$elements['mail']?>
                </td>
            </tr>
            <tr>
                <th>adresse</th>
                <td class="font-weight-bolder">
                    <?=$elements['streetNumber'],' ',$elements['streetName'],' ',$elements['postalCode'],' ',$elements['city'],' ',$elements['country']?>
                </td>
            </tr>
            <tr>
                <th>Date d' inscription</th>
                <td class="font-weight-bolder">
                    <?=$elements['creationDate']?>
                </td>
            </tr>
            <tr>
                <th>Adresse de commande</th>
                <td class="font-weight-bolder">
                    <?=$elements['CommandeStreetNumber'],' ',$elements['CommandeStreetName'],' ',$elements['CommandePostalCode'],' ',$elements['CommandeCity'],' ',$elements['CommandeCountry']?>
                </td>
            </tr>
            <tr>
                <th>Supprimer</th>
                <td>
                    <a class="" href="../treatment/deleteUsers.php?id=<?=$elements['id']?>">
                        <button type="submit" name="delete" class="btn btn-danger">Supprimer</button>
                    </a>
                </td>
            </tr>
        </table>
    </div>

</div>

<?php
require_once '../includes/footer.php';
?>// if(isset($_GET['id'])){

    // $id = $_GET['id'];