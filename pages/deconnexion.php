<?php
session_start();
include($_SERVER['DOCUMENT_ROOT'].'/winners-pronos/functions/functions.php');
unset($_SESSION['connexion']);
$_SESSION['nom'] = false;
$_SESSION['prenom'] = false;
$_SESSION['login'] = false;
$_SESSION['role'] = false;
redirect('/winners-pronos/');