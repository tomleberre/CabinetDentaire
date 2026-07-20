<?php require_once 'app/vues/header.php'; ?>
<?php require_once 'app/vues/navbar.php'; ?>

<main class="container mt-5">
    <h1 class="mb-4">Gestion des services</h1>

    <a href="?page=admin-services&action=ajouter" class="btn btn-primary mb-4">Ajouter un service</a>

    <table class="table table-striped">
        <thead class="table-dark">
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
                    <a href="?page=admin-services&action=modifier&id=<?= $service['id'] ?>" class="btn btn-warning btn-sm">Modifier</a>
                    <a href="?page=admin-services&action=supprimer&id=<?= $service['id'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="?page=dashboard" class="btn btn-secondary">Retour au dashboard</a>
</main>

<?php require_once 'app/vues/footer.php'; ?>