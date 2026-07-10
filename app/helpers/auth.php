<?php

function verifierConnexion() {
    if (!isset($_SESSION['utilisateur'])) {
        header('Location: ?page=connexion');
        exit;
    }
}

function verifierAdmin() {
    verifierConnexion();
    if ($_SESSION['role'] !== 'administrateur') {
        header('Location: ?page=accueil');
        exit;
    }
}