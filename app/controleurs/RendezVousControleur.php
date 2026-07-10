<?php

verifierConnexion();


class RendezVousControleur {
    public function index() {
        require_once 'app/vues/rendez-vous.php';
    }
}

$controleur = new RendezVousControleur();
$controleur->index();