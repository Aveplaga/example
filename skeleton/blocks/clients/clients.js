import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';

document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.clients__list.swiper');
    if (!slider) return;

    new Swiper(slider, {
        modules: [Navigation],
        loop: false,
        speed: 800,
        slidesPerView: "auto",
        spaceBetween: 20,
        enabled: true,

        navigation: {
            nextEl: '.clients__navigattion-next',
            prevEl: '.clients__navigattion-prev',
            disabledClass: 'is-disabled'
        },

    });
});