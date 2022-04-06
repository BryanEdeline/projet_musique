<!DOCTYPE html>
<html lang="fr">
<?php
include 'head.php'
?>
<?php
include 'verif_login.php'
?>
<title>Notre site !</title>
   <body><nav class="navbar navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">notre site</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="playlist.php">Playlist</a>
          </li>
          <li class="nav-item">
                     <a class="list-group-item list-group-item-action list-group-item-light p-3" href="Liste_Musique.php">Liste Musique</a>
          </li>
          <li class="nav-item">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="add_musique.php">Ajouter Musique</a>
          </li>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="compte.php">Compte</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Connexion
            </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <a class="dropdown-item" href="login.php">Se connecter / Se déconnecter</a>
              <li>
                <hr class="dropdown-divider">
              </li>
              <a class="dropdown-item" href="create.php">Créer son compte</a>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>


       <?php
       session_start();
       if(isset($_SESSION['pseudo']))
       echo $_SESSION['pseudo'];
       ?>
         <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                    <nav class="navbar navbar-light bg-light">
                     <div class="container-fluid">
                         <form class="d-flex">
                            <input class="form-control me-2" type="Recherche" placeholder="Recherche" aria-label="Recherche">
                            <div class="search">
                            <button type="button" class="btn btn-outline-light">Recherche</button>
                            </div>
                         </form>
                     </div>
                    </nav>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="login.php">Se connecter / Se déconnecter</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="create.php">Créer son compte</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="./assets/02.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Bienvenue! <?php session_start(); if(isset($_SESSION['pseudo'])) echo $_SESSION['pseudo']; $_SESSION = array() ; session_destroy(); ?> </h2>
                            <p>Trouves toutes les musiques de ton choix sur  site !</p>
                        </div>
                    </div>
                </div>
            </div>
             <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="./assets/01.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Vos artistes préférés !</h2>
                            <p>Retrouve tout tes artistes favoris et leurs albums sur ce site!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="./assets/03.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Let there be rock!</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <footer class="py-5 bg-black">
            <div class="container px-5"><p class="m-0 text-center text-white small">Copyright &copy; Notre Site 2021</p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>

    </body>
</html>
