document.addEventListener('DOMContentLoaded', () => {
    const burger = document.querySelector('.header__menu-button');
    const header = document.querySelector('.header');
    const body = document.body;
    const menuLinks = document.querySelectorAll('.header__link');

    burger.addEventListener('click', () => {
        body.classList.toggle('menu-open');
    });
    
    menuLinks.forEach(link => {
        link.addEventListener('click', () => {
            body.classList.remove('menu-open');
        });
    });

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
});