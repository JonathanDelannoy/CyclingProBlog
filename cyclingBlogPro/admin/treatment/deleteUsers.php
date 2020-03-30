<?php
require_once '../../partial/connect.php';


$id = intval($_GET['id']);


$req = $bdd->prepare("DELETE FROM users WHERE id = " . $id);
$req->execute();

// header('Location:../content/infosUsers.php');

?>
