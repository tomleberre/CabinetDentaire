<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des patients</title>
</head>
<body>
    <?php require_once 'app/vues/navbar.php'; ?>
    <h1>Gestion des patients</h1>

    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($patients as $patient) : ?>
            <tr>
                <td><?= $patient['nom'] ?></td>
                <td><?= $patient['prenom'] ?></td>
                <td><?= $patient['email'] ?></td>
                <td><?= $patient['telephone'] ?></td>
                <td>
                    <a href="?page=admin-patients&action=supprimer&id=<?= $patient['id'] ?>">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="?page=dashboard">Retour au dashboard</a>
</body>
</html>