<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <?php require_once 'app/vues/navbar.php'; ?>
    <h1>Tableau de bord</h1>
    <p>Bienvenue Dr. <?= $_SESSION['utilisateur']['nom'] ?></p>

    <div>
        <div>
            <h2>Patients</h2>
            <p><?= $nbPatients ?></p>
        </div>
        <div>
            <h2>Rendez-vous</h2>
            <p><?= $nbRendezVous ?></p>
        </div>
        <div>
            <h2>Services</h2>
            <p><?= $nbServices ?></p>
        </div>
    </div>

    <nav>
        <a href="?page=admin-rendez-vous">Gérer les rendez-vous</a>
        <a href="?page=admin-patients">Gérer les patients</a>
        <a href="?page=admin-services">Gérer les services</a>
        <a href="?page=admin-actualites">Gérer les actualités</a>
        <a href="?page=admin-horaires">Gérer les horaires</a>
    </nav>
</body>
</html>