<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ivoire Gare Connect</title>
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
</head>
<body>

<header>
    <div class="logo">🚍 Ivoire Gare Connect</div>
    <nav>
        <a href="#">Accueil</a>
        <a href="#">Services</a>
        <a href="#">Gares</a>
        <a href="#">Contact</a>
         {{-- Bouton Connexion dans la nav --}}
        <a href="{{ route('login') }}"><button>Connexion</button></a>
    </nav>
</header>

<section class="hero">
    <div class="overlay"></div>

    <div class="hero-content">
        <div class="left-actions">
            <a href="{{ route('login') }}"><button class="btn login">Se connecter</button></a>
            <a href="{{ route('inscription') }}"><button class="btn register">Créer un compte</button></a>
        </div>

        <div class="hero-text">
            <h1>Voyagez facilement en Côte d'Ivoire</h1>
            <p>Réservez, gérez et suivez vos trajets en toute simplicité</p>
            <button class="cta">Réserver un billet</button>
        </div>
    </div>
</section>

<section class="weekly-trips">
    <h2>🗓️ Voyages de la semaine</h2>

    <div class="trips-container">

        <div class="trip-card">
            <h3>Abidjan → Yamoussoukro</h3>
            <p>📅 Lundi - 08:00</p>
            <p>💺 Places disponibles : 12</p>
            <p class="price">5 000 FCFA</p>
            <button>Réserver</button>
        </div>

        <div class="trip-card">
            <h3>Abidjan → Bouaké</h3>
            <p>📅 Mercredi - 10:30</p>
            <p>💺 Places disponibles : 8</p>
            <p class="price">7 500 FCFA</p>
            <button>Réserver</button>
        </div>

        <div class="trip-card">
            <h3>Abidjan → San Pedro</h3>
            <p>📅 Vendredi - 07:00</p>
            <p>💺 Places disponibles : 5</p>
            <p class="price">9 000 FCFA</p>
            <button>Réserver</button>
        </div>

    </div>
</section>

<section class="roles">
    <div class="card">
        <h2>👤 Client</h2>
        <p>Réserver un billet, choisir votre siège et payer en ligne</p>
    </div>

    <div class="card">
        <h2>💼 Responsable</h2>
        <p>Gérer les gares, trajets et personnel</p>
    </div>

    <div class="card">
        <h2>💳 Caissière</h2>
        <p>Gérer les paiements et les tickets</p>
    </div>
</section>

<footer class="footer">
    <div class="footer-container">

        <!-- Logo + description -->
        <div class="footer-section">
            <h2>🚍 Ivoire Gare Connect</h2>
            <p>Votre plateforme pour réserver vos voyages en toute simplicité en Côte d'Ivoire.</p>
        </div>

        <!-- Liens -->
        <div class="footer-section">
            <h3>Navigation</h3>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Voyages</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">À propos</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div class="footer-section">
            <h3>Contact</h3>
            <p>📍 Abidjan, Côte d'Ivoire</p>
            <p>📞 +225 07 00 00 00 00</p>
            <p>📧 contact@ivoiregareconnect.ci</p>
        </div>

        <!-- Réseaux -->
        <div class="footer-section">
            <h3>Suivez-nous</h3>
            <div class="socials">
                <a href="#">Facebook</a>
                <a href="#">WhatsApp</a>
                <a href="#">Instagram</a>
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© 2026 Ivoire Gare Connect - Tous droits réservés</p>
    </div>
</footer>

<script src="{{ asset('js/test.js') }}"></script>
</body>
</html>