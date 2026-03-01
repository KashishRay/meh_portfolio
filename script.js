document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll("section");
    const navLinks = document.querySelectorAll(".nav-links a");

    window.addEventListener("scroll", () => {
        let current = "";

        sections.forEach((section) => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            // Adjust the - 100 depending on your header height
            if (scrollY >= sectionTop - 100) {
                current = section.getAttribute("id");
            }
        });

        navLinks.forEach((link) => {
            link.classList.remove("active");
            if (link.getAttribute("href").includes(current)) {
                link.classList.add("active");
            }
        });
    });
    // Preloader Logic - Lightning Fast
window.addEventListener('load', () => {
    const preloader = document.getElementById('preloader');
    
    // Hide immediately when the page loads (no timeout)
    preloader.classList.add('fade-out');
    document.body.style.overflow = 'auto'; 
});

// Hide scrollbar while loading
document.body.style.overflow = 'hidden';
});