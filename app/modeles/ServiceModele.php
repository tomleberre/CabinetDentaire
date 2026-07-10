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
}