import Swiper from "swiper/bundle";
import { Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';

document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.resorts__wrapper.swiper');
    if (!slider) return;

    new Swiper(slider, {
        modules: [Navigation],
        loop: false,
        speed: 800,
        slidesPerView: 3,
        spaceBetween: 30,
        enabled: true,

        navigation: {
            nextEl: '.resorts__navigation-button--next',
            prevEl: '.resorts__navigation-button--prev',
            disabledClass: 'is-disabled'
        },

         breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 0,
                enabled: false,
            },

            767: {
                slidesPerView: 3,
                spaceBetween: 30,
            }
         }
    });
}); 
