<?php require_once 'app/vues/header.php'; ?>
<?php require_once 'app/vues/navbar.php'; ?>

<main class="container mt-5">
    <h1 class="mb-4">Tableau de bord</h1>
    <p class="lead">Bienvenue Dr. <?= $_SESSION['utilisateur']['nom'] ?></p>

    <div class="row mt-4">
        <div class="col-md-4 mb-3">
            <div class="card text-center border-primary">
                <div class="card-body">
                    <h2 class="display-4 text-primary"><?= $nbPatients ?></h2>
                    <p class="card-text">Patients</p>
                    <a href="?page=admin-patients" class="btn btn-outline-primary">Gérer</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card text-center border-success">
                <div class="card-body">
                    <h2 class="display-4 text-success"><?= $nbRendezVous ?></h2>
                    <p class="card-text">Rendez-vous</p>
                    <a href="?page=admin-rendez-vous" class="btn btn-outline-success">Gérer</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card text-center border-warning">
                <div class="card-body">
                    <h2 class="display-4 text-warning"><?= $nbServices ?></h2>
                    <p class="card-text">Services</p>
                    <a href="?page=admin-services" class="btn btn-outline-warning">Gérer</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6 mb-3">
            <a href="?page=admin-actualites" class="btn btn-secondary w-100">Gérer les actualités</a>
        </div>
        <div class="col-md-6 mb-3">
            <a href="?page=admin-horaires" class="btn btn-secondary w-100">Gérer les horaires</a>
        </div>
    </div>
</main>

<?php require_once 'app/vues/footer.php'; ?>