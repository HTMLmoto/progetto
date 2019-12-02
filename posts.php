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
            <?php if (isset($_POST['titoloPost'])) {
                    $titolo = addslashes($_POST['titoloPost']);
                    $contenuto = addslashes($_POST['contenutoPost']);
                    /* esegui se compilato */
                    if (isset($_SESSION['id'])) {
                        $conn->query("insert into posts (titolo, contenuto, pubblico, idUser) values ('$titolo', '$contenuto', 1, ".$_SESSION['id'].")");
                    } else {
                        $conn->query("insert into posts (titolo, contenuto, pubblico, idUser) values ('$titolo', '$contenuto', 0, null)");
                        echo '<div class="alert alert-warning"><i class="fa fa-globe"></i> Il tuo post verra pubblicato dopo la revisione di un amministratore del sito.</div>';
                    }
                ?>
            <?php }
            if (isset($_GET['toggle']) && isset($_SESSION['id'])) {
                $risultato = $conn->query("select pubblico from posts where id = ".$_GET['toggle']);
                $visiblilita = mysqli_fetch_array($risultato)['pubblico'];
                if ($visibilita == '1') { // rendi pubblico
                    
                } else { // rendi privato
                    
                }
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
                        <form action="posts.php" method="post">
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
            <hr>
            <div class="posts">
                <h3 align="center" class="text-danger">Tutti i post</h3>
                <br>
                <?php
                    if (isset($_SESSION['id'])) {
                        $postsSql = $conn->query("SELECT * from posts left join utenti on posts.idUser = utenti.id where deleted = 0 order by posts.id desc");
                    } else {
                        $postsSql = $conn->query("SELECT * from posts inner join utenti on posts.idUser = utenti.id where deleted = 0 and pubblico = 1 order by posts.id desc");
                    }
                    while ($post = mysqli_fetch_array($postsSql)) { ?>
                        <?php if ($post['nickname'] == '') {
                            $post['nickname'] = 'un visitatore';
                        } ?>
                        <div class="alert alert-light text-dark shadow post" align="center">
                            <h3 class="text-dark"><?php echo $post['titolo']; ?></h3>
                            <small>Creato da <?php echo $post['nickname']; ?></small>
                            <hr>
                            <p><i class="fa fa-calendar"></i> <?php echo $post['data']; ?></p>
                            <p>
                                <?php echo $post['contenuto']; ?>
                            </p>
                            <div align="right"><?php if (isset($_SESSION['id'])) {
                                if ($post['pubblico'] == '1') { ?>
                                    <a href="?toggle=<?php echo $post['id']; ?>" class="btn btn-danger"><i class="fa fa-lock"></i> Rendi privato</a>
                                <?php } else { ?>
                                    <a href="?toggle=<?php echo $post['id']; ?>" class="btn btn-success"><i class="fa fa-globe"></i> Rendi pubblico</a>
                                <?php }
                            } ?></div>
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
