<!DOCTYPE html>
<html lang="fr">
    <head> 
        <!-- Importation du fichier de style -->
        <link rel="stylesheet" href="./css/login.css" media="screen" type="text/css" />
    </head>
<body>
<?php include 'head.php' ?>
<div class="row">
    &nbsp;
    <nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">(Nom du site)</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-control="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#!">Playlist</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Liste_Musique.php">Liste Musique</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="compte.php">Compte</a> 
        </li>    
      </ul>
    </div>
  </div>
</nav>
</div>
<form class="row g-3" method="post" action="verif_co.php" enctype="multipart/form-data">
    <div class="mb-3 row">
        <label for="libelle" class="col-sm-2 col-form-label">Titre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control"  id="libelle"  name="libelle">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="artiste" class="col-sm-2 col-form-label">Artiste</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="artiste"  name="artiste">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="annee" class="col-sm-2 col-form-label">Année</label>
        <div class="col-sm-8">
            <input type="date" class="form-control" id="annee"  name="annee">
        </div>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-outline-dark">Ajouter</button>
    </div>
</form>
<body>

