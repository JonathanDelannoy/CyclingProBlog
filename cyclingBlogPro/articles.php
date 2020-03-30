    <?php
    require_once('partial/header.php');
    ?>

<section class="back2 container-fluid">
    <div class="row h-100 d-flex justify-content-center align-items-center">
        <div class="input-group md-form form-sm form-2 mt-5 col-lg-4">
            <input class="input form-control amber-border" type="text" placeholder="Recherche" aria-label="Search">
            <div class="input-group-append">
                <button class="fas fa-search text-grey span input-group-text amber lighten-3" id="basic-text1" aria-hidden="true"></button>
            </div>
        </div>
    </div>
</section>

    <div class="container-fluid bg-dark">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-2 pt-3">
                <div class="form-group ">
                    <select id="inputState " class="form-control">
                        <option selected>Equipe</option>
                        <option>AG2R La Mondiale</option>
                        <option>Cofidis</option>
                        <option>Groupama-FDJ</option>
                        <option>EF-Pro Cycling</option>
                        <option>Trek-Segafredo</option>
                        <option>Movistar Team</option>
                        <option>Deceuninck-Quick-Step </option>
                        <option>UAE Team Emirates</option>
                        <option>Team Ineos</option>
                        <option>Astana Pro Team</option>
                        <option>Jumbo-Visma</option>
                        <option>CCC Team</option>
                        <option>Lotto-Soudal</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2 pt-3">
                <div class="form-group">
                    <select id="inputState" class="form-control">
                        <option selected>Coureurs</option>
                        <option>Romain Bardet</option>
                        <option>Nicolas Edet</option>
                        <option>Arnaud Démare</option>
                        <option>David Gaudu</option>
                        <option>Sean Bennett</option>
                        <option>Carlos Betancur</option>
                        <option>Edvald Boasson Hagen</option>
                        <option>Esteban Chaves</option>
                        <option>Julian Alaphilippe</option>
                        <option>Caleb Ewan</option>
                        <option>Mark Cavendish</option>
                        <option>Christopher Froome</option>
                        <option>Egan Bernal</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2 pt-3">
                <div class="form-group">
                    <select id="inputState" class="form-control">
                        <option selected>Fitness</option>
                        <option>Homme</option>
                        <option>Femme</option>
                        <option>Jeune</option>
                        <option>Nutrition</option>
                        <option>Musculation</option>
                        <option>RPM</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2 pt-3">
                <div class="form-group">
                    <select id="inputState" class="form-control">
                        <option selected>Calendrier</option>
                        <option>Premier Trimestre</option>
                        <option>Deuxième Trimestre</option>
                        <option>Troisième Trimestre</option>
                        <option>Quatrième Trimestre</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-primary btn-block">Recherche</button>
            </div>
        </div>
    </div>


    <section>
        <div class="container-fluid w-75">
            <div class="row m-1 my-3">
                <div>
                    <div class="col-12 d-flex bord p-0 m-0">
                        <div class="col-4 p-0 m-0">
                            <img class="imageArticle p-0 m-3" src="img/article1.jpg" alt="">
                        </div>
                        <div class="col-8 m-2">
                            <h3 class="text-center">Le report du Giro</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae distinctio,
                                harum vel tempore neque nihil temporibus optio consequuntur eligendi inventore,
                                nulla molestias minima officiis quia quo, earum possimus maiores sit.</p>
                            <div class="col-12 w-100 text-right lien">
                                <a href="detail_article.php">Lire la suite</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-1 my-3">
                <div>
                    <div class="col-12 d-flex bord p-0 m-0">
                        <div class="col-4 p-0 m-0">
                            <img class="imageArticle p-0 m-3" src="img/article2.jpg" alt="">
                        </div>
                        <div class="col-8 m-2">
                            <h3 class="text-center">Les coureurs en stand-by</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae distinctio,
                                harum vel tempore neque nihil temporibus optio consequuntur eligendi inventore,
                                nulla molestias minima officiis quia quo, earum possimus maiores sit.</p>
                            <div class="col-12 w-100 text-right lien">
                                <a href="detail_article.php">Lire la suite</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-1 my-3">
                <div>
                    <div class="col-12 d-flex bord p-0 m-0">
                        <div class="col-4 p-0 m-0">
                            <img class="imageArticle p-0 m-3" src="img/article3.jpg" alt="">
                        </div>
                        <div class="col-8 m-2">
                            <h3 class="text-center">Le cyclisme veut montrer l'exemple</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae distinctio,
                                harum vel tempore neque nihil temporibus optio consequuntur eligendi inventore,
                                nulla molestias minima officiis quia quo, earum possimus maiores sit.</p>
                            <div class="col-12 w-100 text-right lien">
                                <a href="detail_article.php">Lire la suite</a>
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