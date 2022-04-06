<!DOCTYPE html>
<html lang="fr">
<?php
include 'connexion_bdd.php';


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $libelle = filtreChaine($_POST['libelle']);
        $artiste = filtreChaine($_POST['artiste']);
        $annee = filtreChaine($_POST['annee']);

        $sql = "UPDATE musique SET libelle='" . $_POST['libelle'] ."', artiste='"
        . $_POST['artiste'] . "', annee='" . $_POST['annee'] . "', "
        . "' where id='" . $_POST['id'] ."'";
        $sth = $db->prepare($sql);
        $sth->execute();
        $sth->debugDumpParams();
        die; 
    }catch (Exception $e) {
        echo $e->getMessage();
        die;
    }
}
    else {
        if (!isset($GET['id']) || empty($_GET['id'])) {
            
            die;
     }  else {
        $q = $db->prepare("SELECT libelle FROM 'musique'WHERE libelle=?");
        $q->execute([trim(htmlentities($_GET['libelle']))]);
        $musique  = $q->fetch(PDO::FETCH_OBJ);
        var_dump($musique);
            /**
            * Filtre les chaines de caractère
            * @param string $chaine
            * @return string
            */
            function filtreChaine(string $chaine): string {
            return filter_var(trim($chaine));          
            }
        } 
 
    }





?>
<div class="row">
    &nbsp;
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
</form>
<body>
<form class="row g-3" method="post" action="liste_musique.php">
    <input type="hidden" class="form-control"  id="id"  name="id" value="<?= $musique->id; ?>">
    <div class="mb-3 row">
        <label for="musique" class="col-sm-2 col-form-label">Musique</label>
        <div class="col-sm-10">
</textarea>
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Enregistrer</button>
    </div>
</form>
