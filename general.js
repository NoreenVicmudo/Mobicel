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
