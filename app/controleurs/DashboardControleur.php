<?php

verifierAdmin();

class DashboardControleur {
    public function index() {
        require_once 'app/vues/dashboard.php';
    }
}

$controleur = new DashboardControleur();
$controleur->index();