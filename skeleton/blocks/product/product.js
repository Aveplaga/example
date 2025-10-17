import Swiper from "swiper/bundle";
import "swiper/css";
import "swiper/css/thumbs";

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

const colorItems = document.querySelectorAll('.content__color-item');

colorItems.forEach(item => {
    item.addEventListener('click', () => {
        colorItems.forEach(i => i.classList.remove('content__color-item--active'));
        item.classList.add('content__color-item--active');
    });
});

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
