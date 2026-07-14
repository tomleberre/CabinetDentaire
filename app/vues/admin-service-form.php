<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire service</title>
</head>
<body>
    <?php require_once 'app/vues/navbar.php'; ?>
    <h1><?= isset($service) ? 'Modifier un service' : 'Ajouter un service' ?></h1>

    <form method="POST">
        <label>Nom</label>
        <input type="text" name="nom" value="<?= isset($service) ? $service['nom'] : '' ?>" required>

        <label>Description</label>
        <textarea name="description" required><?= isset($service) ? $service['description'] : '' ?></textarea>

        <label>Prix (€)</label>
        <input type="number" name="prix" step="0.01" value="<?= isset($service) ? $service['prix'] : '' ?>" required>

        <button type="submit"><?= isset($service) ? 'Modifier' : 'Ajouter' ?></button>
    </form>

    <a href="?page=admin-services">Retour</a>
</body>
</html>