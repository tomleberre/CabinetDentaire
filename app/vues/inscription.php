<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>
    <?php require_once 'app/vues/navbar.php'; ?>
    <h1>Créer un compte</h1>

    <?php if (isset($erreur)) : ?>
        <p style="color:red;"><?= $erreur ?></p>
    <?php endif; ?>

    <form method="POST" action="?page=inscription">
        <label>Nom</label>
        <input type="text" name="nom" required>

        <label>Prénom</label>
        <input type="text" name="prenom" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Téléphone</label>
        <input type="text" name="telephone" required>

        <label>Mot de passe</label>
        <input type="password" name="mot_de_passe" required>

        <button type="submit">S'inscrire</button>
    </form>
</body>
</html>