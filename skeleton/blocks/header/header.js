document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.querySelector('.header__button--menu');
    const activeMenu = document.querySelector('.header__menu');

    menuButton.addEventListener('click', () => {
        menuButton.classList.toggle('active');
        activeMenu.classList.toggle('active');
    });

    const itemActive = document.querySelectorAll('.header__menu--item');
    const linkTitleActive = document.querySelectorAll('.header__menu--title')
    itemActive.forEach((item, index) => {
        item.addEventListener('click', (e) => {
            e.preventDefault();

            itemActive.forEach(i => i.classList.remove('active'));
            linkTitleActive.forEach(i => i.classList.remove('active'));

            item.classList.add('active');
            linkTitleActive[index].classList.add('active');
        });
    });
})