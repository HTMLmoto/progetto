<?php
session_start();
include('settings.php');
?>
<html>
    <head>
        <title>Terremoti - ITT Terni</title>
        <link rel="shortcut icon" href="img/logoITT.png" type="image/png">
        <script src="Libs/js/jquery-2.2.3.js"></script>
        <script src="Libs/js/popper.js"></script>
        <script src="Libs/js/bootstrap.js"></script>
		<script src="Libs/js/my-project.js"></script>
        <link rel="stylesheet" href="Libs/css/css/font-awesome.css">
        <link rel="stylesheet" href="Libs/css/bootstrap.css">
        <link rel="stylesheet" href="Libs/graphics.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
    </head>
    <body>
        <div class="background"></div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-black sticky-top">
            <!-- Image and text -->
            <a class="navbar-brand" href="index.php">
                <img src="img/logoITT.png" width="30" height="30" class="d-inline-block align-top" alt="">
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
                            <a class="dropdown-item" href="pages/terremoti.php">Informazioni sui terremoti</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="pages/terremoti_in_italia.php">In Italia</a>
                            <a class="dropdown-item" href="pages/terremoti_nel_mondo.php">Nel mondo</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/sicurezza.php">Sicurezza</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/faqs.php">FAQs</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="get" action="search.php">
                    <?php if (isset($_SESSION['id'])) {
                        $nickname = mysqli_fetch_array($conn->query("SELECT nickname from utenti where id = ".$_SESSION['id']))['nickname']; ?>
                        <div class="dropdown">
                            <button class="btn btn-danger mr-sm-2 dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $nickname; ?></button>
                            <div class="dropdown-menu">
                                <div class="dropdown-header">
                                    Profilo
                                </div>
                                <a href="logout.php" class="dropdown-item"><i class="fa fa-sign-out"></i> Esci</a>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="btn-group input-group my-2">
                        <input class="form-control" type="search" name="q" placeholder="Cerca">
                        <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Cerca</button>
                    </div>
                    <?php if (empty($_SESSION['id'])) { ?>
                        <a class="btn btn-danger ml-sm-2" href="login.php"><i class="fa fa-sign-in"></i> Login</a>
                    <?php } ?>
                </form>
            </div>
        </nav>
        <!-- Live -->
        <div class="container" align="center">
            <br>
            <div class="card live-card">
                <div class="card-body row">
                    <div class="col-sm live-title" align="left">
                        <i class="fa fa-circle text-danger"></i> Live
                    </div>
                    <div class="col-sm" align="right">
                        <a href="live/terremoti.php" class="btn btn-danger"><i class="fa fa-play"></i> Terremoti</a>
                        <a href="live/faglie.php" class="btn btn-danger"><i class="fa fa-play"></i> Faglie</a>
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
            <br>
            <?php if (isset($_SESSION['id'])) {
                    /* esegui se compilato */
                    if (isset($_POST['titoloPost'])) {
                        $titolo = addslashes($_POST['titoloPost']);
                        $contenuto = addslashes($_POST['contenutoPost']);
                        $conn->query("insert into posts (titolo, contenuto, pubblico, idUser) values ('$titolo', '$contenuto', 1, ".$_SESSION['id'].")");
                    }
                ?>
                <!-- form per creare post -->
                <div id="creaPostCollapses">
                    <div class="card">
                        <div class="collapse show" align="center" id="creaPostButton" data-parent="#creaPostCollapses">
                            <div class="card-body row">
                                <div class="col-sm live-title" align="left">
                                    <i class="fa fa-pencil text-danger"></i>&nbsp;
                                </div>
                                <div class="col-sm" align="right">
                                    <button class="btn btn-danger" data-toggle="collapse" data-target="#creaPostForm"><i class="fa fa-plus"></i> Crea un post</button>
                                </div>
                            </div>
                        </div>
                        <div class="container collapse hide" id="creaPostForm" data-parent="#creaPostCollapses" align="center">
                            <br>
                            <h4 align="left"><i class="fa fa-plus"></i> Crea post</h4>
                            <hr>
                            <form action="index.php" method="post">
                                <input class="form-control" type="text" name="titoloPost" placeholder="Titolo" required>
                                <br>
                                <textarea class="form-control" name="contenutoPost" rows="5" placeholder="Contenuto post" required></textarea>
                                <br>
                                <div align="right">
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-send"></i> Pubblica</button>
                                    <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#creaPostButton"><i class="fa fa-close"></i> Annulla</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <br>
                </div>
            <?php } ?>
            <hr>
            <div class="posts">
                <h1 align="center" class="text-danger">Post recenti</h1>
                <br>
                <?php
                    $postsSql = $conn->query("SELECT * from posts inner join utenti on posts.idUser = utenti.id where deleted = 0 and pubblico = 1 order by posts.id desc limit 3");
                    while ($post = mysqli_fetch_array($postsSql)) { ?>
                        <div class="alert alert-light text-dark shadow post" align="center">
                            <h3 class="text-dark"><?php echo $post['titolo']; ?></h3>
                            <small>Creato da <?php echo $post['nickname']; ?></small>
                            <hr>
                            <p><i class="fa fa-calendar"></i> <?php echo $post['data']; ?></p>
                            <p>
                                <?php echo $post['contenuto']; ?>
                            </p>
                        </div>
                <?php } ?>
            </div>
            <br>
        </div>
        <div class="bg-black text-light footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 martop">
                        <h4>Creato con <i style="transform: scale(2); margin: 0 10;" class="fa fa-heart text-danger"></i> dagli <span class="pop link-danger" data-toggle="popover">studenti</span> dell'<a class="link-danger" target="_blank" href="http://www.ittterni.gov.it">ITT Terni</a>.</h4>
                    </div>
                    <div class="col-md-6">
                        <img id="pon" src="img/logo_pon.png" width="100%" height="200">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
