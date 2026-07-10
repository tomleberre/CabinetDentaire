<?php


require_once 'app/modeles/UtilisateurModele.php';

class ConnexionControleur {
    public function index() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $modele = new UtilisateurModele();
            $utilisateur = $modele->connecter($_POST['email'], $_POST['mot_de_passe']);

            if ($utilisateur) {
                $_SESSION['utilisateur'] = $utilisateur;
                $_SESSION['role'] = $utilisateur['role'];

                if ($utilisateur['role'] === 'administrateur') {
                    header('Location: ?page=dashboard');
                } else {
                    header('Location: ?page=accueil');
                }
                exit;
            } else {
                $erreur = "Email ou mot de passe incorrect.";
            }
        }
        require_once 'app/vues/connexion.php';
    }
}

$controleur = new ConnexionControleur();
$controleur->index();