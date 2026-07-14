<?php

require_once 'app/modeles/Database.php';

class DashboardModele {
    private $pdo;

    public function __construct() {
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    public function getNombrePatients() {
        $requete = $this->pdo->query("SELECT COUNT(*) FROM utilisateur WHERE role = 'patient'");
        return $requete->fetchColumn();
    }

    public function getNombreRendezVous() {
        $requete = $this->pdo->query("SELECT COUNT(*) FROM rendezvous");
        return $requete->fetchColumn();
    }

    public function getNombreServices() {
        $requete = $this->pdo->query("SELECT COUNT(*) FROM service");
        return $requete->fetchColumn();
    }
}