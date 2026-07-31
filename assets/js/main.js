/**
 * Leader Club Vogtois (LCV) - Main Interactive Logic
 */

// Navigation Onglets Multi-Pages
function switchPage(pageId) {
  const views = document.querySelectorAll('.page-view');
  views.forEach(v => v.classList.remove('active'));

  const navLinks = document.querySelectorAll('.menu-item a');
  navLinks.forEach(l => {
    l.classList.remove('active');
    l.removeAttribute('aria-current');
  });

  const targetPage = document.getElementById('page-' + pageId);
  if(targetPage) {
    targetPage.classList.add('active');
  }

  const targetNav = document.getElementById('nav-' + pageId);
  if(targetNav) {
    targetNav.classList.add('active');
    targetNav.setAttribute('aria-current', 'page');
  }

  // Close mobile menu if open
  const menu = document.getElementById('primary-menu');
  const toggleBtn = document.getElementById('mobile-toggle-btn');
  const toggleIcon = document.getElementById('toggle-icon');
  if (menu && menu.classList.contains('mobile-active')) {
    menu.classList.remove('mobile-active');
    toggleBtn.setAttribute('aria-expanded', 'false');
    toggleIcon.className = 'fa-solid fa-bars';
  }

  window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Mobile Navigation Drawer Toggle
document.addEventListener('DOMContentLoaded', () => {
  const mobileToggleBtn = document.getElementById('mobile-toggle-btn');
  const primaryMenu = document.getElementById('primary-menu');
  const toggleIcon = document.getElementById('toggle-icon');

  if (mobileToggleBtn) {
    mobileToggleBtn.addEventListener('click', () => {
      const isExpanded = mobileToggleBtn.getAttribute('aria-expanded') === 'true';
      mobileToggleBtn.setAttribute('aria-expanded', !isExpanded);
      primaryMenu.classList.toggle('mobile-active');
      toggleIcon.className = isExpanded ? 'fa-solid fa-bars' : 'fa-solid fa-xmark';
    });
  }

  // Gallery Filter Logic
  const filterBtns = document.querySelectorAll('.filter-btn');
  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => {
        b.classList.remove('active');
        b.setAttribute('aria-selected', 'false');
      });
      btn.classList.add('active');
      btn.setAttribute('aria-selected', 'true');

      const filter = btn.getAttribute('data-filter');
      const cards = document.querySelectorAll('.gallery-card');

      cards.forEach(card => {
        if (filter === 'all' || card.getAttribute('data-category') === filter) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  // Curtain Loader Dismissal Animation
  const curtainLoader = document.getElementById('curtain-loader');
  if (curtainLoader) {
    setTimeout(() => {
      curtainLoader.classList.add('loaded');
      setTimeout(() => {
        curtainLoader.style.display = 'none';
      }, 1000);
    }, 600);
  }

  // Auto-attach reveal-on-scroll to key blocks & cards
  const animatableElements = document.querySelectorAll('section, .card-item, .stat-box, .gallery-card, .section-header');
  animatableElements.forEach((el, idx) => {
    if (!el.classList.contains('reveal-on-scroll')) {
      el.classList.add('reveal-on-scroll');
      // Apply staggered delays to grid children
      if (el.classList.contains('card-item') || el.classList.contains('stat-box') || el.classList.contains('gallery-card')) {
        const delayClass = `delay-${((idx % 4) + 1) * 100}`;
        el.classList.add(delayClass);
      }
    }
  });

  // IntersectionObserver for Scroll Reveal
  const observerOptions = {
    root: null,
    rootMargin: '0px 0px -50px 0px',
    threshold: 0.15
  };

  const scrollObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        // Once revealed, unobserve to optimize performance
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  document.querySelectorAll('.reveal-on-scroll').forEach(el => {
    scrollObserver.observe(el);
  });

  // Scroll to Top Floating Button
  const backToTopBtn = document.getElementById('back-to-top');
  if (backToTopBtn) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 300) {
        backToTopBtn.classList.add('show');
      } else {
        backToTopBtn.classList.remove('show');
      }
    });
  }
});

// Toast Notification System
function showToast(message, iconClass = 'fa-circle-check') {
  const container = document.getElementById('toast-container');
  if (!container) return;
  const toast = document.createElement('div');
  toast.className = 'toast';
  toast.innerHTML = `<i class="fa-solid ${iconClass}" style="color: var(--primary-yellow); font-size: 18px;"></i> <span>${message}</span>`;
  container.appendChild(toast);

  setTimeout(() => {
    toast.style.opacity = '0';
    toast.style.transform = 'translateY(100%)';
    toast.style.transition = 'all 0.3s ease';
    setTimeout(() => toast.remove(), 300);
  }, 4000);
}

// Contact Form Handler
function handleContactSubmit(event) {
  event.preventDefault();
  const name = document.getElementById('contact-name').value;
  showToast(`Merci ${name} ! Votre message a bien été transmis au LCV. Nous vous recontacterons sous 24h.`, 'fa-circle-check');
  document.getElementById('contact-form').reset();
}

// Lightbox Functionality
function openLightbox(imgSrc, captionText) {
  const modal = document.getElementById('gallery-lightbox');
  const img = document.getElementById('lightbox-target-img');
  const caption = document.getElementById('lightbox-target-caption');

  if (img && caption && modal) {
    img.src = imgSrc;
    img.alt = captionText;
    caption.innerHTML = `<h4>${captionText}</h4>`;
    modal.classList.add('active');
    modal.setAttribute('aria-hidden', 'false');
  }
}

function closeLightbox() {
  const modal = document.getElementById('gallery-lightbox');
  if (modal) {
    modal.classList.remove('active');
    modal.setAttribute('aria-hidden', 'true');
  }
}

// Close Lightbox on ESC Key
document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') closeLightbox();
});

function scrollToTop() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
}
