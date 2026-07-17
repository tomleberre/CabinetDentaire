<?php

verifierConnexion();
require_once 'app/modeles/RendezVousModele.php';

class RendezVousControleur {
    public function index() {
        $modele = new RendezVousModele();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_patient = $_SESSION['utilisateur']['id'];
            $id_administrateur = 1;

            $resultat = $modele->ajouterRendezVous(
                $_POST['date'],
                $_POST['heure'],
                $_POST['type_consultation'],
                $id_patient,
                $id_administrateur
            );

            if ($resultat) {
                $succes = "Votre rendez-vous a bien été enregistré !";
            } else {
                $erreur = "Une erreur est survenue, veuillez réessayer.";
            }
        }

        require_once 'app/vues/rendez-vous.php';
    }
}

$controleur = new RendezVousControleur();
$controleur->index();