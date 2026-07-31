<?php
$current_page = 'thank-you';
$page_title = "Leader Club Vogtois (LCV) - Merci pour votre Générosité !";

include 'includes/header.php';
?>

<section class="hero-banner" style="padding: 70px 0; background: linear-gradient(135deg, var(--dark-navy) 0%, #1e293b 100%); text-align: center;">
  <div class="container" style="max-width: 800px;">
    
    <!-- Animated Heart Badge -->
    <div style="width: 90px; height: 90px; border-radius: 50%; background: rgba(252, 191, 17, 0.2); border: 2px solid var(--primary-yellow); display: flex; align-items: center; justify-content: center; margin: 0 auto 24px; font-size: 42px; color: var(--primary-yellow); box-shadow: 0 0 30px rgba(252, 191, 17, 0.4);">
      <i class="fa-solid fa-heart"></i>
    </div>

    <span class="badge-tag" style="background: rgba(219, 221, 34, 0.2); color: var(--primary-lime); border-color: var(--primary-lime); margin-bottom: 16px;">
      <i class="fa-solid fa-circle-check"></i> Don Confirmé avec Succès
    </span>

    <h1 class="hero-title-large" style="color: var(--white); font-size: 48px; margin-bottom: 16px;">
      Merci Infiniment pour votre <span>Soutien</span> !
    </h1>
    
    <p class="hero-desc" style="margin: 0 auto 32px; max-width: 650px; font-size: 18px; color: rgba(255, 255, 255, 0.85);">
      Votre contribution permet au Leader Club Vogtois de financer directement les bourses d'études académiques, d'offrir des équipements informatiques aux écoles et de former l'élite de demain.
    </p>

    <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
      <a href="index.php" class="btn btn-yellow">
        Retourner à l'Accueil <i class="fa-solid fa-house"></i>
      </a>
      <a href="actions.php" class="btn btn-outline" style="border-color: rgba(255,255,255,0.4); color: white;">
        Découvrir nos Actions <i class="fa-solid fa-award"></i>
      </a>
    </div>

  </div>
</section>

<section class="section-padding">
  <div class="container" style="max-width: 900px;">
    
    <!-- Encadré Récapitulatif & Prochaines Étapes -->
    <div class="card-item" style="padding: 40px; background: white; border-radius: var(--radius-lg); box-shadow: var(--shadow-md);">
      <h3 style="font-size: 24px; color: var(--dark-navy); margin-bottom: 20px; border-bottom: 2px solid var(--primary-yellow); padding-bottom: 10px;">
        <i class="fa-solid fa-envelope-open-text" style="color: var(--primary-yellow);"></i> Ce qui se passe ensuite :
      </h3>

      <div class="grid-3" style="margin-bottom: 30px;">
        <div style="text-align: center; padding: 16px;">
          <div style="font-size: 28px; color: var(--dark-navy); margin-bottom: 10px;"><i class="fa-solid fa-receipt"></i></div>
          <h4 style="font-size: 16px; margin-bottom: 6px;">Reçu Instantané</h4>
          <p style="font-size: 13px; color: var(--text-muted);">Un reçu de paiement officiel Stripe a été envoyé à votre adresse email.</p>
        </div>

        <div style="text-align: center; padding: 16px;">
          <div style="font-size: 28px; color: var(--dark-navy); margin-bottom: 10px;"><i class="fa-solid fa-chart-line"></i></div>
          <h4 style="font-size: 16px; margin-bottom: 6px;">Transparence d'Impact</h4>
          <p style="font-size: 13px; color: var(--text-muted);">Vous recevrez notre rapport annuel de distribution des bourses et récompenses.</p>
        </div>

        <div style="text-align: center; padding: 16px;">
          <div style="font-size: 28px; color: var(--dark-navy); margin-bottom: 10px;"><i class="fa-solid fa-user-shield"></i></div>
          <h4 style="font-size: 16px; margin-bottom: 6px;">Membre d'Honneur</h4>
          <p style="font-size: 13px; color: var(--text-muted);">Vous êtes invité d'honneur à la prochaine grande Conférence LCV du Leadership.</p>
        </div>
      </div>

      <!-- Citation de remerciement du président -->
      <div style="background: var(--bg-light); border-left: 4px solid var(--primary-yellow); padding: 20px 24px; border-radius: var(--radius-sm);">
        <p style="font-style: italic; font-size: 15px; color: var(--dark-navy); margin-bottom: 10px;">
          "Grâce à des bienfaiteurs comme vous, nous faisons reculer les barrières financières pour permettre aux jeunes talents d'exceller dans les sciences et le leadership."
        </p>
        <span style="font-weight: 700; font-size: 14px; color: var(--dark-navy);">— Le Bureau Exécutif du Leader Club Vogtois</span>
      </div>

    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
