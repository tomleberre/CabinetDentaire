<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des actualités</title>
</head>
<body>
    <?php require_once 'app/vues/navbar.php'; ?>
    <h1>Gestion des actualités</h1>

    <a href="?page=admin-actualites&action=ajouter">Ajouter une actualité</a>

    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($actualites as $actualite) : ?>
            <tr>
                <td><?= $actualite['titre'] ?></td>
                <td><?= $actualite['date_publication'] ?></td>
                <td>
                    <a href="?page=admin-actualites&action=modifier&id=<?= $actualite['id'] ?>">Modifier</a>
                    <a href="?page=admin-actualites&action=supprimer&id=<?= $actualite['id'] ?>">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="?page=dashboard">Retour au dashboard</a>
</body>
</html>