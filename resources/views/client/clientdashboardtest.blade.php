<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Accueil – Ivoire Gare Connect</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700;800;900&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/clientdashboard.css">

</head>
<body>
<div class="app">
    
    <!-- SIDEBAR FIXE -->
    <aside class="sidebar">
        <div class="sidebar__logo">
            <div class="sidebar__logo-icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 4C17.373 4 12 9.373 12 16c0 9 12 24 12 24s12-15 12-24c0-6.627-5.373-12-12-12z" fill="url(#pinGrad2)"/>
                    <rect x="16" y="11" width="16" height="11" rx="2" fill="#2E7D32"/>
                    <rect x="17" y="12" width="6" height="4" rx="1" fill="#A5D6A7"/>
                    <rect x="25" y="12" width="6" height="4" rx="1" fill="#A5D6A7"/>
                    <circle cx="18.5" cy="23.5" r="1.5" fill="#1A2332"/>
                    <circle cx="29.5" cy="23.5" r="1.5" fill="#1A2332"/>
                    <defs>
                        <linearGradient id="pinGrad2" x1="12" y1="4" x2="36" y2="40" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#ffffff"/>
                            <stop offset="1" stop-color="#2E7D32"/>
                        </linearGradient>
                    </defs>
                </svg>           
            </div>
            <span class="sidebar__logo-text">Ivoire Gare Connect</span>
        </div>

        <nav class="sidebar__nav">
            <a href="#" class="nav-item active" data-page="dashboard">
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                Accueil
            </a>
            <a href="#" class="nav-item" data-page="voyages">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13" rx="2"/><path d="M16 8h4l3 5v3h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
                Voyages
            </a>
            <a href="#" class="nav-item" data-page="expedition">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>
                Expédition
            </a>
            <a href="#" class="nav-item" data-page="reservations">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
                Mes réservations
            </a>
            <a href="#" class="nav-item" data-page="profil">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                Profil
            </a>
        </nav>

        <div class="sidebar__help">
            <div class="sidebar__help-top">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg>
                <strong>Besoin d'aide ?</strong>
            </div>
            <p>Contactez notre support</p>
            <button class="btn-help">Nous contacter</button>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <div class="main">
        <!-- TOPBAR FIXE -->
        <header class="topbar">
            <span class="topbar__brand">Ivoire Gare Connect</span>
            <div class="topbar__right">
                <div class="topbar__notif">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
                    <span class="notif-dot"></span>
                </div>
                <div class="topbar__user">
                    <div class="user-avatar">JK</div>
                    <span class="user-name">Jean Koffi</span>
                    <span class="user-chevron">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
                    </span>
                </div>
            </div>
        </header>

        <!-- CONTENU DYNAMIQUE -->
        <div id="dynamic-content" class="content">
            <div class="loading-spinner">
                <div class="spinner"></div>
            </div>
        </div>
    </div>

    <div class="blob-decoration"></div>
</div>

<script>
    // État actuel de la page
    let currentPage = 'dashboard';
    
    // Fonction pour sauvegarder la page dans sessionStorage
    function saveCurrentPage(page) {
        sessionStorage.setItem('currentPage', page);
    }
    
    // Fonction pour charger le contenu
    function loadContent(page) {
        currentPage = page;
        const contentContainer = document.getElementById('dynamic-content');
        
        // Afficher le spinner
        contentContainer.innerHTML = '<div class="loading-spinner"><div class="spinner"></div></div>';
        
        // Déterminer la vue à charger
        let viewName = page;
        if (page === 'dashboard') {
            viewName = 'dashboard_content';
        }
        
        // Faire la requête AJAX
        fetch(`/clientdashboardtest/${viewName}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Erreur de chargement');
                }
                return response.text();
            })
            .then(html => {
                contentContainer.innerHTML = html;
                // Sauvegarder l'état
                saveCurrentPage(page);
            })
            .catch(error => {
                console.error('Erreur:', error);
                contentContainer.innerHTML = `
                    <div style="text-align: center; padding: 40px;">
                        <p style="color: #F26522;">Erreur de chargement du contenu</p>
                        <button onclick="location.reload()" style="margin-top: 10px; padding: 8px 16px; background: #F26522; color: white; border: none; border-radius: 6px; cursor: pointer;">Réessayer</button>
                    </div>
                `;
            });
    }
    
    // Gestionnaire de clic sur les liens de navigation
    document.querySelectorAll('.nav-item').forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const page = this.getAttribute('data-page');
            
            // Ne rien faire si c'est déjà la page active
            if (page === currentPage) return;
            
            // Mettre à jour la classe active
            document.querySelectorAll('.nav-item').forEach(nav => nav.classList.remove('active'));
            this.classList.add('active');
            
            // Charger le contenu
            loadContent(page);
        });
    });
    
    // Restaurer la dernière page visitée au chargement
    const lastPage = sessionStorage.getItem('currentPage');
    if (lastPage && lastPage !== 'dashboard') {
        // Mettre à jour la classe active
        document.querySelectorAll('.nav-item').forEach(item => {
            if (item.getAttribute('data-page') === lastPage) {
                document.querySelectorAll('.nav-item').forEach(nav => nav.classList.remove('active'));
                item.classList.add('active');
            }
        });
        loadContent(lastPage);
    } else {
        loadContent('dashboard');
    }
</script>
</body>
</html>