<?php require_once 'app/vues/header.php'; ?>
<?php require_once 'app/vues/navbar.php'; ?>

<main class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="mb-4">Prendre rendez-vous</h1>

            <?php if (isset($erreur)) : ?>
                <div class="alert alert-danger"><?= $erreur ?></div>
            <?php endif; ?>

            <?php if (isset($succes)) : ?>
                <div class="alert alert-success"><?= $succes ?></div>
            <?php endif; ?>

            <form method="POST" action="?page=rendez-vous">
                <div class="mb-3">
                    <label class="form-label">Date</label>
                    <input type="date" name="date" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Heure</label>
                    <input type="time" name="heure" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Type de consultation</label>
                    <select name="type_consultation" class="form-select" required>
                        <option value="">Choisir...</option>
                        <option value="Détartrage">Détartrage</option>
                        <option value="Soins courants">Soins courants</option>
                        <option value="Orthodontie">Orthodontie</option>
                        <option value="Implantologie">Implantologie</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">Confirmer le rendez-vous</button>
            </form>
        </div>
    </div>
</main>

<?php require_once 'app/vues/footer.php'; ?>