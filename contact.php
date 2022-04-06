<Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Contacte nous !</title>
    <!--Css-->
    <link href="./css/contact.css" rel="stylesheet" />
    <!-- Icone de la page-->
    <link rel="icon" type="image/x-icon" href="../assets/icone.jpg" />
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 


<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">(Nom du site)</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="playlist.php">Playlist</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="liste_musique.php">Liste Musique</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add_musique.php">Ajouter Musique</a> 
        </li>    
      </ul>
    </div>
  </div>
</nav>
<div class="contactez-nous">
<center><h1>Contactez-nous</h1></center>
<center><p>Un problème, une question ? N’hésitez pas à utiliser cette page pour nous contacter !</p></center>
<form action="/page-traitement-donnees" method="post">
<div>
<div>
<label for="sujet">Quel est le sujet de votre message ?</label>
<select name="sujet" id="sujet" required>
<option value="" disabled selected hidden>Choisissez le sujet de votre message</option>
<option value="probleme-compte">Problème</option>
<option value="question-produit">Question</option>
<option value="autre">Autre...</option>
</select>
</div>
<div>
<label for="message">Votre message</label>
<textarea id="message" name="message" placeholder="Bonjour ..." required></textarea>
</div>
<div>
<button type="submit">Envoyer mon message</button>
</div>
</form>
</div>

<?php include 'footer.php' ?> 

</html>
