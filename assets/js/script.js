// Hamburger Menu Logic
const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('nav-links');

if (hamburger) {
    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
}

// Close menu when clicking outside
document.addEventListener('click', function (event) {
    if (navLinks && hamburger) {
        if (!navLinks.contains(event.target) && !hamburger.contains(event.target) && navLinks.classList.contains('active')) {
            navLinks.classList.remove('active');
        }
    }
});

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        if (this.getAttribute('href') === '#') return; // Ignore empty hash
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});

// Modal Pendaftaran Logic
const modal = document.getElementById("modalDaftar");
const startButtons = document.querySelectorAll(".cta-btn"); // Select ALL buttons with class cta-btn
const closeBtn = document.getElementsByClassName("close-btn")[0];

// Add click event to ALL buttons
startButtons.forEach(btn => {
    btn.addEventListener('click', function (e) {
        e.preventDefault();
        if (modal) modal.style.display = "block";
    });
});

// Close on X
if (closeBtn) {
    closeBtn.onclick = function () {
        if (modal) modal.style.display = "none";
    }
}

// Close on outside click
window.onclick = function (event) {
    if (event.target == modal) {
        if (modal) modal.style.display = "none";
    }
}