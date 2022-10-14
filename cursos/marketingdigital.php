<?php  $title ="CURSOS"  ?>

<?php include "../layout/header.php";?>


 <!-- Cursos y trayectos -->
 <section class="curso-p curso container">
        <h2>Marketing Digital</h2>


        <div class="curso-flex">

                    <a href="#"  type="button" class="box" Data-bs-toggle="modal" data-bs-target="#exampleModal1">
                        <p>Marketing Digital</p>
                    </a>



        </div>


       </section>

       <!-- Paginas web 1 Modal  -->
       <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg  ">
                <div class="modal-content  ">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">OPERADOR DE HERRAMIENTAS DE MARKETING DIGITAL</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5">
                   <h3>PERFIL PROFESIONAL DEL EGRESADO:</h3>
                    <p>El operador de herramientas de marketing digital interviene en la ejecución de estrategias de promoción de productos y/o servicios, mediante el manejo de herramientas, plataformas y otros medios digitales adecuados a esos fines. Para realizar esta intervención este operador:
                    - Conoce y utiliza plataformas web orientadas a la promoción por medios electrónicos de comercialización.
                    - Selecciona herramientas, plataformas y medios de entorno digital.
                    - Aplica herramientas de mercadeo digital.
                    - Usa las redes sociales como medio de promoción de su propia actividad profesional, de terceros y/o de la organización en la que se desempeña.
                    - Selecciona y utiliza herramientas de medición de audiencia.
                    - Produce e interpreta informes de registro de métricas obtenidas
                    Los recursos que habitualmente utiliza para realizar esta actividad son buscadores (Google, Yahoo), plataformas de desarrollo, redes sociales (Facebook, Instagram, Twitter, Linkedin), herramientas multimedia.
                    .</p>
                    <h3>REQUISITOS GENERALES: </h3>
                        <ul>
                            <li>Mayor de 18 años. </li>
                            <li>Primario Completo. </li>
                            
                        </ul>

               

                        <a  class="btn btn-brand"  href="/data/Informatica/MarketingDigital/MARKETING DIGITAL - CFP 20.doc" target="_blank"> <i class="fa-regular fa-file-pdf"></i> Descargar Programa</a>
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
                        <source loading="lazy"  srcset="/img/cursos/Informática/MarketingDigital/webp/mk1.webp"    onclick="openFulImg(this.src)" type="image/webp">
                         <img  loading="lazy" src="/img/cursos/Informática/MarketingDigital/mk1.jpeg"  onclick="openFulImg(this.src)" alt="Marketing Digital 1 " >
                </picture>
                <picture>
                        <source loading="lazy"  srcset="/img/cursos/Informática/MarketingDigital/webp/mk2.webp"    onclick="openFulImg(this.src)" type="image/webp">
                        <img  loading="lazy" src="/img/cursos/Informática/MarketingDigital/webp/mk2.webp"  onclick="openFulImg(this.src)" alt="Marketing Digital 2" >
                         
                </picture>
                <picture>
                        <source loading="lazy"  srcset="/img/cursos/Informática/MarketingDigital/webp/mk2.webp"    onclick="openFulImg(this.src)" type="image/webp">
                        <img  loading="lazy" src="/img/cursos/Informática/MarketingDigital/webp/mk3.webp"  onclick="openFulImg(this.src)" alt="Marketing Digital 3 " >
                         
                </picture>

                
                
              



            </div>


       </div>









<?php include "../layout/footer.php";?>