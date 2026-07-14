<?php

require_once 'app/modeles/Database.php';

class RendezVousModele {
    private $pdo;

    public function __construct() {
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    public function getTousLesRendezVous() {
        $requete = $this->pdo->query("
            SELECT rendezvous.*, 
                   utilisateur.nom, utilisateur.prenom 
            FROM rendezvous 
            JOIN utilisateur ON rendezvous.id_patient = utilisateur.id
        ");
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function modifierStatut($id, $statut) {
        $requete = $this->pdo->prepare("UPDATE rendezvous SET statut = ? WHERE id = ?");
        return $requete->execute([$statut, $id]);
    }

    public function supprimerRendezVous($id) {
        $requete = $this->pdo->prepare("DELETE FROM rendezvous WHERE id = ?");
        return $requete->execute([$id]);
    }
}