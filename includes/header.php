<?php
require_once __DIR__ . '/../config.php';
$page_title = "Leader Club Vogtois (LCV) - Portail Officiel | Leadership & Innovation";
$page_description = "Leader Club Vogtois (LCV) - Organisation de référence au Cameroun œuvrant pour le leadership des jeunes, la réussite académique, l'innovation scientifique et les actions sociales d'impact.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Primary Meta Tags -->
  <title><?php echo $page_title; ?></title>
  <meta name="title" content="<?php echo $page_title; ?>">
  <meta name="description" content="<?php echo $page_description; ?>">
  <meta name="keywords" content="Leader Club Vogtois, LCV, Cameroun, Yaoundé, Leadership Jeunesse, Concours Mathématiques IT, Bourses d'étude, Association Cameroun">
  <meta name="author" content="Leader Club Vogtois">
  <meta name="robots" content="index, follow">
  <meta name="theme-color" content="#0F172A">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?php echo SITE_URL; ?>/assets/images/lcv-logo.png">
  <link rel="apple-touch-icon" href="<?php echo SITE_URL; ?>/assets/images/lcv-logo.png">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $page_title; ?>">
  <meta property="og:description" content="Catalyser le leadership et l'impact social des jeunes au Cameroun à travers l'excellence académique et la coopération communautaire.">
  <meta property="og:image" content="assets/images/hero-bg.png">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo $page_title; ?>">
  <meta name="twitter:description" content="Catalyser le leadership et l'impact social des jeunes au Cameroun.">
  <meta name="twitter:image" content="assets/images/hero-bg.png">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Stripe JS SDK -->
  <script src="https://js.stripe.com/v3/"></script>

  <!-- Main CSS File -->
  <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>

  <!-- Curtain Loader Overlay -->
  <div id="curtain-loader" class="curtain-loader">
    <div class="curtain curtain-left"></div>
    <div class="curtain curtain-right"></div>
    <div class="loader-content">
      <div class="loader-logo-wrapper">
        <img src="<?php echo SITE_URL; ?>/assets/images/lcv-logo.png" alt="Logo LCV" class="loader-logo">
      </div>
      <div class="loader-spinner"></div>
    </div>
  </div>

  <!-- Skip Link for Accessibility -->
  <a href="#main-content" class="skip-link">Aller au contenu principal</a>

  <!-- Top bar info -->
  <div class="top-bar">
    <div class="container top-bar-content">
      <div class="top-info">
        <span><i class="fa-solid fa-location-dot" aria-hidden="true"></i> Yaoundé, Cameroun</span>
        <span><i class="fa-solid fa-envelope" aria-hidden="true"></i> contact@leaderclubvogtois.org</span>
      </div>
      <div class="social-links">
        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Page Facebook Officielle"><i class="fa-brands fa-facebook" aria-hidden="true"></i></a>
        <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="Compte LinkedIn Officiel"><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a>
        <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" aria-label="Chaîne YouTube Officielle"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>

  <!-- Header Main -->
  <header class="header-main">
    <div class="container nav-wrapper">
      <!-- Groupement Logo + Bouton Hamburger côte à côte à gauche -->
      <div class="brand-group" style="display: flex; align-items: center; gap: 12px;">
        <button class="mobile-toggle" id="mobile-toggle-btn" aria-label="Basculer le menu de navigation" aria-expanded="false" aria-controls="primary-menu">
          <i class="fa-solid fa-bars" id="toggle-icon"></i>
        </button>

        <a href="accueil" class="brand-logo" aria-label="Accueil Leader Club Vogtois">
          <img src="<?php echo SITE_URL; ?>/assets/images/lcv-logo.png" alt="Logo Leader Club Vogtois" style="height: 50px; width: auto; max-width: 180px; object-fit: contain; display: inline-block; vertical-align: middle;">
          <div class="brand-text">
            <div class="brand-title">Leader Club Vogtois</div>
          </div>
        </a>
      </div>

      <!-- Backdrop Overlay pour fermer le menu mobile en cliquant n'importe où à l'extérieur -->
      <div id="mobile-menu-overlay" class="mobile-menu-overlay"></div>

      <!-- Menu Principal (Drawer latéral sur mobile, barre standard sur desktop) -->
      <ul class="main-menu" id="primary-menu">
        <li class="mobile-menu-header">
          <div style="display: flex; align-items: center; gap: 10px;">
            <img src="<?php echo SITE_URL; ?>/assets/images/lcv-logo.png" alt="Logo LCV" style="height: 38px;">
            <span style="font-weight: 700; color: var(--primary-yellow); font-size: 16px;">Leader Club Vogtois</span>
          </div>
          <button id="mobile-close-btn" class="mobile-close-btn" aria-label="Fermer le menu">
            <i class="fa-solid fa-xmark"></i>
          </button>
        </li>
        <li class="menu-item"><a href="accueil" class="<?php echo ($current_page == 'home') ? 'active' : ''; ?>">Accueil</a></li>
        <li class="menu-item"><a href="organisation" class="<?php echo ($current_page == 'about') ? 'active' : ''; ?>">Organisation</a></li>
        <li class="menu-item"><a href="actions" class="<?php echo ($current_page == 'actions') ? 'active' : ''; ?>">Nos Actions</a></li>
        <li class="menu-item"><a href="galerie" class="<?php echo ($current_page == 'gallery') ? 'active' : ''; ?>">Galerie Média</a></li>
        <li class="menu-item"><a href="contact" class="<?php echo ($current_page == 'contact') ? 'active' : ''; ?>">Contact</a></li>
      </ul>

      <div style="display: flex; gap: 10px; align-items: center;">
        <a href="don" class="btn btn-yellow" style="padding: 10px 16px; font-size: 13px;">
          <i class="fa-solid fa-heart" aria-hidden="true"></i> Faire un Don
        </a>
        <a href="rejoindre" class="btn btn-outline" style="padding: 10px 16px; font-size: 13px;">
          Rejoindre <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </header>

  <!-- Main Content Body -->
  <main id="main-content">
