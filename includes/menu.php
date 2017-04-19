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

<div class="navbar-fixed">
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