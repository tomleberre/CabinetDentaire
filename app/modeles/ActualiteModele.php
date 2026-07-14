<?php

require_once 'app/modeles/Database.php';

class ActualiteModele {
    private $pdo;

    public function __construct() {
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    public function getToutesLesActualites() {
        $requete = $this->pdo->query("SELECT * FROM actualite ORDER BY date_publication DESC");
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function ajouterActualite($titre, $contenu, $date_publication) {
        $requete = $this->pdo->prepare("INSERT INTO actualite (titre, contenu, date_publication) VALUES (?, ?, ?)");
        return $requete->execute([$titre, $contenu, $date_publication]);
    }

    public function modifierActualite($id, $titre, $contenu, $date_publication) {
        $requete = $this->pdo->prepare("UPDATE actualite SET titre = ?, contenu = ?, date_publication = ? WHERE id = ?");
        return $requete->execute([$titre, $contenu, $date_publication, $id]);
    }

    public function supprimerActualite($id) {
        $requete = $this->pdo->prepare("DELETE FROM actualite WHERE id = ?");
        return $requete->execute([$id]);
    }

    public function getActualiteParId($id) {
        $requete = $this->pdo->prepare("SELECT * FROM actualite WHERE id = ?");
        $requete->execute([$id]);
        return $requete->fetch(PDO::FETCH_ASSOC);
    }
}