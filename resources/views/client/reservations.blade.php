<!-- resources/views/client/reservations.blade.php -->
<div>
    <h2 style="color: #F26522; margin-bottom: 20px;">🎫 Mes réservations</h2>
    
    <div class="reservations-card">
        <div class="reservations-card__header">
            <h2>Réservations à venir</h2>
        </div>
        <div class="reservation-item">
            <div class="reservation-item__img">
                <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?w=120&h=80&fit=crop" alt="bus">
            </div>
            <div class="reservation-item__info">
                <div class="reservation-item__route">Abidjan → Bouaké</div>
                <div class="reservation-item__meta">Lun 15 mars 2025 • 07:30 • Siège 14A</div>
            </div>
            <div class="badge confirmed">Confirmé</div>
        </div>
        <div class="reservation-item">
            <div class="reservation-item__img">
                <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?w=120&h=80&fit=crop" alt="bus">
            </div>
            <div class="reservation-item__info">
                <div class="reservation-item__route">Yamoussoukro → San-Pédro</div>
                <div class="reservation-item__meta">Mer 17 mars 2025 • 10:45 • Siège 08C</div>
            </div>
            <div class="badge pending">En attente</div>
        </div>
    </div>
    
    <div class="reservations-card" style="margin-top: 20px;">
        <div class="reservations-card__header">
            <h2>Historique des réservations</h2>
        </div>
        <div class="reservation-item">
            <div class="reservation-item__info">
                <div class="reservation-item__route">Abidjan → Bouaké</div>
                <div class="reservation-item__meta">05 mars 2025 • Terminé</div>
            </div>
            <div class="badge confirmed">Terminé</div>
        </div>
    </div>
</div>