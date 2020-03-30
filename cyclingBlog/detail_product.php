    <?php
    require_once('partial/header.php');
    ?>

<section class="back8 container-fluid">
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
        <div class="row">
            <div class="col-4">
                <div class="col-12">
                    <img src="img/product1.jpg" alt="" class="w-100">
                </div>
                <div class="col-12 d-flex">
                    <div class="col-6">
                        <img src="img/product1.jpg" alt="" class="w-100">
                    </div>
                    <div class="col-6">
                        <img src="img/product1.jpg" alt="" class="w-100">
                    </div>
                </div>
            </div>

            <div class="col-8 text-center mt-5">
                <h3>Cannondale SuperSix EVO</h3>
                <p>Vélo de course sur route Carbone dernière génération<br>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Eum, voluptatibus in quam accusantium tempora ex magnam quas voluptas blanditiis est delectus soluta,
                    consequatur tenetur natus eveniet impedit? Blanditiis, nihil nam?
                </p><br>
                <p>Et tout ça pour un prix de minime !</p>
            </div>
        </div>
        <div class="row m-3 bord">
            <div class="col-12 d-flex justify-content-center">
                <div class="col-6 text-center disp">
                    <span class="my-1">Roues = Carbone aérodynamique testé sur route</span>
                    <span class="my-1">Guidon = Carbone aérodynamique testé sur route</span>
                    <span class="my-1">Chaine = Carbone aérodynamique testé sur route</span>
                    <span class="my-1">Selle = Carbone aérodynamique testé sur route</span>
                    <span class="my-1">Dérayeur = Carbone aérodynamique testé sur route</span>
                </div>
                <div class="col-6 text-center disp">
                    <span class="my-1">Disque = Carbone aérodynamique testé sur route</span>
                    <span class="my-1">Frein = Carbone aérodynamique testé sur route</span>
                    <span class="my-1">Rayon = Carbone aérodynamique testé sur route</span>
                    <span class="my-1">Pédales = Carbone aérodynamique testé sur route</span>
                    <span class="my-1">Roues = Carbone aérodynamique testé sur route</span>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center mt-5">
                <h5>Prix: 1 500€</h5>
            </div>
            <div class="col-12 d-flex justify-content-end mt-1 mb-3">
                <a href="cart.php" style="color: black">
                    <i class="fas fa-shopping-cart fa-2x"></i>
                    <span class="m-auto">Ajouter au panier</span>
                </a>
            </div>
            <div class="col-12 d-flex justify-content-end">
                <p>Pour aller vers le <a href="cart.php">panier</a></p>
            </div>
        </div>
    </div>

    <?php
    require_once('partial/footer.php');
    ?>