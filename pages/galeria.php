<?php  $title ="GALERIA IMAGENES"  ?>

<?php include "../layout/header.php";?>


<!-- Nuestro espacio --> 
<div>
           <div class="ful-img" id="fulImgBox" onclick="closeImg()">
                <img   src="" id="fulImg" alt="">
                <span onclick="closeImg()">X</span>
           </div>


            <h2 class="img-gallery-title" ><span class="img-gallery-span" >Nuestro Espacio</span></h2>

            <div class="img-gallery"  id="cfp20">
                    
            </div>


</div>




<script src="/js/galeria.js" type="module"></script>

    <!-- Cursos -->

    <div>
           <div class="ful-img" id="fulImgBox" onclick="closeImg()">
                <picture>
                    <source loading="lazy"  srcset="" id="fulImg" type="image/webp">
                    <img  loading="lazy" src=""  id="fulImg"   alt="bioenergetica 6 " >  
                </picture>
                <!-- <img src="" id="fulImg" alt=""> -->
                <span onclick="closeImg()">X</span>
           </div>


            <h2 class="img-gallery-title" ><span class="img-gallery-span" >Cursos Y Trayectos</span></h2>

            <div class="img-gallery" id="img-cursos">
               
            </div>


</div>






<?php include "../layout/footer.php";?>