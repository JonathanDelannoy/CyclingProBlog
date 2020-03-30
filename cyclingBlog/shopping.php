    <?php
    require_once('partial/header.php');
    ?>

<section class="back11 container-fluid">
    <div class="row h-100 d-flex justify-content-center align-items-center">
        <div class="input-group md-form form-sm form-2 mt-5 col-lg-4">
            <input class="input form-control amber-border" type="text" placeholder="Recherche" aria-label="Search">
            <div class="input-group-append">
                <button class="fas fa-search text-grey span input-group-text amber lighten-3" id="basic-text1" aria-hidden="true"></button>
            </div>
        </div>
    </div>
</section>

    <section class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="border my-4">
                    <h6 class="text-center mt-2">Tranche de prix</h6>
                    <div class="filter-content">
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Min</label>
                                    <input type="number" class="form-control" id="inputEmail4" placeholder="0€">
                                </div>
                                <div class="form-group col-md-6 text-right">
                                    <label>Max</label>
                                    <input type="number" class="form-control" placeholder="10 000€">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-center">Vélos</h6>
                    <div class="filter-content">
                        <div class="card-body">
                            <div class="custom-control custom-checkbox">
                                <span class="float-right badge badge-light round">0</span>
                                <input type="checkbox" class="custom-control-input" id="Check1">
                                <label class="custom-control-label" for="Check1">Trek</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <span class="float-right badge badge-light round">0</span>
                                <input type="checkbox" class="custom-control-input" id="Check2">
                                <label class="custom-control-label" for="Check2">Bianchi</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <span class="float-right badge badge-light round">0</span>
                                <input type="checkbox" class="custom-control-input" id="Check3">
                                <label class="custom-control-label" for="Check3">BMC</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <span class="float-right badge badge-light round">0</span>
                                <input type="checkbox" class="custom-control-input" id="Check4">
                                <label class="custom-control-label" for="Check4">Scott</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <span class="float-right badge badge-light round">0</span>
                                <input type="checkbox" class="custom-control-input" id="Check5">
                                <label class="custom-control-label" for="Check5">Cannondale</label>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-center mt-5">Recherche</h6>
                    <div class="filter-content">
                        <div class="card-body w-100">
                            <div class="custom-control custom-checkbox col-12 w-100 d-flex justify-content-center">
                                <input type="checkbox" class="custom-control-input col-1" id="Check6">
                                <label class="custom-control-label col-8" for="Check6">Maillots</label>
                            </div>
                            <div class="custom-control custom-checkbox col-12 w-100 d-flex justify-content-center">
                                <input type="checkbox" class="custom-control-input col-1" id="Check7">
                                <label class="custom-control-label col-8" for="Check7">Cuissards</label>
                            </div>
                            <div class="custom-control custom-checkbox col-12 w-100 d-flex justify-content-center">
                                <input type="checkbox" class="custom-control-input col-1" id="Check8">
                                <label class="custom-control-label col-8" for="Check8">Chaussures</label>
                            </div>
                            <div class="custom-control custom-checkbox col-12 w-100 d-flex justify-content-center">
                                <input type="checkbox" class="custom-control-input col-1" id="Check9">
                                <label class="custom-control-label col-8" for="Check9">Casques</label>
                            </div>
                            <div class="custom-control custom-checkbox col-12 w-100 d-flex justify-content-center">
                                <input type="checkbox" class="custom-control-input col-1" id="Check10">
                                <label class="custom-control-label col-8" for="Check10">Equipements divers</label>
                            </div>
                        </div>
                    </div>
                    <h6 class="text-center">Couleur</h6>
                    <div class="filter-content">
                        <div class="card-body w-100 d-flex justify-content-around">
                            <label class="btn btn-danger w-100 m-1">
                                <input class="" type="checkbox" name="myradio" value="">
                                <span class="form-check-label">Rouge</span>
                            </label>
                            <label class="btn btn-success w-100 m-1">
                                <input class="" type="checkbox" name="myradio" value="">
                                <span class="form-check-label">Vert</span>
                            </label>
                            <label class="btn btn-primary w-100 m-1">
                                <input class="" type="checkbox" name="myradio" value="">
                                <span class="form-check-label">Bleu</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mb-3">
                    <button class="btn btn-dark w-50">Valider</button>
                </div>
            </div>

            <div class="col-9">
                <div class="row d-flex justify-content-around">
                    <div class="col-3 p-0 m-0">
                        <div class="cuadro_intro_hover my-2">
                            <img src="img/product1.jpg" class="img-responsive w-100" alt="">
                            <div class="caption">
                                <div class="blur">
                                    <div class="caption-text">
                                        <h3 class="mt-3">Vélo</h3>
                                        <p>Cannondale SuperSix EVO.<br>Vélo de course sur route Carbone dernière génération</p>
                                        <a class="nav-link p-0 m-0" href="detail_product.php">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 p-0 m-0">
                        <div class="cuadro_intro_hover my-2">
                            <img src="img/product2.jpg" class="img-responsive w-100" alt="">
                            <div class="caption">
                                <div class="blur">
                                    <div class="caption-text">
                                        <h3 class="mt-3">Vélo</h3>
                                        <p>Velotech BMC SLR01 Blue Bike Cadel.<br>Vélo de course sur route Carbone dernière génération</p>
                                        <a class="nav-link p-0 m-0" href="detail_product.php">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 p-0 m-0">
                        <div class="cuadro_intro_hover my-2">
                            <img src="img/product3.jpg" class="img-responsive w-100" alt="">
                            <div class="caption">
                                <div class="blur">
                                    <div class="caption-text">
                                        <h3 class="mt-3">Maillot</h3>
                                        <p>Maillot Deceuninck Quick Step Floors<br>Vêtement Officiel de votre équipe favorite</p>
                                        <a class="nav-link p-0 m-0" href="detail_product.php">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-around">
                    <div class="col-3 p-0 m-0">
                        <div class="cuadro_intro_hover my-2">
                            <img src="img/product4.jpg" class="img-responsive w-100" alt="">
                            <div class="caption">
                                <div class="blur">
                                    <div class="caption-text">
                                        <h3 class="mt-3">Casque</h3>
                                        <p>Casque GPS.<br>Casque de cyclisme sur route en Carbone</p>
                                        <a class="nav-link p-0 m-0" href="detail_product.php">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 p-0 m-0">
                        <div class="cuadro_intro_hover my-2">
                            <img src="img/product5.jpg" class="img-responsive w-100" alt="">
                            <div class="caption">
                                <div class="blur">
                                    <div class="caption-text">
                                        <h3 class="mt-3">Cuissards</h3>
                                        <p>Bjorka Strada.<br>Cuissard à bretelles Homme noir</p>
                                        <a class="nav-link p-0 m-0" href="detail_product.php">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 p-0 m-0">
                        <div class="cuadro_intro_hover my-2">
                            <img src="img/product6.jpg" class="img-responsive w-100" alt="">
                            <div class="caption">
                                <div class="blur">
                                    <div class="caption-text">
                                        <h3 class="mt-3">Maillot</h3>
                                        <p>Maillot Groupama-FDJ<br>Vêtement Officiel de votre équipe favorite</p>
                                        <a class="nav-link p-0 m-0" href="detail_product.php">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-around">
                    <div class="col-3 p-0 m-0">
                        <div class="cuadro_intro_hover my-2">
                            <img src="img/product7.jpg" class="img-responsive w-100" alt="">
                            <div class="caption">
                                <div class="blur">
                                    <div class="caption-text">
                                        <h3 class="mt-3">Equipements</h3>
                                        <p>Lunettes.<br>Lunettes Spéciale Cyclisme</p>
                                        <a class="nav-link p-0 m-0" href="detail_product.php">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 p-0 m-0">
                        <div class="cuadro_intro_hover my-2">
                            <img src="img/product8.jpg" class="img-responsive w-100" alt="">
                            <div class="caption">
                                <div class="blur">
                                    <div class="caption-text">
                                        <h3 class="mt-3">Cuissards</h3>
                                        <p>Triban RC100.<br>Cuissard à bretelles Homme noir</p>
                                        <a class="nav-link p-0 m-0" href="detail_product.php">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 p-0 m-0">
                        <div class="cuadro_intro_hover my-2">
                            <img src="img/product9.jpg" class="img-responsive w-100" alt="">
                            <div class="caption">
                                <div class="blur">
                                    <div class="caption-text">
                                        <h3 class="mt-3">Casque</h3>
                                        <p>Casque ABUS.<br>Casque de cyclisme sur route en Carbone</p>
                                        <a class="nav-link p-0 m-0" href="detail_product.php">En savoir plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    require_once('partial/footer.php');
    ?>