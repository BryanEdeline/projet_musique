<?php
require_once 'connexion_bdd.php';
//On regarde si les variables existent et sont non vide
if (!isset($_POST["pseudo"]) || empty($_POST["pseudo"])) {
    echo "Le champs nom d'utilisateur est obligatoire.";
    die;
}
if (!isset($_POST["mail"])) {
    echo "Le champs mail est obligatoire.";
    die;
}
if (!isset($_POST["mot_de_passe"])) {
    echo "Le champs mot de passe est obligatoire.";
    die;
    
}
try {
    

    // On passe par un filtre pour sécuriser nos données.
    $pseudo = filtreChaine($_POST['pseudo']);
    $mail = filtreChaine($_POST['mail']);
    $mot_de_passe = filtreChaine($_POST['mot_de_passe']);
    $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_DEFAULT);
     // var_dump();die;

// On prépare et execute notre requete.
    $sql = "INSERT INTO compte(pseudo,mail,mot_de_passe) "
            ." VALUES(?, ?, ?)";
    $sth = $db->prepare($sql);
    $sth->bindParam(1, $pseudo, PDO::PARAM_STR, 15);
    $sth->bindParam(2, $mail, PDO::PARAM_STR, 30);
    $sth->bindParam(3, $mot_de_passe, PDO::PARAM_STR, 255);
    $sth->execute();

    $sth->debugDumpParams();
    /**
     * @todo: ajouter un message flash pour l'ajout de produit
     */
    echo 'compte ajouté';
   // header("location:");
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
