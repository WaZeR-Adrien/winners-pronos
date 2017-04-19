<?php
include($_SERVER['DOCUMENT_ROOT'].'/winners-pronos/class/class_connexion.php');
include($_SERVER['DOCUMENT_ROOT'].'/winners-pronos/functions/functions.php');
include($_SERVER['DOCUMENT_ROOT'].'/winners-pronos/functions/fct_login.php');
session_start();
date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fr_FR.utf8','fra');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/winners-pronos/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/winners-pronos/css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="/winners-pronos/css/font-awesome/css/font-awesome.css" />
    <!-- Scrips -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="/winners-pronos/js/toastr.js"></script>
    <script src="/winners-pronos/js/modal.js"></script>
    <script src="/winners-pronos/js/pronos.js"></script>
    <title><?php echo $page_title; ?> - Winner's Pronos</title>
</head>
<body>