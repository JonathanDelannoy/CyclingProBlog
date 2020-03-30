    <?php
    require_once('partial/header.php');
    ?>

<section class="back12 container-fluid">
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
        <div class="col-12 my-5">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <h4 class="text-center">Statistiques du jour:</h4>
                    <span class="pull-right strong">Nouvelles visites</span>
                    <div class="progress">
                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="15"aria-valuemin="0" aria-valuemax="100" style="width:15%">+15</div>
                    </div>
                    <span class="pull-right strong">Nouveaux utilisateurs</span>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width:7%">+7</div>
                    </div>
                    <span class="pull-right strong">Nouvelles commandes</span>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100" style="width:4%">+4</div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12 vl pl-lg-4 pl-sm-0">
                    <h4 class="text-center">Statistiques du mois:</h4>
                    <span class="pull-right strong">Nouvelles visites</span>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width:74%">+74</div>
                    </div>
                    <span class="pull-right strong">Nouveaux Utilisateurs</span>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width:48%">+48</div>
                    </div>
                    <span class="pull-right strong">Nouvelles commandes</span>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100" style="width:21%">+21</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require_once('partial/footer.php');
    ?>
