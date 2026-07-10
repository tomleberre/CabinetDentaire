<nav>
    <a href="?page=accueil">Accueil</a>
    <a href="?page=services">Nos services</a>
    <a href="?page=rendez-vous">Prendre rendez-vous</a>
    <a href="?page=a-propos">À propos</a>
    <a href="?page=actualites">Actualités</a>
    <?php if (isset($_SESSION['utilisateur'])) : ?>
        <?php if ($_SESSION['role'] === 'administrateur') : ?>
            <a href="?page=dashboard">Dashboard</a>
        <?php endif; ?>
        <a href="?page=deconnexion">Se déconnecter</a>
    <?php else : ?>
        <a href="?page=inscription">S'inscrire</a>
        <a href="?page=connexion">Se connecter</a>
    <?php endif; ?>
</nav>