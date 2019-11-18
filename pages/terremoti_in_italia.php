<?php
session_start();
?>
<html>
    <head>
        <title>Terremoti</title>
        <link rel="shortcut icon" href="img/logoITT.png" type="image/png">
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
                            <a class="dropdown-item" href="terremoti.php">Definizioni sui terremoti</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item active" href="terremoti_in_italia.php">In Italia</a>
                            <a class="dropdown-item" href="terremoti_nel_mondo.php">Nel mondo</a>
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
        <!--1Tt37N1,T37r3M0_t1.108%-->

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
                <h1>Terremoti nel tempo</h1>
                <hr>
                <div class="post_container">

                    <div>

                    <div class="titolo-paragrafo">
                        <u>I più importanti</u>
                    </div>
                    <div class="testo-paragrafo">
                        <h4><i>Terremoto dell'Aquila del 1703:</i></h4><br>
                        E’ passato alla storia anche come il Grande Terremoto. E’ stato un insieme di eventi sismici localizzati in Abruzzo. La prima grande scossa si verificò nella zona di Cascia, Leonessa, Montereale, Norcia  il 14 gennaio, con una magnitudo di 6,7 e danni pari al XI grado della scala Mercalli. Un secondo catastrofico evento si verificò il 2 febbraio e si stima che abbia avuto una magnitudo momento di 6.7. Causò devastazioni del X grado della scala Mercalli ed oltre 6 000 vittime. La città dell’Aquila fu rasa al suolo.<br>
                        Si tratta della più intensa tra le sequenze sismiche note agli storici ad aver interessato l'area aquilana nonché uno dei più grandi disastri sismici della storia italiana con circa 9700 vittime.

                    </div>
                    <div class="testo-paragrafo">
                        <h4><i>Terremoto della Maiella del 1706</i></h4><br>
                        E’ stato un evento sismico verificatosi il 3 novembre 1706. Si tratta di uno dei più disastrosi terremoti italiani e avvenne a soli 3 anni di distanza dal grande terremoto del 1703 che aveva colpito L'Aquila. L'epicentro è stato localizzato sul versante aquilano della Maiella, a circa 15 km ad est di Sulmona. La magnitudo stimata è stata 6,6.
                    </div>
                    <div class="testo-paragrafo">
                        <h4><i>Terremoto della Calabria del 1905</i></h4><br>
                        Fu un evento sismico che si verificò nella Calabria centrale tirrenica e devastò una vasta area tra Cosenza e Nicotera, durante la notte tra il 7 e l'8 settembre 1905 con epicentro non ben identificato.<br>
                        Il sisma ebbe una magnitudo di 7,06 (compresa tra 6,2 e 7,9 secondo vari autori) e un'intensità compresa tra il X e l'XI grado della Scala Mercalli. Provocò 557 vittime.
                    </div>
                    <div class="testo-paragrafo">
                        <h4><i>Terremoto di Reggio e Messina del 1783</i></h4><br>
                        Fu una serie di eventi sismici intensi verificatisi nell'area dello stretto di Messina e la Calabria meridionale.<br>
                        Lo sciame sismico culminò con 5 forti scosse tra il 5 febbraio e il 28 marzo, con magnitudo fino a 7,1 e comunque superiore a 5,9. Fu la più grande catastrofe che colpì l'Italia meridionale nel XVIII secolo. Rase al suolo Reggio e Messina, provocando intensi maremoti e decine di migliaia di morti (tra 30.000 e 50.000).
                    </div>
                </div>
                </div>
            </div>
        </div>
        
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
