import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';

document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.logistics-cards.swiper');
    if (!slider) return;

    new Swiper(slider, {
        modules: [Navigation],
        loop: false,
        speed: 1000,
        slidesPerView: 1,

        navigation: {
            nextEl: '.arrow-right',
            prevEl: '.arrow-left',
            disabledClass: 'is-disabled'
        },
    });
});