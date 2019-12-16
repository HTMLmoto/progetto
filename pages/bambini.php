<?php
session_start();
include '../settings.php';
?>
<html>
    <head>
        <title>Terremoti - ITT Terni</title>
        <link rel="shortcut icon" href="../img/logoITT.png" type="image/png">
        <script src="../Libs/js/jquery-2.2.3.js"></script>
        <script src="../Libs/js/popper.js"></script>
        <script src="../Libs/js/bootstrap.js"></script>
		<script src="../Libs/js/my-project.js"></script>
        <link rel="stylesheet" href="../Libs/css/css/font-awesome.css">
        <link rel="stylesheet" href="../Libs/css/bootstrap.css">
        <link rel="stylesheet" href="../Libs/stile_bambini.css">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

    </head>
    <body>
        <div class="background"></div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-black sticky-top colore_navbar">
            <!-- Image and text -->
            <a class="navbar-brand" href="../index.php">
                <img src="../img/logoITT.png" width="30" height="30" class="d-inline-block align-top" alt="">
                ITT Terni - Terremoti
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            Terremoti
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="terremoti.php">Definizioni sui terremoti</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="terremoti_in_italia.php">In Italia</a>
                            <a class="dropdown-item" href="terremoti_nel_mondo.php">Nel mondo</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sicurezza.php">Sicurezza</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faqs.php">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="bambini.php">Per i piccoli</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="get" action="../search.php">
                    <?php if (isset($_SESSION['id'])) {
                        $nickname = mysqli_fetch_array($conn->query("SELECT nickname from utenti where id = ".$_SESSION['id']))['nickname']; ?>
                        <div class="dropdown">
                            <button class="btn btn-danger mr-2 dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $nickname; ?></button>
                            <div class="dropdown-menu">
                                <div class="dropdown-header">
                                    Profilo
                                </div>
                                <a href="../logout.php" class="dropdown-item"><i class="fa fa-sign-out"></i> Esci</a>
                            </div>
                        </div>
                    <?php } ?>
                    <div>
                        <a href="../segnala.php" class="btn btn-secondary">hai<b>sentito</b>il<b>terremoto</b></a>
                    </div>
                    <?php if (empty($_SESSION['id'])) { ?>
                        <a class="btn btn-danger ml-2" href="../login.php"><i class="fa fa-sign-in"></i> Login</a>
                    <?php } ?>
                </form>
            </div>
        </nav>
        <script type="text/javascript">
          $(document).ready(function() {
            $('.easterEgg').dblclick(function() {
              window.location.href = "http://www.staggeringbeauty.com/";
            })
          });
        </script>
        <!-- Live -->
        <div class="container" align="center">
            <br>
            <div class="card live-card">
                <div class="card-body row">
                    <div class="col-sm live-title" align="left">
                        <i class="fa fa-circle text-azzurro easterEgg"></i> Live
                    </div>
                    <div class="col-sm" align="right">
                        <a href="../live/terremoti.php" class="btn bg-azzurro text-light"><i class="fa fa-play"></i> Terremoti</a>
                        <a href="../live/faglie.php" class="btn bg-azzurro text-light"><i class="fa fa-play"></i> Faglie</a>
                    </div>
                </div>
            </div>
            <br>
            <div id="carouselExampleIndicators" class="container carousel homepageCarousel slide bg-dark" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
            </div>
            <br>
            <hr>
            <section class="banner clearfix">
                <div class="banner__image"></div>
      <div class="banner__copy">
        <div class="banner__copy__text">

          <h3>Terremoto</h3>
          <br>
          <p>Un terremoto (o sisma) è una vibrazione che si verifica all'interno della terra.</p>

        </div>
      </div>
            </section>
            <section class="banner clearfix">
      <div class="banner__copy">
        <div class="banner__copy__text">
          <h3>Cosa fare</h3>
          <ul>
            <br>
            <li>Stai lontano dalle finestre.</li>
            <li>Proteggiti sotto un tavolo o un banco e attendi la fine della scossa.</li>
            <li>Esci dall'edificio dalle uscite di emergenza e vai al punto di raccolta più vicino (se non sai dov'è, chiedi ad un adulto fuori dall'edificio)</li>
          </ul>
        </div>
      </div>
      <div class="banner__image2"></div>
    </section>
    <hr>
    <img src="../img/vignetta.PNG" style="width: 100%;">
    <hr>
        </div>
        <div class="bg-black text-light footer colore_navbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 martop">
                        <h4>Creato con <i style="transform: scale(2); margin: 0 10;" class="fa fa-heart text-light"></i> dagli <span class="pop link-light" data-toggle="popover">studenti</span> dell'<a class="link-danger text-light" target="_blank" href="http://www.ittterni.gov.it"> ITT Terni</a>.</h4>
                    </div>
                    <div class="col-md-6">
                        <img id="pon" src="../img/logo_pon.png" width="100%" height="200">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
