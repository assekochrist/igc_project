<div class="dashboard">
    <link rel="stylesheet" href="/css/dashboardadmin.css">

    <aside class="sidebar">
        <h2>🚌 Chauffeur</h2>
        <ul>
            <li class="active" data-page="dashboard">Dashboard</li>
            <li data-page="voyages">Mes voyages</li>
            <li data-page="details">Détails trajet</li>
        </ul>
    </aside>

    <div class="main">
        <header class="topbar">
            <h1 id="page-title">Interface Chauffeur</h1>
            <div class="user">🧑‍✈️ Chauffeur</div>
        </header>

        <div id="content">
            @include('chauffeur.dashboard_content')
        </div>
    </div>

</div>

<script src="/js/chauffeur.js"></script>