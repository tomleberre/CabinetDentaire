<?php require_once 'app/vues/header.php'; ?>
<?php require_once 'app/vues/navbar.php'; ?>

<main class="container mt-5">
    <h1 class="mb-4">Actualités</h1>
    <div class="row">
        <?php foreach ($actualites as $actualite) : ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title"><?= $actualite['titre'] ?></h5>
                    <p class="text-muted small"><?= $actualite['date_publication'] ?></p>
                    <p class="card-text"><?= substr($actualite['contenu'], 0, 150) ?>...</p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>

<?php require_once 'app/vues/footer.php'; ?>