const swiper = new Swiper('.swiper', {
    // Navigation arrows
    slidesPerView: 1,
    spaceBetween: 0,

    loop: true,
   
    pagination: {
         el: ".swiper-pagination",
        clickable: true,
            },
    breakpoints: {
        640: {
            slidesPerView: 3,
            spaceBetween: 20,
            loop: false,
        },

        817: {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: false,
        },

        1025: {
            slidesPerView: 3,
            spaceBetween: 0,
            loop: false,

        },
        1026: {
            slidesPerView: 4,
            spaceBetween: 0,
            loop: false,

        }

    }
});