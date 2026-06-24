<!-- resources/views/client/voyages.blade.php -->
<div>
    <h2 style="color: #F26522; margin-bottom: 20px;">📅 Recherche de voyages</h2>
    
    <div class="search-bar" style="margin-bottom: 30px;">
        <div class="search-field">
            <label>DÉPART</label>
            <div class="search-field__inner">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8M8 12h8"/></svg>
                <span>Sélectionnez votre ville</span>
            </div>
        </div>
        <div class="search-swap">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 2l4 4-4 4"/><path d="M3 12h15M7 2l-4 4 4 4"/><path d="M21 12h-4"/></svg>
        </div>
        <div class="search-field">
            <label>ARRIVÉE</label>
            <div class="search-field__inner">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8M8 12h8"/></svg>
                <span>Sélectionnez votre destination</span>
            </div>
        </div>
        <div class="search-field--pass">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v8M8 12h8"/></svg>
            <span>1 voyageur</span>
            <span class="pass-chevron"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></span>
        </div>
        <button class="btn-search">Rechercher</button>
    </div>
    
    <div class="reservations-card">
        <div class="reservations-card__header">
            <h2>🚌 Destinations populaires</h2>
        </div>
        <div class="reservation-item">
            <div class="reservation-item__info">
                <div class="reservation-item__route">Abidjan → Bouaké</div>
                <div class="reservation-item__meta">Départs: 06h00, 08h30, 11h00, 14h30, 17h00</div>
            </div>
            <div class="badge confirmed">À partir de 5000 FCFA</div>
        </div>
        <div class="reservation-item">
            <div class="reservation-item__info">
                <div class="reservation-item__route">Abidjan → Yamoussoukro</div>
                <div class="reservation-item__meta">Départs: 07h00, 09h30, 12h00, 15h30</div>
            </div>
            <div class="badge confirmed">À partir de 4000 FCFA</div>
        </div>
        <div class="reservation-item">
            <div class="reservation-item__info">
                <div class="reservation-item__route">Abidjan → San-Pédro</div>
                <div class="reservation-item__meta">Départs: 05h30, 10h00, 14h00, 18h30</div>
            </div>
            <div class="badge confirmed">À partir de 6500 FCFA</div>
        </div>
    </div>
</div>