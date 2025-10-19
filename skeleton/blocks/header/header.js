// Функционал меню
const burger = document.querySelector('.header-burger');
const body = document.body;

burger.addEventListener('click', () => {
  body.classList.toggle('menu-open');
});
