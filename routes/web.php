<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pageacceuiltest');
});

Route::get('/login', function () {
    return view('login');
})->name('login');  // Ajoutez ceci pour nommer la route

Route::get('/inscription', function () {
    return view('inscription');
})->name('inscription');

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/{page}', function ($page) {

    if ($page === 'dashboard') {
        return view('admin.dashboard_content');
    }

    return view('admin.' . $page);
});

// Route principale - retourne la vue principale
Route::get('/clientdashboardtest', function () {
    return view('client.clientdashboardtest');
});

// Route pour les contenus dynamiques (AJAX)
Route::get('/clientdashboardtest/{page}', function ($page) {
    if ($page === 'dashboard') {
        return view('client.dashboard_content');
    }
    
    // Vérifier si la vue existe
    if (view()->exists('client.' . $page)) {
        return view('client.' . $page);
    }
    
    // Vue par défaut si la page n'existe pas
    return view('client.dashboard_content');
})->where('page', '.*'); // Accepter tous les noms de pages
 
Route::get('/client', function () {
    return view('client.dashboard');
});

Route::get('/client/{page}', function ($page) {

    if ($page === 'dashboard') {
        return view('client.dashboard_content');
    }

    return view('client.' . $page);
});

Route::get('/caissiere', function () {
    return view('caissiere.dashboard');
});

Route::get('/caissiere/{page}', function ($page) {

    if ($page === 'dashboard') {
        return view('caissiere.dashboard_content');
    }

    return view('caissiere.' . $page);
});

Route::get('/chauffeur', function () {
    return view('chauffeur.dashboard');
});

Route::get('/chauffeur/{page}', function ($page) {

    if ($page === 'dashboard') {
        return view('chauffeur.dashboard_content');
    }

    return view('chauffeur.' . $page);
});