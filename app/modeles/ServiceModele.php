<?php

require_once 'app/modeles/Database.php';

class ServiceModele {
    private $pdo;

    public function __construct() {
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    public function getTousLesServices() {
        $requete = $this->pdo->query("SELECT * FROM service");
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function ajouterService($nom, $description, $prix) {
        $requete = $this->pdo->prepare("INSERT INTO service (nom, description, prix) VALUES (?, ?, ?)");
        return $requete->execute([$nom, $description, $prix]);
    }

    public function modifierService($id, $nom, $description, $prix) {
        $requete = $this->pdo->prepare("UPDATE service SET nom = ?, description = ?, prix = ? WHERE id = ?");
        return $requete->execute([$nom, $description, $prix, $id]);
    }

    public function supprimerService($id) {
        $requete = $this->pdo->prepare("DELETE FROM service WHERE id = ?");
        return $requete->execute([$id]);
    }

    public function getServiceParId($id) {
        $requete = $this->pdo->prepare("SELECT * FROM service WHERE id = ?");
        $requete->execute([$id]);
        return $requete->fetch(PDO::FETCH_ASSOC);
    }
}