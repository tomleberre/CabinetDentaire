<?php require_once 'app/vues/header.php'; ?>
<?php require_once 'app/vues/navbar.php'; ?>

<main class="container mt-5">
    <h1 class="mb-4">Gestion des horaires</h1>

    <form method="POST">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Jour</th>
                    <th>Heure d'ouverture</th>
                    <th>Heure de fermeture</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($horaires as $horaire) : ?>
                <tr>
                    <td><?= $horaire['jour'] ?></td>
                    <td>
                        <input type="text" name="horaires[<?= $horaire['id'] ?>][heure_ouverture]" class="form-control" value="<?= $horaire['heure_ouverture'] ?>">
                    </td>
                    <td>
                        <input type="text" name="horaires[<?= $horaire['id'] ?>][heure_fermeture]" class="form-control" value="<?= $horaire['heure_fermeture'] ?>">
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary">Enregistrer les horaires</button>
    </form>

    <a href="?page=dashboard" class="btn btn-secondary mt-3">Retour au dashboard</a>
</main>

<?php require_once 'app/vues/footer.php'; ?>