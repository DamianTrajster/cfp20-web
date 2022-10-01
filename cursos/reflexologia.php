<?php include "../layout/header.php";?>


 <!-- Cursos y trayectos -->
 <section class="curso-p curso container">
        <h2>Reflexología </h2>


        <div class="curso-flex">

                    <a href="#"  type="button" class="box" Data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        <p>Reflexología </p>
                    </a>



        </div>


       </section>

       <!-- Paginas web 1 Modal  -->
       <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg  ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">REFLEXOLOGÍA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                   
                    <h3>REQUISITOS GENERALES: </h3>
                        <ul>
                            <li>Mayor de 18 años. </li>
                        </ul>

               

                        <a  class="btn btn-brand"  href="/data/Corporal/Reflexología/REFLEXOLOGIA amdelco.docx"></i> Descargar Programa</a>
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
                        <source loading="lazy"  srcset="/img/cursos/Corporal/MasajesyReflexologia/webp/reflexo.webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Corporal/MasajesyReflexologia/reflexo.jpeg"  onclick="openFulImg(this.src)" alt="estetica corporal 1 " >
                </picture>

                <picture>

                </picture>

                <picture>

                </picture>

                


                
                
              



            </div>


       </div>









<?php include "../layout/footer.php";?>