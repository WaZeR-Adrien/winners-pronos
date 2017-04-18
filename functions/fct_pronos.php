<?php
function addPronos($cat,$e1,$e2,$cote,$mise,$choix,$date,$com){
    $query = 'INSERT INTO pronostic(categorie_id,equipe1,equipe2,cote,mise,choix,date,commentaire)'.
             ' VALUE('.$cat.',"'.$e1.'","'.$e2.'","'.$cote.'","'.$mise.'","'.$choix.'","'.$date.'","'.$com.'")';
    $res = Connexion::exec($query);
}

function selectCatPronos(){
    $query = 'SELECT * FROM categorie';
    $res = Connexion::query($query);

    foreach ($res as $r) {
        ?>
        <option value="<?=$r->id?>"><?=$r->libelle?></option>
        <?php
    }
}

function getPronos(){
    $query = 'SELECT * FROM pronostic,categorie WHERE pronostic.categorie_id=categorie.id ORDER BY date DESC';
    $res = Connexion::query($query);

    return $res;
}

function viewPronos(){
    $pronos = getPronos();
    foreach ($pronos as $p){
        $date = strtotime($p->date); // Timestamp de $p->date
        ?>
        <div class="pronostic">
            <div class="header-prono">
                <h2><?=strftime("%A %d %B %Y", $date)?></h2> <!--Affichage date-->
            </div>
            <div class="equipes-prono">
                <div class="e1-prono">
                    <?=$p->equipe1?>
                </div>
                <div class="e2-prono">
                    <?=$p->equipe2?>
                </div>
            </div>
            <hr class="clear">
            <div class="choix-prono">
                <h3>Choix</h3>
                <?=$p->choix?>
            </div>
            <div class="cote-prono">
                <?=$p->cote?>
            </div>
            <div class="mise-prono">
                <?=$p->mise?>
            </div>
            <div class="commentaire-prono">
                <?=$p->commentaire?>
            </div>
        </div>
        <?php
    }
}