<?php
$current_page = 'gallery';
$page_title = "Leader Club Vogtois (LCV) - Galerie Média & Immersion";
include 'includes/header.php';
?>

<section class="hero-banner" style="padding: 60px 0;">
  <div class="container">
    <h1 class="hero-title-large">Galerie <span>Photos & Vidéos</span></h1>
    <p class="hero-desc">Explorez en images les moments forts de nos événements et projets avec les communautés.</p>
  </div>
</section>

<section class="section-padding">
  <div class="container">
    <div class="gallery-filter" role="tablist" aria-label="Filtres Galerie Média">
      <button class="filter-btn active" data-filter="all" role="tab" aria-selected="true">Tous les Médias</button>
      <button class="filter-btn" data-filter="conferences" role="tab" aria-selected="false">Conférences</button>
      <button class="filter-btn" data-filter="concours" role="tab" aria-selected="false">Concours Scientifiques</button>
      <button class="filter-btn" data-filter="videos" role="tab" aria-selected="false">Réseaux & Partenariats</button>
    </div>

    <div class="gallery-grid" id="gallery-container">
      <div class="gallery-card" data-category="conferences" onclick="openLightbox('assets/images/event-leadership.png', 'Atelier de Formation au Leadership - Édition 2025 Yaoundé')">
        <img src="assets/images/event-leadership.png" alt="Atelier de Formation au Leadership">
        <div class="gallery-overlay">
          <h4>Atelier de Formation au Leadership</h4>
        </div>
      </div>

      <div class="gallery-card" data-category="concours" onclick="openLightbox('assets/images/event-math-it.png', 'Remise des Bourses d\'Équipement - Concours Math/IT')">
        <img src="assets/images/event-math-it.png" alt="Remise des Prix Math & IT">
        <div class="gallery-overlay">
          <h4>Remise des Bourses d'Équipement</h4>
        </div>
      </div>

      <div class="gallery-card" data-category="videos" onclick="openLightbox('assets/images/hero-bg.png', 'Session de Networking Associatif - Partenariats Stratégiques')">
        <img src="assets/images/hero-bg.png" alt="Rencontre Partenaires">
        <div class="gallery-overlay">
          <h4>Session de Networking Associatif</h4>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
