<!-- resources/views/client/profil.blade.php -->
<div>
    <h2 style="color: #F26522; margin-bottom: 20px;">👤 Mon profil</h2>
    
    <div class="reservations-card">
        <div class="reservations-card__header">
            <h2>Informations personnelles</h2>
        </div>
        <div style="padding: 20px;">
            <div style="display: flex; gap: 20px; margin-bottom: 20px;">
                <div class="user-avatar" style="width: 80px; height: 80px; font-size: 2rem;">JK</div>
                <div>
                    <h3 style="margin-bottom: 5px;">Jean Koffi</h3>
                    <p style="color: var(--muted);">Membre depuis janvier 2025</p>
                </div>
            </div>
            
            <div style="border-top: 1px solid var(--border); padding-top: 20px;">
                <div style="margin-bottom: 15px;">
                    <label style="font-size: 0.75rem; color: var(--muted);">EMAIL</label>
                    <p style="font-weight: 500;">jean.koffi@example.com</p>
                </div>
                <div style="margin-bottom: 15px;">
                    <label style="font-size: 0.75rem; color: var(--muted);">TÉLÉPHONE</label>
                    <p style="font-weight: 500;">+225 07 00 00 00 00</p>
                </div>
            </div>
            
            <button class="btn-reserve" style="margin-top: 20px;">Modifier le profil</button>
        </div>
    </div>
</div>