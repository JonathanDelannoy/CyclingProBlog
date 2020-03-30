    <?php
    require_once('partial/header.php');
    ?>

<section class="back9 container-fluid">
    <div class="row h-100 d-flex justify-content-center align-items-center">
        <div class="input-group md-form form-sm form-2 mt-5 col-lg-4">
            <input class="input form-control amber-border" type="text" placeholder="Recherche" aria-label="Search">
            <div class="input-group-append">
                <button class="fas fa-search text-grey span input-group-text amber lighten-3" id="basic-text1" aria-hidden="true"></button>
            </div>
        </div>
    </div>
</section>

    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="text-center">Détail de votre paiement</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="cardNumber">Numéro de carte</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="cardNumber" placeholder="Numéro de carte valide" required autofocus />
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-7">
                                    <div class="form-group">
                                        <label for="expityMonth">Date d'expiration</label>
                                        <div class="row col-8 p-0">
                                            <div class="col-4">
                                                <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                            </div>
                                            <div class="col-4">
                                                <input type="text" class="form-control" id="expityYear" placeholder="YY" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-5 col-md-5 pull-right">
                                    <div class="form-group">
                                        <label for="cvCode">Cryptogramme</label>
                                        <input type="password" class="form-control" id="cvCode" placeholder="Cryptogramme Visuel" required />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 w-100 d-flex justify-content-center mt-3">
                    <div class="col-4">
                        <a href="index.php" class="btn btn-success w-100">Payer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    require_once('partial/footer.php');
    ?>
