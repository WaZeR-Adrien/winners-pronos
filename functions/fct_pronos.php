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

function getPronos($cPage,$pronosPerPage){
    $query = 'SELECT * FROM pronostic,categorie WHERE pronostic.categorie_id=categorie.id'.
            ' ORDER BY date DESC LIMIT '.(($cPage-1)*$pronosPerPage).','.$pronosPerPage;
    $res = Connexion::query($query);

    return $res;
}

function getCountPronos(){
    $query = 'SELECT COUNT(id) as nProno FROM pronostic';
    $res = Connexion::query($query);

    return $res[0];
}

function viewPronos(){
    $nProno = getCountPronos()->nProno;
    $pronosPerPage = 10;
    $nPage = ceil($nProno/$pronosPerPage);
    $cPage = 1;
    if(isset($_GET['p'])){
        $cPage = $_GET['p'];
    } else {
        $cPage = 1;
    }
    $pronos = getPronos($cPage,$pronosPerPage);
    foreach ($pronos as $p){
        $date = strtotime($p->date); // Timestamp de $p->date
        ?>
        <div class="pronostic">
            <div class="header-prono">
                <h2><?=strftime("%A %d %B %Y", $date)?></h2> <!--Affichage date-->
            </div>
            <div class="equipes-prono">
                <div class="e1-prono">
                    <p><?=$p->equipe1?></p>
                </div>
                <div class="e2-prono">
                    <p><?=$p->equipe2?></p>
                </div>
            </div>
            <hr class="clear">
            <div class="container-prono">
                <div class="choix-prono">
                    Pronostic : <?=$p->choix?>
                </div>
                <div class="cote-prono">
                    Cote : <?=$p->cote?>
                </div>
                <div class="mise-prono">
                    Mise : <?=$p->mise?>
                </div>
            </div>
            <div class="commentaire-prono">
                <?=$p->commentaire?>
            </div>
        </div>
        <?php
    }
    ?>
    <hr class="clear">
    <center>
    <?php
    for ($i=1;$i<=$nPage;$i++) {
        if ($i==$cPage) {
            ?>
            <button class="c-page">Page <?=$i?></button>
            <?php
        } else {
            if ($i==1){
                ?>
                <a href="/winners-pronos/pronostics">
                    <button class="o-page">Page 1</button>
                </a>
                <?php
            } else {
                ?>
                <a href="/winners-pronos/pronostics/<?=$i?>">
                    <button class="o-page">Page <?=$i?></button>
                </a>
                <?php
            }
        }
    }
    ?>
    </center>
    <?php
}