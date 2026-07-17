<?php require_once 'app/vues/header.php'; ?>
<?php require_once 'app/vues/navbar.php'; ?>

<main class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="mb-4"><?= isset($actualite) ? 'Modifier une actualité' : 'Ajouter une actualité' ?></h1>

            <form method="POST">
                <div class="mb-3">
                    <label class="form-label">Titre</label>
                    <input type="text" name="titre" class="form-control" value="<?= isset($actualite) ? $actualite['titre'] : '' ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Contenu</label>
                    <textarea name="contenu" class="form-control" rows="5" required><?= isset($actualite) ? $actualite['contenu'] : '' ?></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Date de publication</label>
                    <input type="date" name="date_publication" class="form-control" value="<?= isset($actualite) ? $actualite['date_publication'] : '' ?>" required>
                </div>
                <button type="submit" class="btn btn-primary w-100"><?= isset($actualite) ? 'Modifier' : 'Ajouter' ?></button>
            </form>

            <a href="?page=admin-actualites" class="btn btn-secondary mt-3">Retour</a>
        </div>
    </div>
</main>

<?php require_once 'app/vues/footer.php'; ?>