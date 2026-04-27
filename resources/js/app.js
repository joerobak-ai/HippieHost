import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.querySelector('[data-mobile-menu-toggle]');
    const menu = document.querySelector('[data-mobile-menu]');

    if (menuButton && menu) {
        menuButton.addEventListener('click', () => {
            const isOpen = menuButton.getAttribute('aria-expanded') === 'true';
            menuButton.setAttribute('aria-expanded', (!isOpen).toString());
            menu.classList.toggle('hidden', isOpen);
        });

        menu.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => {
                menu.classList.add('hidden');
                menuButton.setAttribute('aria-expanded', 'false');
            });
        });
    }

    const revealElements = document.querySelectorAll('[data-reveal]');

    if (!('IntersectionObserver' in window) || revealElements.length === 0) {
        revealElements.forEach((element) => element.classList.add('in'));
        return;
    }

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in');
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.15 }
    );

    revealElements.forEach((element) => observer.observe(element));
});