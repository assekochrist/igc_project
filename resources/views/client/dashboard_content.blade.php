<!-- resources/views/client/dashboard_content.blade.php -->
<div class="hero-banner">
    <div class="hero-banner__bg"></div>
    <div class="hero-banner__content">
        <h1>Voyagez malin</h1>
        <p>Réservez vos billets et expédiez vos colis en toute confiance</p>
        <button class="btn-reserve">
            <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8M8 12h8"/></svg>
            Réserver un voyage
        </button>
    </div>
</div>

<div class="search-bar">
    <div class="search-field">
        <label>DÉPART</label>
        <div class="search-field__inner">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8M8 12h8"/></svg>
            <span>Abidjan (Gare Sud)</span>
        </div>
    </div>
    <div class="search-swap">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 2l4 4-4 4"/><path d="M3 12h15M7 2l-4 4 4 4"/><path d="M21 12h-4"/></svg>
    </div>
    <div class="search-field">
        <label>ARRIVÉE</label>
        <div class="search-field__inner">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8M8 12h8"/></svg>
            <span>Bouaké (Gare Centrale)</span>
        </div>
    </div>
    <div class="search-field--pass">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8M8 12h8"/></svg>
        <span>1 voyageur</span>
        <span class="pass-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></span>
    </div>
    <button class="btn-search">Rechercher</button>
</div>

<div class="bottom-grid">
    <div class="reservations-card">
        <div class="reservations-card__header">
            <h2>📋 Dernières réservations</h2>
        </div>
        <div class="reservation-item">
            <div class="reservation-item__img">
                <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?w=120&h=80&fit=crop" alt="bus">
            </div>
            <div class="reservation-item__info">
                <div class="reservation-item__route">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8M8 12h8"/></svg>
                    Abidjan → Bouaké
                </div>
                <div class="reservation-item__meta">Lun 15 mars 2025 • 07:30 • Siège 14A</div>
            </div>
            <div class="badge confirmed">Confirmé</div>
            <div class="chevron-right"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg></div>
        </div>
        <div class="reservation-item">
            <div class="reservation-item__img">
                <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?w=120&h=80&fit=crop" alt="bus">
            </div>
            <div class="reservation-item__info">
                <div class="reservation-item__route">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8M8 12h8"/></svg>
                    Yamoussoukro → San-Pédro
                </div>
                <div class="reservation-item__meta">Mer 17 mars 2025 • 10:45 • Siège 08C</div>
            </div>
            <div class="badge pending">En attente</div>
            <div class="chevron-right"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg></div>
        </div>
        <div class="reservations-card__footer">
            <a href="#">Voir toutes mes réservations <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg></a>
        </div>
    </div>

    <div class="expedition-card">
        <div class="expedition-card__bg"></div>
        <div class="expedition-card__content">
            <h2>Expédiez vos colis</h2>
            <p>Envoi rapide, sécurisé et suivi en temps réel</p>
            <button class="btn-expedition">Expédier un colis <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg></button>
        </div>
      
    </div>
</div>