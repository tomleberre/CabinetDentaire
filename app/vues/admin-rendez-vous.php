<?php require_once 'app/vues/header.php'; ?>
<?php require_once 'app/vues/navbar.php'; ?>

<main class="container mt-5">
    <h1 class="mb-4">Gestion des rendez-vous</h1>

    <table class="table table-striped">
        <thead class="table-dark">
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
                <td>
                    <span class="badge <?= $rdv['statut'] === 'confirmé' ? 'bg-success' : ($rdv['statut'] === 'annulé' ? 'bg-danger' : 'bg-warning') ?>">
                        <?= $rdv['statut'] ?>
                    </span>
                </td>
                <td>
                    <a href="?page=admin-rendez-vous&action=confirmer&id=<?= $rdv['id'] ?>" class="btn btn-success btn-sm">Confirmer</a>
                    <a href="?page=admin-rendez-vous&action=annuler&id=<?= $rdv['id'] ?>" class="btn btn-warning btn-sm">Annuler</a>
                    <a href="?page=admin-rendez-vous&action=supprimer&id=<?= $rdv['id'] ?>" class="btn btn-danger btn-sm">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="?page=dashboard" class="btn btn-secondary">Retour au dashboard</a>
</main>

<?php require_once 'app/vues/footer.php'; ?>