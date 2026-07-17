<?php require_once 'app/vues/header.php'; ?>
<?php require_once 'app/vues/navbar.php'; ?>

<main class="container mt-5">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h1 class="display-4">Cabinet dentaire Dr. Dupont</h1>
            <p class="lead">Votre dentiste de confiance à Paris. Nous vous accueillons dans un cadre moderne et chaleureux.</p>
            <a href="?page=rendez-vous" class="btn btn-primary btn-lg mt-3">Prendre rendez-vous</a>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Nos services</h5>
                    <p class="card-text">Soins dentaires, orthodontie, implantologie et bien plus.</p>
                    <a href="?page=services" class="btn btn-outline-primary">Découvrir</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Horaires</h5>
                    <p class="card-text">Lundi - Vendredi : 9h00 - 18h00<br>Samedi : 9h00 - 12h00</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Contact</h5>
                    <p class="card-text">01 23 45 67 89<br>contact@cabinet-dupont.fr</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once 'app/vues/footer.php'; ?>