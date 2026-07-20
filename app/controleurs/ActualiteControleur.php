<?php

require_once 'app/modeles/ActualiteModele.php';

class ActualiteControleur {
    public function index() {
        $modele = new ActualiteModele();
        $actualites = $modele->getToutesLesActualites();
        require_once 'app/vues/actualites.php';
    }
}

$controleur = new ActualiteControleur();
$controleur->index();