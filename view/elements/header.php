<?php
$title = $_GET['url'] ;?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>logico-binaire  | <?=  !empty($title) ? $title : ''   ?></title>


  <!-- vendor -->
  <link rel="stylesheet" href="../../public/vendor/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="welcome">logico-<small class="text-warning">binary</small></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?= $_GET['url'] === 'welcome' ? 'active' : '' ?>"  href="/welcome">Accueil</a>
        </li>
     
       

        <li class="nav-item">
          <a class="nav-link <?= $_GET['url'] === 'convertisseur' ? 'active' : '' ?>" href="/convertisseur">Convertisseur</a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?= $_GET['url'] === 'contact' ? 'active' : '' ?>" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
  

