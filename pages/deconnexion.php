<?php
include($_SERVER['DOCUMENT_ROOT'].'/winners-pronos/functions/functions.php');
session_start();
if (isset($_SESSION['connexion'])) {
    unset($_SESSION['connexion']);
    $_SESSION['nom'] = false;
    $_SESSION['prenom'] = false;
    $_SESSION['login'] = false;
    $_SESSION['role'] = false;
    $url = parse_url($_SERVER['HTTP_REFERER']);
    $rUrl = $url['path'];
    redirect($rUrl);
} else {
    redirect('/winners-pronos/');
}