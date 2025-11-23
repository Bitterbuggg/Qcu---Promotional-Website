import './bootstrap';

// Mobile menu toggle
document.addEventListener('DOMContentLoaded', () => {
  const toggles = document.querySelectorAll('[data-toggle="mobile-menu"]');
  const menu = document.querySelector('[data-target="mobile-menu"]');
  toggles.forEach(btn => btn.addEventListener('click', () => {
    if (menu) menu.classList.toggle('hidden');
  }));
});

// Defer optional libraries; avoid top-level await for production build compatibility.
function initScrollReveal() {
  import('scrollreveal').then(mod => {
    const sr = mod.default();
    sr.reveal('[data-sr="fade-up"]', { distance: '20px', duration: 700, easing: 'ease-out', origin: 'bottom', interval: 80, opacity: 0 });
    sr.reveal('[data-sr="fade-in"]', { duration: 700, easing: 'ease-out', opacity: 0, interval: 80 });
  }).catch(() => {});
}

function initGsapHero() {
  import('gsap').then(mod => {
    const gsap = mod.default;
    gsap.to('[data-hero="title"]', { opacity: 1, y: 0, duration: 1.2, ease: 'power3.out', delay: 0.2 });
    gsap.to('[data-hero="subtitle"]', { opacity: 1, y: 0, duration: 1.2, ease: 'power3.out', delay: 0.4 });
    gsap.to('[data-hero="cta"]', { opacity: 1, y: 0, duration: 1.2, ease: 'power3.out', delay: 0.6 });
  }).catch(() => {});
}

window.addEventListener('load', () => {
  initScrollReveal();
  initGsapHero();
});

// Theme toggle (dark / light) using body class and localStorage
document.addEventListener('DOMContentLoaded', () => {
  const root = document.documentElement;
  const body = document.body;
  const desktopToggle = document.getElementById('themeToggle');
  const mobileToggle = document.getElementById('themeToggleMobile');
  const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
  const stored = localStorage.getItem('theme');

  function applyTheme(mode) {
    if (mode === 'dark') {
      root.classList.add('dark');
      body.classList.add('dark');
      root.style.colorScheme = 'dark';
    } else {
      root.classList.remove('dark');
      body.classList.remove('dark');
      root.style.colorScheme = 'light';
    }
    localStorage.setItem('theme', mode);
    updateThemeIcons(mode);
  }

  applyTheme(stored || (prefersDark ? 'dark' : 'light'));

  function toggleTheme() {
    const next = root.classList.contains('dark') ? 'light' : 'dark';
    applyTheme(next);
  }

  function updateThemeIcons(mode) {
    const pairs = [
      document.getElementById('themeIconDesktop'),
      document.getElementById('themeIconMobile')
    ].filter(Boolean);
    pairs.forEach(svg => {
      const sun = svg.querySelector('.icon-sun');
      const moon = svg.querySelector('.icon-moon');
      if (!sun || !moon) return;
      if (mode === 'dark') {
        sun.classList.add('hidden');
        moon.classList.remove('hidden');
      } else {
        moon.classList.add('hidden');
        sun.classList.remove('hidden');
      }
    });
  }

  [desktopToggle, mobileToggle].filter(Boolean).forEach(btn => {
    btn.addEventListener('click', toggleTheme);
  });
});
