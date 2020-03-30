

<?php
require_once'../includes/connectBdd.php';
require_once'./../includes/header.php';
 if(isset($_GET['id'])){

 $id = $_GET['id'];

$reponse = $bdd->query('SELECT * FROM articles  INNER JOIN users  ON articles.idUser = users.id ');
// $reponse->execute([':id' => $id]);
$results = $reponse->fetch();

?>


<!-- Modal -->
<div class="modal fade" id="modalUpdateArticle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-secondary text-warning">
            <div class="modal-header">
                <h5 class="modal-title text-uppercase text-center" id="exampleModalLabel">Modifier article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Modal-formulaire Modif_Question -->
                <form action="./../treatment/updatesArticle.php" method="post" class="updateArticle mt-20">
                    <!-- <input type="hidden" name="" value="<?= $id ?>" />
                    <input type="hidden" name="action" value="updatesArticle" /> -->
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-secondary text-white"
                                id="inputGroup-sizing-sm">Article</span>
                        </div>
                        <input type="text" id="title" name="title" value="<?= $results['title']?>" class="form-control"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-secondary text-white"
                                id="inputGroup-sizing-sm">Autheur</span>
                        </div>
                        <input type="text" id="name" name="name" value="<?= $results['name'],' ',$results['surname']?>"
                            class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-secondary text-white" id="inputGroup-sizing-sm">Date de
                                parution</span>
                        </div>
                        <input type="text" name="date" value="<?= $results['creationDate']?>" class="form-control"
                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <!-- <div class="input-group input-group-sm mb-3"> -->

                    <textarea class="form-control" id="article" name="article" value="" id="exampleFormControlTextarea1"
                        rows="13">"<?= $results['article']?>"</textarea>
                    <!-- </div> -->
                    <!-- <button class="btn btn btn-primary" name="update">Modifier<span class="badge badge-primary"></span>
            </button> -->
                    <div class="modal-footer">
                        <button type="submit" id="subpost" value="Envoyer" name="updateArticle"
                            class="btn btn-warning updateArticle">Valider les
                            modifications
                        </button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
                    </div>

                </form>




            </div>
        </div>
    </div>

    <?php
}
?>