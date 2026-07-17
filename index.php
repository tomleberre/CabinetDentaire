<?php

session_start();
require_once 'app/helpers/auth.php';
// Routeur principal
$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

switch ($page) {
    case 'accueil':
        require_once 'app/controleurs/AccueilControleur.php';
        break;
    case 'rendez-vous':
        require_once 'app/controleurs/RendezVousControleur.php';
        break;
    case 'services':
        require_once 'app/controleurs/ServiceControleur.php';
        break;
    case 'a-propos':
        require_once 'app/controleurs/AProposControleur.php';
        break;
    case 'actualites':
        require_once 'app/controleurs/ActualiteControleur.php';
        break;
    case 'inscription':
        require_once 'app/controleurs/InscriptionControleur.php';
        break;
    case 'connexion':
        require_once 'app/controleurs/ConnexionControleur.php';
        break;
    case 'deconnexion':
        require_once 'app/controleurs/DeconnexionControleur.php';
        break;
    case 'dashboard':
        require_once 'app/controleurs/DashboardControleur.php';
        break;
    case 'admin-rendez-vous':
        require_once 'app/controleurs/AdminRendezVousControleur.php';
        break;
    case 'admin-patients':
        require_once 'app/controleurs/AdminPatientsControleur.php';
        break;
    case 'admin-services':
        require_once 'app/controleurs/AdminServicesControleur.php';
        break;
    case 'admin-actualites':
        require_once 'app/controleurs/AdminActualitesControleur.php';
        break;
    case 'admin-horaires':
        require_once 'app/controleurs/AdminHorairesControleur.php';
        break;
    default:
        require_once 'app/vues/404.php';
        break;
}
