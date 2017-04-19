<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/winners-pronos/class/class_connexion.php');
include($_SERVER['DOCUMENT_ROOT'].'/winners-pronos/functions/functions.php');
include($_SERVER['DOCUMENT_ROOT'].'/winners-pronos/functions/fct_login.php');
?>
<!DOCTYPE html>
<html>
    <head>
     	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/winners-pronos/css/style.css" />
        <link rel="stylesheet" type="text/css" href="/winners-pronos/css/toastr.min.css" />
        <link rel="stylesheet" type="text/css" href="/winners-pronos/css/font-awesome/css/font-awesome.css" />
        <!-- Scrips -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="/winners-pronos/js/toastr.js"></script>
        <script src="/winners-pronos/js/modal.js"></script>
		<title>Winner's Pronos</title>
    </head>
    <body>

    <noscript>
        <h1 style="text-align: center">JavaScript n'est pas activé !</h1>
        <p style="text-align: center">Certaines fonctionnalités du site risque de ne pas correctement fonctioner.</p>
    </noscript>

    <!-- Menu classique -->
    <div id="top" class="navbar">
        <ul class="menu">
            <?php if (isset($_SESSION['connexion'])){ ?>
                <li><a href="/winners-pronos/deconnexion">Déconnexion</a></li>
                <li><a href="#">Mon compte</a></li>
            <?php } ?>
            <?php if (!isset($_SESSION['connexion'])){ ?>
                <li class="open-modal-register"><a>Inscription</a></li>
                <li class="open-modal-connexion"><a>Connexion</a></li>
            <?php } ?>
            <li><a href="/winners-pronos/pronostics">Pronostics</a></li>
            <li><a href="/winners-pronos/">Accueil</a></li>
        </ul>
    </div>

    <a id="return-top" href="#top">
        <div class="return-top">
            <i class="fa fa-chevron-up"></i>
        </div>
    </a>

    <!-- Contenu de la page d'accueil -->
    <div class="container">

    </div>

    <?php
    include($_SERVER['DOCUMENT_ROOT'].'/winners-pronos/includes/modal.php');

    if (isset($_GET['r']) && $_GET['r'] == "success") {
        ?>
        <script type="text/javascript">
            var titleSuccess = 'Merci de votre inscription !';
            var msgSuccess = '';
            var options = {
                "closeButton": true,
                "progressBar": true,
                "timeOut": "5000",
                "positionClass": "toast-top-center",
            }
            toastr.success(msgSuccess, titleSuccess, options)
        </script>
        <?php
    } elseif (isset($_GET['r']) && $_GET['r'] == "error") {
        ?>
        <script type="text/javascript">
            var titleError = 'Erreur d\'inscription !';
            var msgError = 'Veuillez réessayer';
            var options = {
                "closeButton": true,
                "progressBar": true,
                "timeOut": "10000",
                "positionClass": "toast-top-center",
            }
            toastr.error(msgError, titleError, options)
        </script>
        <?php
    }
    ?>

    <footer class="footer">

    </footer>
    </body>
</html>