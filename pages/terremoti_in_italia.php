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
        <script></script>
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
                <h1>Terremoti in Italia</h1>
                <hr>
                <div class="post_container">



                    <div class="testo-paragrafo">


                        <div class="row element-style">
                          <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8"><h4><i>Terremoto dell'Italia centro-meridionale del 5 dicembre 1456:</i></h4><br>
                         Il sisma è documentato da fonti storiche che permettono di stimare una magnitudo di 7.1. Viene spesso considerato come il terremoto più forte registrato in Italia durante il II millennio, per l’estensione del territorio colpito (gran parte del Centro e Sud Italia) e la gravità dei danni subiti. A Napoli ci furono crolli e onde anomale nel porto, nel golfo di Taranto ci fu un vero e proprio maremoto che investì la costa ionica pugliese. Si stima che l’epicentro del sisma fosse situato nell’area dell’Irpinia-Sannio. Il numero di vittime stimato è compreso tra 20.000 e 30.000. La scossa principale fu seguita da scosse secondarie e furono devastati vasti territori nelle regioni Abruzzo, Molise, Campania, Puglia e Basilicata.

                          </div>
                          <div class="co-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                            <img src="../img/terremoto1456.jpg" class"img" width="100%">
                          </div>


                        </div>
                        <div class="style-hr">
                        <hr>
                        </div>



                      <div class="row element-style">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                          <img src="../img/terremoto1638.jpg" class"img" width="100%">
                        </div>
                          <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <h4><i>Terremoto della Calabria del 27 marzo 1638.</i></h4><br>
                         Dalle fonti storiche apprendiamo che nei giorni 27 (sabato, antivigilia delle Palme) e 28 marzo (domenica delle Palme) del 1638, una sequenza sismica catastrofica colpì una vasta area della Calabria. In seguito a 3 grandi scosse di magnitudo stimata compresa tra 6,6, e 6,8, furono distrutti 100 villaggi e morirono tra le 10.000 e le 30.000 persone.
                       </div>
                     </div>
                        <div class="style-hr">
                            <hr>
                        </div>

                      <div class="row element-style">
                        <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <h4><i>Terremoto del Sannio del 1688.</i></h4><br>
                         Si è verificato il 5 giugno, la vigilia della Pentecoste,  ed ha ha provocato ingenti danni ai territori compresi nell'attuale provincia di Benevento e in alcuni
                        settori delle province confinanti. La scossa principale, preceduta da una serie di scosse molto lievi, è stimata tra il X e l'XI grado della scala Mercalli, con una magnitudo di 7,0. L'epicentro è stimato nella zona "Benevento-Cerreto Sannita" in un vasto territorio di forma ellittica. Il territorio colpito dal sisma subì gravissimi danni, come centri abitati rasi al suolo e migliaia di vittime. Il terremoto fu avvertito anche a Napoli dove provocò diversi danni agli edifici civili e religiosi. Le vittime furono circa 10.000.
                         </div>
                    <div class="co-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                      <img src="../img/terremoto1688.jpg" class"img" width="100%">
                    </div>
                  </div>
                        <div class="style-hr">
                        <hr>
                        </div>
                  <div class="row element-style">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <img src="../img/terremoto1693.jpg" class"img" width="100%">
                    </div>
                    <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <h4><i>Terremoto del Val di Noto del 9 e dell'11 gennaio 1693.</i></h4><br>
                        Terremoto del Val di Noto del 9 e dell'11 gennaio 1693. Insieme ai terremoti del 1169 e del 1908, è considerato l'evento catastrofico di maggiori dimensioni che abbia colpito la Sicilia in tempi storici e terremoto più forte mai registrato nell'intero territorio italiano, con una magnitudo stimata di 7,3.
                        L'evento sismico provocò la distruzione totale di oltre 45 centri abitati, interessando con effetti pari o superiori al XI grado della scala Mercalli una superficie di circa 5600 km2, causando un numero complessivo di oltre 60.000 vittime. Seguì un maremoto che colpì le coste ioniche della Sicilia e lo Stretto di Messina e, probabilmente, secondo alcune simulazioni, interessò anche le Isole Eolie.
                    </div>
                  </div>
                        <div class="style-hr">
                        <hr>
                        </div>
                    <div class="row element-style">
                      <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <h4><i>Terremoto dell'Aquila del 1703.</i></h4><br>
                         E’ passato alla storia anche come il Grande Terremoto. E’ stato un insieme di eventi sismici localizzati in Abruzzo. La prima grande scossa si verificò nella zona di Cascia, Leonessa, Montereale, Norcia  il 14 gennaio, con una magnitudo di 6,7 e danni pari al XI grado della scala Mercalli. Un secondo catastrofico evento si verificò il 2 febbraio e si stima che abbia avuto una magnitudo momento di 6.7. Causò devastazioni del X grado della scala Mercalli ed oltre 6 000 vittime. La città dell’Aquila fu rasa al suolo.
                        Si tratta della più intensa tra le sequenze sismiche note agli storici ad aver interessato l'area aquilana nonché uno dei più grandi disastri sismici della storia italiana con circa 9700 vittime.
                      </div>
                      <div class="co-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <img src="../img/terremoto1703.jpg" class"img" width="100%">
                      </div>
                    </div>
                        <div class="style-hr">
                        <hr>
                        </div>
                    <div class="row element-style">
                      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <img src="../img/terremoto1706.jpg" class"img" width="100%">
                      </div>
                        <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <h4><i>Terremoto della Maiella del 1706.</i></h4><br>
                         E’ stato un evento sismico verificatosi il 3 novembre 1706.
                         Si tratta di uno dei più disastrosi terremoti italiani e avvenne a soli 3 anni di distanza dal grande terremoto del 1703 che aveva colpito L'Aquila.
                         L'epicentro è stato localizzato sul versante aquilano della Maiella, a circa 15 km ad est di Sulmona. La magnitudo stimata è stata 6,6.
                       </div>
                     </div>
                        <div class="style-hr">
                        <hr>
                        </div>
                        <div class="row element-style">
                        <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <h4><i>Terremoto di Reggio e Messina del 1783.</i></h4><br>
                          Fu una serie di eventi sismici intensi verificatisi nell'area dello stretto di Messina e la Calabria meridionale.
                           Lo sciame sismico culminò con 5 forti scosse tra il 5 febbraio e il 28 marzo, con magnitudo fino a 7,1 e comunque superiore a 5,9.
                           Fu la più grande catastrofe che colpì l'Italia meridionale nel XVIII secolo. Rase al suolo Reggio e Messina, provocando intensi maremoti
                           e decine di migliaia di morti (tra 30 000 e 50 000).
                         </div>
                            <div class="co-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <img src="../img/terremoto1783.jpg" class"img" width="100%">
                            </div>
                        </div>
                        
                        <div class="style-hr">
                        <hr>
                        </div>
                    
                    
                    <div class="row element-style">
                      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <img src="../img/terremoto1857.jpg" class"img" width="100%">
                      </div>
                        <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <h4><i>  Terremoto della Basilicata del 1857.</i></h4><br>
                         Fu un sisma che si verificò il 16 dicembre 1857 in Basilicata e in altre aree del sud Italia. Ebbe l’epicentro a Montemurro, dove morirono tra 3000 e 4000 persone su 7500 abitanti. L’intensità del terremoto è dell’ix grado della scala Mercalli, con una magnitudo stimata di 7,1. Complessivamente si stimano 11.000 vittime. Esistono fotografie delle rovine dei comuni maggiormente colpiti dal sisma, scattate da Alphonse Bernoud, fotografo della corte dei Borbone e successivamente di Casa Savoia. A
                     </div>
                        <div class="style-hr">
                            <hr>
                        </div>
                    </div>
                    <div class="row element-style">
                        <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <h4><i>Terremoto della Calabria del 1905.</i></h4><br>
                         Fu un evento sismico che si verificò nella Calabria centrale tirrenica e devastò una vasta area tra Cosenza e Nicotera, durante la notte tra il 7 e l'8 settembre 1905 con epicentro non ben identificato.
                        Il sisma ebbe una magnitudo di 7,06 (compresa tra 6,2 e 7,9 secondo vari autori) e un'intensità compresa tra il X e l'XI grado della Scala Mercalli. Provocò 557 vittime.
                        </div>
                        <div class="co-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <img src="../img/terremoto1905.jpg" class"img" width="100%">
                            </div>
                        </div>
                        <div class="style-hr">                  
                            <hr>
                        </div>
                    
                   <div class="row element-style">
                      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <img src="../img/terremoto1908.jpg" class"img" width="100%">
                      </div>
                     <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <h4><i>Terremoto di Messina del 1908.</i></h4><br>
                         Considerato uno degli eventi sismici più catastrofici del XX secolo, il terremoto di Messina si verificò alle ore 5:20:27 (ora locale) del 28 dicembre 1908 con una magnitudo di 7,2. Il sisma provocò un maremoto (probabilmente in seguito a una frana sottomarina) che devastò particolarmente Messina, causando il crollo del 90% degli edifici. Nell’arco di 37 secondi furono danneggiate gravemente le città di Messina e Reggio Calabria. Morirono la metà degli abitanti di Messina e un terzo degli abitanti di Reggio. Metà degli abitanti della città siciliana e un terzo di quella della città calabrese persero la vita.
                        Si tratta della più grave catastrofe naturale in Europa per numero di vittime, a memoria d'uomo, e del disastro naturale di maggiori dimensioni che abbia colpito il territorio italiano in tempi storici.
                        Il numero di vittime è impressionante: tra le 90.000 e le 120.000.
                        (non scrivete questo: ci sono moltissimi documenti fotografici e articoli di giornale su questo sisma, quindi potete aggiungere quello che volete)
                       </div>
                    </div>
                        <div class="style-hr">
                        <hr>
                        </div>
                    
                   <div class="row element-style">
                        <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                        <h4><i>Terremoto della Marsica del 1915.</i></h4><br>
                        Terremoto della Marsica del 1915. Noto anche come terremoto di Avezzano, fu un drammatico evento sismico avvenuto il 13 gennaio 1915, che colpì l'intera area della Marsica in Abruzzo e della valle del Liri nel Lazio causando, secondo i dati del servizio sismico nazionale, oltre 30.000 morti.
                        La scossa principale fu improvvisa e non fu preceduta da alcun evento premonitore. La sua intensità fu pari all'XI grado della scala Mercalli, con una magnitudo stimata di 7,0. L'epicentro fu localizzato nella conca del Fucino in Abruzzo, ma l'ondata sismica colpì anche altre zone dell'Italia centrale come il Lazio e le Marche e parte della Campania, con effetti pari o superiori al VII grado della scala Mercalli. Nei mesi successivi si registrarono circa 1.000 scosse sismiche. Avezzano fu rasa al suolo e morirono 10.700 persone su un totale di circa 13.000 abitanti.
                       </div>
                       <div class="co-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <img src="../img/terremoto1915.jpg" class"img" width="100%">
                            </div>
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
