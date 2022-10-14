<?php  $title ="CFP20 | INICIO"  ?>

<?php include "./layout/header.php" ; ?>  





        <!-- HERO BANNER -->
        <div class="hero">
            <div class="hero_info">
                <p class="hero_welcome">Bienvenidos</p>
                <h1 class="hero_title">Centro de Formación Profesional Nº20</h1>
                <p class="hero_description">AMdelCO Asociación Mutual de los Colegiales</p>
            </div>
        </div>

        <!-- Cursos y trayectos -->
       <section class="curso container">
        <h2>Cursos y Trayectos Formativos</h2>
            

        <div class="curso-flex">
              
                    <a href="/cursos/amdelco.php" class="box">
                        <i class="fa-solid fa-house"></i>
                        <p>AMdelCO</p>
                    </a>
                    <a href="/cursos/cfp20.php" class="box">
                        <i class="fa-solid fa-school"></i>
                        <p>C.F.P Nº20</p>
                    </a>
              
            </div>

            
       </section>


       <!-- SLIDER -->
       <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 intro text-center">
                        <h2>Algunos de Nuestros Cursos y Trayectos Formativos</h2>
                    </div>
                </div>
                
            </div>
            <div id="project-slider" class="owl-theme owl-carousel">
                <div class="project">
                    <picture>
                         <source loading="lazy"  srcset="img/slider/webp/maquillaje6.webp" type="image/webp">
                         <img  src="img/slider/maquillaje 6.jpg" alt="maquillaje" loading="lazy">
                    </picture>
                    
                    <div class="overlay"></div>
                    <div class="content">
                        <h6>Maquillaje</h6>
                    </div>
                </div>
                <div class="project">
                    <picture>
                            <source loading="lazy"  srcset="img/slider/webp/disenioweb.webp" type="image/webp">
                            <img src="img/slider/disenioweb.jpg" alt="diseño web" loading="lazy">
                    </picture>
                   
                    <div class="overlay"></div>
                    <div class="content">
                       <h6>Diseño de Páginas web</h6>
                    </div>
                </div>
                <div class="project">
                    <picture>
                    <source loading="lazy"  srcset="img/slider/webp/peluqueria2.webp" type="image/webp">
                    <img  src="img/slider/peluqueria 2.jpg" alt="peluqueria"  loading="lazy" >
                    </picture>
                
                    <div class="overlay"></div>
                    <div class="content">
                       <h6>Peluquería</h6>
                    </div>
                </div>
                <div class="project">
                    <picture>
                        <source loading="lazy"  srcset="img/slider/webp/rep.webp" type="image/webp">
                        <img src="img/slider/rep.jpg" alt="reparacion de pc"  loading="lazy">
                    </picture>
                  
                    <div class="overlay"></div>
                    <div class="content">
                       <h6>Reparación de PC</h6>
                    </div>
                </div>
                <div class="project">
                    <picture>
                        <source loading="lazy"  srcset="img/slider/webp/bio3.webp" type="image/webp">
                        <img src="img/slider/bio3.jpg" alt="Refrigeracion" loading="lazy">
                    </picture>
                    
                    <div class="overlay"></div>
                    <div class="content">
                      <h6>Bioenergética</h6>
                    </div>
                </div>
                <div class="project">
                    <picture>
                        <source loading="lazy"  srcset="img/slider/webp/mk1.webp" type="image/webp">   
                        <img src="img/slider/mk1.jpeg" alt="Marketing Digital"  loading="lazy">
                    </picture>
                    <div class="overlay"></div>
                    <div class="content">
                         <h6>Marketing Digital</h6>
                    </div>
                </div>
            </div>
       </section>

   
       
    
       <?php include "./layout/footer.php" ;  ?>  