<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/winners-pronos/config.php');
class Connexion {

    private static $_pdo = null;

    private function __construct() {
        
    }

    private static function _get() {
        $dsn = 'mysql:dbname='.DB.';host='.HOST;

        try {
            self::$_pdo = new PDO($dsn, USER, PW);
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
        }
        self::$_pdo->exec('SET NAMES \'utf8\'');
    }

    public static function query($query) {
        if (is_null(self::$_pdo)) {
            self::_get();
        }
        
        $result = self::$_pdo->query($query);
        if(!$result){
            throw new Exception('Erreur de requête : '.$query);
        }
        return $result->fetchAll(PDO::FETCH_OBJ);
    }

    public static function queryFirst($query){
        $res = self::query($query);
        $return = is_array($res) && count($res) > 0 ? $res[0] : null;
        return $return;
        var_dump($res);
        return $res[0];
    }

public static function exec($query) {
        if (is_null(self::$_pdo)) {
            self::_get();
        }
        return self::$_pdo->exec($query);
    }

}
