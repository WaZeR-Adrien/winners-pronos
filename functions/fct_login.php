<?php
function addUser($nom,$prenom,$email,$login,$pw){
    $query = 'INSERT INTO user(nom,prenom,email,login,password,role_id) VALUES ("'.$nom.'","'.$prenom.'","'.$email.'","'.$login.'","'.sha1($pw).'", 3)';
    $res = Connexion::exec($query);

    if ($res == false){
        return false;
    } elseif ($res == true) {
        return true;
    }
}

function connexion($login,$pw){
    $query = 'SELECT * FROM user WHERE login="'.$login.'" AND password="'.sha1($pw).'"';
    $res = Connexion::queryFirst($query);

    if ($res == true){
        $_SESSION['connexion'] = true;
        $_SESSION['nom'] = $res->nom;
        $_SESSION['prenom'] = $res->prenom;
        $_SESSION['login'] = $res->login;
        $_SESSION['role'] = $res->role_id;
        redirect('/winners-pronos?co=success');
    } else {
        redirect('/winners-pronos?co=error');
    }
}