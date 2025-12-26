import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';

document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.about-card.swiper');
    if (!slider) return;

    new Swiper(slider, {
        modules: [Navigation],
        spaceBetween: 10,
        loop: false,
        speed: 1000,
        slidesPerView: 1,

        navigation: {
            nextEl: '.about-right_arrow',
            prevEl: '.about-left_arrow',
            disabledClass: 'is-disabled'
        },
    });
});