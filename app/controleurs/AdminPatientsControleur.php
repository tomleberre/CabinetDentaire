<?php

verifierAdmin();
require_once 'app/modeles/UtilisateurModele.php';

class AdminPatientsControleur {
    public function index() {
        $modele = new UtilisateurModele();
        $action = isset($_GET['action']) ? $_GET['action'] : 'liste';

        switch ($action) {
            case 'supprimer':
                $modele->supprimerPatient($_GET['id']);
                header('Location: ?page=admin-patients');
                exit;

            default:
                $patients = $modele->getTousLesPatients();
                require_once 'app/vues/admin-patients.php';
                break;
        }
    }
}

$controleur = new AdminPatientsControleur();
$controleur->index();