<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="?page=accueil">Cabinet Dr. Dupont</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="?page=accueil">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="?page=services">Nos services</a></li>
                <li class="nav-item"><a class="nav-link" href="?page=rendez-vous">Prendre rendez-vous</a></li>
                <li class="nav-item"><a class="nav-link" href="?page=a-propos">À propos</a></li>
                <li class="nav-item"><a class="nav-link" href="?page=actualites">Actualités</a></li>
                <?php if (isset($_SESSION['utilisateur'])) : ?>
                    <?php if ($_SESSION['role'] === 'administrateur') : ?>
                        <li class="nav-item"><a class="nav-link" href="?page=dashboard">Dashboard</a></li>
                    <?php endif; ?>
                    <li class="nav-item"><a class="nav-link" href="?page=deconnexion">Se déconnecter</a></li>
                <?php else : ?>
                    <li class="nav-item"><a class="nav-link" href="?page=inscription">S'inscrire</a></li>
                    <li class="nav-item"><a class="nav-link" href="?page=connexion">Se connecter</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>