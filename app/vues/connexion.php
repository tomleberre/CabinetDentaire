<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <?php require_once 'app/vues/navbar.php'; ?>
    <h1>Connexion</h1>

    <?php if (isset($erreur)) : ?>
        <p style="color:red;"><?= $erreur ?></p>
    <?php endif; ?>

    <form method="POST" action="?page=connexion">
        <label>Email</label>
        <input type="email" name="email" required>

        <label>Mot de passe</label>
        <input type="password" name="mot_de_passe" required>

        <button type="submit">Se connecter</button>
    </form>
</body>
</html>