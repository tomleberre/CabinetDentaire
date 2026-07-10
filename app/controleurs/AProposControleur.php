<?php

class AProposControleur {
    public function index() {
        require_once 'app/vues/a-propos.php';
    }
}

$controleur = new AProposControleur();
$controleur->index();