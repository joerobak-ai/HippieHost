import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.querySelector('[data-mobile-menu-toggle]');
    const menu = document.querySelector('[data-mobile-menu]');

    if (!menuButton || !menu) {
        return;
    }

    menuButton.addEventListener('click', () => {
        const isOpen = menuButton.getAttribute('aria-expanded') === 'true';
        menuButton.setAttribute('aria-expanded', (!isOpen).toString());
        menu.classList.toggle('hidden', isOpen);
    });
});