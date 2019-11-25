<?php
session_start();
?>
<html>
    <head>
        <title>Zone</title>
        <link rel="shortcut icon" href="../img/logoITT.png" type="image/png">
        <script src="../Libs/js/jquery-2.2.3.js"></script>
        <script src="../Libs/js/popper.js"></script>
        <script src="../Libs/js/bootstrap.js"></script>
		<script src="../Libs/js/my-project.js"></script>
        <link rel="stylesheet" href="../Libs/css/css/font-awesome.css">
        <link rel="stylesheet" href="../Libs/css/bootstrap.css">
        <link rel="stylesheet" href="../Libs/graphics.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
    </head>
    <body>
        <div class="background"></div>
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
                        <a class="nav-link dropdown-toggle active" href="#" data-toggle="dropdown">
                            Terremoti
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="terremoti.php">Informazioni sui terremoti</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="terremoti_in_italia.php">In Italia</a>
                            <a class="dropdown-item active" href="terremoti_nel_mondo.php">Nel mondo</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sicurezza.php">Sicurezza</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faqs.php">FAQs</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="get" action="../search.php">
                    <?php if (isset($_SESSION['id'])) {
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
                        <a href="../live/faglie.php" class="btn btn-danger"><i class="fa fa-play"></i> Faglie</a>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <hr>
        <div class="container">
            <!-- post qui -->
            <div class="post" align="center">
                <h1>Terremoti nel mondo</h1>
                <hr>
                <img src="../img/sismografo.jpeg" class="img">
                <br><br>
                <div class="post_container">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c1" aria-expanded="true" aria-controls="c1">
                                       Valdivia, Cile
                                    </button>
                                </h2>
                            </div>
                            <div id="c1" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body testo-paragrafo">
                                    Il terremoto di Valdivia in Cile è stato il terremoto più forte mai registrato. Con epicentro a 900 km da Santiago, avvenne alle 14.11 ora locale (19.11 ora italiana) del 22 maggio del 1960, durò circa 13 minuti e arrivò ad un magnitudo di 9.5.

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c2" aria-expanded="true" aria-controls="c2">
                                       Sumatra, Indonesia
                                    </button>
                                </h2>
                            </div>
                            <div id="c2" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body testo-paragrafo">
                                    Il terremoto di Sumatra è stato il secondo terremoto più forte con un magnitudo di 9.3. Si verificò alle 7.58 ora locale (00.58 ora italiana); e durò 8 minut
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c3" aria-expanded="true" aria-controls="c3">
                                       Prince William Sound, Alaska
                                    </button>
                                </h2>
                            </div>
                            <div id="c3" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body testo-paragrafo">
                                  Il terremoto in Alaska è stato il terzo terremoto più forte mai registrato. Magnitudo 9.5 con circa 130 morti. Si verificò alle 17.36 ora locale (3.36 ora italiana del 28 marzo) del 27/03/64.

                                </div>
                            </div>
                        </div>
                    </div>
                    
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c5" aria-expanded="true" aria-controls="c5">
                                        Sendai, Giappone
                                    </button>
                                </h2>
                            </div>
                            <div id="c5" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body testo-paragrafo">
                                   Il terremoto di Sendai è stato uno dei terremoti più forti avvenuti in Giappone ed il quarto in tutto il mondo. Vi fu l’11/03/2011 alle 14:46 ora locale (05.46 ora italiana), e durò circa 6 minuti. Il magnitudo fu di 9.0, con epicentro mare e con successivo tsunami.

                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c6" aria-expanded="true" aria-controls="c6">
                                        Kamchatka, Russia
                                    </button>
                                </h2>
                            </div>
                            <div id="c6" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body testo-paragrafo">
                                 Il quinto terremoto più forte si verificò alle 04.58 ore locali (16.58 ora italiana) con magnitudo 9.0 e innescò tsunami con onde alte 15 metri. Lo tsunami causò la distruzione totale delle coste della Kamchatka e delle isole Curili.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c7" aria-expanded="true" aria-controls="c7">
                                        Coste dell’Ecuador
                                    </button>
                                </h2>
                            </div>
                            <div id="c7" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body testo-paragrafo">
                                  Il terremoto dell’Ecuador si verificò alle 15.36 ora locale del 31/01/1906 con magnitudo di 8.8 e creò una frattura lunga 600 km. A causa dell’energia liberata si ebbe uno tsunami con onde alte 5 metri.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c8" aria-expanded="true" aria-controls="c8">
                                        Concepciòn, Cile 
                                    </button>
                                </h2>
                            </div>
                            <div id="c8" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body testo-paragrafo">
                               Il terremoto in Cile del 2010 si verificò al largo della costa del Maule in Cile, il 27 febbraio del 2010 alle ore 3:34 locali, (6:34 ora italiana) con una magnitudo di 8,8  durato per circa tre minuti]. È stato il più forte terremoto che ha colpito il Cile dal 1960 (9,5 Mw, il più forte mai registrato), ed era il più forte al mondo dal Maremoto dell'Oceano Indiano del 2004.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c9" aria-expanded="true" aria-controls="c9">
                                        Isole Rat, Alaska
                                    </button>
                                </h2>
                            </div>
                            <div id="c9" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body testo-paragrafo">
                                   Questo terremoto si verificò alle 05.01 ora italiana del 04/02/1965 con un magnitudo di 8.7. Anche questo terremoto scaturi un’energia che provocò uno tsunami con onde alte 11 metri 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c10" aria-expanded="true" aria-controls="c10">
                                        Sumatra, Indonesia
                                    </button>
                                </h2>
                            </div>
                            <div id="c10" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body testo-paragrafo">
                                   Il Terremoto di Sumatra del 2005 si verificò alle 23.09  del 28/03/2005, raggiunse la magnitudo momento di 8.6 e durò circa 2 minuti.
        L'enorme energia liberata e l’ipocentro localizzato a 30 km di profondità, innescarono uno tsunami con onde alte fino a 3 metri. L’evento sismico fece circa 1400 morti.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        
        <!-- footer -->
        <div class="bg-black text-light footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 martop">
                        <h4>Creato con <i style="transform: scale(2); margin: 0 10;" class="fa fa-heart text-danger"></i> dagli <span class="pop link-danger" data-toggle="popover">studenti</span> dell'<a class="link-danger" target="_blank" href="http://www.ittterni.gov.it">ITT Terni</a>.</h4>
                    </div>
                    <div class="col-md-6">
                        <img id="pon" src="../img/logo_pon.png" width="100%" height="200">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>