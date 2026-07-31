  </main>

  <!-- Modal Lightbox Galerie -->
  <div class="lightbox-modal" id="gallery-lightbox" aria-hidden="true" role="dialog">
    <div class="lightbox-content">
      <button class="lightbox-close" onclick="closeLightbox()" aria-label="Fermer la vue agrandie">
        <i class="fa-solid fa-xmark"></i>
      </button>
      <img src="" alt="" class="lightbox-img" id="lightbox-target-img">
      <div class="lightbox-caption" id="lightbox-target-caption"></div>
    </div>
  </div>

  <!-- Dynamic Toast Container -->
  <div id="toast-container" aria-live="polite"></div>

  <!-- Back to Top Button -->
  <button class="back-to-top" id="back-to-top" aria-label="Retourner en haut de page" onclick="scrollToTop()">
    <i class="fa-solid fa-arrow-up"></i>
  </button>

  <!-- Section: Nos Partenaires Institutionnels & Stratégiques -->
  <section class="section-padding" style="background: #f8fafc; border-top: 1px solid rgba(15, 23, 42, 0.08);">
    <div class="container">
      <div class="section-header" style="text-align: center; max-width: 700px; margin: 0 auto 40px;">
        <div class="badge-tag"><i class="fa-solid fa-handshake" aria-hidden="true"></i> Coopération & Confiance</div>
        <h2 style="font-size: 32px; color: var(--dark-navy); margin-top: 10px;">Nos Partenaires & Appuis Institutionnels</h2>
        <p style="color: var(--text-muted); font-size: 15px; margin-top: 8px;">Ils nous accompagnent dans le financement, la logistique et l'expertise stratégique pour la réussite de nos initiatives au Cameroun.</p>
      </div>

      <div style="display: flex; justify-content: center; align-items: center; gap: 40px; flex-wrap: wrap; padding: 20px 0;">
        <div style="background: var(--white); border-radius: var(--radius-md); padding: 20px 32px; box-shadow: var(--shadow-sm); border: 1px solid rgba(15, 23, 42, 0.08); display: flex; align-items: center; gap: 12px; font-weight: 700; color: var(--dark-navy); font-size: 16px;">
          <i class="fa-solid fa-graduation-cap" style="color: var(--primary-yellow); font-size: 24px;"></i> Collège François-Xavier Vogt
        </div>
        <div style="background: var(--white); border-radius: var(--radius-md); padding: 20px 32px; box-shadow: var(--shadow-sm); border: 1px solid rgba(15, 23, 42, 0.08); display: flex; align-items: center; gap: 12px; font-weight: 700; color: var(--dark-navy); font-size: 16px;">
          <i class="fa-solid fa-building-columns" style="color: var(--primary-yellow); font-size: 24px;"></i> Ministère de la Jeunesse
        </div>
        <div style="background: var(--white); border-radius: var(--radius-md); padding: 20px 32px; box-shadow: var(--shadow-sm); border: 1px solid rgba(15, 23, 42, 0.08); display: flex; align-items: center; gap: 12px; font-weight: 700; color: var(--dark-navy); font-size: 16px;">
          <i class="fa-solid fa-globe" style="color: var(--primary-yellow); font-size: 24px;"></i> Réseau des Anciens LCV
        </div>
      </div>

      <div style="text-align: center; margin-top: 30px;">
        <a href="partenaire" class="btn btn-outline" style="font-size: 14px;">
          Devenir un Partenaire Officiel <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- Footer Unique Site Complexe -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-content">
        <div>
          <div class="brand-logo">
            <img src="assets/images/logo2.png" alt="Logo Leader Club Vogtois" style="height: 50px; width: auto; object-fit: contain;">
            <div>
              <div class="brand-title" style="color: white;">Leader Club Vogtois</div>
            </div>
          </div>
          <p class="footer-sub">
            Organisation de référence œuvrant pour le leadership, la coopération associative et la réussite académique au Cameroun.
          </p>
        </div>

        <div>
          <h4 class="footer-col-title">Navigation</h4>
          <ul class="footer-menu">
            <li><a href="accueil">Accueil</a></li>
            <li><a href="organisation">L'Organisation</a></li>
            <li><a href="actions">Nos Actions</a></li>
            <li><a href="galerie">Galerie Média</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-col-title">Engagements</h4>
          <ul class="footer-menu">
            <li><a href="don">Faire un Don</a></li>
            <li><a href="partenaire">Devenir Partenaire</a></li>
            <li><a href="actions">Concours Math/IT</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-col-title">Transparence</h4>
          <ul class="footer-menu">
            <li><a href="organisation">Rapports d'Activité</a></li>
            <li><a href="contact">Contact Direct</a></li>
          </ul>
        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> Leader Club Vogtois. Tous droits réservés.</p>
        <p>Réalisé par <a href="https://www.ejabbing.com" target="_blank" rel="noopener noreferrer" style="color: var(--primary-yellow); text-decoration: underline;">E-JABBING SARL</a></p>
      </div>
    </div>
  </footer>

  <!-- External JavaScript File -->
  <script src="assets/js/main.js"></script>
</body>
</html>
