<?php  $title ="BUSQUEDA"  ?>

<?php include "../layout/header.php";?>

<section class="container" id="contenedor-main">
        <h2 class="n-titulo">Busqueda</h2>

   
     <input class="input-buscar" type="text" id="buscador" name="buscador"  placeholder="Buscar curso..." >
      

            
            <ul id="listaArticulos">
              
                <li class="li-buscar"><a href="" class="articulo"><i class="fa-solid fa-folder"></i>Masajes corporales con elementos</a></li> 
                <li class="li-buscar"><a href="/cursos/reflexologia.php" class="articulo"><i class="fa-solid fa-folder"></i>Reflexologia</a></li> 
                <li class="li-buscar"><a href="/cursos/yoga.php" class="articulo"><i class="fa-solid fa-folder"></i>Yoga</a></li> 
                <li class="li-buscar"><a href="/cursos/bioenergetica.php" class="articulo"><i class="fa-solid fa-folder"></i>Bioenergetica</a> </li> 
                <li class="li-buscar"><a href="" class="articulo"><i class="fa-solid fa-folder"></i>Quimica Cosmética </a>  </li> 
                <li class="li-buscar"><a href="/cursos/depilacion.php" class="articulo"><i class="fa-solid fa-folder"></i>Depilacion y Manicuria </a>  </li> 
                <li class="li-buscar"><a href="/cursos/esteticafacial.php" class="articulo"><i class="fa-solid fa-folder"></i>Estetica Facial </a> </li> 
                <li class="li-buscar"><a href="/cursos/peluqueria.php" class="articulo"><i class="fa-solid fa-folder"></i>Peluquero/a Profesional</a>  </li> 
                <li class="li-buscar"><a href="/cursos/maquillador.php" class="articulo"><i class="fa-solid fa-folder"></i>Maquillador/a Profesional</a>  </li> 
                <li class="li-buscar"><a href="/cursos/tecnicasdrenajelinfatico.php" class="articulo"><i class="fa-solid fa-folder"></i>Tecnicas de Drenaje Linfatico Manual </a>  </li> 
                <li class="li-buscar"><a href="/cursos/esteticacorp.php" class="articulo"><i class="fa-solid fa-folder"></i>Estetica Corporal </a>  </li> 
                <li class="li-buscar"><a href="/cursos/masajesarmonizadores.php" class="articulo"><i class="fa-solid fa-folder"></i>Masajes Armonizadores y Esteticos </a>  </li> 
                <li class="li-buscar"><a href="/cursos/marketingdigital.php" class="articulo"><i class="fa-solid fa-folder"></i>Marketing Digital </a>  </li> 
                <li class="li-buscar"><a href="/cursos/disenioweb.php" class="articulo"><i class="fa-solid fa-folder"></i>Diseño de Paginas Web   </a>  </li> 
                <li class="li-buscar"><a href="/cursos/instysoporte.php" class="articulo"><i class="fa-solid fa-folder"></i>Instalacion y Soporte de Sistemas Informaticos </a>  </li> 
                <li class="li-buscar"><a href="/cursos/operadorInformatica.php" class="articulo"><i class="fa-solid fa-folder"></i>Operador de Informatica </a>  </li> 
                
            </ul>
    


        

</section>




<script>
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
</script>


<?php include "../layout/footer.php";?>