    <?php
    require_once('partial/header.php');
    ?>

<section class="back6 container-fluid">
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
            <h4 class="mt-3 mb-4 text-center">Connexion</h4>
            <form>
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
                        <span class="input-group-text w-100 d-flex justify-content-center"><i class="fas fa-key"></i></span>
                    </div>
                    <div class="col-11 p-0">
                        <input class="form-control" placeholder="Mot de passe" type="password">
                    </div>
                </div>
                <div class="row w-100">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="form-group w-50">
                            <button type="submit" class="btn btn-primary btn-block">Valider</button>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </div>

    <?php
    require_once('partial/footer.php');
    ?>