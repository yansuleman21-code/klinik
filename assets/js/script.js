document.getElementById('hamburger').addEventListener('click', function() {
    document.getElementById('nav-links').classList.toggle('active');
});

// Close menu when clicking outside
document.addEventListener('click', function(event) {
    const nav = document.getElementById('nav-links');
    const hamburger = document.getElementById('hamburger');
    
    if (!nav.contains(event.target) && !hamburger.contains(event.target) && nav.classList.contains('active')) {
        nav.classList.remove('active');
    }
});

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
