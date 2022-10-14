<?php  $title ="CURSOS"  ?>

<?php include "../layout/header.php";?>


 <!-- Cursos y trayectos -->
 <section class="curso-p curso container">
        <h2>Estética Corporal</h2>


        <div class="curso-flex">

                    <a href="#"  type="button" class="box" Data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        <p>Estética Corporal</p>
                    </a>



        </div>


       </section>

       <!-- Paginas web 1 Modal  -->
       <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg  ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ESTÉTICA CORPORAL</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                   <h3>PERFIL PROFESIONAL DEL EGRESADO:</h3>
                    <p>
                    Por su perfil profesional, el egresado está capacitado para desempeñarse en las
                    siguientes tareas: Aplicar técnicas de masaje descontracturante. Realizar masaje circulatorio descongestivo en miembros inferiores. Aplicar técnicas de masaje reductor como prevención y como complemento en el tratamiento de celulitis y obesidad.
                     </p>
                    <h3>REQUISITOS GENERALES: </h3>
                        <ul>
                            <li>Mayor de 18 años. </li>
                            <li>Primario Completo. </li>
                            <li>Conocimientos básicos de Masajes.  </li>
                            
                        </ul>

                         <a  class="btn btn-brand"  href="/data/Corporal/Estética Corporal/ESTETICA CORPORAL - CFP 20.docx" target="_blank"> <i class="fa-regular fa-file-pdf"></i> Descargar Programa</a>
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
                        <source loading="lazy"  srcset="/img/cursos/Corporal/EsteticaCorporal/webp/estcorporal1.webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Corporal/EsteticaCorporal/estcorporal3.jpg"  onclick="openFulImg(this.src)" alt="estetica corporal 1 " >
                </picture>

                <picture>
                        <source loading="lazy"  srcset="/img/cursos/Corporal/EsteticaCorporal/webp/estcorporal3.webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Corporal/EsteticaCorporal/estcorporal3.jpg"  onclick="openFulImg(this.src)" alt="estetica corporal 2 " >
                </picture>

                <picture>
                        <source loading="lazy"  srcset="/img/cursos/Corporal/EsteticaCorporal/webp/esteticacorporal1.webp" onclick="openFulImg(this.src)" type="image/webp">
                        <img  loading="lazy" src="/img/cursos/Corporal/EsteticaCorporal/esteticacorporal1.jpg"  onclick="openFulImg(this.src)" alt="estetica corporal 2 " >
                </picture>
             

                
                
              



            </div>


       </div>









<?php include "../layout/footer.php";?>