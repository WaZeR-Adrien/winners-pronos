<div class="modal connexion">
    <div class="modal-c">
        <i class="fa fa-times fa-3x"></i>
        <div class="modal-c-header">
            <h1>Connectez-vous</h1>
        </div>
        <div class="modal-c-container">
            <form action="" method="post">
                Identifiant :
                <br>
                <input required type="text" name="identifiantC">
                <br>
                Mot de passe :
                <br>
                <input required type="password" name="mdpC">
                <br>
                <input type="submit" value="Se connecter">
            </form>
        </div>
        <div class="modal-c-footer">
            <h3>Pas encore inscrit ? <span class="open-modal-r">S'inscrire</span> !</h3>
        </div>
    </div>
</div>
<?php
if (!empty($_POST['identifiantC']) && !empty($_POST['mdpC'])){
    connexion($_POST['identifiantC'],$_POST['mdpC']);
}
?>


<div class="modal register">
    <div class="modal-r">
        <i class="fa fa-times fa-3x"></i>
        <div class="modal-r-header">
            <h1>Inscrivez-vous</h1>
        </div>
        <div class="modal-r-container">
            <form action="" method="post">
                Nom :
                <br>
                <input required type="text" name="nomR">
                <br>
                Prenom :
                <br>
                <input required type="text" name="prenomR">
                Identifiant :
                <br>
                <input required type="text" name="identifiantR">
                <br>
                Email :
                <br>
                <input required type="email" name="emailR">
                <br>
                Mot de passe :
                <br>
                <input required type="password" name="mdpR">
                <br>
                <input type="submit" value="S'inscrire">
            </form>
        </div>
        <div class="modal-r-footer">
            <h3>Déjà inscrit ? <span class="open-modal-c">Se connecter</span> !</h3>
        </div>
    </div>
</div>
<?php
if (!empty($_POST['nomR']) && !empty($_POST['prenomR']) && !empty($_POST['identifiantR']) && !empty($_POST['emailR']) && !empty($_POST['mdpR'])){
    $res = addUser($_POST['nomR'],$_POST['prenomR'],$_POST['emailR'],$_POST['identifiantR'],$_POST['mdpR']);

    if ($res == true) {
        redirect('/winners-pronos?r=success');
    } elseif ($res == false) {
        redirect('/winners-pronos?r=error');
    }
}
?>
