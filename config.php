<?php
// Configuration globale de l'application & clés Stripe

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
