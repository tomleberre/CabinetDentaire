<?php require_once 'app/vues/header.php'; ?>
<?php require_once 'app/vues/navbar.php'; ?>

<main class="container mt-5">
    <h1 class="mb-4">Gestion des actualités</h1>

    <a href="?page=admin-actualites&action=ajouter" class="btn btn-primary mb-4">Ajouter une actualité</a>

    <table class="table table-striped">
        <thead class="table-dark">
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
                    <a href="?page=admin-actualites&action=modifier&id=<?= $actualite['id'] ?>" class="btn btn-warning btn-sm">Modifier</a>
                    <a href="?page=admin-actualites&action=supprimer&id=<?= $actualite['id'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="?page=dashboard" class="btn btn-secondary">Retour au dashboard</a>
</main>

<?php require_once 'app/vues/footer.php'; ?>