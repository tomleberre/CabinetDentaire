<?php

verifierAdmin();
require_once 'app/modeles/RendezVousModele.php';

class AdminRendezVousControleur {
    public function index() {
        $modele = new RendezVousModele();
        $action = isset($_GET['action']) ? $_GET['action'] : 'liste';

        switch ($action) {
            case 'confirmer':
                $modele->modifierStatut($_GET['id'], 'confirmé');
                header('Location: ?page=admin-rendez-vous');
                exit;

            case 'annuler':
                $modele->modifierStatut($_GET['id'], 'annulé');
                header('Location: ?page=admin-rendez-vous');
                exit;

            case 'supprimer':
                $modele->supprimerRendezVous($_GET['id']);
                header('Location: ?page=admin-rendez-vous');
                exit;

            default:
                $rendezVous = $modele->getTousLesRendezVous();
                require_once 'app/vues/admin-rendez-vous.php';
                break;
        }
    }
}

$controleur = new AdminRendezVousControleur();
$controleur->index();