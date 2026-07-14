<?php

require_once 'app/modeles/Database.php';

class UtilisateurModele {
    private $pdo;

    public function __construct() {
        $db = new Database();
        $this->pdo = $db->getConnection();
    }

    public function inscrire($nom, $prenom, $email, $telephone, $mot_de_passe) {
        $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);
        $requete = $this->pdo->prepare("INSERT INTO utilisateur (nom, prenom, email, telephone, mot_de_passe, role) VALUES (?, ?, ?, ?, ?, 'patient')");
        return $requete->execute([$nom, $prenom, $email, $telephone, $mot_de_passe_hash]);
    }

    public function connecter($email, $mot_de_passe) {
        $requete = $this->pdo->prepare("SELECT * FROM utilisateur WHERE email = ?");
        $requete->execute([$email]);
        $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);

        if ($utilisateur && password_verify($mot_de_passe, $utilisateur['mot_de_passe'])) {
            return $utilisateur;
        }
        return false;
    }
public function getTousLesPatients() {
    $requete = $this->pdo->query("SELECT * FROM utilisateur WHERE role = 'patient'");
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}

public function supprimerPatient($id) {
    $requete = $this->pdo->prepare("DELETE FROM utilisateur WHERE id = ?");
    return $requete->execute([$id]);
}

    }