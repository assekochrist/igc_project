<div class="dashboard">
    <link rel="stylesheet" href="/css/dashboardadmin.css">

    <aside class="sidebar">
        <h2>💳 Caisse</h2>
        <ul>
            <li class="active" data-page="dashboard">Dashboard</li>
            <li data-page="paiements">Paiements</li>
            <li data-page="tickets">Tickets</li>
            <li data-page="reservations">Réservations</li>
        </ul>
    </aside>

    <div class="main">
        <header class="topbar">
            <h1 id="page-title">Interface Caissière</h1>
            <div class="user">👩‍💼 Caissière</div>
        </header>

        <div id="content">
            @include('caissiere.dashboard_content')
        </div>
    </div>

</div>

<script src="/js/caissiere.js"></script>