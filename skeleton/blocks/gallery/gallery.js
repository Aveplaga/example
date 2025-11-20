import Swiper from "swiper/bundle";
import "swiper/css";

const swiperThumbs = new Swiper(".mySwiper", { 
    direction: 'vertical',
    spaceBetween: 10,
    slidesPerView: 5,
    freeMode: true,
    watchSlidesProgress: true,

    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    breakpoints: {
        0: {
            direction: 'horizontal',
            spaceBetween: 20,
            slidesPerView: 3,
        },
        768: {
            direction: 'vertical',
            slidesPerView: 5,
        }
    }
});

swiperThumbs.on('slideChange', function () {
    const prevBtn = document.querySelector('.swiper-button-prev');
    if (swiperThumbs.activeIndex > 0) {
        prevBtn.classList.add('active');
    } else {
        prevBtn.classList.remove('active');
    }
});

const borderActive = document.querySelectorAll('.gallery-link');
borderActive.forEach(item => {
    const img = item.querySelector('.gallery-image__small');
    item.addEventListener('click', e => {
        e.preventDefault();

        borderActive.forEach(i => i.querySelector('.gallery-image__small').classList.remove('active'));
        img.classList.add('active');
    });
});

const swiperMain = new Swiper(".mySwiper2", {
    thumbs: {
        swiper: swiperThumbs, 
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});
