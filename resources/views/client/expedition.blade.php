<!-- resources/views/client/expedition.blade.php -->
<div>
    <div class="hero-banner" style="margin-bottom: 30px;">
        <div class="hero-banner__bg"></div>
        <div class="hero-banner__content">
            <h1>Expédition de colis</h1>
            <p>Envoyez vos colis en toute sécurité à travers toute la Côte d'Ivoire</p>
            <button class="btn-expedition">Commencer une expédition</button>
        </div>
    </div>
    
    <div class="bottom-grid">
        <div class="reservations-card">
            <div class="reservations-card__header">
                <h2>📦 Mes expéditions récentes</h2>
            </div>
            <div class="reservation-item">
                <div class="reservation-item__info">
                    <div class="reservation-item__route">Abidjan → Bouaké</div>
                    <div class="reservation-item__meta">Code: COL-2025-001 • Livré le 10/03/2025</div>
                </div>
                <div class="badge confirmed">Livré</div>
            </div>
            <div class="reservation-item">
                <div class="reservation-item__info">
                    <div class="reservation-item__route">Abidjan → Korhogo</div>
                    <div class="reservation-item__meta">Code: COL-2025-002 • En cours de livraison</div>
                </div>
                <div class="badge pending">En transit</div>
            </div>
        </div>
        
        <div class="expedition-card">
            <div class="expedition-card__bg"></div>
            <div class="expedition-card__content">
                <h2>Tarifs</h2>
                <p>Colis - de 5kg: 2500 FCFA<br>5-10kg: 3500 FCFA<br>10-20kg: 5000 FCFA</p>
            </div>
        </div>
    </div>
</div>