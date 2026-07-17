<?php require_once 'app/vues/header.php'; ?>
<?php require_once 'app/vues/navbar.php'; ?>

<main class="container mt-5">
    <h1 class="mb-4">Nos services</h1>
    <div class="row">
        <?php foreach ($services as $service) : ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title"><?= $service['nom'] ?></h5>
                    <p class="card-text"><?= $service['description'] ?></p>
                    <p class="text-primary fw-bold"><?= $service['prix'] ?> €</p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>

<?php require_once 'app/vues/footer.php'; ?>