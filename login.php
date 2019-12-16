<?php
session_start();
if (isset($_SESSION['id'])) {
    header('location: index.php');
}
include('settings.php');
?>
<html>
    <head>
        <title>Titolo sito PON</title>
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
        <div class="container">
            <h1 class="text-danger" align="center"><br>
                <img src="img/logoITT.png" height="55" class="d-inline-block align-top" alt="">
                Login - ITT Terremoti
                </h1>
            <?php
                /* esegui se compilato */
                if (isset($_POST['nicknameInput'])) {
                    $nickname = $_POST['nicknameInput'];
                    $password = md5($_POST['passwordInput']);
                    $sql = $conn->query("select * from utenti where nickname = '$nickname' and password = '$password'");
                    if ($sql->num_rows > 0) {
                        // crea la sessione
                        $_SESSION['id'] = mysqli_fetch_array($sql)['id'];
                        header('location: posts.php');
                    } else {
                        session_destroy(); ?>
                        <div class="alert alert-danger"><i class="fa fa-ban"></i> Hai sbagliato la password o il nome utente</div>
                    <?php }
                }
            ?>
            <form action="login.php" method="post">
                <br>
                <i class="fa fa-envelope-open text-secondary fa-fw"></i> Il tuo nickname
                <input class="form-control" type="text" name="nicknameInput" placeholder="Il tuo nickname" required>
                <br>
                <i class="fa fa-lock text-secondary fa-fw"></i> Password
                <input class="form-control" type="password" name="passwordInput" placeholder="Inserisci password" required>
                <br>
                <button class="btn btn-danger"><i class="fa fa-sign-in"></i> Entra</button>
            </form>
        </div>
    </body>
</html>
