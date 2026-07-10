<?php

class AccueilControleur {
    public function index() {
        require_once 'app/vues/accueil.php';
    }
}

$controleur = new AccueilControleur();
$controleur->index();