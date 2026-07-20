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
                    <label class="form-label">Créneau horaire</label>
                    <select name="heure" class="form-select" required>
                        <option value="">Choisir un créneau...</option>
                        <option value="09:00">09h00 - 09h30</option>
                        <option value="09:30">09h30 - 10h00</option>
                        <option value="10:00">10h00 - 10h30</option>
                        <option value="10:30">10h30 - 11h00</option>
                        <option value="11:00">11h00 - 11h30</option>
                        <option value="11:30">11h30 - 12h00</option>
                        <option value="14:00">14h00 - 14h30</option>
                        <option value="14:30">14h30 - 15h00</option>
                        <option value="15:00">15h00 - 15h30</option>
                        <option value="15:30">15h30 - 16h00</option>
                        <option value="16:00">16h00 - 16h30</option>
                        <option value="16:30">16h30 - 17h00</option>
                    </select>
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