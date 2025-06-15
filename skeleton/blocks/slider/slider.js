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

        speed: 1000,
        effect: 'slide',
    });
});