
import {posts} from '../data/datosprof/profesores.js';



const galeria = document.querySelector('#post');

posts.forEach((item)=> {


    const post =document.createElement('DIV')
    post.classList.add('col-md-3')
    post.classList.add('profile')
    post.classList.add('text-center')
    
    post.innerHTML  = `
           <div class="img-box">
                <img src="img/${item.imagen}" class="img-thumbnail" alt="">
            </div>
            <h2>${item.nombre}</h2>
            <a class="" href="${item.link1}">${item.curso}</a>

     
         
        `

         galeria.appendChild(post);
  
});
