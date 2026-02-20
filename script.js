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

    // Category Filtering
    const filterBtns = document.querySelectorAll('.filter-btn');
    const newsItems = document.querySelectorAll('.news-list li');

    if (filterBtns.length > 0 && newsItems.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active button state
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const targetCategory = btn.getAttribute('data-category');

                newsItems.forEach(item => {
                    if (targetCategory === 'all') {
                        item.style.display = 'flex'; // Reset to default display (assuming flex or block)
                    } else {
                        // Check if this item contains the target category class
                        const categorySpan = item.querySelector('.' + targetCategory);
                        if (categorySpan) {
                            item.style.display = 'flex';
                        } else {
                            item.style.display = 'none';
                        }
                    }
                });
            });
        });
    }
});
