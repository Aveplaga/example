import Swiper from 'swiper';
import 'swiper/css';

document.addEventListener('DOMContentLoaded', () => {
  const el = document.querySelector('.task-slider.swiper');
  if (!el) return;

  const bullets = el.closest('.container').querySelectorAll('.manual-bullet');

  const swiper = new Swiper(el, {
    loop: true,
    speed: 1250,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    slidesPerView: 1,
  });

  swiper.on('slideChange', () => {
    bullets.forEach((bullet, i) => {
      bullet.classList.toggle('active', i === swiper.realIndex);
    });
  });

  bullets.forEach((bullet, i) => {
    bullet.addEventListener('click', () => {
      swiper.slideToLoop(i);
    });
  });

  bullets.forEach((bullet, i) => {
    bullet.classList.toggle('active', i === swiper.realIndex);
  });
});
