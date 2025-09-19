import Swiper from 'swiper';
import { Autoplay, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';

document.addEventListener('DOMContentLoaded', () => {
  const slider = document.querySelector('.section-slider.swiper');
  if (!slider) return;

  new Swiper(slider, {
    modules: [Autoplay, Pagination],
    loop: true,
    speed: 2000,
    slidesPerView: 1,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
  });
});
