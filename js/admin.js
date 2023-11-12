const dropArea = document.getElementById('drop-area');
const inputFile = document.getElementById('input-file');
const imageView = document.getElementById('img-view');
const dropAreaRecort = document.getElementById('drop-area-recort');
const inputFileRecort = document.getElementById('input-recort');
const imageViewRecort = document.getElementById('img-view-recort');

inputFileRecort.addEventListener('change',uploadImageRecort);
inputFile.addEventListener('change',uploadImage);


function uploadImage(){
        const file = inputFile.files[0];
        if(file.type.startsWith('image/')){
            try{
                let imgLink= URL.createObjectURL( inputFile.files[0]);
                imageView.style.backgroundImage="url("+imgLink+")";
                imageView.textContent="";
                imageView.style.border=0;
                console.log('entre aqui');
            } catch (error) {
                console.error('Error al crear el objeto de URL:', error);
               
            }
            
        }else{
            let img=document.getElementById('short-image');
            img.src="./img/delete.svg";      
            document.getElementById('p-file').innerText="Only image formatting is allowed, try again";
  
        }
}
function uploadImageRecort(){
    const files = inputFileRecort.files[0];
    if(files.type.startsWith('image/')){
        try{
            let imgLink= URL.createObjectURL( inputFileRecort.files[0]);
            imageViewRecort.style.backgroundImage="url("+imgLink+")";
            imageViewRecort.textContent="";
            imageViewRecort.style.border=0;
            console.log('entre aqui');
        } catch (error) {
            console.error('Error al crear el objeto de URL:', error);
           
        }
        
    }else{
        let img=document.getElementById('short-image-recort');
        img.src="./img/delete.svg";      
        document.getElementById('p-file-recort').innerText="Only image formatting is allowed, try again";

    }
}
dropArea.addEventListener("dragover",function(e){
    e.preventDefault();
});
dropArea.addEventListener("drop",function(e){
    e.preventDefault();
    inputFile.files= e.dataTransfer.files;
    uploadImage();
})


