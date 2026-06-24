<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Créer un compte – Ivoire Gare Connect</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/inscription.css') }}">

</head>
<body>
<div class="page">

    <!-- ════════════ LEFT PANEL ════════════ -->
    <div class="left-panel">
        <div class="left-panel__bg"></div>

        <!-- Courbe SVG -->
        <svg class="left-panel__curve-svg" viewBox="0 0 80 800" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="stripeGrad" x1="0" y1="0" x2="0" y2="1" gradientUnits="objectBoundingBox">
                    <stop offset="0%"   stop-color="#F26522"/>
                    <stop offset="100%" stop-color="#2E7D32"/>
                </linearGradient>
            </defs>
            <path d="M60,0 Q80,400 60,800 L80,800 L80,0 Z" fill="#F9FAFB"/>
            <path d="M57,0 Q79,400 57,800 L63,800 Q81,400 63,0 Z" fill="url(#stripeGrad)"/>
        </svg>

        <!-- Logo -->
        <div class="logo">
            <div class="logo__icon">
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 4C17.373 4 12 9.373 12 16c0 9 12 24 12 24s12-15 12-24c0-6.627-5.373-12-12-12z" fill="url(#pinGrad2)"/>
                    <rect x="16" y="11" width="16" height="11" rx="2" fill="#2E7D32"/>
                    <rect x="17" y="12" width="6" height="4" rx="1" fill="#A5D6A7"/>
                    <rect x="25" y="12" width="6" height="4" rx="1" fill="#A5D6A7"/>
                    <circle cx="18.5" cy="23.5" r="1.5" fill="#1A2332"/>
                    <circle cx="29.5" cy="23.5" r="1.5" fill="#1A2332"/>
                    <defs>
                        <linearGradient id="pinGrad2" x1="12" y1="4" x2="36" y2="40" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#F26522"/>
                            <stop offset="1" stop-color="#2E7D32"/>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <div class="logo__text">
                <div class="brand-top">IVOIRE GARE</div>
                <div class="brand-sub">Connect</div>
            </div>
        </div>

        <!-- Hero -->
        <div class="hero-text">
            <h1>Rejoignez<br><span class="orange">Ivoire</span> <span class="green">Gare Connect</span></h1>
            <div class="hero-divider"></div>
            <p>Créez votre compte et accédez à la plateforme intelligente de gestion des gares et du transport en Côte d'Ivoire.</p>

            <ul class="features">
                <li>
                    <div class="feature-icon green">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <span>Sécurisé, fiable et accessible à tout moment.</span>
                </li>
                <li>
                    <div class="feature-icon orange">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <span>Suivi en temps réel de vos activités.</span>
                </li>
                <li>
                    <div class="feature-icon teal">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <span>Une solution dédiée aux professionnels.</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- ════════════ RIGHT PANEL ════════════ -->
    <div class="right-panel">
        <div class="card">

            <!-- Avatar -->
            <div class="card__avatar">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                    <line x1="12" y1="3" x2="12" y2="1"/>
                    <line x1="14" y1="3.5" x2="15.5" y2="2"/>
                    <path d="M19 8h1M18.5 5.5l.7-.7"/>
                </svg>
            </div>

            <h2 class="card__title">Créer un compte</h2>
            <p class="card__subtitle">Remplissez le formulaire pour créer votre compte</p>

            <form method="POST" action="#" enctype="multipart/form-data" novalidate>
                @csrf

                <!-- Nom / Prénom -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <div class="input-wrap">
                            <span class="input-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            </span>
                            <input type="text" id="nom" name="nom" placeholder="Votre nom" value="{{ old('nom') }}" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <div class="input-wrap">
                            <span class="input-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            </span>
                            <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" value="{{ old('prenom') }}" required>
                        </div>
                    </div>
                </div>

                <!-- Email -->
                <div class="form-row full">
                    <div class="form-group">
                        <label for="email">Adresse email</label>
                        <div class="input-wrap">
                            <span class="input-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            </span>
                            <input type="email" id="email" name="email" placeholder="exemple@email.com" value="{{ old('email') }}" required>
                        </div>
                    </div>
                </div>

                <!-- Adresse / Téléphone -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="adresse">Adresse</label>
                        <div class="input-wrap">
                            <span class="input-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            </span>
                            <input type="text" id="adresse" name="adresse" placeholder="Votre adresse complète" value="{{ old('adresse') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telephone">Numéro de téléphone</label>
                        <div class="input-wrap">
                            <span class="input-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 2.18h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.16 6.16l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            </span>
                            <input type="tel" id="telephone" name="telephone" placeholder="+225 07 12 34 56 78" value="{{ old('telephone') }}">
                        </div>
                    </div>
                </div>

                <!-- Date naissance / Sexe -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="date_naissance">Date de naissance</label>
                        <div class="input-wrap">
                            <span class="input-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                            </span>
                            <input type="date" id="date_naissance" name="date_naissance" value="{{ old('date_naissance') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sexe">Sexe</label>
                        <div class="input-wrap select-wrap">
                            <span class="input-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                            </span>
                            <select id="sexe" name="sexe" required>
                                <option value="" disabled selected>Sélectionnez votre sexe</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Type pièce / Numéro pièce -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="type_piece">Type de pièce</label>
                        <div class="input-wrap select-wrap">
                            <span class="input-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
                            </span>
                            <select id="type_piece" name="type_piece" required>
                                <option value="" disabled selected>Sélectionnez le type de pièce</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="numero_piece">Numéro de pièce</label>
                        <div class="input-wrap">
                            <span class="input-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="5" width="20" height="14" rx="2"/><line x1="2" y1="10" x2="22" y2="10"/></svg>
                            </span>
                            <input type="text" id="numero_piece" name="numero_piece" placeholder="Numéro de la pièce" value="{{ old('numero_piece') }}">
                        </div>
                    </div>
                </div>

                <!-- CGU -->
                <div class="cgu-row">
                    <input type="checkbox" id="cgu" name="cgu" required>
                    <label for="cgu">
                        J'accepte les <a href="#" class="orange">conditions d'utilisation</a> et la <a href="#" class="green">politique de confidentialité</a>
                    </label>
                </div>

                <!-- Submit -->
                <button type="submit" class="btn-submit">Créer mon compte</button>
            </form>

            <div class="divider">ou</div>

            <p class="login-row">
                Vous avez déjà un compte ? <a href="{{ route('login') }}">Connectez-vous</a>
            </p>
        </div>

        <p class="footer">© 2024 Ivoire Gare Connect. Tous droits réservés.</p>
    </div>

</div>

<script>
    // Afficher le nom du fichier sélectionné dans la zone d'upload
    document.querySelectorAll('.upload-zone input[type="file"]').forEach(input => {
        input.addEventListener('change', function () {
            const zone = this.closest('.upload-zone');
            const textEl = zone.querySelector('.upload-text');
            if (this.files && this.files[0]) {
                textEl.textContent = this.files[0].name;
                zone.style.borderColor = '#F26522';
                zone.style.background  = '#fff8f5';
            }
        });
    });
</script>
</body>
</html>