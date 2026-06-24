<div class="dashboard">
<link rel="stylesheet" href="/css/dashboardadmin.css">
    <aside class="sidebar">
        <h2>👤 Client</h2>
        <ul>
            <li class="active" data-page="dashboard">Dashboard</li>
            <li data-page="voyages">Mes voyages</li>
            <li data-page="reservations">Réservations</li>
            <li data-page="paiements">Paiements</li>
        </ul>
    </aside>

    <div class="main">
        <header class="topbar">
            <h1 id="page-title">Espace Client</h1>
            <div class="user">👤 Utilisateur</div>
        </header>

        <div id="content">
            @include('client.dashboard_content')
        </div>
    </div>

</div>

<script src="/js/client.js"></script>