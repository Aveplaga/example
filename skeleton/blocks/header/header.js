const burger = document.querySelector('.header-menu__button');

burger.addEventListener('click', () => {
    document.body.classList.toggle('menu-open');
});