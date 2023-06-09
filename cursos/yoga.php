<?php  $title ="CURSOS"  ?>

<?php include "../layout/header.php";?>


 <!-- Cursos y trayectos -->
 <section class="curso-p curso container">
        <h2>YOGA</h2>


        <div class="curso-flex">

                    <a href="#"  type="button" class="box" Data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        <p>YOGA I</p>
                    </a>
                    <a href="#" type="button" class="box" Data-bs-toggle="modal" data-bs-target="#exampleModal2">
                      <p class="soporte">YOGA II</p>
                    </a>
                    <a href="#" type="button" class="box" Data-bs-toggle="modal" data-bs-target="#exampleModal3">
                      <p class="soporte">YOGA III</p>
                    </a>



        </div>


       </section>

       <!-- Orientación YOGA 1 Modal  -->
       <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg  ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> YOGA (CPC I)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                    <h3>REQUISITOS GENERALES: </h3>
                        <ul>
                            <li>Mayor de 18 años. </li>
                            <li>Primario Completo. </li>
                          
                        </ul>

                  

                        <a download   class="btn btn-brand"  href="/data/AMdelCo/Corporal/CoordinaciondePracticasCorporales/Yoga/Yoga I.pdf" target="_blank"> <i class="fa-regular fa-file-pdf"></i> Descargar Programa</a>
                </div>
            </div>
        </div>
    </div>

      <!-- Orientación YOGA 2 Modal  -->
      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg  ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> YOGA (CPC II)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                  
                    <h3>REQUISITOS GENERALES: </h3>
                        <ul>
                            <li>Mayor de 18 años. </li>
                            <li>Primario Completo. </li>
                            <li>CPC I (con orientación en Yoga) APROBADO</li>
                        </ul>



                        <a download  class="btn btn-brand"  href="/data/AMdelCo/Corporal/CoordinaciondePracticasCorporales/Yoga/Yoga II.pdf" target="_blank"> <i class="fa-regular fa-file-pdf"></i> Descargar Programa</a>
                </div>
            </div>
        </div>
    </div>

        <!-- Orientación YOGA 3 Modal  -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg  ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> YOGA (CPC III)</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                    <h4>CURSO CON CERTIFICACION AMdelCo</h4>
                    <h3>PERFIL PROFESIONAL DEL EGRESADO:</h3>
                    <p>Destinado a quienes tengan aprobados los cursos anuales de C.P.C I y II con orientación en Yoga.</p>
                    <h3>REQUISITOS GENERALES: </h3>
                    
                        <ul>
                            <li>Mayor de 18 años. </li>
                            <li>Primario Completo. </li>
                            <li>CPC I y II (con orientación en Yoga) APROBADOS</li>
                        </ul>



                        <a download   class="btn btn-brand"  href="/data/AMdelCo/Corporal/CoordinaciondePracticasCorporales/Yoga/Yoga III.pdf" target="_blank"> <i class="fa-regular fa-file-pdf"></i> Descargar Programa</a>
                </div>
            </div>
        </div>
        </div>





       <!-- GALERIA IMAGEN -->

    <!--    <div>
           <div class="ful-img" id="fulImgBox" onclick="closeImg()">
                <img  src="" id="fulImg" alt=" ">
                <span onclick="closeImg()">X</span>
           </div>


            <h2 class="img-gallery-title" ><span class="img-gallery-span" >Galeria de Imagenes</span></h2>

            <div class="img-gallery">
                <picture>
                        <source loading="lazy"  srcset="/img/cursos/Corporal/CPCYoga/webp/yoga1.webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Corporal/CPCYoga/yoga1.jpg"  onclick="openFulImg(this.src)" alt="yoga 1 " >  
                </picture>
                <picture>
                        <source loading="lazy"  srcset="/img/cursos/Corporal/CPCYoga/webp/yoga2.webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Corporal/CPCYoga/yoga2.jpg"  onclick="openFulImg(this.src)" alt="yoga 2 " >  
                </picture>

                <picture>
                        <source loading="lazy"  srcset="/img/cursos/Corporal/CPCYoga/webp/yoga3.webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Corporal/CPCYoga/yoga3.jpg"  onclick="openFulImg(this.src)" alt="yoga 3 " >  
                </picture>

                <picture>
                        <source loading="lazy"  srcset="/img/cursos/Corporal/CPCYoga/webp/yoga4.webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Corporal/CPCYoga/yoga4.jpg"  onclick="openFulImg(this.src)" alt="yoga 4" >  
                </picture>

                <picture>
                        <source loading="lazy"  srcset="/img/cursos/Corporal/CPCYoga/webp/yoga5.webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Corporal/CPCYoga/yoga5.jpg"  onclick="openFulImg(this.src)" alt="yoga 5" >  
                </picture>

                <picture>
                        <source loading="lazy"  srcset="/img/cursos/Corporal/CPCYoga/webp/yoga6.webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Corporal/CPCYoga/yoga6.jpg"  onclick="openFulImg(this.src)" alt="yoga 6" >  
                </picture>
              
                
             
             
            </div>


       </div>
 -->








<?php include "../layout/footer.php";?>