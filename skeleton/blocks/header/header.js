document.addEventListener('DOMContentLoaded', () => {
    const menuActive = document.querySelector('.header-button__menu');
    const headerNav = document.querySelector('.header-nav');

    menuActive.addEventListener('click', () => {
        menuActive.classList.toggle('active');
        headerNav.classList.toggle('active');
    });

    const itemActive = document.querySelectorAll('.header-item');
    const linkTitleActive = document.querySelectorAll('.header-link__title')
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