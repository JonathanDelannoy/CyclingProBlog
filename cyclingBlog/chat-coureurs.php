    <?php
    require_once('partial/header.php');
    ?>

<section class="back4 container-fluid">
    <div class="row h-100 d-flex justify-content-center align-items-center">
        <div class="input-group md-form form-sm form-2 mt-5 col-lg-4">
            <input class="input form-control amber-border" type="text" placeholder="Recherche" aria-label="Search">
            <div class="input-group-append">
                <button class="fas fa-search text-grey span input-group-text amber lighten-3" id="basic-text1" aria-hidden="true"></button>
            </div>
        </div>
    </div>
</section>

    <div class="text-center">
        <h2 class="my-3">ChatBox</h2>
    </div>
    <div class="container">
        <div class="row bg-dark text-light">
            <div class="col-12 text-left">
                <h6>Jean-Luc</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <hr class="w-75" style="background-color: black">
            <div class="col-12 text-right">
                <h6>Alberto Contador</h6>
                <p>Nulla vel turpis vulputate, tincidunt lectus sed, porta arcu.</p>
            </div>
            <hr class="w-75" style="background-color: black">
            <div class="col-12 text-left">
                <h6>Jean-Luc</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <hr class="w-75" style="background-color: black">
            <div class="col-12 text-right">
                <h6>Alberto Contador</h6>
                <p>Nulla vel turpis vulputate, tincidunt lectus sed, porta arcu.</p>
            </div>
            <hr class="w-75" style="background-color: black">
            <div class="col-12 text-left">
                <h6>Jean-Luc</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <hr class="w-75" style="background-color: black">
            <div class="col-12 text-right">
                <h6>Alberto Contador</h6>
                <p>Nulla vel turpis vulputate, tincidunt lectus sed, porta arcu.</p>
            </div>
        </div>
        <div class="row mt-1 mb-4">
            <div class="col-11 p-0 m-0">
                <textarea id="textarea" class="w-100 h-100 chat" placeholder="Ecrire..." rows="1"></textarea>
            </div>
            <div class="col-1 p-0 m-0">
                <button role="button" class="w-100 h-100 chat2 pl-0 btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>

    <?php
    require_once('partial/footer.php');
    ?>