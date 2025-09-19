import Swiper from 'swiper';
import 'swiper/css';

document.addEventListener('DOMContentLoaded', () => {
  const slide = document.querySelector('.section-slider.swiper');
  if (!slide) return;

  const swiper = new Swiper(slide, {
    loop: true,
    speed: 1250,
    autoplay: {
      delay: 100,
      disableOnInteraction: false,
    },
    slidesPerView: 1,
  });
});
