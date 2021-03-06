<?php
require_once'../../partial/connect.php';
require_once'./../includes/header.php';
if(isset($_GET['id'])){

$id = $_GET['id'];

$reponse = $bdd->query('SELECT * FROM articles  INNER JOIN users  ON articles.idUser = users.id WHERE id ='.$id);
// $reponse->execute([':id' => $id]);
$results = $reponse->fetch();
}
?>
<div class="col-12 col-lg-12 text-dark d-flex justify-content-center mt-20">
<form action="./../treatment/updatesArticle.php" method="post" class="updateArticle mt-20">
    <input type="hidden" name="idQuestionnaire" value="<?= $id ?>" />
    <input type="hidden" name="action" value="add_question" />
    <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-secondary text-white" id="inputGroup-sizing-sm">Article</span>
        </div>
        <input type="text" name="title" value="<?= $results['title']?>" class="form-control"
            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
    <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-secondary text-white" id="inputGroup-sizing-sm">Autheur</span>
        </div>
        <input type="text" name="name" value="<?= $results['name'],' ',$results['surname']?>" class="form-control"
            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
    <div class="input-group input-group-sm mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text bg-secondary text-white" id="inputGroup-sizing-sm">Date de parution</span>
        </div>
        <input type="text" name="date" value="<?= $results['creationDate']?>" class="form-control"
            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
    <!-- <div class="input-group input-group-sm mb-3"> -->

    <textarea class="form-control" name="article" value="" id="exampleFormControlTextarea1"
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
<?php
 
?>
<script src="../../js/ajax/updateArticle.js"></script>


<?php
require_once'../includes/footer.php';