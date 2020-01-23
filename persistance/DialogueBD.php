<?php
/*
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

/**
 * Description of DialogueBD
 *
 * @author christian.vial
 */
require_once 'connexion.php';
class DialogueBD
{

    public function getUser($username, $password)
    {
        try {
            $conn = Connexion::getConnexion();
            $sql = "SELECT login,password FROM user WHERE login=\"$username\" and password=\"$password\"";
            $sth = $conn->prepare($sql);
            $sth->execute();
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
    }

    public function getCategories()
    {
        try {
            $conn = Connexion::getConnexion();
            $sql = "SELECT * FROM categorie";
            $sth = $conn->prepare($sql);
            $sth->execute();
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
    }
    public function getPlats($codeCat)
    {
        try {
            $conn = Connexion::getConnexion();
            $sql = 'SELECT * FROM plat WHERE codeCat="'.$codeCat.'"';
            //echo($sql);
            $sth = $conn->prepare($sql);
            $sth->execute();
            return $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $erreur = $e->getMessage();
        }
    }
}
