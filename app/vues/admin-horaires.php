<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des horaires</title>
</head>
<body>
    <?php require_once 'app/vues/navbar.php'; ?>
    <h1>Gestion des horaires</h1>

    <form method="POST">
        <table>
            <thead>
                <tr>
                    <th>Jour</th>
                    <th>Ouverture</th>
                    <th>Fermeture</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($horaires as $horaire) : ?>
                <tr>
                    <td><?= $horaire['jour'] ?></td>
                    <td>
                        <input type="text" name="horaires[<?= $horaire['id'] ?>][heure_ouverture]" value="<?= $horaire['heure_ouverture'] ?>">
                    </td>
                    <td>
                        <input type="text" name="horaires[<?= $horaire['id'] ?>][heure_fermeture]" value="<?= $horaire['heure_fermeture'] ?>">
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <button type="submit">Enregistrer les horaires</button>
    </form>

    <a href="?page=dashboard">Retour au dashboard</a>
</body>
</html>