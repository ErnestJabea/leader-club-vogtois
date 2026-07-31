<?php
$current_page = 'donate';
$page_title = "Leader Club Vogtois (LCV) - Soutenir & Faire un Don avec Stripe";

$donation_success = isset($_GET['status']) && $_GET['status'] === 'success';
$donation_cancelled = isset($_GET['status']) && $_GET['status'] === 'cancel';

include 'includes/header.php';
?>

<section class="hero-banner" style="padding: 65px 0;">
  <div class="container">
    <div style="max-width: 750px;">
      <div class="badge-tag" style="background: rgba(252, 191, 17, 0.2); color: var(--primary-yellow); border-color: var(--primary-yellow);">
        <i class="fa-solid fa-heart" aria-hidden="true"></i> Mécénat & Impact Social avec Stripe
      </div>
      <h1 class="hero-title-large">Soutenez la Jeunesse et <span>l'Excellence</span></h1>
      <p class="hero-desc">Faites un don 100% sécurisé via Stripe par Carte Bancaire, Apple Pay ou Google Pay pour financer les bourses académiques et kits informatiques du LCV.</p>
    </div>
  </div>
</section>

<section class="section-padding">
  <div class="container">

    <!-- Impact & Transparence Grid -->
    <div class="grid-3" style="margin-bottom: 50px;">
      <div class="card-item" style="padding: 30px; text-align: center;">
        <div style="width: 60px; height: 60px; border-radius: 50%; background: rgba(252, 191, 17, 0.15); display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 26px; color: var(--dark-navy);">
          <i class="fa-solid fa-graduation-cap"></i>
        </div>
        <h3 style="font-size: 20px; margin-bottom: 10px; color: var(--dark-navy);">Bourses d'Études</h3>
        <p style="font-size: 14px; color: var(--text-muted);">Financez le parcours scolaire et universitaire d'élèves brillants issus de milieux défavorisés.</p>
      </div>

      <div class="card-item" style="padding: 30px; text-align: center;">
        <div style="width: 60px; height: 60px; border-radius: 50%; background: rgba(219, 221, 34, 0.2); display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 26px; color: var(--dark-navy);">
          <i class="fa-solid fa-laptop"></i>
        </div>
        <h3 style="font-size: 20px; margin-bottom: 10px; color: var(--dark-navy);">Kits & Matériel IT</h3>
        <p style="font-size: 14px; color: var(--text-muted);">Offrez des ordinateurs et outils informatiques aux établissements lauréats du Concours Scientifique.</p>
      </div>

      <div class="card-item" style="padding: 30px; text-align: center;">
        <div style="width: 60px; height: 60px; border-radius: 50%; background: rgba(15, 23, 42, 0.1); display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; font-size: 26px; color: var(--dark-navy);">
          <i class="fa-solid fa-handshake-angle"></i>
        </div>
        <h3 style="font-size: 20px; margin-bottom: 10px; color: var(--dark-navy);">Incubateur Associatif</h3>
        <p style="font-size: 14px; color: var(--text-muted);">Soutenez les ateliers de formation au leadership et le renforcement des capacités des jeunes cadres.</p>
      </div>
    </div>

    <div class="grid-2" style="align-items: start;">
      
      <!-- Colonne d'Information Stripe & Guichet Sécurisé -->
      <div>
        <div class="badge-tag"><i class="fa-solid fa-shield-halved"></i> Paiement 100% Sécurisé via Stripe</div>
        <h2 style="font-size: 32px; margin-bottom: 20px; color: var(--dark-navy);">Paiement Sécurisé SSL par Stripe</h2>
        <p style="color: var(--text-muted); margin-bottom: 24px;">
          Stripe est le leader mondial des transactions en ligne sécurisées. Vos informations bancaires sont chiffrées selon les normes de sécurité PCI-DSS de niveau 1.
        </p>

        <div style="background: white; border-radius: var(--radius-lg); padding: 24px; box-shadow: var(--shadow-sm); border: 1px solid rgba(15, 23, 42, 0.08); margin-bottom: 20px;">
          <h4 style="color: var(--dark-navy); font-size: 18px; margin-bottom: 14px; display: flex; align-items: center; gap: 10px;">
            <i class="fa-brands fa-stripe" style="color: #635BFF; font-size: 36px;"></i> Cartes & Mobile Wallet Acceptés
          </h4>
          <div style="display: flex; gap: 16px; align-items: center; flex-wrap: wrap; font-size: 24px; color: var(--dark-navy); margin-bottom: 12px;">
            <i class="fa-brands fa-cc-visa" title="Visa"></i>
            <i class="fa-brands fa-cc-mastercard" title="Mastercard"></i>
            <i class="fa-brands fa-cc-apple-pay" title="Apple Pay"></i>
            <i class="fa-brands fa-google" title="Google Pay"></i>
            <i class="fa-brands fa-cc-amex" title="American Express"></i>
          </div>
          <p style="font-size: 13px; color: var(--text-muted); margin: 0;">Un reçu officiel de donation est instantanément généré et envoyé à votre adresse email dès validation.</p>
        </div>

        <div style="background: var(--dark-navy); color: white; padding: 24px; border-radius: var(--radius-md);">
          <h4 style="color: var(--primary-yellow); margin-bottom: 8px;"><i class="fa-solid fa-lock"></i> Confidentialité Garantie</h4>
          <p style="font-size: 14px; opacity: 0.9; margin: 0;">Aucune donnée bancaire n'est conservée sur nos serveurs. La transaction s'effectue directement sur le portail chiffré Stripe Checkout.</p>
        </div>
      </div>

      <!-- Guichet de Don Stripe -->
      <div class="card-item" style="padding: 36px; background: white; box-shadow: var(--shadow-md);">
        
        <?php if ($donation_success): ?>
          <div style="background: #dcfce7; color: #166534; padding: 20px; border-radius: var(--radius-md); margin-bottom: 24px; border: 1px solid #bbf7d0;">
            <h4 style="font-size: 18px; margin-bottom: 8px;"><i class="fa-solid fa-circle-check"></i> Don confirmé ! Merci pour votre générosité.</h4>
            <p style="font-size: 14px; margin: 0; line-height: 1.5;">Votre don via Stripe a été traité avec succès. Un reçu de paiement vous a été envoyé par e-mail.</p>
          </div>
        <?php endif; ?>

        <?php if ($donation_cancelled): ?>
          <div style="background: #fef2f2; color: #991b1b; padding: 16px; border-radius: var(--radius-md); margin-bottom: 24px; border: 1px solid #fecaca;">
            <i class="fa-solid fa-circle-xmark"></i> La transaction a été annulée. Aucun montant n'a été débité. Vous pouvez réessayer à tout moment.
          </div>
        <?php endif; ?>

        <?php if (isset($_GET['status']) && $_GET['status'] === 'error'): ?>
          <div style="background: #fef2f2; color: #991b1b; padding: 16px; border-radius: var(--radius-md); margin-bottom: 24px; border: 1px solid #fecaca;">
            <i class="fa-solid fa-triangle-exclamation"></i> <strong>Erreur Stripe :</strong> <?php echo htmlspecialchars($_GET['msg'] ?? 'Impossible de se connecter à Stripe'); ?>
          </div>
        <?php endif; ?>

        <h3 style="margin-bottom: 20px; color: var(--dark-navy); border-bottom: 2px solid var(--primary-yellow); padding-bottom: 10px; display: flex; align-items: center; justify-content: space-between;">
          <span>Faire un Don via Stripe</span>
          <i class="fa-brands fa-stripe" style="color: #635BFF; font-size: 32px;"></i>
        </h3>

        <!-- Option 1 : Lien de Paiement Direct Stripe (Offert par Stripe) -->
        <div style="background: #F8FAFC; border: 2px dashed #635BFF; border-radius: var(--radius-md); padding: 24px; text-align: center; margin-bottom: 30px;">
          <h4 style="color: var(--dark-navy); font-size: 18px; margin-bottom: 10px;">
            <i class="fa-solid fa-bolt" style="color: var(--primary-yellow);"></i> Don Rapide en 1-Clic
          </h4>
          <p style="font-size: 14px; color: var(--text-muted); margin-bottom: 18px;">
            Accédez directement à la page de don officielle sécurisée hébergée par Stripe :
          </p>
          <a href="<?php echo STRIPE_DONATION_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn" style="background: linear-gradient(135deg, #635BFF, #4F46E5); color: white; border: none; font-size: 16px; padding: 14px 28px; box-shadow: 0 4px 15px rgba(99, 91, 255, 0.4); display: inline-flex; width: 100%; justify-content: center;">
            <i class="fa-solid fa-heart"></i> Ouvrir la Page de Don Stripe <i class="fa-solid fa-arrow-up-right-from-square"></i>
          </a>
        </div>

        <div style="text-align: center; position: relative; margin-bottom: 24px;">
          <hr style="border: 0; border-top: 1px solid #E2E8F0;">
          <span style="position: absolute; top: -12px; left: 50%; transform: translateX(-50%); background: white; padding: 0 12px; font-size: 12px; color: var(--text-muted); font-weight: 600;">OU PERSONNALISEZ VOTRE DON</span>
        </div>

        <!-- Option 2 : Formulaire avec choix du montant qui redirige vers Stripe -->
        <form action="<?php echo STRIPE_DONATION_LINK; ?>" target="_blank" method="GET" id="stripe-donation-form">
          
          <!-- Choix Montants Prédéfinis -->
          <div style="margin-bottom: 20px;">
            <label style="display: block; font-weight: 600; font-size: 14px; margin-bottom: 10px;">Choisissez votre montant de don *</label>
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; margin-bottom: 12px;">
              <button type="button" class="btn btn-outline amount-btn" style="padding: 10px; font-size: 14px; text-align: center; justify-content: center;" onclick="setAmount(15, '€')">15 € (~10 000 F)</button>
              <button type="button" class="btn btn-outline amount-btn" style="padding: 10px; font-size: 14px; text-align: center; justify-content: center;" onclick="setAmount(38, '€')">38 € (~25 000 F)</button>
              <button type="button" class="btn btn-outline amount-btn" style="padding: 10px; font-size: 14px; text-align: center; justify-content: center;" onclick="setAmount(75, '€')">75 € (~50 000 F)</button>
              <button type="button" class="btn btn-outline amount-btn" style="padding: 10px; font-size: 14px; text-align: center; justify-content: center;" onclick="setAmount(150, '€')">150 € (~100 000 F)</button>
              <button type="button" class="btn btn-outline amount-btn" style="padding: 10px; font-size: 14px; text-align: center; justify-content: center;" onclick="setAmount(380, '€')">380 € (~250 000 F)</button>
              <button type="button" class="btn btn-outline amount-btn" style="padding: 10px; font-size: 14px; text-align: center; justify-content: center;" onclick="setAmount(750, '€')">750 € (~500 000 F)</button>
            </div>
            
            <div style="display: flex; gap: 10px;">
              <input type="number" id="donate-amount" name="amount" required min="5" value="38" placeholder="Montant" style="width: 70%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1; font-weight: 700; font-size: 16px;">
              <select name="currency" id="donate-currency" style="width: 30%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1; background: white; font-weight: 700;">
                <option value="EUR">EUR (€)</option>
                <option value="USD">USD ($)</option>
                <option value="XAF">FCFA</option>
              </select>
            </div>
          </div>

          <div style="margin-bottom: 16px;">
            <label for="donor-name" style="display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px;">Nom complet du donateur *</label>
            <input type="text" id="donor-name" name="name" required placeholder="Jean Dupont" style="width: 100%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1;">
          </div>

          <div style="margin-bottom: 16px;">
            <label for="donor-email" style="display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px;">Adresse Email (Reçu Stripe) *</label>
            <input type="email" id="donor-email" name="email" required placeholder="donateur@exemple.com" style="width: 100%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1;">
          </div>

          <div style="margin-bottom: 24px;">
            <label for="donor-cause" style="display: block; font-weight: 600; font-size: 14px; margin-bottom: 6px;">Affectation du don</label>
            <select id="donor-cause" name="cause" style="width: 100%; padding: 12px; border-radius: var(--radius-sm); border: 1px solid #CBD5E1; background: white;">
              <option value="bourses">Bourses d'études et de réussite académique</option>
              <option value="concours">Concours Scientifique & Matériel IT</option>
              <option value="incubateur">Incubateur Associatif & Leadership</option>
              <option value="general">Fonds Général du Leader Club Vogtois</option>
            </select>
          </div>

          <a href="<?php echo STRIPE_DONATION_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-yellow" style="width: 100%; justify-content: center; font-size: 16px; padding: 16px; background: linear-gradient(135deg, #635BFF, #4F46E5); color: white; border: none; box-shadow: 0 4px 15px rgba(99, 91, 255, 0.4);">
            <i class="fa-solid fa-lock"></i> Valider mon Don sur Stripe <i class="fa-solid fa-arrow-right"></i>
          </a>
        </form>
      </div>

    </div>
  </div>
</section>

<script>
function setAmount(val, symbol) {
  document.getElementById('donate-amount').value = val;
}
</script>

<?php include 'includes/footer.php'; ?>
