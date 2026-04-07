import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';

document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.keys__list.swiper');
    if (!slider) return;

    new Swiper(slider, {
        modules: [Navigation],
        loop: false,
        speed: 1500,
        slidesPerView: "auto",
        enabled: true,

        navigation: {
            nextEl: '.keys__button-right',
            prevEl: '.keys__button-left',
            disabledClass: 'is-disabled'
        },
    });
});