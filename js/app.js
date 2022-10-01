/* BUSCADOR */

/* ORDENAR */
function ordenarLista(listaArticulos){
    //Obtenemos el elemento ul
    let ul = document.getElementById(listaArticulos);    
    //Obtenemos la lista de li
    let lista = ul.getElementsByTagName("li");
    //Creamos el array a partir de los elementos li
    //A continuación ordenamos con sort (hay que ordenar mirando el textContent y evitando la etiqueta li
    //Por último recorremos el array ya ordenado y vamos haciendo el append en el elemento ul (sobrescribiéndolo)
    let arrayCanciones = Array.from(lista);
    arrayCanciones.sort((a, b) => a.textContent.localeCompare(b.textContent))
    .forEach(li => ul.appendChild(li));
   
}

  ordenarLista("listaArticulos");


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








