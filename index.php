<?php
$current_page = 'home';
$page_title = "Leader Club Vogtois (LCV) - Accueil | Leadership & Innovation";
include 'includes/header.php';
?>

<!-- Section: Hero Banner -->
<section class="hero-banner">
  <div class="container">
    <div style="max-width: 750px;">
      <div class="badge-tag"><i class="fa-solid fa-award" aria-hidden="true"></i> Leader de l'Innovation Associative au Cameroun</div>
      <h1 class="hero-title-large">
        Catalyser le <span>Leadership</span> et l'Impact Social des Jeunes.
      </h1>
      <p class="hero-desc">
        Le Leader Club Vogtois (LCV) réunit les acteurs du changement, promeut l'excellence académique et déploie des initiatives à fort impact pour renforcer le développement communautaire.
      </p>
      <div style="display: flex; gap: 16px; flex-wrap: wrap;">
        <a href="actions.php" class="btn btn-yellow">Découvrir nos Actions</a>
        <a href="about.php" class="btn btn-outline" style="color: white; border-color: white;">L'Organisation</a>
      </div>
    </div>
  </div>
</section>

<!-- Section: Statistiques d'Impact -->
<section style="background: var(--dark-navy); padding: 40px 0; border-bottom: 4px solid var(--primary-yellow);">
  <div class="container">
    <div class="grid-4" style="text-align: center; color: white;">
      <div>
        <div style="font-size: 40px; font-weight: 800; color: var(--primary-yellow);">15+</div>
        <p style="font-size: 14px; opacity: 0.8;">Années d'Excellence</p>
      </div>
      <div>
        <div style="font-size: 40px; font-weight: 800; color: var(--primary-lime);">2,500+</div>
        <p style="font-size: 14px; opacity: 0.8;">Jeunes Impactés</p>
      </div>
      <div>
        <div style="font-size: 40px; font-weight: 800; color: var(--primary-yellow);">40+</div>
        <p style="font-size: 14px; opacity: 0.8;">Établissements Partenaires</p>
      </div>
      <div>
        <div style="font-size: 40px; font-weight: 800; color: var(--primary-lime);">100%</div>
        <p style="font-size: 14px; opacity: 0.8;">Engagement Communautaire</p>
      </div>
    </div>
  </div>
</section>

<!-- Section: Nos Piliers & Actions majeurs -->
<section class="section-padding">
  <div class="container">
    <div class="section-header" style="text-align: center; max-width: 700px; margin: 0 auto 48px;">
      <div class="badge-tag"><i class="fa-solid fa-layer-group" aria-hidden="true"></i> Domaines d'Intervention</div>
      <h2 style="font-size: 36px; color: var(--dark-navy); margin-top: 10px;">Des projets structurants pour former l'élite de demain</h2>
      <p style="color: var(--text-muted); font-size: 16px; margin-top: 12px;">Notre action repose sur trois axes fondamentaux combinant rigueur académique, leadership et entraide associative.</p>
    </div>

    <div class="grid-3">
      <div class="card-item">
        <img src="assets/images/event-math-it.png" class="card-img" alt="Remise des prix du Concours Mathématiques et IT">
        <div class="card-body">
          <h3 class="card-title">Concours Mathématiques & IT</h3>
          <p class="card-text">Stimuler l'excellence scientifique chez les jeunes étudiants avec la remise de prix et bourses d'études.</p>
          <a href="actions.php" class="btn btn-dark" style="padding: 8px 18px; font-size: 13px;">Voir le programme</a>
        </div>
      </div>

      <div class="card-item">
        <img src="assets/images/event-leadership.png" class="card-img" alt="Conférence Annuelle LCV sur le Leadership">
        <div class="card-body">
          <h3 class="card-title">Conférence Annuelle LCV</h3>
          <p class="card-text">Plateforme stratégique réunissant experts, gouvernance et acteurs civils pour créer des coopérations durables.</p>
          <a href="actions.php" class="btn btn-dark" style="padding: 8px 18px; font-size: 13px;">Voir les détails</a>
        </div>
      </div>

      <div class="card-item">
        <img src="assets/images/hero-bg.png" class="card-img" alt="Session d'incubation et mentorat d'associations">
        <div class="card-body">
          <h3 class="card-title">Incubateur Associatif</h3>
          <p class="card-text">Mentorat personnalisé et renforcement des capacités pour les nouvelles associations émergentes.</p>
          <a href="actions.php" class="btn btn-dark" style="padding: 8px 18px; font-size: 13px;">Rejoindre l'incubateur</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Mot du Président -->
<section class="section-padding" style="background: var(--white); border-top: 1px solid rgba(15, 23, 42, 0.06); border-bottom: 1px solid rgba(15, 23, 42, 0.06);">
  <div class="container">
    <div class="grid-2" style="align-items: center; gap: 60px;">
      <div style="position: relative;">
        <div style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); border: 4px solid var(--primary-yellow);">
          <img src="lcv_president.png" alt="Président du Leader Club Vogtois" style="width: 100%; height: 440px; object-fit: cover; display: block;">
        </div>
        <div style="position: absolute; bottom: -20px; right: -20px; background: var(--dark-navy); color: var(--white); padding: 18px 24px; border-radius: var(--radius-md); box-shadow: var(--shadow-md); border-left: 4px solid var(--primary-lime);">
          <h4 style="font-size: 16px; font-weight: 800; color: var(--primary-yellow);">Président du LCV</h4>
          <p style="font-size: 13px; opacity: 0.8;">Leader Club Vogtois</p>
        </div>
      </div>

      <div>
        <div class="badge-tag"><i class="fa-solid fa-quote-left" aria-hidden="true"></i> Message de la Présidence</div>
        <h2 style="font-size: 38px; margin-bottom: 24px; color: var(--dark-navy); line-height: 1.2;">"Façonner l'avenir par un leadership éthique et engagé"</h2>
        <p style="font-size: 16px; color: var(--text-muted); margin-bottom: 20px; line-height: 1.7;">
          Bienvenue sur le portail officiel du Leader Club Vogtois. Notre ambition est de rassembler les synergies de la jeunesse et des partenaires pour créer un impact concret dans l'éducation, la technologie et l'entrepreneuriat communautaire.
        </p>
        <p style="font-size: 15px; color: var(--text-muted); margin-bottom: 32px;">
          Chaque initiative que nous portons s'appuie sur la rigueur, l'excellence et la responsabilité sociale. Ensemble, continuons à construire des ponts pour l'avenir.
        </p>
        <div style="display: flex; gap: 16px; flex-wrap: wrap;">
          <a href="#" class="btn btn-yellow" onclick="alert('Biographie du Président : Diplômé de haut niveau en ingénierie et management des organisations, passionné d\'innovation sociale au Cameroun.'); return false;">
            Découvrir ma Biographie <i class="fa-solid fa-user-tie" aria-hidden="true"></i>
          </a>
          <a href="about.php" class="btn btn-dark">
            Voir l'Organisation <i class="fa-solid fa-sitemap" aria-hidden="true"></i>
          </a>
          <a href="contact.php" class="btn btn-outline">
            Demander une Audience <i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Vidéo Institutionnelle du Projet -->
<section class="section-padding" style="background: var(--dark-navy); color: var(--white);">
  <div class="container">
    <div class="section-header" style="text-align: center; max-width: 750px; margin: 0 auto 48px;">
      <div class="badge-tag" style="background: rgba(252, 191, 17, 0.2); color: var(--primary-yellow); border-color: var(--primary-yellow);"><i class="fa-solid fa-film" aria-hidden="true"></i> Présentation Vidéo</div>
      <h2 style="font-size: 36px; color: var(--white); margin-top: 12px;">Découvrez le projet global présenté par le Président</h2>
      <p style="color: rgba(255, 255, 255, 0.7); font-size: 16px; margin-top: 12px;">Une immersion au cœur de nos engagements, de nos réalisations académiques et de nos perspectives communautaires.</p>
    </div>

    <div style="max-width: 900px; margin: 0 auto; position: relative; border-radius: var(--radius-lg); overflow: hidden; box-shadow: 0 25px 50px rgba(0,0,0,0.5); border: 2px solid rgba(252, 191, 17, 0.3);">
      <div style="position: relative; width: 100%; padding-bottom: 56.25%; background: #000;">
        <iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: none;" src="https://www.youtube-nocookie.com/embed/dQw4w9WgXcQ?controls=1" title="Vidéo de présentation du projet LCV" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div style="background: var(--dark-card); padding: 20px 28px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
        <div style="display: flex; align-items: center; gap: 12px;">
          <i class="fa-solid fa-circle-play" style="color: var(--primary-yellow); font-size: 24px;" aria-hidden="true"></i>
          <span style="font-weight: 600; font-size: 15px;">Vidéo Institutionnelle Officielle 2026</span>
        </div>
        <a href="contact.php" class="btn btn-yellow" style="padding: 8px 20px; font-size: 13px;">
          Soutenir ce Projet <i class="fa-solid fa-heart" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Section: Aperçu Galerie Photos & Vidéos -->
<section class="section-padding">
  <div class="container">
    <div style="display: flex; justify-content: space-between; align-items: flex-end; margin-bottom: 48px; flex-wrap: wrap; gap: 20px;">
      <div>
        <div class="badge-tag"><i class="fa-solid fa-camera-retro" aria-hidden="true"></i> Galerie & Immersion</div>
        <h2 style="font-size: 36px; color: var(--dark-navy);">Nos moments forts en images</h2>
      </div>
      <a href="gallery.php" class="btn btn-yellow">
        Voir plus dans la Galerie <i class="fa-solid fa-images" aria-hidden="true"></i>
      </a>
    </div>

    <div class="grid-3">
      <div class="card-item" style="cursor: pointer;" onclick="window.location.href='gallery.php'">
        <img src="assets/images/event-leadership.png" class="card-img" alt="Atelier Leadership">
        <div class="card-body">
          <span style="font-size: 12px; font-weight: 700; color: var(--primary-yellow); text-transform: uppercase; letter-spacing: 1px;">Conférences</span>
          <h4 style="font-size: 18px; margin-top: 6px; color: var(--dark-navy);">Atelier de Formation au Leadership</h4>
          <p style="font-size: 14px; color: var(--text-muted); margin-top: 8px;">Session interactive avec les jeunes cadres et délégués régionaux.</p>
        </div>
      </div>

      <div class="card-item" style="cursor: pointer;" onclick="window.location.href='gallery.php'">
        <img src="assets/images/event-math-it.png" class="card-img" alt="Remise des Prix Math">
        <div class="card-body">
          <span style="font-size: 12px; font-weight: 700; color: var(--primary-yellow); text-transform: uppercase; letter-spacing: 1px;">Édition Académique</span>
          <h4 style="font-size: 18px; margin-top: 6px; color: var(--dark-navy);">Cérémonie des Lauréats Math & IT</h4>
          <p style="font-size: 14px; color: var(--text-muted); margin-top: 8px;">Distribution de bourses et kits informatiques aux écoles lauréates.</p>
        </div>
      </div>

      <div class="card-item" style="cursor: pointer;" onclick="window.location.href='gallery.php'">
        <img src="assets/images/hero-bg.png" class="card-img" alt="Partenariats Stratégiques">
        <div class="card-body">
          <span style="font-size: 12px; font-weight: 700; color: var(--primary-yellow); text-transform: uppercase; letter-spacing: 1px;">Coopération</span>
          <h4 style="font-size: 18px; margin-top: 6px; color: var(--dark-navy);">Rencontre des Partenaires Institutionnels</h4>
          <p style="font-size: 14px; color: var(--text-muted); margin-top: 8px;">Synergie pour le développement des projets d'inclusion sociale.</p>
        </div>
      </div>
    </div>

    <!-- CTA Banner après Galerie -->
    <div style="margin-top: 56px; background: linear-gradient(135deg, var(--dark-navy) 0%, #1e293b 100%); border-radius: var(--radius-lg); padding: 40px; color: var(--white); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 24px; box-shadow: var(--shadow-lg); border-left: 6px solid var(--primary-yellow);">
      <div style="max-width: 600px;">
        <span class="badge-tag" style="background: rgba(252, 191, 17, 0.2); color: var(--primary-yellow); border-color: var(--primary-yellow); margin-bottom: 12px; display: inline-block;">Rejoignez le Mouvement</span>
        <h3 style="font-size: 28px; color: var(--white); margin-bottom: 10px;">Prêt à contribuer au rayonnement de notre jeunesse ?</h3>
        <p style="color: rgba(255, 255, 255, 0.8); font-size: 15px; margin: 0;">Que vous souhaitiez devenir membre, parrainer une bourse d'étude ou apporter votre expertise, votre engagement fait la différence.</p>
      </div>
      <div style="display: flex; gap: 16px; flex-wrap: wrap;">
        <a href="contact.php?form=join" class="btn btn-yellow">
          Rejoindre le Club <i class="fa-solid fa-user-plus" aria-hidden="true"></i>
        </a>
        <a href="donate.php" class="btn btn-outline" style="border-color: rgba(255,255,255,0.4); color: white;">
          Faire un Don / Parrainer <i class="fa-solid fa-hand-holding-heart" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
