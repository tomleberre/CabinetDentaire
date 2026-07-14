<?php

verifierAdmin();
require_once 'app/modeles/HoraireModele.php';

class AdminHorairesControleur {
    public function index() {
        $modele = new HoraireModele();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            foreach ($_POST['horaires'] as $id => $horaire) {
                $modele->modifierHoraire($id, $horaire['heure_ouverture'], $horaire['heure_fermeture']);
            }
            header('Location: ?page=admin-horaires');
            exit;
        }

        $horaires = $modele->getTousLesHoraires();
        require_once 'app/vues/admin-horaires.php';
    }
}

$controleur = new AdminHorairesControleur();
$controleur->index();