<?php require_once 'app/vues/header.php'; ?>
<?php require_once 'app/vues/navbar.php'; ?>

<main class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h1 class="mb-4">Créer un compte</h1>

            <?php if (isset($erreur)) : ?>
                <div class="alert alert-danger"><?= $erreur ?></div>
            <?php endif; ?>

            <form method="POST" action="?page=inscription">
                <div class="mb-3">
                    <label class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Prénom</label>
                    <input type="text" name="prenom" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Téléphone</label>
                    <input type="text" name="telephone" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Mot de passe</label>
                    <input type="password" name="mot_de_passe" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
            </form>
            <p class="mt-3">Déjà un compte ? <a href="?page=connexion">Se connecter</a></p>
        </div>
    </div>
</main>

<?php require_once 'app/vues/footer.php'; ?>