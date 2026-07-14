<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des rendez-vous</title>
</head>
<body>
    <?php require_once 'app/vues/navbar.php'; ?>
    <h1>Gestion des rendez-vous</h1>

    <table>
        <thead>
            <tr>
                <th>Patient</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Type</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rendezVous as $rdv) : ?>
            <tr>
                <td><?= $rdv['nom'] ?> <?= $rdv['prenom'] ?></td>
                <td><?= $rdv['date'] ?></td>
                <td><?= $rdv['heure'] ?></td>
                <td><?= $rdv['type_consultation'] ?></td>
                <td><?= $rdv['statut'] ?></td>
                <td>
                    <a href="?page=admin-rendez-vous&action=confirmer&id=<?= $rdv['id'] ?>">Confirmer</a>
                    <a href="?page=admin-rendez-vous&action=annuler&id=<?= $rdv['id'] ?>">Annuler</a>
                    <a href="?page=admin-rendez-vous&action=supprimer&id=<?= $rdv['id'] ?>">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="?page=dashboard">Retour au dashboard</a>
</body>
</html>