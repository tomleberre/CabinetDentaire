<?php

class ActualiteControleur {
    public function index() {
        require_once 'app/vues/actualites.php';
    }
}

$controleur = new ActualiteControleur();
$controleur->index();