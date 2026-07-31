<?php
// Configuration globale de l'application & clés Stripe

// Protection par mot de passe après le 10 Août
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

define('ACCESS_EXPIRATION_DATE', '2026-08-10 23:59:59'); // Expiration fixée au 10 Août
define('ACCESS_PASSWORD', 'ejabbing88');

// Traitement du formulaire de mot de passe si soumis
$access_error = false;
if (isset($_POST['lcv_access_pass'])) {
    if ($_POST['lcv_access_pass'] === ACCESS_PASSWORD) {
        $_SESSION['lcv_authenticated'] = true;
    } else {
        $access_error = true;
    }
}

// Vérification de la date et du mot de passe
$current_time = time();
$expiration_time = strtotime(ACCESS_EXPIRATION_DATE);
$is_expired = $current_time > $expiration_time;

if ($is_expired && !isset($_SESSION['lcv_authenticated'])) {
    // Si la date limite du 10 Août est dépassée et non authentifié, afficher l'écran de verrouillage
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Accès Restreint | Leader Club Vogtois</title>
      <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
        body {
          background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%);
          height: 100vh;
          display: flex;
          align-items: center;
          justify-content: center;
          color: #FFFFFF;
          padding: 20px;
        }
        .lock-card {
          background: rgba(255, 255, 255, 0.04);
          border: 1px solid rgba(252, 191, 17, 0.3);
          border-radius: 24px;
          padding: 40px 32px;
          max-width: 440px;
          width: 100%;
          text-align: center;
          box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
          backdrop-filter: blur(12px);
        }
        .lock-icon {
          width: 70px;
          height: 70px;
          background: rgba(252, 191, 17, 0.15);
          border-radius: 50%;
          display: flex;
          align-items: center;
          justify-content: center;
          font-size: 28px;
          color: #FCBF11;
          margin: 0 auto 20px;
        }
        h2 { font-family: 'Plus Jakarta Sans', sans-serif; font-size: 24px; font-weight: 700; margin-bottom: 10px; }
        p { color: rgba(255, 255, 255, 0.7); font-size: 14px; line-height: 1.5; margin-bottom: 24px; }
        input[type="password"] {
          width: 100%;
          padding: 14px 18px;
          border-radius: 12px;
          border: 1px solid rgba(255, 255, 255, 0.2);
          background: rgba(255, 255, 255, 0.08);
          color: #FFFFFF;
          font-size: 15px;
          margin-bottom: 16px;
          outline: none;
          transition: border-color 0.3s;
        }
        input[type="password"]:focus { border-color: #FCBF11; }
        button {
          width: 100%;
          padding: 14px;
          border-radius: 12px;
          border: none;
          background: #FCBF11;
          color: #0F172A;
          font-weight: 700;
          font-size: 15px;
          cursor: pointer;
          transition: transform 0.2s, background 0.2s;
        }
        button:hover { background: #e5ab0d; transform: translateY(-2px); }
        .error-msg { color: #ef4444; font-size: 13px; margin-bottom: 12px; display: block; }
      </style>
    </head>
    <body>
      <div class="lock-card">
        <div class="lock-icon"><i class="fa-solid fa-lock"></i></div>
        <h2>Accès Démonstration Protégé</h2>
        <p>Le délai de consultation publique gratuite a expiré le 10 Août. Veuillez saisir le mot de passe d'accès pour continuer.</p>
        
        <?php if ($access_error): ?>
          <span class="error-msg"><i class="fa-solid fa-triangle-exclamation"></i> Mot de passe incorrect. Veuillez réentreprendre.</span>
        <?php endif; ?>

        <form method="POST">
          <input type="password" name="lcv_access_pass" placeholder="Entrez le mot de passe..." required autofocus>
          <button type="submit"><i class="fa-solid fa-key"></i> Déverrouiller l'Accès</button>
        </form>
      </div>
    </body>
    </html>
    <?php
    exit;
}

// Détection dynamique du domaine et protocole pour cPanel / Production
$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') ? 'https://' : 'http://';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost:8000';
$site_url = $protocol . $host;

// Utilisation des variables d'environnement ou valeurs par défaut sécurisées
define('STRIPE_PUBLIC_KEY', getenv('STRIPE_PUBLIC_KEY') ?: 'pk_test_YOUR_STRIPE_PUBLIC_KEY');
define('STRIPE_SECRET_KEY', getenv('STRIPE_SECRET_KEY') ?: 'sk_test_YOUR_STRIPE_SECRET_KEY');
define('STRIPE_DONATION_LINK', getenv('STRIPE_DONATION_LINK') ?: 'https://donate.stripe.com/test_00w00j4881wqdCC9Dc1VK01');

define('SITE_NAME', 'Leader Club Vogtois');
define('SITE_URL', $site_url);
?>
