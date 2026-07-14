<?php

verifierAdmin();
require_once 'app/modeles/ActualiteModele.php';

class AdminActualitesControleur {
    public function index() {
        $modele = new ActualiteModele();
        $action = isset($_GET['action']) ? $_GET['action'] : 'liste';

        switch ($action) {
            case 'ajouter':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $modele->ajouterActualite($_POST['titre'], $_POST['contenu'], $_POST['date_publication']);
                    header('Location: ?page=admin-actualites');
                    exit;
                }
                require_once 'app/vues/admin-actualite-form.php';
                break;

            case 'modifier':
                $id = $_GET['id'];
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $modele->modifierActualite($id, $_POST['titre'], $_POST['contenu'], $_POST['date_publication']);
                    header('Location: ?page=admin-actualites');
                    exit;
                }
                $actualite = $modele->getActualiteParId($id);
                require_once 'app/vues/admin-actualite-form.php';
                break;

            case 'supprimer':
                $modele->supprimerActualite($_GET['id']);
                header('Location: ?page=admin-actualites');
                exit;

            default:
                $actualites = $modele->getToutesLesActualites();
                require_once 'app/vues/admin-actualites.php';
                break;
        }
    }
}

$controleur = new AdminActualitesControleur();
$controleur->index();