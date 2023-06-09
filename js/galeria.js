

 import {cfp20} from '../data/galeriadatos/escueladatos.js'; 



const galeria = document.querySelector('#cfp20');


cfp20.forEach((item)=> {


    const imagen = document.createElement('picture');
    
     
    imagen.innerHTML  = `
                
                <img loading="lazy" width="200" height="300" src="${item.jpg}" alt="imagen galeria" onclick="openFulImg(this.src)" >

     
         
        `

         galeria.appendChild(imagen);
  
});





import {cursos} from '../data/galeriadatos/cursosdatos.js'; 



const cursosGaleria = document.querySelector('#img-cursos');


cursos.forEach((item)=> {


    const imagen = document.createElement('picture');
    imagen.classList.add('picture_cursos')
     
    imagen.innerHTML  = `
                <source srcset="${item.webp}" type="image/webp" onclick="openFulImg(this.src)" >
                <img loading="lazy" width="200" height="300" src="${item.jpg}" alt="imagen galeria" onclick="openFulImg(this.src)" >
                <div class="content_title">
                  <h6>${item.curso}</h6>
                </div>
     
         
        `
        
        cursosGaleria.appendChild(imagen);
  
});