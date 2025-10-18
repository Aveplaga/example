// Инициализация Swiper
import { act } from "react";
import Swiper from "swiper/bundle";
import "swiper/css";

const swiper = new Swiper(".mySwiper", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
});

const swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    thumbs: {
        swiper: swiper,
    },
});

// Активное состояние у элементов
function toggleActive(items, active = 'active') {
    items.forEach(item => {
        item.addEventListener('click', e => {
            e.preventDefault();

            items.forEach(i => i.classList.remove(active));
            item.classList.add(active);
        });
    });
}

toggleActive(document.querySelectorAll('.content__gallery-link'), 'active');
toggleActive(document.querySelectorAll('.content__color-item'), 'content__color-item--active');
toggleActive(document.querySelectorAll('.content__size-button'), 'active');

// Счётчик товара
const value = document.querySelector('.counter-value');
const plus = document.querySelector('.plus');
const minus = document.querySelector('.minus');

let count = 1;

plus.addEventListener('click', () => {
    count++
    value.textContent = count;
});

minus.addEventListener('click', () => {
    if (count > 1) count--;
    value.textContent = count
});
