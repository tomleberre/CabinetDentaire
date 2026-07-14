<?php

verifierAdmin();
require_once 'app/modeles/ServiceModele.php';

class AdminServicesControleur {
    public function index() {
        $modele = new ServiceModele();
        $action = isset($_GET['action']) ? $_GET['action'] : 'liste';

        switch ($action) {
            case 'ajouter':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $modele->ajouterService($_POST['nom'], $_POST['description'], $_POST['prix']);
                    header('Location: ?page=admin-services');
                    exit;
                }
                require_once 'app/vues/admin-service-form.php';
                break;

            case 'modifier':
                $id = $_GET['id'];
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $modele->modifierService($id, $_POST['nom'], $_POST['description'], $_POST['prix']);
                    header('Location: ?page=admin-services');
                    exit;
                }
                $service = $modele->getServiceParId($id);
                require_once 'app/vues/admin-service-form.php';
                break;

            case 'supprimer':
                $modele->supprimerService($_GET['id']);
                header('Location: ?page=admin-services');
                exit;

            default:
                $services = $modele->getTousLesServices();
                require_once 'app/vues/admin-services.php';
                break;
        }
    }
}

$controleur = new AdminServicesControleur();
$controleur->index();