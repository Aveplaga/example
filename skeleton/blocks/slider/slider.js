document.addEventListener('DOMContentLoaded', function() {
    const swiper = new Swiper('.swiper', { 
        autoplay: {
            delay: 1500, 
            disableOnInteraction: false,
        },
        loop: true, 

        breakpoints: {

            768: {
                slidesPerView: 2,
            },

            1024: {
                slidesPerView: 3,
            },

            1200: {
                slidesPerView: 4, 
            }
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        speed: 1000,
        effect: 'slide',
    });
});