document.addEventListener('DOMContentLoaded', () => {
  const container = document.querySelector('.viewed-list');
  const prevBtn = document.querySelector('.task-viewed__arrow--prev');
  const nextBtn = document.querySelector('.task-viewed__arrow--next');

  const slide = container.querySelector('.viewed-item');
  const slideWidth = slide.offsetWidth + 16; 

  prevBtn.addEventListener('click', () => {
    container.scrollBy({
      left: -slideWidth,
      behavior: 'smooth',
    });
  });

  nextBtn.addEventListener('click', () => {
    container.scrollBy({
      left: slideWidth,
      behavior: 'smooth',
    });
  });

  setInterval(() => {
    container.scrollBy({
      left: slideWidth,
      behavior: 'smooth',
    });
  }, 2500);
});
