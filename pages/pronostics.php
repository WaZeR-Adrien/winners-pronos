<?php
$page_title = 'Pronostics';
include($_SERVER['DOCUMENT_ROOT'].'/winners-pronos/includes/header.php');
include($_SERVER['DOCUMENT_ROOT'].'/winners-pronos/includes/menu.php');
include($_SERVER['DOCUMENT_ROOT'].'/winners-pronos/functions/fct_pronos.php');
?>
<div class="header-page">
    Les pronostics
    <?php if(isset($_SESSION['connexion']) && $_SESSION['role']==1):?>
        <i id="add-prono" class="fa fa-plus"></i>
    <?php endif; ?>
</div>
<?php
if (isset($_SESSION['connexion']) && $_SESSION['role']==1) {
    if (isset($_POST['ajoutProno'])) {
        addPronos($_POST['addCategorie'], $_POST['addEquipe1'], $_POST['addEquipe2'], $_POST['addCote'], $_POST['addMise'], $_POST['addChoix'], $_POST['addDate'], $_POST['addCom']);
    }
    ?>
    <div class="form add-prono">
        <div class="form-header">
            <h2>Ajouter un nouveau pronostic</h2>
        </div>
        <div class="form-container">
            <form id="form-add-prono" action="" method="post">
                <label for="categorie">Catégorie</label>
                <select required name="addCategorie">
                    <option selected disabled>---</option>
                    <?=selectCatPronos()?>
                </select>
                <div class="col48">
                    <label for="e1">Equipe 1 :</label>
                    <input required id="e1" type="text" name="addEquipe1">
                </div>
                <div class="col48 left4">
                    <label for="e2">Equipe 2 :</label>
                    <input required id="e2" type="text" name="addEquipe2">
                </div>
                <div class="col48">
                    <label for="cote">Cote :</label>
                    <input required id="cote" type="text" name="addCote">
                </div>
                <div class="col48 left4">
                    <label for="mise">Mise :</label>
                    <input required id="mise" type="text" name="addMise">
                </div>
                <label for="choix">Choix :</label>
                <select required name="addChoix">
                    <option selected disabled>---</option>
                    <option id="choix1" value=""></option>
                    <option id="choix2" value=""></option>
                </select>
                <label required for="date">Date :</label>
                <input id="date" type="date" name="addDate">
                <label required for="commentaire">Commentaire :</label>
                <textarea required id="commentaire" class="tinymce" name="addCom"></textarea>
                <input type="submit" name="ajoutProno">
            </form>
        </div>
    </div>
    <?php
}
?>
<div class="container">
<?php
viewPronos();

include($_SERVER['DOCUMENT_ROOT'].'/winners-pronos/includes/footer.php');