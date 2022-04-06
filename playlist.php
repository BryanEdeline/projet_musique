<Doctype html>
<html lang="fr">
<?php
include 'connexion_bdd.php'
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Musique Maestro !</title>
    <!--Css-->
    <link href="./css/styles.css" rel="stylesheet" />
    <!-- Icone de la page-->
    <link rel="icon" type="image/x-icon" href="./assets/icone.jpg" />
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 


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
          <a class="nav-link" href="add_musique.php">Ajouter Musique</a> 
        </li>    
      </ul>
    </div>
  </div>
</nav>

<table id="musique">
    <tr>
        <th>Nom</th>
        <th>Artiste</th>
        <th>Date de sortie</th>
    </tr>
    <?php
    foreach ($db->query('SELECT * from playlist', PDO::FETCH_OBJ) as $ligne ) {
        echo " <tr><td>" . $ligne["libelle"] . "</td>";
        ?><td><?= $ligne["artiste"] ?></td>;
        <?php
        echo "<td>" . $ligne["annee"] . "</td><td>".
        "<a href='#' onclick='conf_suppression(" . $ligne["id"] . ")'>Supprimer</a></td></tr>";
    }
    ?>

    <script>
        function conf_suppression(id){
            var result = confirm("Êtes vous sûre de vouloir supprimer cette musique de votre playlist ?");      
            if (result){
                window.location.href = "supprimer.php?id="+id;
            }
        }
    </script>
</table> 

</body>
</html>