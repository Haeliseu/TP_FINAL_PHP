<?php
require_once 'accesDonnees.php';
class modeleRestaurant extends accesDonnees
{

    public function getRestaurants(): array
    {
        $query = self::SELECT_RESTAURANTS;
        $pstmt = new accesDonnees();
        $con = $pstmt->getConnexion()->prepare($query);
        $con->execute();
        $resultats = $con->fetchAll();
        return $resultats;
    }

    public function getAvis($idRestaurant):array
    {
        $query = self::SELECT_AVIS;
        $pstmt = new accesDonnees();
        $con = $pstmt->getConnexion()->prepare($query);
        $pstmt->bindValue(1, $idRestaurant);
        $con->execute();
        $resultats = $con->fetchAll();
        return $resultats;
    }
}