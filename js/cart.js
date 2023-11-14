    document.addEventListener("DOMContentLoaded", function(){
        init();
    });

    function init(){
        let btnDelete= document.getElementsByClassName('btn-delete');
        for(let i=0; i<btnDelete.length;i++){
        let btn=btnDelete[i];
        btn.addEventListener('click',function(event){
            btn.parentElement.remove();
        })
        }
    }
   

