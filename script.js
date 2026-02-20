document.addEventListener('DOMContentLoaded', () => {
    // Mobile Burger Menu Toggle
    const burgerMenu = document.querySelector('.burger-menu');
    const nav = document.querySelector('.nav');

    if (burgerMenu && nav) {
        burgerMenu.addEventListener('click', () => {
            document.body.classList.toggle('nav-open');
        });

        // Close menu when a link is clicked
        const navLinks = nav.querySelectorAll('a');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                document.body.classList.remove('nav-open');
            });
        });
    }
});
