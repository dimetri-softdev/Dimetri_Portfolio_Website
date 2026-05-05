const menuToggle = document.getElementById('menuToggle');
const siteNav = document.getElementById('site-nav');

if (menuToggle && siteNav) {
    menuToggle.addEventListener('click', () => {
        siteNav.classList.toggle('active');
    });
}

const links = document.querySelectorAll('.site-nav a');
links.forEach(link => {
    link.addEventListener('click', () => {
        siteNav.classList.remove('active');
    });
});

window.addEventListener('scroll', () => {
    const header = document.querySelector('.site-header');
    if (!header) return;
    if (window.scrollY > 20) {
        header.style.boxShadow = '0 12px 40px rgba(0,0,0,0.25)';
    } else {
        header.style.boxShadow = 'none';
    }
});
