<?php
$current_page = 'contact';
$page_title = "Leader Club Vogtois (LCV) - Formulaires & Candidatures";

// Détection de l'onglet actif via GET (par défaut: join)
$active_form = isset($_GET['form']) ? $_GET['form'] : 'join';

$form_submitted = false;
$success_message = "";
$submitted_form_type = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form_type = filter_input(INPUT_POST, 'form_type', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $active_form = $form_type ? $form_type : 'join';
    $submitted_form_type = $form_type;
    $form_submitted = true;

    switch ($form_type) {
        case 'join':
            $success_message = "Votre demande d'adhésion au Leader Club Vogtois a été enregistrée avec succès. Notre pôle recrutement vous recontactera sous 48h.";
            break;
        case 'partner':
            $success_message = "Votre proposition de partenariat institutionnel/entreprise a été transmise au bureau exécutif. Merci pour votre confiance !";
            break;
        case 'sponsor':
            $success_message = "Votre demande de parrainage de projet / bourse d'étude a été reçue avec succès. Nos équipes vont vous transmettre le dossier d'accompagnement.";
            break;
        case 'general':
        default:
            $success_message = "Votre message general a été bien transmis à l'équipe du LCV. Nous vous répondrons dans les plus brefs délais.";
            break;
    }
}

include 'includes/header.php';
?>

<section class="hero-banner" style="padding: 60px 0;">
  <div class="container">
    <h1 class="hero-title-large">Formulaires & <span>Candidatures</span></h1>
    <p class="hero-desc">Sélectionnez le formulaire correspondant à votre démarche pour une prise en charge rapide et personnalisée.</p>
  </div>
</section>

<section class="section-padding">
  <div class="container">
    
    <!-- Choix du Type de Formulaire -->
    <div style="display: flex; gap: 12px; justify-content: center; margin-bottom: 40px; flex-wrap: wrap;">
      <a href="contact?form=join" class="btn <?php echo ($active_form == 'join') ? 'btn-yellow' : 'btn-outline'; ?>" style="padding: 12px 24px; font-size: 14px;">
        <i class="fa-solid fa-user-plus"></i> Nous Rejoindre (Adhésion)
      </a>
      <a href="contact?form=partner" class="btn <?php echo ($active_form == 'partner') ? 'btn-yellow' : 'btn-outline'; ?>" style="padding: 12px 24px; font-size: 14px;">
        <i class="fa-solid fa-handshake"></i> Devenir Partenaire
      </a>
      <a href="contact?form=sponsor" class="btn <?php echo ($active_form == 'sponsor') ? 'btn-yellow' : 'btn-outline'; ?>" style="padding: 12px 24px; font-size: 14px;">
        <i class="fa-solid fa-graduation-cap"></i> Parrainer une Bourse
      </a>
      <a href="contact?form=general" class="btn <?php echo ($active_form == 'general') ? 'btn-yellow' : 'btn-outline'; ?>" style="padding: 12px 24px; font-size: 14px;">
        <i class="fa-solid fa-paper-plane"></i> Contact Général
      </a>
    </div>

    <div class="grid-2" style="align-items: start;">
      <div>
        <div class="badge-tag">
          <?php 
            if ($active_form == 'join') echo '<i class="fa-solid fa-user-plus"></i> Recrutement & Adhésion';
            elseif ($active_form == 'partner') echo '<i class="fa-solid fa-handshake"></i> Coopération Institutionnelle';
            elseif ($active_form == 'sponsor') echo '<i class="fa-solid fa-hand-holding-heart"></i> Mécénat & Bourses';
            else echo '<i class="fa-solid fa-envelope"></i> Information & Support';
          ?>
        </div>
        
        <?php if ($active_form == 'join'): ?>
          <h2 style="font-size: 32px; margin-bottom: 20px;">Rejoignez une communauté de leaders passionnés</h2>
          <p style="color: var(--text-muted); margin-bottom: 24px;">En devenant membre du Leader Club Vogtois, vous participez activement à des projets académiques, des conférences stratégiques et des programmes d'impact social au Cameroun.</p>
          <ul style="list-style: none; padding: 0; line-height: 2; color: var(--dark-navy); font-weight: 600; margin-bottom: 30px;">
            <li><i class="fa-solid fa-check-circle" style="color: var(--primary-yellow);"></i> Accès prioritaire aux ateliers & formations</li>
            <li><i class="fa-solid fa-check-circle" style="color: var(--primary-yellow);"></i> Réseau professionnel des anciens membres</li>
            <li><i class="fa-solid fa-check-circle" style="color: var(--primary-yellow);"></i> Attestation d'engagement associatif</li>
          </ul>

        <?php elseif ($active_form == 'partner'): ?>
          <h2 style="font-size: 32px; margin-bottom: 20px;">Co-construisons des initiatives durables</h2>
          <p style="color: var(--text-muted); margin-bottom: 24px;">Nous collaborons avec des ministères, universités, entreprises et ONG pour structurer des programmes sur-mesure répondant aux défis éducatifs et technologiques.</p>
          <ul style="list-style: none; padding: 0; line-height: 2; color: var(--dark-navy); font-weight: 600; margin-bottom: 30px;">
            <li><i class="fa-solid fa-check-circle" style="color: var(--primary-yellow);"></i> Visibilité de marque sur nos événements</li>
            <li><i class="fa-solid fa-check-circle" style="color: var(--primary-yellow);"></i> Co-organisation de conférences et concours</li>
            <li><i class="fa-solid fa-check-circle" style="color: var(--primary-yellow);"></i> Rapport RSE et d'impact audité</li>
          </ul>

        <?php elseif ($active_form == 'sponsor'): ?>
          <h2 style="font-size: 32px; margin-bottom: 20px;">Offrez des opportunités aux jeunes talents</h2>
          <p style="color: var(--text-muted); margin-bottom: 24px;">Parrainez des prix de concours scientifiques, offrez des équipements informatiques ou financez des bourses d'études destinées aux étudiants méritants.</p>
          <ul style="list-style: none; padding: 0; line-height: 2; color: var(--dark-navy); font-weight: 600; margin-bottom: 30px;">
            <li><i class="fa-solid fa-check-circle" style="color: var(--primary-yellow);"></i> Attribution nominative des bourses octroyées</li>
            <li><i class="fa-solid fa-check-circle" style="color: var(--primary-yellow);"></i> Suivi personnalisé des laureats accompagnés</li>
            <li><i class="fa-solid fa-check-circle" style="color: var(--primary-yellow);"></i> Invitation d'honneur aux cérémonies officielles</li>
          </ul>

        <?php else: ?>
          <h2 style="font-size: 32px; margin-bottom: 20px;">Une question ? Notre équipe vous répond</h2>
          <p style="color: var(--text-muted); margin-bottom: 24px;">Pour toute demande de renseignement d'ordre général, d'interview presse ou d'information institutionnelle, n'hésitez pas à nous écrire.</p>
          <div style="margin-bottom: 20px;">
            <h4><i class="fa-solid fa-map-pin" style="color: var(--primary-yellow);" aria-hidden="true"></i> Siège social</h4>
            <p style="color: var(--text-muted);">Yaoundé, Cameroun</p>
          </div>
          <div style="margin-bottom: 20px;">
            <h4><i class="fa-solid fa-envelope" style="color: var(--primary-yellow);" aria-hidden="true"></i> Courriel Officiel</h4>
            <p style="color: var(--text-muted);">contact@leaderclubvogtois.org</p>
          </div>
        <?php endif; ?>

        <div style="background: var(--dark-navy); color: white; padding: 24px; border-radius: var(--radius-md); margin-top: 20px;">
          <h4 style="color: var(--primary-yellow); margin-bottom: 8px;"><i class="fa-solid fa-headset"></i> Besoins d'assistance directe ?</h4>
          <p style="font-size: 14px; opacity: 0.9; margin: 0;">Contactez directement le secrétariat général via WhatsApp ou téléphone au <strong>(+237) 600 00 00 00</strong>.</p>
        </div>
      </div>

      <!-- Bloc Formulaire Dynamique -->
      <div class="card-item" style="padding: 36px; background: white; box-shadow: var(--shadow-md);">
        
        <?php if ($form_submitted): ?>
          <div style="background: #dcfce7; color: #166534; padding: 20px; border-radius: var(--radius-md); margin-bottom: 24px; border: 1px solid #bbf7d0;">
            <h4 style="font-size: 18px; margin-bottom: 8px;"><i class="fa-solid fa-circle-check"></i> Formulaire transmis !</h4>
            <p style="font-size: 14px; margin: 0; line-height: 1.5;"><?php echo $success_message; ?></p>
          </div>
        <?php endif; ?>

        <!-- Formulaire 1 : Nous Rejoindre -->
        <?php if ($active_form == 'join'): ?>
          <h3 style="margin-bottom: 20px; color: var(--dark-navy); border-bottom: 2px solid var(--primary-yellow); padding-bottom: 10px;">
            Formulaire d'Adhésion / Membre
          </h3>
          <form action="contact.php?form=join" method="POST">
            <input type="hidden" name="form_type" value="join">
            <div style="margin-bottom: 16px;">
              <label for="join-name" style="display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px;">Nom et Prénom *</label>
              <input type="text" id="join-name" name="name" required style="width: 100%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
              <div>
                <label for="join-email" style="display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px;">Adresse Email *</label>
                <input type="email" id="join-email" name="email" required style="width: 100%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1;">
              </div>
              <div>
                <label for="join-phone" style="display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px;">Téléphone / WhatsApp *</label>
                <input type="tel" id="join-phone" name="phone" required placeholder="+237 ..." style="width: 100%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1;">
              </div>
            </div>
            <div style="margin-bottom: 16px;">
              <label for="join-status" style="display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px;">Statut Actuel</label>
              <select id="join-status" name="status" style="width: 100%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1; background: white;">
                <option value="etudiant">Étudiant(e)</option>
                <option value="jeune_professionnel">Jeune Professionnel(le)</option>
                <option value="ancien_vogt">Ancien Élève / Alumni</option>
                <option value="autre">Autre profil</option>
              </select>
            </div>
            <div style="margin-bottom: 20px;">
              <label for="join-motivation" style="display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px;">Vos Motivations & Domaines d'intérêt *</label>
              <textarea id="join-motivation" name="motivation" rows="4" required placeholder="Expliquez brièvement ce qui vous motive à intégrer le LCV..." style="width: 100%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1;"></textarea>
            </div>
            <button type="submit" class="btn btn-yellow" style="width: 100%; justify-content: center;">
              Soumettre ma Candidature <i class="fa-solid fa-paper-plane"></i>
            </button>
          </form>

        <!-- Formulaire 2 : Devenir Partenaire -->
        <?php elseif ($active_form == 'partner'): ?>
          <h3 style="margin-bottom: 20px; color: var(--dark-navy); border-bottom: 2px solid var(--primary-yellow); padding-bottom: 10px;">
            Demande de Partenariat Institutionnel
          </h3>
          <form action="contact.php?form=partner" method="POST">
            <input type="hidden" name="form_type" value="partner">
            <div style="margin-bottom: 16px;">
              <label for="partner-org" style="display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px;">Nom de l'Organisation / Entreprise *</label>
              <input type="text" id="partner-org" name="organization" required style="width: 100%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
              <div>
                <label for="partner-contact" style="display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px;">Nom du Représentant *</label>
                <input type="text" id="partner-contact" name="contact_person" required style="width: 100%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1;">
              </div>
              <div>
                <label for="partner-type" style="display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px;">Type de Partenariat</label>
                <select id="partner-type" name="partnership_type" style="width: 100%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1; background: white;">
                  <option value="institutionnel">Institutionnel / Étatique</option>
                  <option value="entreprise">Entreprise Privée / RSE</option>
                  <option value="academique">Établissement Académique</option>
                  <option value="media">Média / Communication</option>
                </select>
              </div>
            </div>
            <div style="margin-bottom: 16px;">
              <label for="partner-email" style="display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px;">Adresse Email Professionnelle *</label>
              <input type="email" id="partner-email" name="email" required style="width: 100%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1;">
            </div>
            <div style="margin-bottom: 20px;">
              <label for="partner-proposal" style="display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px;">Proposition de Coopération / Synergie *</label>
              <textarea id="partner-proposal" name="proposal" rows="4" required placeholder="Décrivez les objectifs et les modalités souhaitées pour cette collaboration..." style="width: 100%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1;"></textarea>
            </div>
            <button type="submit" class="btn btn-yellow" style="width: 100%; justify-content: center;">
              Proposer un Partenariat <i class="fa-solid fa-handshake"></i>
            </button>
          </form>

        <!-- Formulaire 3 : Parrainer un Projet / Bourse -->
        <?php elseif ($active_form == 'sponsor'): ?>
          <h3 style="margin-bottom: 20px; color: var(--dark-navy); border-bottom: 2px solid var(--primary-yellow); padding-bottom: 10px;">
            Parrainage & Bourses d'Étude
          </h3>
          <form action="contact.php?form=sponsor" method="POST">
            <input type="hidden" name="form_type" value="sponsor">
            <div style="margin-bottom: 16px;">
              <label for="sponsor-name" style="display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px;">Nom du Parrain / Donateur *</label>
              <input type="text" id="sponsor-name" name="name" required placeholder="Individu ou Raison Sociale" style="width: 100%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1;">
            </div>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
              <div>
                <label for="sponsor-email" style="display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px;">Email de Contact *</label>
                <input type="email" id="sponsor-email" name="email" required style="width: 100%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1;">
              </div>
              <div>
                <label for="sponsor-target" style="display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px;">Projet à Parrainer</label>
                <select id="sponsor-target" name="target" style="width: 100%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1; background: white;">
                  <option value="concours_math">Prix Concours Math & IT</option>
                  <option value="bourse_excellence">Bourse d'Excellence Académique</option>
                  <option value="materiel_info">Don de Matériel Informatique</option>
                  <option value="conference">Sponsoring Conférence LCV</option>
                </select>
              </div>
            </div>
            <div style="margin-bottom: 20px;">
              <label for="sponsor-details" style="display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px;">Précisions sur votre contribution *</label>
              <textarea id="sponsor-details" name="details" rows="4" required placeholder="Précisez le type d'appui (financier, équipement, mentorat) et vos souhaits d'accompagnement..." style="width: 100%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1;"></textarea>
            </div>
            <button type="submit" class="btn btn-yellow" style="width: 100%; justify-content: center;">
              Initier un Parrainage <i class="fa-solid fa-hand-holding-heart"></i>
            </button>
          </form>

        <!-- Formulaire 4 : Contact Général -->
        <?php else: ?>
          <h3 style="margin-bottom: 20px; color: var(--dark-navy); border-bottom: 2px solid var(--primary-yellow); padding-bottom: 10px;">
            Formulaire de Contact Général
          </h3>
          <form action="contact.php?form=general" method="POST">
            <input type="hidden" name="form_type" value="general">
            <div style="margin-bottom: 16px;">
              <label for="gen-name" style="display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px;">Nom Complet *</label>
              <input type="text" id="gen-name" name="name" required style="width: 100%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1;">
            </div>
            <div style="margin-bottom: 16px;">
              <label for="gen-email" style="display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px;">Adresse Email *</label>
              <input type="email" id="gen-email" name="email" required style="width: 100%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1;">
            </div>
            <div style="margin-bottom: 20px;">
              <label for="gen-message" style="display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px;">Votre Message *</label>
              <textarea id="gen-message" name="message" rows="4" required style="width: 100%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1;"></textarea>
            </div>
            <button type="submit" class="btn btn-yellow" style="width: 100%; justify-content: center;">
              Envoyer le Message <i class="fa-solid fa-paper-plane"></i>
            </button>
          </form>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
