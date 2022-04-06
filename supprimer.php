<?php
include 'connexion_bdd.php';
$id=['id'];
try{ 
        $sql = ("DELETE FROM musique WHERE id = '".$_GET['id']."'");
         $sth = $db->prepare($sql);
        $sth->execute();
}   
catch(Exception $e){
        echo $e->getMessage();
        die;
}