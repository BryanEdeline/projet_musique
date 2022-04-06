
<?php
echo "welcome to Catalogue hash\n\rHow to use it?\n\r"
. "php bin\\hash.php mdp nom mail".PHP_EOL;
$mot_de_passe =  password_hash($argv[1], PASSWORD_BCRYPT);

if(isset($argv[2]) && isset($argv[3])){
   echo "insert into utilisateur (pseudo, mail, mot_de_passe) values('$argv[2]', '$argv[3]', '$mot_de_passe' )"; 
}else{
    echo $mdp;
}