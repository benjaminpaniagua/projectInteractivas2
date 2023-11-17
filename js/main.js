document.addEventListener("DOMContentLoaded", function() {
    init();
   });

   function init(){ 
    let items = ["popular", "starters", "mainDishes", "desserts", "drinks"];
    for (let i = 0; i < items.length; i++) {
        document.getElementById(items[i]+'1').addEventListener('click',function(event) {
            window.location.href='http://localhost/projectInteractivas2/menu.php?categorie='+items[i];
        })
    }
    for (let i = 0; i < items.length; i++) {
        document.getElementById(items[i]).addEventListener('click',function(event) {
            window.location.href='http://localhost/projectInteractivas2/menu.php?categorie='+items[i];
        })
    }
    }

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




