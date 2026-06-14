document.addEventListener('DOMContentLoaded', () => {
    const burger = document.querySelector('.header__menu-button');
    const header = document.querySelector('.header');
    const body = document.body;

    burger.addEventListener('click', () => {
        body.classList.toggle('menu-open');
    });

    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
});
