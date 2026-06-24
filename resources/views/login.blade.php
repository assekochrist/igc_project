<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Connexion – Ivoire Gare Connect</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>
<body>

<div class="page">

    <!-- ═══════════════ LEFT PANEL ═══════════════ -->
    <div class="left-panel">
        <div class="left-panel__bg"></div>

        <!-- Courbe arrondie + bande dégradée sur le bord droit -->
        <svg class="left-panel__curve-svg" viewBox="0 0 80 800" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="stripeGrad" x1="0" y1="0" x2="0" y2="1" gradientUnits="objectBoundingBox">
                    <stop offset="0%"   stop-color="#F26522"/>
                    <stop offset="100%" stop-color="#2E7D32"/>
                </linearGradient>
                <!-- Masque pour découper la photo avec la courbe -->
                <clipPath id="curveClip">
                    <path d="M0,0 L60,0 Q80,400 60,800 L0,800 Z"/>
                </clipPath>
            </defs>
            <!-- Zone blanche (fond de la page droite) qui "efface" le coin du left panel -->
            <path d="M60,0 Q80,400 60,800 L80,800 L80,0 Z" fill="#F9FAFB"/>
            <!-- Bande dégradée orange → vert sur la courbe -->
            <path d="M57,0 Q79,400 57,800 L63,800 Q81,400 63,0 Z" fill="url(#stripeGrad)"/>
        </svg>

        <!-- Logo -->
        <div class="logo">
            <div class="logo__icon">
                <!-- Bus + pin icon -->
                <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 4C17.373 4 12 9.373 12 16c0 9 12 24 12 24s12-15 12-24c0-6.627-5.373-12-12-12z" fill="#F26522"/>
                    <path d="M24 4C17.373 4 12 9.373 12 16c0 9 12 24 12 24s12-15 12-24c0-6.627-5.373-12-12-12z" fill="url(#pinGrad)"/>
                    <rect x="16" y="11" width="16" height="11" rx="2" fill="#2E7D32"/>
                    <rect x="17" y="12" width="6" height="4" rx="1" fill="#A5D6A7"/>
                    <rect x="25" y="12" width="6" height="4" rx="1" fill="#A5D6A7"/>
                    <circle cx="18.5" cy="23.5" r="1.5" fill="#1A2332"/>
                    <circle cx="29.5" cy="23.5" r="1.5" fill="#1A2332"/>
                    <defs>
                        <linearGradient id="pinGrad" x1="12" y1="4" x2="36" y2="40" gradientUnits="userSpaceOnUse">
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
            <h1>Bienvenue sur<br><span class="orange">Ivoire</span> <span class="green">Gare Connect</span></h1>
            <div class="hero-divider"></div>
            <p>La plateforme intelligente de gestion des gares et du transport en Côte d'Ivoire.</p>

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

    <!-- ═══════════════ RIGHT PANEL ═══════════════ -->
    <div class="right-panel">

        <div class="card">
            <!-- Avatar -->
            <div class="card__avatar">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
            </div>

            <h2 class="card__title">Connexion</h2>
            <p class="card__subtitle">Connectez-vous à votre compte</p>

            <!-- Error alert (shown on failed login) -->
            <div class="alert {{ $errors->any() ? 'show' : '' }}" id="alert-error">
                @if($errors->any())
                    {{ $errors->first() }}
                @else
                    Identifiants invalides. Veuillez réessayer.
                @endif
            </div>

            <!-- Login form -->
            <form method="POST" action="{{ route('login') }}" id="loginForm" novalidate>
                @csrf

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <div class="input-wrap">
                        <span class="input-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </span>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="exemple@email.com"
                            value="{{ old('email') }}"
                            autocomplete="email"
                            required
                        >
                    </div>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <div class="input-wrap">
                        <span class="input-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                        </span>
                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="••••••••"
                            autocomplete="current-password"
                            required
                        >
                        
                    </div>
                </div>

                <!-- Remember + Forgot -->
                <div class="form-options">
                    <label class="remember">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span>Se souvenir de moi</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgot">Mot de passe oublié ?</a>
                    @else
                        <a href="#" class="forgot">Mot de passe oublié ?</a>
                    @endif
                </div>

                <!-- Submit -->
                <button type="submit" class="btn-submit" id="submitBtn">
                    <span class="btn-text">Se connecter</span>
                    <div class="spinner"></div>
                </button>
            </form>

            <div class="divider">ou</div>

            <p class="register-row">
                Vous n'avez pas de compte ?
                <a href="mailto:admin@ivoiregare.ci">Contactez l'administrateur</a>
            </p>
        </div>

        <p class="footer">© 2024 Ivoire Gare Connect. Tous droits réservés.</p>
    </div>

</div>

<script>
    // ── Toggle password visibility ──
    const togglePw  = document.getElementById('togglePw');
    const pwInput   = document.getElementById('password');
    const eyeOpen   = document.getElementById('eyeOpen');
    const eyeClosed = document.getElementById('eyeClosed');

    togglePw.addEventListener('click', () => {
        const isPassword = pwInput.type === 'password';
        pwInput.type     = isPassword ? 'text' : 'password';
        eyeOpen.style.display   = isPassword ? 'none'  : '';
        eyeClosed.style.display = isPassword ? ''      : 'none';
    });

    // ── Loading state on submit ──
    document.getElementById('loginForm').addEventListener('submit', function (e) {
        const btn = document.getElementById('submitBtn');
        btn.classList.add('loading');
        btn.disabled = true;
        // Re-enable after 8s as safety net
        setTimeout(() => { btn.classList.remove('loading'); btn.disabled = false; }, 8000);
    });
</script>

</body>
</html>