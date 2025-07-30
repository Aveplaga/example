import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

export default function taskDuo() {
  document.querySelectorAll('.task-item__logo').forEach(logo => {
    logo.addEventListener('click', () => {
      logo.classList.toggle('active');
    });
  });

  const sliders = document.querySelectorAll('.task-list.swiper');

  sliders.forEach(slider => {
    new Swiper(slider, {
      slidesPerView: 'auto',
      spaceBetween: 5,
      loop: true,
      speed: 1250,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      
    });
  });
}
