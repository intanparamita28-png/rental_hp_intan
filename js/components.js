/**
 * Load HTML component into a target element.
 * @param {string} selector - CSS selector of the target element
 * @param {string} url - path to the component HTML file
 * @param {Function} [callback] - optional callback after load
 */
async function loadComponent(selector, url, callback) {
  const el = document.querySelector(selector);
  if (!el) return;
  try {
    const res = await fetch(url);
    if (!res.ok) throw new Error(`Failed to load ${url}`);
    el.innerHTML = await res.text();
    if (callback) callback();
  } catch (e) {
    console.error(e);
  }
}

/**
 * Mark the active sidebar nav-item based on current filename.
 */
function setActiveSidebarItem() {
  const page = location.pathname.split('/').pop().replace('.php', '').replace('.html', '');
  document.querySelectorAll('.nav-menu .nav-item').forEach(link => {
    const linkPage = link.getAttribute('href').replace('.php', '').replace('.html', '');
    link.classList.toggle('active', linkPage === page || link.dataset.page === page);
  });
}

// Run on page load
document.addEventListener('DOMContentLoaded', function() {
  setActiveSidebarItem();
});

/**
 * Init header dropdown toggle.
 */
function initHeaderDropdown() {
  const dropdown = document.querySelector('.user-dropdown');
  const menu = document.querySelector('.dropdown-menu');
  if (!dropdown || !menu) return;
  dropdown.addEventListener('click', e => {
    e.stopPropagation();
    menu.classList.toggle('show');
  });
  document.addEventListener('click', () => menu.classList.remove('show'));
}

/**
 * Load header and sidebar components.
 * Call this once per page.
 */
async function loadComponents() {
  // Resolve path prefix: pages/ are one level deep, root is flat
  const isInPages = location.pathname.includes('/pages/');
  const base = isInPages ? '../components/' : 'components/';

  await loadComponent('#header-placeholder', base + 'header.html', initHeaderDropdown);
  await loadComponent('#sidebar-placeholder', base + 'sidebar.html', setActiveSidebarItem);
}

document.addEventListener('DOMContentLoaded', loadComponents);
