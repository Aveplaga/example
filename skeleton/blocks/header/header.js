// Пишем функционал для меню  - для начала ищем элементы в html
const burger = document.querySelector('.header-burger');
const menu = document.querySelector('.menu-list');

// пишем обработчик событий 
burger.addEventListener('click' , () => {
    burger.classList.toggle('active');
    menu.classList.toggle('active');
})