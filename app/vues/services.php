<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nos services</title>
</head>
<body>
    <?php require_once 'app/vues/navbar.php'; ?>
    <h1>Nos services</h1>
    <?php foreach ($services as $service) : ?>
        <div>
            <h2><?= $service['nom'] ?></h2>
            <p><?= $service['description'] ?></p>
            <p>Prix : <?= $service['prix'] ?> €</p>
        </div>
    <?php endforeach; ?>
</body>
</html>