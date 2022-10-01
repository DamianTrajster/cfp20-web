<?php include "../layout/header.php";?>


 <!-- Cursos y trayectos -->
 <section class="curso-p curso container">
        <h2>Masajes Armonizadores y Estéticos</h2>


        <div class="curso-flex">

                    <a href="#"  type="button" class="box" Data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        <p>Masajes Armonizadores y Estéticos I</p>
                    </a>

                    <a href="#"  type="button" class="box" Data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <p>Masajes Armonizadores y Estéticos II</p>
                    </a>




        </div>


       </section>

       <!-- I Modal  -->
       <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg  ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">MASAJES CORPORALES ARMONIZADORES Y ESTÉTICOS I </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                   <h3>PERFIL PROFESIONAL DEL EGRESADO:</h3>
                    <p>
                        
                        A la finalización del curso el egresado está capacitado para realizar masajes corporales que mejoren la estética corporal, que reduzcan el estrés y que promuevan la armonización psicofísica.
                        Ha adquirido conocimiento de anatomía y fisiología, registro del propio cuerpo y del cuerpo del otro y fundamentalmente del estado de tensión y de relajación corporal.

                     </p>
                    <h3>REQUISITOS GENERALES: </h3>
                        <ul>
                            <li>Mayor de 18 años. </li>
                            <li>Primario Completo. </li>
                            
                            
                        </ul>

               

                        <a  class="btn btn-brand"  href="/data/Corporal/Masajes Armonizadores y Estéticos/MASAJES CORPORALES ARMONIZADORES Y ESTETICOS I - CFP 20.docx"></i> Descargar Programa</a>
                </div>
            </div>
        </div>
    </div>


      <!-- II Modal  -->
      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg  ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">MASAJES CORPORALES ARMONIZADORES Y ESTÉTICOS II </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                   <h3>PERFIL PROFESIONAL DEL EGRESADO:</h3>
                    <p>
                        
                        A la finalización del curso está capacitado para realizar masajes relajantes, tonificantes para reducir gordura y celulitis; saber cuándo aplicar un masaje sedativo o activante; Realizar maniobras de ayuda para elongar grupos musculares y segmentos corporales y mejorar la capacidad respiratoria.

                     </p>
                    <h3>REQUISITOS GENERALES: </h3>
                        <ul>
                            <li>Mayor de 18 años. </li>
                            <li>Primario Completo. </li>
                            <li>Tener aprobado Masajes Armonizadores y Estéticos I. </li>
                            
                        </ul>

               

                        <a  class="btn btn-brand"  href="/data/Corporal/Masajes Armonizadores y Estéticos/MASAJES CORPORALES ARMONIZADORES Y ESTETICOS II - CFP 20.docx"></i> Descargar Programa</a>
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
                        <source loading="lazy"  srcset="/img/cursos/Corporal/MasajesyReflexologia/webp/masajes (1).webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Corporal/MasajesyReflexologia/masajes.jpg"  onclick="openFulImg(this.src)" alt="masajes 1 " >
                </picture>


                <picture>
                        <source loading="lazy"  srcset="/img/cursos/Corporal/MasajesyReflexologia/webp/masajes.webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Corporal/MasajesyReflexologia/masajes.jpeg"  onclick="openFulImg(this.src)" alt="masajes 2 " >
                </picture>

                <picture>
                        <source loading="lazy"  srcset="/img/cursos/Corporal/MasajesyReflexologia/webp/masajes1.webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Corporal/MasajesyReflexologia/masajes1.jpg"  onclick="openFulImg(this.src)" alt="masajes 3 " >
                </picture>

                <picture>
                        <source loading="lazy"  srcset="/img/cursos/Corporal/MasajesyReflexologia/webp/masajes2.webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Corporal/MasajesyReflexologia/masajes2.jpg"  onclick="openFulImg(this.src)" alt="masajes 4 " >
                </picture>

                
                
              



            </div>


       </div>









<?php include "../layout/footer.php";?>