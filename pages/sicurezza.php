<?php
session_start();
?>
<html>

<head>
    <title>Sicurezza</title>
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
                            <a class="dropdown-item" href="terremoti.php">Definizioni sui terremoti</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="terremoti_in_italia.php">In Italia</a>
                            <a class="dropdown-item" href="terremoti_nel_mondo.php">Nel mondo</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="sicurezza.php">Sicurezza</a>
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
            <h1>Sicurezza</h1>
            <hr>
        </div>
        <img src="../img/sicurezza.gif" class="img">
        <br><br>
        <h2>Sicurezza a casa</h2>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c1" aria-expanded="true" aria-controls="c1">
                          Cosa è un piano di emergenza familiare?
                        </button>
                    </h2>
                </div>
                <div id="c1" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body testo-paragrafo">
                      Un piano di emergenza familiare consiste nel:
                      <br>
                      1. Individuare e mostrare a ogni componente della famiglia i punti sicuri in ogni stanza
                      dove ripararsi in caso di terremoto: pilastri, architravi, muri portanti, sotto mobili
                      robusti come il tavolo, il letto
                      <br>
                      2. insegnare a ogni componente della famiglia dove sono e come si chiudono i rubinetti
                      del gas, dell’acqua e l’interruttore della corrente
                      <br>
                      3. assegnare a ciascun componente familiare compiti precisi in caso di evacuazione improvvisa
                      <br>
                      4. preparare un kit di emergenza accessibile a tutti gli abitanti della casa e sempre a
                      portata di mano
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c2" aria-expanded="true" aria-controls="c2">
                          Cosa deve contenere un kit di emergenza?

                        </button>
                    </h2>
                </div>
                <div id="c2" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body testo-paragrafo">
                      Un kit di emergenza deve contenere:
                      <br>
                      1. Dati anagrafici, numeri telefonici, gruppo sanguigno, eventuali patologie o allergie di
                      tutti i componenti della famiglia
                      <br>
                      2. torcia elettrica a batterie con pile di ricambio (o torcia a dinamo)
                      <br>
                      3. radio portatile (con pile di ricambio)
                      <br>
                      4. medicinali indispensabili per i membri della famiglia che ne necessitano (controllando
                      la scadenza periodicamente)
                      <br>
                      5. alimenti non deperibili quali: barrette energetiche, frutta disidratata e simili, alcune
                      bottiglie di acqua minerale
                      <br>
                      6. fotocopia dei documenti d’identità di tutti i componenti familiari
                      <br>
                      7. protesi o occhiali (anche una vecchia versione)

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c3" aria-expanded="true" aria-controls="c3">
                          Cosa portare fuori casa dopo una scossa sismica?



                        </button>
                    </h2>
                </div>
                <div id="c3" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body testo-paragrafo">
                      Dopo la scossa, occorre verificare lo stato di salute dei propri familiari, indossare le scarpe,
                      prendere cappotto o coperte per proteggersi dai detriti e dal freddo, prendere il kit di emergenza
                      e le cose di stretta utilità quali le chiavi della macchina, i documenti, il portafogli, il cellulare, ecc.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c4" aria-expanded="true" aria-controls="c4">
                            Cosa fare dopo una scossa sismica?
                        </button>
                    </h2>
                </div>
                <div id="c4" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body testo-paragrafo">
                      1. Con la massima calma possibile, uscire dall’abitazione o dall’edificio in cui ci si trova e non
                      farsi vincere dalla tentazione di tornare a casa a prendere qualcos’altro. Può accadere che le
                      scosse successive causino il cedimento parziale o totale di strutture che sono state indebolite
                      dalla prima o dalle primissime scosse, anche a distanza di diverse ore dall’evento principale.
                      <br>
                      2. segnalare ai soccorritori solo i casi che hanno particolare urgenza, contribuire al rapido di-
                      spiegarsi dei soccorsi non intralciandoli, mettere a disposizione dei responsabili dei soccorsi

                      le proprie competenze e specializzazioni
                      <br>
                      3. accendere la radiolina a batteria e sintonizzarsi, in particolare, sulle frequenze locali, per ot-
                      tenere le prime informazioni e mantenersi aggiornati sullo sviluppo dell’evento sismico, sugli

                      eventuali danni e direttive formulate dalle Autorità.

                    </div>
                </div>
            </div>



          </div>
          <h2>Sicurezza a scuola</h2>
          <div class="accordion" id="accordionExample">
              <div class="card">
                  <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c5" aria-expanded="true" aria-controls="c5">
                            Che cos'è il documento di valutazione dei rischi a scuola?
                          </button>
                      </h2>
                  </div>
                  <div id="c5" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body testo-paragrafo">
                        Il documento di valutazione dei rischi deve essere predisposto in ogni istituto ad opera del dirigente scolastico in collaborazione con
                          il responsabile del servizio di prevenzione e protezione con il medico competente.
                      </div>
                  </div>
              </div>

              <div class="card">
                  <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c6" aria-expanded="true" aria-controls="c6">
                              Cos'è un piano di emergenza in una scuola?
                          </button>
                      </h2>
                  </div>
                  <div id="c6" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body testo-paragrafo">
                        Il piano di emergenza è contenuto nel documento  di valutazione dei rischi ed è uno strumento
                        operativo che deve essere predisposto in ogni scuola ad opera del Dirigente Scolastico.È obbligatorio  e ha lo scopo di informare tutto il personale docente e
                        non docente e gli studenti, sul comportamento da tenere nel caso di un allontanamento
                        rapido dall’edificio scolastico.

                      </div>
                  </div>
              </div>

              <div class="card">
                  <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c7" aria-expanded="true" aria-controls="c7">
                              Le prove di evaquazione: quante all'anno e con quali modalità e tempi vanno effettuate?


                          </button>
                      </h2>
                  </div>
                  <div id="c7" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body testo-paragrafo">
                        Il piano di emergenza definisce i compiti da svolgere in funzione delle varie ipotesi diemergenza. Nel corso delle prove di evacuazione,
                        “da effettuare almeno due volte durante l’anno scolastico” , deve essere verificata la “funzionalità del piano alfine di apportare gli
                        eventuali correttivi per far aderire il piano alla specifica realtà alla quale si applica”.

                      </div>
                  </div>
              </div>

              <div class="card">
                  <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c8" aria-expanded="true" aria-controls="c8">
                              Di chi è la competenza in materia di manutenzione e messa in sicurezza delle scuole?
                          </button>
                      </h2>
                  </div>
                  <div id="c8" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body testo-paragrafo">

                        La competenza degli interventi di manutenzione straordinaria ed ordinaria in materia di edilizia scolastica è dell’ente locale, proprietario degli immobili. Costituiscono precisi
                        obblighi di legge per i Comuni e per le Province non solo i lavori edilizi di una certa importanza, gli interventi strutturali e gli adeguamenti degli impianti elettrici, termici, ecc.ma anche la manutenzione ordinaria, nonché la fornitura delle varie certificazioni di idoneità, agibilità e conformità. Se vi sono ritardi, carenze, inadempienze nello stato degli edifici scolastici e delle strutture la responsabilità primaria è dell’ente locale, così come spetta all’amministrazione locale mettere a norma di sicurezza gli edifici. L’ente locale competente è il Comune, per le scuole d’Infanzia, Primarie e Secondarie
                        di Primo grado mentre è la Provincia per le Scuole Secondarie di Secondo grado e gli Istituti Artistici.


                      </div>
                  </div>
              </div>

              <div class="card">
                  <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                          <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#c9" aria-expanded="true" aria-controls="c9">
                            In base a quale legge di può richiedere di prenderte visione della documentazione relativa alla sicurezza dell'edificio scolastico?
                          </button>
                      </h2>
                  </div>
                  <div id="c9" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body testo-paragrafo">
                        Il diritto di accesso ai documenti amministrativi (Legge n. 241 del 1990 e
                        sucessive modifiche) è un diritto riconosciuto al cittadino in funzione dei rapporti con lo Stato e la Pubblica amministrazione, al fine, in particolare di garantire la trasparenza di quest’ultima. Titolari del diritto di accesso sono tutti i soggetti interessati, e cioè i privati, anche portatori di interessi diffusi che abbiano un interesse diretto, concreto e attuale
                        corrispondente ad una situazione giuridica tutelata e connessa al documento in relazione al quale si richiede l’accesso. È su questa base, dunque che genitori, insegnanti, studenti maggiorenni, personale non docente possono fare richiesta e prendere
                        visione di tutta la documentazione relativa alla sicurezza dell’edificio scolastico.

                      </div>
                  </div>
              </div>

            </div>
            <br>

              <a class="btn btn-danger" target="_blank" href="http://www.protezionecivile.gov.it/delegate/JapsPdfResource?pdfName=TerraTrema_vademecum09.pdf">Link fonti</a>
      </div>

    <br>

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
