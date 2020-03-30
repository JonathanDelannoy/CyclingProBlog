<?php
require_once'connectBdd.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="../css/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/fontawesome.min.js" integrity="sha256-7zqZLiBDNbfN3W/5aEI1OX/5uvck9V0yhwKOA9Oe49M=" crossorigin="anonymous"></script>
    <title>CyclingPro Blog</title>
</head>

<body class="bg-dark">


    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Articles</li>
    </ol>
</nav>


    <div id=" headerAdmin" class="col-12 col-lg-12 bg-primary d-lg-flex justify-content-between">
        <div class="logo col-12 col-lg-2">
            <img src="../../img/logo.png" alt="">
        </div>
        <div class="searchBar align-self-center col-12 col-lg-6 d-flex">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </div>
        <div class="deconnexion align-self-center">
            <button class="btn btn btn-secondary" type="button">Deconnexion</button>
        </div>
    </div>



<?php




    