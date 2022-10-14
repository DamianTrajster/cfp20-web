//eMail
const formulario = document.querySelector('#formulario');
const reset = document.getElementById('exampleModal')

formulario.addEventListener('submit', function(e){
    e.preventDefault();

    email();
})

function email(e) {
    if (!formulario.checkValidity()) {
        
       
  
    }else {
        const datos = new FormData(formulario);
    
    fetch('/phpmailer.php', {
        method:'POST',
        body: datos
    })
    .then(res => res.json())
    .then(res => {
        console.log(res)


      
       
        if('exito'){
           Swal.fire({
                icon: 'success',
                title: 'Exito',
                text: 'Mensaje enviado',
                
           }) 
           $('#exampleModal').modal('hide')
           document.getElementById("formulario").reset();
            setTimeout(() => {
                window.location.href = '/index.php';
            }, 3000);
          
        }else {
            e.preventDefault();
            e.stopPropagation();
            Swal.fire({
                icon: 'error',
                title: 'Oops',
                text: 'Error al enviar el msj ',
                footer: 'intenta nuevamente'
              
           }) 
        }
    
    })
    }


    
}










/* BUSQUEDA */
document.addEventListener("keyup", e=>{

    if (e.target.matches("#buscador")){
  
        if (e.key ==="Escape")e.target.value = ""
  
        document.querySelectorAll(".articulo").forEach(curso =>{
  
            curso.textContent.toLowerCase().includes(e.target.value.toLowerCase())
              ?curso.classList.remove("filtro")
              :curso.classList.add("filtro")
        })

  
    } 
  
  
  })



/* GO TOP */
window.onscroll = function() {
    if(document.documentElement.scrollTop > 100 ){
        document.querySelector('.go-top-container').classList.add('show1')
    }else {
        document.querySelector('.go-top-container').classList.remove('show1')
    }
}

document.querySelector('.go-top-container')
.addEventListener('click', ()=> {
    window-scrollTo({
        top:0,
        behavior:'smooth'
    })
})



/* GALERIA DE IMAGENES */

const fulImgBox = document.getElementById("fulImgBox"),
fulImg = document.getElementById("fulImg")

function closeImg() {
    fulImgBox.style.display = "none";
}

function openFulImg(reference){
    fulImgBox.style.display = "flex";
    fulImg.src = reference;
}



/* SLIDER */

$(document).ready(function () {
    //Owl
  
    $('#project-slider').owlCarousel({
        loop: true,
        nav: false,
        items: 2,
        dots: true,
        smartSpeed: 600,
        center: true,
        autoplay: true,
        autoplayTimeout: 4000,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2,
                margin: 8,
            }
        }
    })

   
});









