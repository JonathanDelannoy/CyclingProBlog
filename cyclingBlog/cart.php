    <?php
    require_once('partial/header.php');
    ?>

<section class="back3 container-fluid">
    <div class="row h-100 d-flex justify-content-center align-items-center">
        <div class="input-group md-form form-sm form-2 mt-5 col-lg-4">
            <input class="input form-control amber-border" type="text" placeholder="Recherche" aria-label="Search">
            <div class="input-group-append">
                <button class="fas fa-search text-grey span input-group-text amber lighten-3" id="basic-text1" aria-hidden="true"></button>
            </div>
        </div>
    </div>
</section>

    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-12 d-flex justify-content-between h-100 w-100 bg-secondary">
                <div class="col-6 d-flex justify-content-center panier">
                    <h5 class="m-auto"><span class="fa fa-shopping-cart"></span> Votre Panier</h5>
                </div>
                <div class="col-6 d-flex justify-content-center m-auto">
                    <button href="shopping.php" type="button" class="btn btn-primary">
                        <span class="fa fa-share-alt"> Continuer mon shopping</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-4 d-flex justify-content-center">
                <img class="img-responsive" src="img/product1.jpg">
            </div>
            <div class="col-8 d-flex justify-content-around">
                <div class="col-6 text-center">
                    <h4>Nom du produit</h4>
                    <small>Description</small>
                </div>
                <div class="col-3 text-center">
                    <h6>Quantité:</h6>
                    <div class="col-12 d-flex justify-content-center">
                        <select class="form-control col-3">
                            <option selected="">1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                        </select>
                    </div>
                </div>
                <div class="col-3 text-right">
                    <button type="button">
                        <span class="fa fa-trash"></span>
                    </button>
                </div>
            </div>
            <div class="col-12">
                <h4 class="text-right"><strong>50.00 €</strong></h4>
            </div>
        </div>
        <hr class="w-75" style="background-color: black">
        <div class="row mb-3 mt-5">
            <div class="col-4 d-flex justify-content-center">
                <img class="img-responsive" src="img/product6.jpg">
            </div>
            <div class="col-8 d-flex justify-content-around">
                <div class="col-6 text-center">
                    <h4>Nom du produit</h4>
                    <small>Description</small>
                </div>
                <div class="col-3 text-center">
                    <h6>Quantité:</h6>
                    <div class="col-12 d-flex justify-content-center">
                        <select class="form-control col-3">
                            <option selected="">1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                        </select>
                    </div>
                </div>
                <div class="col-3 text-right">
                    <button type="button">
                        <span class="fa fa-trash"></span>
                    </button>
                </div>
            </div>
            <div class="col-12">
                <h4 class="text-right"><strong>50.00 €</strong></h4>
            </div>
        </div>
        <hr class="w-75" style="background-color: black">
        <div class="row mb-3 mt-5">
            <div class="col-4 d-flex justify-content-center">
                <img class="img-responsive" src="img/product4.jpg">
            </div>
            <div class="col-8 d-flex justify-content-around">
                <div class="col-6 text-center">
                    <h4>Nom du produit</h4>
                    <small>Description</small>
                </div>
                <div class="col-3 text-center">
                    <h6>Quantité:</h6>
                    <div class="col-12 d-flex justify-content-center">
                        <select class="form-control col-3">
                            <option selected="">1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                        </select>
                    </div>
                </div>
                <div class="col-3 text-right">
                    <button type="button">
                        <span class="fa fa-trash"></span>
                    </button>
                </div>
            </div>
            <div class="col-12">
                <h4 class="text-right"><strong>50.00 €</strong></h4>
            </div>
        </div>

        <div class="row mt-5 mb-3">
            <div class="col-10 text-right">
                <h4>Total: <strong>150.00 €</strong></h4>
            </div>
            <div class="col-2 text-center">
                <a class="text-white" href="paiement.php">
                    <button type="button" class="btn btn-success">
                        Passer au paiement
                    </button>
                </a>
            </div>
        </div>
    </div>

    <?php
    require_once('partial/footer.php');
    ?>
