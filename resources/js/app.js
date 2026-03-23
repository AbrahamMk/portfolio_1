import './bootstrap';

const THEME_KEY = 'portfolio_theme';

function getSystemTheme() {
  return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'dark';
}

function applyTheme(theme) {
  const resolved = theme === 'system' ? getSystemTheme() : theme;
  document.documentElement.dataset.theme = resolved;
}

function initTheme() {
  const stored = localStorage.getItem(THEME_KEY);
  const theme = stored === 'light' || stored === 'dark' ? stored : 'system';
  applyTheme(theme);

  const mq = window.matchMedia('(prefers-color-scheme: light)');
  mq.addEventListener?.('change', () => {
    const currentStored = localStorage.getItem(THEME_KEY);
    if (!currentStored) applyTheme('system');
  });

  const button = document.querySelector('[data-theme-toggle]');
  button?.addEventListener('click', () => {
    const next = document.documentElement.dataset.theme === 'dark' ? 'light' : 'dark';
    localStorage.setItem(THEME_KEY, next);
    applyTheme(next);
  });
}

function initNav() {
  const header = document.querySelector('[data-header]');
  const toggle = document.querySelector('[data-nav-toggle]');
  const nav = document.querySelector('[data-nav]');
  if (!header || !toggle || !nav) return;

  const close = () => {
    header.dataset.navOpen = 'false';
    toggle.setAttribute('aria-expanded', 'false');
  };

  const open = () => {
    header.dataset.navOpen = 'true';
    toggle.setAttribute('aria-expanded', 'true');
  };

  const isOpen = () => header.dataset.navOpen === 'true';

  close();

  toggle.addEventListener('click', () => {
    if (isOpen()) close();
    else open();
  });

  nav.addEventListener('click', (event) => {
    const target = event.target;
    if (target instanceof HTMLAnchorElement && target.getAttribute('href')?.startsWith('#')) {
      close();
    }
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') close();
  });

  document.addEventListener('click', (event) => {
    if (!isOpen()) return;
    const target = event.target;
    if (!(target instanceof Node)) return;
    if (header.contains(target)) return;
    close();
  });
}

function initActiveNav() {
  const links = Array.from(document.querySelectorAll('.site-nav a[href^="#"]'));
  if (links.length === 0) return;

  const sections = links
    .map((link) => document.querySelector(link.getAttribute('href') ?? ''))
    .filter((el) => el instanceof HTMLElement);

  if (sections.length === 0) return;

  const byId = new Map();
  links.forEach((link) => {
    const href = link.getAttribute('href') ?? '';
    byId.set(href.replace('#', ''), link);
  });

  const setCurrent = (id) => {
    links.forEach((l) => l.removeAttribute('aria-current'));
    const link = byId.get(id);
    if (link) link.setAttribute('aria-current', 'page');
  };

  const observer = new IntersectionObserver(
    (entries) => {
      const visible = entries
        .filter((e) => e.isIntersecting)
        .sort((a, b) => (b.intersectionRatio ?? 0) - (a.intersectionRatio ?? 0))[0];
      if (!visible?.target) return;
      setCurrent(visible.target.id);
    },
    { root: null, threshold: [0.35, 0.5, 0.65] }
  );

  sections.forEach((section) => observer.observe(section));
}

document.addEventListener('DOMContentLoaded', () => {
  initTheme();
  initNav();
  initActiveNav();
});
