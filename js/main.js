document.addEventListener("DOMContentLoaded", function() {
    init();
    getFilters(document.getElementById('popular1'));
    document.getElementById('popular1').classList.add('cart-green');
    document.getElementById('popular').classList.add('cart-green');
    document.getElementById('text-popular1').classList.add('text-white');
    document.getElementById('text-popular').classList.add('text-white');


   });

   function init(){ 
    let items = ["popular", "starters", "mainDishes", "desserts", "drinks"];
    for (let i = 0; i < items.length; i++) {
        document.getElementById(items[i]+'1').addEventListener('click',function(event) {
            getFilters(this);
            deleteClass();
            this.classList.add('cart-green');
            document.getElementById('text-'+items[i]+'1').classList.add('text-white');
        })
    }
    for (let i = 0; i < items.length; i++) {
        document.getElementById(items[i]).addEventListener('click',function(event) {
            getFilters(this);
            deleteClass();
            this.classList.add('cart-green');
            document.getElementById('text-'+items[i]).classList.add('text-white');        })
    }
    }

    function deleteClass(){
        let items = ["popular", "starters", "mainDishes", "desserts", "drinks"];
        for (let i = 0; i < items.length; i++) {
            document.getElementById(items[i]+'1').classList.remove('cart-green'); 
            document.getElementById('text-'+items[i]+'1').classList.remove('text-white');
          }
          for (let i = 0; i < items.length; i++) {
            document.getElementById(items[i]).classList.remove('cart-green'); 
            document.getElementById('text-'+items[i]).classList.remove('text-white');
          }
    }


    

    function getFilters(obj){

        let info = {
            category: obj.getAttribute('value')
        };

        //fetch
        fetch("http://localhost/projectInteractivas2/response.php", {
            method: "POST",
            mode: "same-origin",
            credentials: "same-origin",
            headers: {
                'Accept': 'application/json, text/plain, */*',
                'Content-Type': "application/json"
            },
            body: JSON.stringify(info)
        })
        .then(response => response.json())
        .then(data => {
            //console.log(data);
            if(document.getElementById("items") !== null) document.getElementById("items").remove();

            if(data.length > 0){
                
                //let container = document.getElementById("items");
                let container = document.createElement("section");
                container.setAttribute("id", "items");
                container.classList.add("container__saucer");
                document.getElementById("foods").appendChild(container);
                
                data.forEach(function(item) {

                    let dish = document.createElement("div");
                    dish.classList.add("card");
                    container.appendChild(dish);
                    //img
                    let image = document.createElement("img");
                    image.classList.add("image__saucer");
                    image.setAttribute("src",item.img_recorted);
                    image.setAttribute("alt", item.names);
                    dish.appendChild(image);


                    let information = document.createElement("div");
                    information.classList.add("container__information");
                    dish.appendChild(information);

                    let linkf = document.createElement("div");
                    linkf.classList.add("linkf");
                    information.appendChild(linkf);

                    let linkFood = document.createElement("a");
                    linkFood.classList.add("link-class");
                    linkFood.classList.add("link-food");
                    linkFood.setAttribute("href", "food.php?id="+item.id_dish);
                    linkf.appendChild(linkFood);

                    let title = document.createElement("h3");
                    title.classList.add("name__saucer");
                    title.innerText = item.names;
                    linkFood.appendChild(title);

                    let calification = document.createElement("p");
                    calification.classList.add("calification");
                    calification.innerText ="★★★★★";
                    linkFood.appendChild(calification);

                    let persons = document.createElement("p");
                    persons.classList.add("persons");
                    if(item.id_amount_people== 1){
                    persons.innerText = 'Individual';
                    }
                    if(item.id_amount_people == 2){
                        persons.innerText = 'Couples';
                    }
                    if(item.id_amount_people == 3){
                        persons.innerText = 'Familiar';
                    }

                    linkFood.appendChild(persons);

                    let addCart = document.createElement("div");
                    addCart.classList.add("addCart");
                    linkFood.appendChild(addCart);
                    
                    let price = document.createElement("p");
                    price.classList.add("price");
                    price.innerText = item.price;
                    addCart.appendChild(price);

                    let btnImage = document.createElement("img");
                    btnImage.classList.add("add");
                    btnImage.setAttribute("src", './img/add.svg');
                    btnImage.setAttribute("alt", "add");
                    addCart.appendChild(btnImage);

                    
                    //like button
                    
                    //like button image
                    
                    //price
                  
                    //title
                    
                    //description
          
                    //link
                   
                });
            }
            
        })
        .catch(err => console.log("error: " + err));

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




