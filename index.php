<?php
session_start();
?>
<html>
    <head>
        <title>Titolo sito PON</title>
        <script src="Libs/js/jquery-2.2.3.js"></script>
        <script src="Libs/js/popper.js"></script>
        <script src="Libs/js/bootstrap.js"></script>
		<script src="Libs/js/my-project.js"></script>
        <link rel="stylesheet" href="Libs/css/css/font-awesome.css">
        <link rel="stylesheet" href="Libs/css/bootstrap.css">
        <link rel="stylesheet" href="Libs/graphics.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <script>
            $(document).ready(function() {
                $('.carousel').carousel({
                  interval: 4000
                });
            });
        </script>
    </head>
    <body>
        <div class="background"></div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-black sticky-top">
            <!-- Image and text -->
            <a class="navbar-brand" href="index.php">
                <img src="img/logoITT.png" width="30" height="30" class="d-inline-block align-top" alt="">
                ITT Terni
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
                            <a class="dropdown-item" href="pages/terremoti_in_italia.html">In Italia</a>
                            <a class="dropdown-item" href="pages/terremoti_nel_mondo.html">Nel mondo</a>
                            <a class="dropdown-item" href="pages/terremoti_nel_tempo.html">Nel tempo</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/zone.html">Zone</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/faqs.html">FAQs</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="get" action="search.php">
                    <div class="btn-group input-group my-2">
                        <input class="form-control" type="search" name="q" placeholder="Cerca">
                        <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Cerca</button>
                    </div>
                    <?php if (isset($_SESSION['id'])) { ?>
                        <a class="btn btn-outline-danger ml-sm-2" href="logout.php"><i class="fa fa-user"></i> Nome utente</a>
                    <?php } else { ?>
                        <a class="btn btn-danger ml-sm-2" href="login.php"><i class="fa fa-sign-in"></i> Login</a>
                    <?php } ?>
                </form>
            </div>
        </nav>
        <div align="center">
            <br>
            <div class="btn-group">
                <a href="live/terremoti.html" class="btn btn-danger"><i class="fa fa-play"></i> Live terremoti</a>
                <a href="live/faglie.html" class="btn btn-danger"><i class="fa fa-play"></i> Live faglie</a>
            </div>
            <br>
            <br>
        </div>
        <div id="carouselExampleIndicators" class="container carousel homepageCarousel slide bg-dark" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/earthquake-1665870.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/earthquake-1665874.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/earthquake-1665878.jpg" alt="3 slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/earthquake-1790918.jpg" alt="4 slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/earthquake-1790920_640.jpg" alt="5 slide">
                    <!--<div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        <p>...</p>
                    </div>-->
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <hr>
        <?php if (isset($_SESSION['id'])) {
                $conn = mysqli_connect('localhost', 'root', '', 'sitoterremoti');
                /* esegui se compilato */
                if (isset($_POST['titoloPost'])) {
                    $titolo = addslashes($_POST['titoloPost']);
                    $contenuto = addslashes($_POST['contenutoPost']);
                    $conn->query("insert into posts (titolo, contenuto, pubblico, idUser) values ('$titolo', '$contenuto', 1, ".$_SESSION['id'].")");
                }
            ?>
            <!-- form per creare post -->
            <div id="creaPostCollapses">
                <div class="collapse show" align="center" id="creaPostButton" data-parent="#creaPostCollapses">
                    <button class="btn btn-danger" data-toggle="collapse" data-target="#creaPostForm"><i class="fa fa-plus"></i> Crea un post</button>
                </div>
                <div class="container collapse hide" id="creaPostForm" data-parent="#creaPostCollapses" align="center">
                    <h4><i class="fa fa-plus"></i> Crea post</h4>
                    <form action="index.php" method="post">
                        <input class="form-control" type="text" name="titoloPost" placeholder="Titolo" required>
                        <br>
                        <textarea class="form-control" name="contenutoPost" rows="5" placeholder="Contenuto post" required></textarea>
                        <br>
                        <button type="submit" class="btn btn-danger"><i class="fa fa-send"></i> Crea</button>
                        <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#creaPostButton"><i class="fa fa-close"></i> Annulla</button>
                    </form>
                </div>
                <hr>
            </div>
        <?php } ?>
        <h1 align="center">I nostri post</h1>
        <div class="container">
            <?php
                $conn = mysqli_connect('localhost', 'root', '', 'sitoterremoti');
                $postsSql = $conn->query("SELECT * from posts inner join utenti on posts.idUser = utenti.id where deleted = 0 and pubblico = 1 order by posts.id desc");
                while ($post = mysqli_fetch_array($postsSql)) { ?>
                    <div class="alert alert-dark shadow" align="center">
                        <h3><?php echo $post['titolo']; ?></h3>
                        <small>Creato da <?php echo $post['nickname']; ?></small>
                        <hr>
                        <p><i class="fa fa-calendar"></i> <?php echo $post['data']; ?> | <i class="fa fa-clock-o"></i> <?php echo $post['ora']; ?></p>
                        <p>
                            <?php echo $post['contenuto']; ?>
                        </p>
                    </div>
            <?php } ?>
            <br><br>
        </div>
        <div class="row bg-dark text-light footer">
            <!--
                91ff94
                e8cf60
                c17be8
                94b2c3
                ff9477
            -->
            <div class="col-md-6 martop">
                <h4>Creato con <i style="transform: scale(2); margin: 0 10;" class="fa fa-heart text-danger"></i> dagli <span class="pop link-danger" data-toggle="popover">studenti</span> dell'<a class="link-danger" target="_blank" href="http://www.ittterni.gov.it">ITT Terni</a>.</h4>
            </div>
            <div class="col-md-6">
                <img id="pon" src="img/logo_pon.png" width="100%" height="200">
            </div>
        </div>
    </body>
</html>
