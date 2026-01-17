import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';

document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.cases-list.swiper');
    if (!slider) return;

    new Swiper(slider, {
        modules: [Navigation],
        spaceBetween: 24,
        loop: false,
        speed: 1000,
        slidesPerView: 1,
        breakpoints: {
            1280: {
                slidesPerView: 3
            },
        },

        navigation: {
            nextEl: '.cases-button__right',
            prevEl: '.cases-button__left',
            disabledClass: 'is-disabled'
        },
    });
});