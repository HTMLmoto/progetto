<?php
session_start();
?>
<html>
    <head>
        <title>Titolo sito PON</title>
        <link rel="shortcut icon" href="../img/logoITT.png" type="image/png">
        <!--Librerie-->
        <script src="../Libs/js/jquery-2.2.3.js"></script>
        <script src="../Libs/js/popper.js"></script>
        <script src="../Libs/js/bootstrap.js"></script>
        <link rel="stylesheet" href="../Libs/css/css/font-awesome.css">
        <link rel="stylesheet" href="../Libs/css/bootstrap.css">
        <link rel="stylesheet" href="../Libs/graphics.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!--NavBar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-black sticky-top">
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
                            <a class="dropdown-item" href="../pages/terremoti.php">Definizioni sui terremoti</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../pages/terremoti_nel_mondo.php">Nel mondo</a>
                            <a class="dropdown-item" href="../pages/terremoti_in_italia.php">In Italia</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/sicurezza.php">Sicurezza</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/faqs.php">FAQs</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="get" action="../search.php">
                    <?php if (isset($_SESSION['id'])) {
                        $conn = mysqli_connect('localhost', 'root', '', 'sitoterremoti');
                        $nickname = mysqli_fetch_array($conn->query("SELECT nickname from utenti where id = ".$_SESSION['id']))['nickname']; ?>
                        <div class="dropdown">
                            <button class="btn btn-danger mr-sm-2 dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $nickname; ?></button>
                            <div class="dropdown-menu">
                                <div class="dropdown-header">
                                    Profilo
                                </div>
                                <a href="../logout.php" class="dropdown-item"><i class="fa fa-sign-out"></i> Esci</a>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="btn-group input-group my-2">
                        <input class="form-control" type="search" name="q" placeholder="Cerca">
                        <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i> Cerca</button>
                    </div>
                    <?php if (empty($_SESSION['id'])) { ?>
                        <a class="btn btn-danger ml-sm-2" href="../login.php"><i class="fa fa-sign-in"></i> Login</a>
                    <?php } ?>
                </form>
            </div>
        </nav>
        
        <!-- live -->
        <div class="container" align="center">
            <br>
            <div class="card live-card">
                <div class="card-body row">
                    <div class="col-sm live-title" align="left">
                        <i class="fa fa-circle text-danger"></i> Live
                    </div>
                    <div class="col-sm" align="right">
                        <a href="../live/terremoti.php" class="btn btn-danger"><i class="fa fa-play"></i> Terremoti</a>
                        <a href="../live/faglie.php" class="btn btn-danger disabled"><i class="fa fa-play"></i> Faglie</a>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <!--ContenutoLive-->
        <iframe class="live" src="http://diss.rm.ingv.it/dissGM/">
        </iframe>
        <div class="background"></div>
    </body>
</html>
