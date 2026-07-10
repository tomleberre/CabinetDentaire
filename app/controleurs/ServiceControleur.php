<?php

require_once 'app/modeles/ServiceModele.php';

class ServiceControleur {
    public function index() {
        $modele = new ServiceModele();
        $services = $modele->getTousLesServices();
        require_once 'app/vues/services.php';
    }
}

$controleur = new ServiceControleur();
$controleur->index();