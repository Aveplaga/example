import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';

document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.hero-slides.swiper');
    if (!slider) return;

    new Swiper(slider, {
        modules: [Navigation],
        loop: false,
        speed: 1500,
        slidesPerView: 1,
        spaceBetween: 15,

        navigation: {
            nextEl: '.hero-link__right',
            prevEl: '.hero-link__left',
            disabledClass: 'is-disabled'
        },
    });
});