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

    // Recruit Tabs Logic
    const recruitTabBtns = document.querySelectorAll('.recruit-tab-btn');
    const recruitTabContents = document.querySelectorAll('.recruit-tab-content');

    if (recruitTabBtns.length > 0 && recruitTabContents.length > 0) {
        recruitTabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons and contents
                recruitTabBtns.forEach(b => b.classList.remove('active'));
                recruitTabContents.forEach(c => c.classList.remove('active'));

                // Add active class to clicked button
                btn.classList.add('active');

                // Show corresponding content
                const targetId = btn.getAttribute('data-target');
                const targetContent = document.getElementById(targetId);
                if (targetContent) {
                    targetContent.classList.add('active');
                }
            });
        });
    }

    // Job Accordion Toggle
    const accordions = document.querySelectorAll('.job-accordion-header');
    if (accordions.length > 0) {
        accordions.forEach(header => {
            header.addEventListener('click', () => {
                const parent = header.parentElement;
                const body = parent.querySelector('.job-accordion-body');
                
                // Toggle active class on parent
                parent.classList.toggle('active');
                
                // Toggle display of body
                if (parent.classList.contains('active')) {
                    body.style.display = 'block';
                } else {
                    body.style.display = 'none';
                }
            });
        });
    }
});
