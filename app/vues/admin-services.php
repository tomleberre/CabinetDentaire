<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des services</title>
</head>
<body>
    <?php require_once 'app/vues/navbar.php'; ?>
    <h1>Gestion des services</h1>

    <a href="?page=admin-services&action=ajouter">Ajouter un service</a>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($services as $service) : ?>
            <tr>
                <td><?= $service['nom'] ?></td>
                <td><?= $service['description'] ?></td>
                <td><?= $service['prix'] ?> €</td>
                <td>
                    <a href="?page=admin-services&action=modifier&id=<?= $service['id'] ?>">Modifier</a>
                    <a href="?page=admin-services&action=supprimer&id=<?= $service['id'] ?>">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="?page=dashboard">Retour au dashboard</a>
</body>
</html>