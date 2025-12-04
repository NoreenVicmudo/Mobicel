document.getElementById('menu-toggle').addEventListener('click', function(e) {
    e.stopPropagation(); // Prevents the click from propagating to the document
    document.getElementById('menu').classList.toggle('active');
});

document.addEventListener('click', function(e) {
    // Check if the click is outside the menu
    const menu = document.getElementById('menu');
    const menuToggle = document.getElementById('menu-toggle');
    if (!menu.contains(e.target) && !menuToggle.contains(e.target)) {
        menu.classList.remove('active');
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const prevButton = document.querySelector('.carousel-button.prev');
    const nextButton = document.querySelector('.carousel-button.next');
    const productContainer = document.querySelector('.product-container');
    const dots = document.querySelectorAll('.dot');
    
    let currentIndex = 0;
    const productWidth = document.querySelector('.product').offsetWidth + 20; // 20 is the margin

    function updateDots() {
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    }

    function scrollToProduct(index) {
        productContainer.scrollTo({
            top: 0,
            left: productWidth * index,
            behavior: 'smooth'
        });
        currentIndex = index;
        updateDots();
    }

    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            scrollToProduct(currentIndex - 1);
        }
    });

    nextButton.addEventListener('click', () => {
        if (currentIndex < dots.length - 1) {
            scrollToProduct(currentIndex + 1);
        }
    });

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            scrollToProduct(index);
        });
    });

    // Initialize the carousel
    scrollToProduct(currentIndex);
});
