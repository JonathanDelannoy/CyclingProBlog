    <?php
    require_once('partial/header.php');
    ?>

<section class="back1 container-fluid">
    <div class="row h-100 d-flex justify-content-center align-items-center">
        <div class="input-group md-form form-sm form-2 mt-5 col-lg-4">
            <input class="input form-control amber-border" type="text" placeholder="Recherche" aria-label="Search">
            <div class="input-group-append">
                <button class="fas fa-search text-grey span input-group-text amber lighten-3" id="basic-text1" aria-hidden="true"></button>
            </div>
        </div>
    </div>
</section>

    <div class="container">
        <section class="m-5">
            <h4 class="mt-3 mb-4 text-center">S'inscrire</h4>
            <form>
                <div class="form-group input-group">
                    <div class="input-group-prepend col-1 p-0">
                        <span class="input-group-text w-100 d-flex justify-content-center"><i class="fa fa-id-badge"></i></span>
                    </div>
                    <div class="col-11 p-0">
                        <input name="" class="form-control" placeholder="Identifiant" type="text">
                    </div>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend col-1 p-0">
                        <span class="input-group-text w-100 d-flex justify-content-center"><i class="fa fa-user"></i></span>
                    </div>
                    <div class="col-11 p-0">
                        <input name="" class="form-control" placeholder="Nom" type="text">
                    </div>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend col-1 p-0">
                        <span class="input-group-text w-100 d-flex justify-content-center"><i class="fas fa-user-tag"></i></span>
                    </div>
                    <div class="col-11 p-0">
                        <input name="" class="form-control" placeholder="Prénom" type="text">
                    </div>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend col-1 p-0">
                        <span class="input-group-text w-100 d-flex justify-content-center"><i class="fa fa-envelope"></i></span>
                    </div>
                    <div class="col-11 p-0">
                        <input name="" class="form-control" placeholder="Email" type="email">
                    </div>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend col-1 p-0">
                        <span class="input-group-text w-100 d-flex justify-content-center"><i class="fa fa-key"></i></span>
                    </div>
                    <div class="col-11 p-0">
                        <input class="form-control" placeholder="Mot de passe" type="password">
                    </div>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend col-1 p-0">
                        <span class="input-group-text w-100 d-flex justify-content-center"><i class="fa fa-lock"></i></span>
                    </div>
                    <div class="col-11 p-0">
                        <input class="form-control" placeholder="Confirmer le mot de passe" type="password">
                    </div>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend col-1 p-0">
                        <span class="input-group-text w-100 d-flex justify-content-center"><i class="fa fa-map-marker-alt"></i></span>
                    </div>
                    <div class="col-11 p-0">
                        <input name="" class="form-control" placeholder="Adresse" type="text">
                    </div>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend col-1 p-0">
                        <span class="input-group-text w-100 d-flex justify-content-center"><i class="fa fa-building"></i></span>
                    </div>
                    <div class="col-11 p-0">
                        <select class="form-control">
                            <option selected="">Ville</option>
                            <option>Liévin</option>
                            <option>Lens</option>
                            <option>Lille</option>
                            <option>Nantes</option>
                            <option>Paris</option>
                            <option>Marseille</option>
                            <option>Lyon</option>
                            <option>Brest</option>
                            <option>Metz</option>
                            <option>Strasbourg</option>
                        </select>
                    </div>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend col-1 p-0">
                        <span class="input-group-text w-100 d-flex justify-content-center"><i class="fa fa-flag"></i></span>
                    </div>
                    <div class="col-11 p-0">
                        <select class="form-control">
                            <option selected="">Pays</option>
                            <option>France</option>
                            <option>Allemagne</option>
                            <option>Espagne</option>
                            <option>Belgique</option>
                            <option>Pays-Bas</option>
                            <option>Suisse</option>
                            <option>Italie</option>
                            <option>Portugal</option>
                            <option>Angleterre</option>
                            <option>Autriche</option>
                        </select>
                    </div>
                </div>
                <div class="form-group d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary btn-block w-50">Valider</button>
                </div>
                <p class="text-center">Déjà inscrit ? <a href="connexion.php">Connecte-toi</a> </p>
            </form>
        </section>
    </div>

    <?php
    require_once('partial/footer.php');
    ?>