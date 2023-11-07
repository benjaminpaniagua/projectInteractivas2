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

        1024: {
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

// let moveButton = document.getElementById('moveButton');
// let image = document.getElementById('image');
// let text = document.getElementById('text');

// moveButton.addEventListener('click', () => {
//     let imageOrder = window.getComputedStyle(image).getPropertyValue('order');
//     let textOrder = window.getComputedStyle(text).getPropertyValue('order');

//   image.style.order = textOrder;
//   text.style.order = imageOrder;
// });


// let container = document.querySelector('.section-container');
// let description = document.querySelector('.section-container');

// moveButton.addEventListener('click', () => {
//     let currentAlignment = window.getComputedStyle(container).getPropertyValue('align-items');

//   if (currentAlignment === 'start') {
//     container.style.alignItems = 'end'; 
//     container.style.textAlign = 'right';
//   } else {
//     container.style.alignItems = 'start'; 
//     container.style.textAlign = 'left';
//   }
// });