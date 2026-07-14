<?php

require_once __DIR__ . '/Database.php';

class HoraireModele {
    private $pdo;

    public function __construct() {
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    public function getTousLesHoraires() {
        $requete = $this->pdo->query("SELECT * FROM horaire");
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function modifierHoraire($id, $heure_ouverture, $heure_fermeture) {
        $requete = $this->pdo->prepare("UPDATE horaire SET heure_ouverture = ?, heure_fermeture = ? WHERE id = ?");
        return $requete->execute([$heure_ouverture, $heure_fermeture, $id]);
    }
}