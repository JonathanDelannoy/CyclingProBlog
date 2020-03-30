<?php
require_once'../../partial/connect.php';


$reponse = $bdd->query('SELECT * FROM articles a INNER JOIN users u ON a.idUser = u.id ');

if (isset($_POST['update'])) {

    $req = ("UPDATE articles SET title = :title, date = :date, article = :article ");
    $title = htmlspecialchars($_POST['title']);
    $date = htmlspecialchars($_POST['date']);
    $article = htmlspecialchars($_POST['article']);

    var_dump($_POST);

    $result = $bdd->prepare($req);
   $donnees =  $result->execute([':title' => $title, ':date' => $date, ':article' => $article]);
}
header('Location:../content/articleManagement.php');