<?php

session_start();
require_once 'connexion_bdd.php';

if (isset($_POST['pseudo']) && isset($_POST['mot_de_passe'])) {

    $pseudo = htmlspecialchars($_POST['mail']);
    $mot_de_passe = htmlspecialchars($_POST['mot_de_passe']);


    if ($pseudo !== "" && $moy_de_passe !== "") {

        $requete = "SELECT id, pseudo,  mail, mot_de_passe from compte where nom=" . $db->quote($pseudo);

        $res = $db->query($requete);

        foreach ($res as $pseudo) {
            $mdp = $pseudo['mot_de_passe'];
            $nom = $pseudo['nom'];
            $role = "admin";
            $id = $pseudo['id'];
        }

        if (password_verify($mdp, $mot_de_passe)) {
            session_regenerate_id();
            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['role'] = "admin";
            $_SESSION['idUser'] = $id;
        }
    }
}

        

?>