<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire actualité</title>
</head>
<body>
    <?php require_once 'app/vues/navbar.php'; ?>
    <h1><?= isset($actualite) ? 'Modifier une actualité' : 'Ajouter une actualité' ?></h1>

    <form method="POST">
        <label>Titre</label>
        <input type="text" name="titre" value="<?= isset($actualite) ? $actualite['titre'] : '' ?>" required>

        <label>Contenu</label>
        <textarea name="contenu" required><?= isset($actualite) ? $actualite['contenu'] : '' ?></textarea>

        <label>Date de publication</label>
        <input type="date" name="date_publication" value="<?= isset($actualite) ? $actualite['date_publication'] : '' ?>" required>

        <button type="submit"><?= isset($actualite) ? 'Modifier' : 'Ajouter' ?></button>
    </form>

    <a href="?page=admin-actualites">Retour</a>
</body>
</html>