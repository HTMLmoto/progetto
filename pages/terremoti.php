<?php
session_start();
include('../settings.php');
?>
<html>
    <head>
        <title>Terremoti</title>
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
                            <a class="dropdown-item active" href="terremoti.php">Informazioni sui terremoti</a>
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
                        <a class="nav-link" href="../posts.php">I nostri post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-azzurro" href="bambini.php">Per i piccoli</a>
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
                <h1>Terremoti</h1>
                <hr>
                <img src="../img/faglia.jpeg" class="img">
                <br><br>
                <div class="post_container">

                    <div>

                    <div class="titolo-paragrafo">
                        Cosa è
                    </div>
                    <div class="testo-paragrafo">
                        Terremoto significa letteralmente “movimento della terra”: è dunque uno scuotimento del terreno e può avere diverse origini ed entità.
                        Un terremoto può essere provocato, per esempio, da un’esplosione sotterranea e, in tal caso, i suoi effetti si registrano nelle immediate vicinanze dell’esplosione.
                        I terremoti più dannosi e, quindi, pericolosi sono quelli che si originano in profondità nella litosfera, a causa dell’improvviso rilascio di energia elastica. 
                        Tale energia è inizialmente immagazzinata nelle rocce, deformate dalle forti spinte tettoniche e viene liberata all’improvviso e in modo imprevedibile, quando due blocchi rocciosi scivolano l’uno rispetto all’altro. Da questo movimento hanno origine onde sismiche che raggiungono la superficie e si propagano su essa scuotendo il terreno al loro passaggio.
                        Tale scuotimento è, appunto, il terremoto e la sua intensità dipende dall’entità dell’energia liberata dalle rocce e dalla distanza dal punto di origine dell’onda sismica.

                    </div>
                    <div class="titolo-paragrafo">
                        Ipocentro
                    </div>
                    <div class="testo-paragrafo">
                        E’ la zona all’interno della Terra in cui si verifica la frattura delle rocce e quindi è il punto in cui ha origine il terremoto.
                    </div>
                    <div class="titolo-paragrafo">
                        Epicentro
                    </div>
                    <div class="testo-paragrafo">
                        E’ il punto della superficie terrestre situato precisamente sulla verticale passante per l’ipocentro, dove abbiamo le scosse di intensità maggiore.
                    </div>
                    <div class="titolo-paragrafo">
                        Le onde sismiche
                    </div>
                    <div class="testo-paragrafo">                             
                        Quando c'è un terremoto possiamo percepire dei movimenti che muovono la terra, questi movimenti sono chiamati "Onde Sismiche". Le onde sismiche sono un accumulo di energia che viene sprigionata mediante un terremoto e queste partono, infatti, dall'ipocentro per poi propagarsi in tutte le direzioni. Possiamo distinguere 2 tipi di onde:
                        <ol>
                            <li>Onde P(primarie), oppure Onde Longitudinali: sono onde che "comprimono" e "dilatano" la terra deformandone il volume; sono le più veloci e dunque le prime ad essere avvertite.</li>
                            <li>Onde S (secondarie), oppure Onde Trasversali: sono onde che si "dilatano" ma non deformano il volume; sono più lente delle onde P e sono quelle che causano più danni.</li>
                        </ol>
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
