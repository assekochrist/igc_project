<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard — Responsable · IGC</title>
    <link rel="stylesheet" href="/css/dashboardadmin.css">
</head>
<body>

<div class="dashboard">

    <!-- ══════════ SIDEBAR ══════════ -->
    <aside class="sidebar">
        <h2>IGC Admin</h2>
        <ul>
            <li class="active" data-page="dashboard" data-icon="📊">Dashboard</li>
            <li data-page="gares"        data-icon="🏢">Gares</li>
            <li data-page="voyages"      data-icon="🚍">Voyages</li>
            <li data-page="personnel"    data-icon="👥">Personnel</li>
            <li data-page="reservations" data-icon="🎫">Réservations</li>
            <li data-page="paiements"    data-icon="💳">Paiements</li>
        </ul>

        <ul class="sidebar-footer">
            <li data-icon="🚪" onclick="window.location='/logout'">Déconnexion</li>
        </ul>
    </aside>

    <!-- ══════════ MAIN ══════════ -->
    <div class="main">

        <!-- Topbar -->
        <header class="topbar">
            <h1 id="page-title">Dashboard Responsable</h1>
            <div class="user">
                <div class="user-avatar">👤</div>
                Admin
            </div>
        </header>

        <!-- Contenu dynamique -->
        <div id="content">

            <!-- Stats -->
            <section class="stats">
                <div class="card">
                    <div class="card-header">
                        <span class="card-label">Voyages</span>
                        <div class="card-icon green">🚍</div>
                    </div>
                    <div class="card-value">24</div>
                    <div class="card-trend">↑ +3 cette semaine</div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <span class="card-label">Clients</span>
                        <div class="card-icon blue">👥</div>
                    </div>
                    <div class="card-value">120</div>
                    <div class="card-trend">↑ +12 ce mois</div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <span class="card-label">Paiements</span>
                        <div class="card-icon orange">💳</div>
                    </div>
                    <div class="card-value">85</div>
                    <div class="card-trend">↑ +7 aujourd'hui</div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <span class="card-label">Gares</span>
                        <div class="card-icon purple">🏢</div>
                    </div>
                    <div class="card-value">5</div>
                    <div class="card-trend">Toutes actives</div>
                </div>
            </section>

            <!-- Actions rapides -->
            <section class="actions">
                <h3 class="section-title">⚡ Actions rapides</h3>
                <div class="actions-container">
                    <button class="action-btn">➕ Programmer un voyage</button>
                    <button class="action-btn">👤 Ajouter un personnel</button>
                    <button class="action-btn">🏢 Ajouter une gare</button>
                    <button class="action-btn">💳 Gérer les paiements</button>
                </div>
            </section>

            <!-- Table -->
            <section class="table-section">
                <div class="table-header">
                    <h2>Derniers voyages</h2>
                    <span class="table-badge">2 voyages</span>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Départ</th>
                            <th>Arrivée</th>
                            <th>Date</th>
                            <th>Places</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Abidjan</td>
                            <td>Bouaké</td>
                            <td>10 Mai</td>
                            <td>12</td>
                            <td><span class="badge active">Actif</span></td>
                        </tr>
                        <tr>
                            <td>Abidjan</td>
                            <td>Yamoussoukro</td>
                            <td>11 Mai</td>
                            <td>8</td>
                            <td><span class="badge pending">En attente</span></td>
                        </tr>
                    </tbody>
                </table>
            </section>

        </div>
    </div>
</div>

<script src="/js/dashboardadmin.js"></script>
</body>
</html>