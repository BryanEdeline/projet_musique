<?php
        $sql = 'SELECT libelle FROM `musique`';
        $query = $db->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        ?>
        
<?php
$sql = "INSERT INTO `musique` (`libelle`, `artiste`, `annee`) VALUES (:test, :jp, :2015);";

$query = $db->prepare($sql);

$query->bindValue(':produit', $produit, PDO::PARAM_STR);
$query->bindValue(':prix', $prix, PDO::PARAM_STR);
$query->bindValue(':nombre', $nombre, PDO::PARAM_INT);

$query->execute();
    