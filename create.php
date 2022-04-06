<html>
    <head>
       <meta charset="utf-8">
        <!-- Importation du fichier de style -->
        <link rel="stylesheet" href="./css/login.css" media="screen" type="text/css" />
    </head>
    <body>
    <div class="row">
    &nbsp;
        <div id="container">  
            <form action="verif_connexion.php" method="POST">
                <h1>Création de compte</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" class="form-control" placeholder="Entrer le nom d'utilisateur" id="pseudo"name="pseudo" required>
                <label><b>Adresse e-mail<b></label>
                <input type="text" class="form-control" placeholder="Entrer votre adresse e-mail" id="mail" name="mail" required>
                <label><b>Mot de passe</b></label>
                <input type="password"password_hash(string $password, string|int|null $algo, array $options = []): string class="form-controm" placeholder="Entrer le mot de passe" id="mot_de_passe" name="mot_de_passe" required>

                <input type="submit" id='submit' value='Créer votre compte' >
                <p style='color:blue'> <link href="login.php">Se connecter</p>
                
                <?php
                if(isset($_GET['erreur'])){
                    
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Adresse e-mail déja utilsée veuillez changer de d'e-mail</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>