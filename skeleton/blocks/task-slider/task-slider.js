import { Swiper } from 'swiper';
import 'swiper/css';

document.addEventListener('DOMContentLoaded', function () {
    const sliderEl = document.querySelector('.task-slider.swiper');

    if (sliderEl) {
        new Swiper(sliderEl, {
            loop: true,
            effect: 'slide',
            speed: 1000,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
        });
    }
});
