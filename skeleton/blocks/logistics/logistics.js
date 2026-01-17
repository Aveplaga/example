import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';

document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.logistics-list.swiper');
    if (!slider) return;

    new Swiper(slider, {
        modules: [Navigation],
        loop: false,
        speed: 1500,
        slidesPerView: 1,
        spaceBetween: 15,

        navigation: {
            nextEl: '.logistics-button__right',
            prevEl: '.logistics-button__left',
            disabledClass: 'is-disabled'
        },

        breakpoints: {
            768: {
                enabled: false,
            }
        },
    });
});