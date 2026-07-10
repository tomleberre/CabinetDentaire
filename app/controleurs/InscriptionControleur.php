<?php

require_once 'app/modeles/UtilisateurModele.php';

class InscriptionControleur {
    public function index() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $modele = new UtilisateurModele();
            $resultat = $modele->inscrire(
                $_POST['nom'],
                $_POST['prenom'],
                $_POST['email'],
                $_POST['telephone'],
                $_POST['mot_de_passe']
            );

            if ($resultat) {
                header('Location: ?page=connexion');
                exit;
            } else {
                $erreur = "Une erreur est survenue, veuillez réessayer.";
            }
        }
        require_once 'app/vues/inscription.php';
    }
}

$controleur = new InscriptionControleur();
$controleur->index();