<?php require_once 'app/vues/header.php'; ?>
<?php require_once 'app/vues/navbar.php'; ?>

<main class="container mt-5">
    <h1 class="mb-4">Gestion des patients</h1>

    <table class="table table-striped">
        <thead class="table-dark">
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
                    <a href="?page=admin-patients&action=supprimer&id=<?= $patient['id'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="?page=dashboard" class="btn btn-secondary">Retour au dashboard</a>
</main>

<?php require_once 'app/vues/footer.php'; ?>