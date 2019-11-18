<html>
    <head>
        <title>Titolo sito PON</title>
        <script src="Libs/js/jquery-2.2.3.js"></script>
        <script src="Libs/js/popper.js"></script>
        <script src="Libs/js/bootstrap.js"></script>
        <link rel="stylesheet" href="Libs/css/css/font-awesome.css">
        <link rel="stylesheet" href="Libs/css/bootstrap.css">
        <link rel="stylesheet" href="Libs/graphics.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
    </head>
    <body>
        <div class="background"></div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <a class="navbar-brand" href="../">
                <img src="img/logoITT.png" width="30" height="30" class="d-inline-block align-top" alt="">
                ITT terremoti
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/terremoti.php">Terremoti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/zone.php">Zone</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/faqs.php">FAQs</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--1Tt37N1,T37r3M0_t1.108%-->
        <div align="center">
            <br>
            <div class="btn-group">
                <a href="live/terremoti.php" class="btn btn-danger"><i class="fa fa-play"></i> Live terremoti</a>
                <a href="live/faglie.php" class="btn btn-danger"><i class="fa fa-play"></i> Live faglie</a>
            </div>
            <br>
            <br>
        </div>
        <hr>
        <div class="container">
            <!-- post qui -->
            <div class="post" align="center">
                <h1>Titolo del post</h1>
                <hr>
                <p><i class="fa fa-calendar"></i> 11/09/2001 | <i class="fa fa-clock-o"></i> 07:00</p>
                <div class="post_container">
                    <img src="#" class="img">
                    <p class="post_testo">Dentro il post</p>
                </div>
            </div>
        </div>
        <br><br>
        <!-- footer -->
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
