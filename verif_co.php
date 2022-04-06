<?php
require_once 'connexion_bdd.php';


//On regarde si les variables existent et sont non vide
if (!isset($_POST["libelle"]) || empty($_POST["libelle"])) {
    echo "Le champs libelle est obligatoire.";
    die;
}
if (!isset($_POST["artiste"])) {
    echo "Le champs artiste est obligatoire.";
    die;
}

try {
    

    // On passe par un filtre pour sécuriser nos données.
    $libelle = filtreChaine($_POST['libelle']);
    $artiste = filtreChaine($_POST['artiste']);
    $annee = filtreChaine($_POST['annee']);

    // var_dump($artiste);die;


// On prépare et execute notre requete.
    $sql = "INSERT INTO musique  (libelle,artiste,annee)
    SELECT libelle
    FROM artiste A
    INNER JOIN musique M
    ON M.id_artiste = A.id"
    ." VALUES(?, ?, ?)";
    
    
    $sth = $db->prepare($sql);


    $sth->bindParam(1, $libelle, PDO::PARAM_STR, 50);
    $sth->bindParam(2, $artiste, PDO::PARAM_STR, 20);
    $sth->bindParam(3, $annee, PDO::PARAM_STR, 10);
    $sth->execute();

    $sth->debugDumpParams();
    /**
     * @todo: ajouter un message flash pour l'ajout de produit
     */
    echo 'musique ajouté';
    header("location: Liste_Musique");
} catch (Exception $e) {
    echo $e->getMessage();
    die;
}

/**
 * Filtre les chaines de caractère
 * @param string $chaine
 * @return string
 */
function filtreChaine(string $chaine): string {
    return filter_var(trim($chaine));
}