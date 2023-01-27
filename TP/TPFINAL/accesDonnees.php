<?php
require_once 'Restaurant.php';
class accesDonnees
{
    protected const SELECT_RESTAURANTS = "SELECT nom, adresse, cp, ville, telephone, description FROM restaurants;";
    protected const SELECT_AVIS = "SELECT auteur, note, commentaire FROM avis WHERE idRestaurant = ?;";

    public function getConnexion()
    {
        $dsn = "mysql:host = localhost;dbname = restaurant";
        try {
            return $pdo = new PDO($dsn, 'root', 'password');
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
    }
}