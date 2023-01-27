<?php

class Restaurant
{
private int $idRestaurant;
private int $idAvis;
private string $auteur;
private int $note;
private string $commentaire;

    /**
     * @param int $idRestaurant
     * @param int $idAvis
     * @param string $auteur
     * @param int $note
     * @param string $commentaire
     */
    public function __construct(int $idRestaurant, int $idAvis, string $auteur, int $note, string $commentaire)
    {
        $this->idRestaurant = $idRestaurant;
        $this->idAvis = $idAvis;
        $this->auteur = $auteur;
        $this->note = $note;
        $this->commentaire = $commentaire;
    }


}