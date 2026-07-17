<?php require_once 'app/vues/header.php'; ?>
<?php require_once 'app/vues/navbar.php'; ?>

<main class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="mb-4"><?= isset($service) ? 'Modifier un service' : 'Ajouter un service' ?></h1>

            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" value="<?= isset($service) ? $service['nom'] : '' ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" required><?= isset($service) ? $service['description'] : '' ?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Prix (€)</label>
                    <input type="number" name="prix" step="0.01" class="form-control" value="<?= isset($service) ? $service['prix'] : '' ?>" required>
                </div>
                <button type="submit" class="btn btn-primary w-100"><?= isset($service) ? 'Modifier' : 'Ajouter' ?></button>
            </form>

            <a href="?page=admin-services" class="btn btn-secondary mt-3">Retour</a>
        </div>
    </div>
</main>

<?php require_once 'app/vues/footer.php'; ?>