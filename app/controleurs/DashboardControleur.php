<?php

verifierAdmin();
require_once 'app/modeles/DashboardModele.php';

class DashboardControleur {
    public function index() {
        $modele = new DashboardModele();
        $nbPatients = $modele->getNombrePatients();
        $nbRendezVous = $modele->getNombreRendezVous();
        $nbServices = $modele->getNombreServices();
        require_once 'app/vues/dashboard.php';
    }
}

$controleur = new DashboardControleur();
$controleur->index();