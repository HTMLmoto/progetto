<?php
session_start();
include('../settings.php');
?>
<html>
    <head>
        <title>FAQs</title>
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
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                            Terremoti
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="terremoti.php">Informazioni sui terremoti</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="terremoti_in_italia.php">In Italia</a>
                            <a class="dropdown-item" href="terremoti_nel_mondo.php">Nel mondo</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sicurezza.php">Sicurezza</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="faqs.php">FAQs</a>
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
            <div class="post" align="center">
                <h1>FAQs</h1>
                <hr>
            </div>
            <img src="..\img\logo_faq_terremoti.jpg" class="img">
            <br><br>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c1" aria-expanded="true" aria-controls="c1">
                                Che cos’è un terremoto?
                            </button>
                        </h2>
                    </div>
                    <div id="c1" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                             Il terremoto o sisma, è una serie di rapide oscillazioni del terreno causate da una brusca liberazione di energia elastica da una zona del sottosuolo definito ipocentro.
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c2" aria-expanded="true" aria-controls="c2">
                                Come avviene un terremoto?
                            </button>
                        </h2>
                    </div>
                    <div id="c2" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            La crosta terrestre, grazie alle forze endogene della terra, si deforma e acquista energia elastica. Quando l’energia elastica supera la resistenza della roccia, questa può rompersi in modo improvviso.
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c3" aria-expanded="true" aria-controls="c3">
                                Che cosa è la teoria del rimbalzo elastico?
                               
                            
                            </button>
                        </h2>
                    </div>
                    <div id="c3" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            La spiegazione delle reali cause dei terremoti è stata data nel 1906 dal sismologo americano Harry Fielding Reid che ha formulato la teoria del rimbalzo elastico.
                            Questa teoria si basa sulla definizione di comportamento plastico o elastico dei corpi:
                            <ul>
                                <li>Comportamento plastico: un corpo, sottoposto all'azione di una forza, subisce una deformazione permanente che si mantiene anche quando la forza cessa di agire.</li>
                                <li>Comportamento elastico: un corpo, sottoposto all'azione di una forza, subisce una deformazione non permanente; infatti il corpo, al cessare della forza, recupera la propria forma originale. Tuttavia, se la forza aumenta sempre di più, il corpo giungerà ad un punto critico estremo che porterà alla rottura e alla propagazione dell'energia accumulata, stabilendo un nuovo equilibrio.</li>
                            </ul>

                             Secondo Reid, prendendo come spunto il devastante terremoto a San Francisco del 1906, le rocce della crosta terrestre nei pressi delle faglie presentano un comportamento elastico. Le rocce, infatti, si deformano lentamente a causa del movimento delle placche e contemporaneamente accumulano energia elastica.

                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c4" aria-expanded="true" aria-controls="c4">
                                Quanto dura un terremoto?
                            </button>
                        </h2>
                    </div>
                    <div id="c4" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">

                            Le varie ricerche statistiche hanno confermato che la durata di un terremoto va dai
                            pochi secondi a poco più di un minuto.

                            Le varie ricerche statistiche hanno confermato che la durata di un terremoto va dai pochi secondi a poco più di un minuto.

                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c5" aria-expanded="true" aria-controls="c5">
                                Quali sono le aree al mondo più colpite dai terremoti?
                            </button>
                        </h2>
                    </div>
                    <div id="c5" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            Le aree del mondo più colpite dai terremoti sono: la Cina, il Giappone, l’America e la Nuova Zelanda.
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c6" aria-expanded="true" aria-controls="c6">
                                Quali sono le aree in Italia più colpite dai terremoti?
                            </button>
                        </h2>
                    </div>
                    <div id="c6" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                           Le zone a maggior rischio terremoto sono situate nelle Alpi orientali e nell'Appennino centro-meridionale. Friuli, Umbria, Abruzzo, Molise, Campania, Basilicata, Calabria e Sicilia le regioni che contengono le porzioni più ampie di zone ad alta criticità
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c7" aria-expanded="true" aria-controls="c7">
                                Che cosa è la pericolosità sismica?
                            </button>
                        </h2>
                    </div>
                    <div id="c7" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            La pericolosità sismica è lo scuotimento del suolo atteso in una regione causa di un terremoto.
                        </div>
                    </div>
                </div>
                    
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c8" aria-expanded="true" aria-controls="c8">
                                Che cosa è una faglia? 
                            </button>
                        </h2>
                    </div>
                    <div id="c8" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            Frattura di masse rocciose accompagnata da spostamento di una delle parti lungo il piano di frattura.
                        </div>
                    </div>
                </div>
                    
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c9" aria-expanded="true" aria-controls="c9">
                                Che relazione c’è tra le faglie e i terremoti? 
                            </button>
                        </h2>
                    </div>
                    <div id="c9" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            I terremoti si verificano su spaccature della crosta terrestre, in particolare sulle faglie sismiche, dove si accumula lo stress meccanico indotto dai movimenti tettonici.
                        </div>
                    </div>
                </div>
                    
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c10" aria-expanded="true" aria-controls="c10">
                                Come si spiega la distribuzione dei terremoti?
                            </button>
                        </h2>
                    </div>
                    <div id="c10" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            I terremoti non sono distribuiti in misura uniforme sulla superficie terrestre, ma si manifestano quasi esclusivamente in alcune fasce del pianeta dette sismicamente attive, mentre sono assenti in altre fasce, dette asismiche. Circa l'80% dei terremoti si verifica in corrispondenza della Cintura di Fuoco circumpacifica ed è legata al fenomeno della subduzione (l'immersione di una placca al di sotto di un'altra). Poco meno del 20% dei terremoti è localizzato lungo le catene montuose di origine recente, in corrispondenza del sistema montuoso che si estende dalle Alpi fino all'Himalaya: l'origine dei sismi è in questo caso legata allo scontro tra placche continentali. Infine, una sismicità significativa, anche se non intensa, si manifesta in corrispondenza delle dorsali oceaniche e della fossa tettonica dell'Africa orientale: legati ai movimenti di divergenza tra le placche, i terremoti hanno in questo caso ipocentri superficiali.
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c11" aria-expanded="true" aria-controls="c11">
                                Come è fatto l’interno della Terra, quali stati di aggregazione della materia troviamo?
                            </button>
                        </h2>
                    </div>
                    <div id="c11" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            La Terra, al suo interno, è formata da una serie di gusci concentrici, ognuno dei quali è composto da materiali di varia densità. Gli strati di cui si compone il pianeta sono tre:
                            <ul>
                            <li>la crosta terrestre;</li>
                            <li>il mantello;</li>
                            <li>il nucleo.</li>
                            </ul>
                            La crosta terrestre è la parte più esterna del pianeta. Le rocce che la compongono sono formate da silicati leggeri che contengono, oltre al silicio e all'ossigeno, l'alluminio che è un metallo leggero.
                            Il mantello è lo strato centrale del globo, compreso tra la crosta terrestre e il nucleo. E’ formato da silicati pesanti che contengono, oltre al silicio e all'ossigeno, il ferro e il magnesio.
                            Il mantello risulta diviso in tre parti:
                            <ul>
                            <li>il mantello rigido o mantello superiore, nel quale le rocce risultano essere rigide;</li>
                            <li>il mantello semifluido o astenosfera (dal greco sfera debole), uno strato spesso nel quale le rocce sono parzialmente fuse e relativamente fluide.</li>
                            <li>il mantello solido o mantello inferiore, nel quale le rocce tornano ad essere solide.</li>
                            </ul>
                            Il mantello superiore e la crosta terrestre formano la litosfera (dal greco pietra), uno strato rigido spesso fino a 200 km. La litosfera non forma un unico blocco, ma è formata da tante placche ognuna indipendente dalle altre. Il nucleo è la parte più interna del pianeta. E' una sfera il cui diametro misura circa 7.000 km. E' formato prevalentemente da Ferro e Nichel, che sono dei metalli pesanti. Qui la temperatura è molto elevata e supera i 6.000° C.
                            Il nucleo si divide in due parti:
                            <ul>
                            <li>il nucleo esterno, formato da materiali allo stato liquido, proprio per le temperature molto elevate;</li>
                            <li>il nucleo interno, formato da materiale allo stato solido, a causa delle enormi pressioni a cui è sottoposto.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c12" aria-expanded="true" aria-controls="c12">
                                Quale è la composizione chimica dei materiali della litosfera?
                            </button>
                        </h2>
                    </div>
                    <div id="c12" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            Nella litosfera troviamo ossigeno (O) e  silicio (Si), poi  il ferro (Fe). Diminuisce il magnesio (Mg) ed aumenta l’alluminio (Al); questa sfera è indicata con il termine sia (dai simboli chimici Si ed Al).
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c13" aria-expanded="true" aria-controls="c13">
                                Che cosa è l’epicentro di un terremoto?
                            </button>
                        </h2>
                    </div>
                    <div id="c13" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            E’ il punto della superficie terrestre che si trova sulla verticale dell’ipocentro di un terremoto che viene colpito per primo e più intensamente
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c14" aria-expanded="true" aria-controls="c14">
                                Che cosa è l’ipocentro di un terremoto?
                            </button>
                        </h2>
                    </div>
                    <div id="c14" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            E’ il punto, situato in profondità all’interno della Terra, in cui avviene la rottura della faglia che genera il terremoto.
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c15" aria-expanded="true" aria-controls="c15">
                                Che cosa sono le onde sismiche?
                            </button>
                        </h2>
                    </div>
                    <div id="c15" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            Sono onde che si propagano attraverso la terra generate da un terremoto.
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c16" aria-expanded="true" aria-controls="c16">
                                In che modo l’energia liberata in un terremoto si propaga all’interno della  Terra a partire dall’ipocentro?
                            </button>
                        </h2>
                    </div>
                    <div id="c16" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            Dall'ipocentro si propagano differenti tipi di onde che attraversando materiali diversi all'interno della terra vanno incontro  a fenomeni di rifrazione e riflessione.
                            All'epicentro arriva un groviglio di onde con frequenze e velocità diverse (Onde di Volume):
                            <ul>
                            <li>ONDE LONGITUDINALI (onde P, di compressione), sono le più  veloci (4-8km/s) e per questo sono dette onde prime, si propagano in ogni mezzo e la roccia subisce rapide contrazioni e dilatazioni;</li>
                            <li>ONDE TRASVERSALI (onde S, di taglio), sono meno veloci (sono dette secondarie, 2-6 km/s) e non si propagano nei fluidi.  La roccia oscilla perpendicolarmente alla direzione di propagazione e subisce deformazioni di forma e non di volume.</li>
                            <li>Quando le onde interne raggiungono la superficie si trasformano in onde superficiali e si propagano dall’epicentro lungo la superficie terrestre.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c17" aria-expanded="true" aria-controls="c17">
                                Quanti tipi di onde sismiche esistono?
                            </button>
                        </h2>
                    </div>
                    <div id="c17" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            Le onde sismiche si dividono in:
                            <ul>
                            <li>Onde di volume (che si propagano all'interno della Terra): onde P, onde S.</li>
                            <li>Onde superficiali: onde di Rayleigh, onde di Love</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c18" aria-expanded="true" aria-controls="c18">
                                Quale strumento registra le onde sismiche?
                            </button>
                        </h2>
                    </div>
                    <div id="c18" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            Il sismografo è lo strumento che registra le onde sismiche mentre il sismometro è lo strumento che effettua la misura di esse.
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c19" aria-expanded="true" aria-controls="c19">
                                Che cosa è un sismogramma?
                            </button>
                        </h2>
                    </div>
                    <div id="c19" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            Un grafico risultante dalle registrazioni fatte da un sismografo che può riportare lo spostamento, la velocità e l’accelerazione del suolo in funzione del tempo.
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c20" aria-expanded="true" aria-controls="c20">
                                Quali grandezze relative a un terremoto possiamo misurare?
                            </button>
                        </h2>
                    </div>
                    <div id="c20" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            Possiamo misurare l’intensità e successivamente la magnitudo di un terremoto.
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c21" aria-expanded="true" aria-controls="c21">
                                Come si determina l’epicentro di un terremoto?
                            </button>
                        </h2>
                    </div>
                    <div id="c21" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            Con un sismografo si può misurare la distanza sismografo-epicentro mentre con almeno tre sismogrammi si può localizzare perfettamente l’epicentro.
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c22" aria-expanded="true" aria-controls="c22">
                                Che cosa è la scala Mercalli?
                            </button>
                        </h2>
                    </div>
                    <div id="c22" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            La scala Mercalli è una scala di valutazione dell'intensità di un terremoto eseguita osservando gli effetti che esso produce sulla superficie terrestre su persone, cose e manufatti.
                        </div>
                    </div>
                </div>
                
                 <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c23" aria-expanded="true" aria-controls="c23">
                                Che cosa è la scala Richter?
                            </button>
                        </h2>
                    </div>
                    <div id="c23" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            La scala Richter é stata ideata dal geofisico statunitense Charles Richter e misura la magnitudo dei terremoti, cioè l’energia meccanica sprigionata dal loro ipocentro, basandosi sull’ampiezza delle onde sismiche registrate attraverso i sismografi.
                        </div>
                    </div>
                </div>
                
                 <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c24" aria-expanded="true" aria-controls="c24">
                                Che cosa si deve fare durante un terremoto se ci si trova all’aperto?
                            </button>
                        </h2>
                    </div>
                    <div id="c24" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            Se ci si trova all’aperto bisogna allontanarsi da costruzioni e linee elettriche, rimanere lontano da impianti industriali, cavalcavia, alberi, dai bordi dei laghi e dalle spiagge marine, evitare di andare in giro a curiosare e raggiungere le aree di attesa individuate dal piano di emergenza comunale. È necessario inoltre lasciare le linee telefoniche e le strade libere per non intralciare i soccorsi.
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c25" aria-expanded="true" aria-controls="c25">
                                Che cosa si deve fare durante un terremoto se ci si trova al chiuso?
                            </button>
                        </h2>
                    </div>
                    <div id="c25" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body testo-paragrafo">
                            Se ci si trova al chiuso bisogna cercare riparo nel vano di una porta inserita in un muro portante (quelli più spessi) o sotto una trave, ripararsi sotto un tavolo, non precipitarsi verso le scale e non usare l’ascensore.
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
        <br>
        <div class="row bg-dark text-light footer">
            <div class="col-md-6 martop">
                <h4>Creato con <i style="transform: scale(2); margin: 0 10;" class="fa fa-heart text-danger"></i> dagli <span class="pop link-danger" data-toggle="popover">studenti</span> dell'<a class="link-danger" target="_blank" href="http://www.ittterni.gov.it">ITT Terni</a>.</h4>
            </div>
            <div class="col-md-6">
                <img id="pon" src="../img/logo_pon.png" width="100%" height="200">
            </div>
        </div>
    </body>
</html>
