<?php  $title ="CURSOS"  ?>

<?php include "../layout/header.php";?>


 <!-- Cursos y trayectos -->
 <section class="curso-p curso container">
        <h2>Estética facial </h2>


        <div class="curso-flex">

                    <a href="#"  type="button" class="box" Data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        <p>Estética facial </p>
                    </a>



        </div>


       </section>

       <!-- Paginas web 1 Modal  -->
       <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg  ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ESTÉTICA FACIAL</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                   <h3>PERFIL PROFESIONAL DEL EGRESADO:</h3>
                    <p>
                        Por su perfil profesional, el egresado está capacitado para desempeñarse en las siguientes tareas: Reconocer los distintos tipos de biotipos cutáneos. Seleccionar el tratamiento estético adecuado al biotipo cutáneo. Aplicar las técnicas cosmetológicas necesarias para los tratamientos estéticos.
                    .</p>
                    <h3>REQUISITOS GENERALES: </h3>
                        <ul>
                            <li>Mayor de 18 años. </li>
                            <li>Primario Completo. </li>
                            
                        </ul>

               

                        <a  class="btn btn-brand"  href="/data/estetica/Estética Facial/Estetica Facial CFP20.doc" target="_blank"> <i class="fa-regular fa-file-pdf"></i> Descargar Programa</a>
                </div>
            </div>
        </div>
    </div>






       <!-- GALERIA IMAGEN -->

       <div>
           <div class="ful-img" id="fulImgBox" onclick="closeImg()">
                <img   src="" id="fulImg" alt="">
                <span onclick="closeImg()">X</span>
           </div>


            <h2 class="img-gallery-title" ><span class="img-gallery-span" >Galeria de Imagenes</span></h2>

            <div class="img-gallery">
                <picture>
                        <source loading="lazy"  srcset="/img/cursos/Estetica/EsteticaFacial/webp/esteticafacial1.webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Estetica/EsteticaFacial/esteticafacial1.jpg"  onclick="openFulImg(this.src)" alt="estetica facial 1" >
                </picture>

                <picture>
                        <source loading="lazy"  srcset="/img/cursos/Estetica/EsteticaFacial/webp/esteticafacial2.webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Estetica/EsteticaFacial/esteticafacial2.jpg"  onclick="openFulImg(this.src)" alt="estetica facial 2 " >
                </picture>

                <picture>
                        <source loading="lazy"  srcset="/img/cursos/Estetica/EsteticaFacial/webp/esteticafacial3.webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Estetica/EsteticaFacial/esteticafacial3.jpg"  onclick="openFulImg(this.src)" alt="estetica facial 3 " >
                </picture>

                <picture>
                        <source loading="lazy"  srcset="/img/cursos/Estetica/EsteticaFacial/webp/esteticafacial4.webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Estetica/EsteticaFacial/esteticafacial4.jpg"  onclick="openFulImg(this.src)" alt="estetica facial 4" >
                </picture>
               

                <picture>
                        <source loading="lazy"  srcset="/img/cursos/Estetica/EsteticaFacial/webp/estfacial5.webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Estetica/EsteticaFacial/estfacial5.jpg"  onclick="openFulImg(this.src)" alt="estetica facial 5 " >
                </picture>

                <picture>
                        <source loading="lazy"  srcset="/img/cursos/Estetica/EsteticaFacial/webp/estfacial6.webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Estetica/EsteticaFacial/estfacial6.jpg"  onclick="openFulImg(this.src)" alt="estetica facial 6 " >
                </picture>


                <picture>
                        <source loading="lazy"  srcset="/img/cursos/Estetica/EsteticaFacial/webp/estfacial7.webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Estetica/EsteticaFacial/estfacial7.jpg"  onclick="openFulImg(this.src)" alt="estetica facial 7 " >
                </picture>

                <picture>
                        <source loading="lazy"  srcset="/img/cursos/Estetica/EsteticaFacial/webp/estfacial1.webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Estetica/EsteticaFacial/estfacial1.jpeg"  onclick="openFulImg(this.src)" alt="estetica facial 7 " >
                </picture>
               
               

                
                
              



            </div>


       </div>









<?php include "../layout/footer.php";?>