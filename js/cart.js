    document.addEventListener("DOMContentLoaded", function(){
        init();
    });

  

    function init(){
        updateSubtotal();
        let btnDelete= document.getElementsByClassName('btn-delete');
        for(let i=0; i<btnDelete.length;i++){
        let btn=btnDelete[i];
        btn.addEventListener('click',function(event){
            btn.parentElement.remove();
            updateSubtotal();

        });
        }
        // let addDish= document.getElementsByClassName('plus');
        // for(let i=0; i<addDish.length;i++){
        // let btn=addDish[i];

        // btn.addEventListener('click',addDish);
        // }
    }
    // function addDish(event){
    //     let buttonClicked = event.target;
    //     let select=buttonClicked.parentElement;
    //     let actualValue=select.getElementsByClassName('cart-item-amount')[0].value;
    //     actualValue++;
    //     select.getElementsByClassName('cart-item-amount')[0].value=actualValue;
    //     updateSubtotal();


    // }
    function updateSubtotal(){
        let totalExtras=0;
        let totalFoods=document.getElementsByClassName("cart-item");
        for(let i=0; i<totalFoods.length;i++){
            totalExtras = document.getElementById("menu-item"+i).getAttribute("item-price") * document.getElementById("menu-item"+i).value;
        }

        document.getElementById("total").innerHTML = totalExtras;
    
    }

   
   

