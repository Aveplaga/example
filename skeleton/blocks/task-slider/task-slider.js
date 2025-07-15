import Swiper from 'swiper';
import 'swiper/css';

document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.task-slider.swiper', {
        loop: true,
        effect: 'slide',
        speed: 1000,
        autoplay: {
            delay: 1500,
            disableOnInteraction: false,
        },
        slidesPerView: 1,
    });
});
