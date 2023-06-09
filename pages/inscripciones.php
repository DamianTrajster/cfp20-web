<?php  $title ="INSCRIPCIONES"  ?>



<?php include "../layout/header.php";?>

<div class="container">
    <h1 class="text-center mb-5">Inscripciones 2023</h1>
    <h3 class="text-center mb-4">Seleccione una opción y haga clic en la imagen deseada.</h3>

    <div class="btn-group btn-group-center" role="group" aria-label="Secciones">
        <button type="button" class="btn btn-primary btn-section filter-button" data-section="seccion1">CFP20</button>
        <button type="button" class="btn btn-primary btn-section filter-button" data-section="seccion2">AMDELCO</button>
        <button type="button" class="btn btn-primary btn-section filter-button" data-section="seccion3">Talleres</button>
        <button type="button" class="btn btn-primary btn-section filter-button" data-section="all">Todos</button>
      </div>
  
      <div class="row gallery">
        <div class="col-md-4 col-lg-3 mb-4 gallery-item seccion1">
          <img src="../img/inscripciones/cfp20-estetica2do.jpg" alt="Trabajo 1" class="img-fluid" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-title="Trabajo 1" data-bs-content="Contenido del Trabajo 1"> 
          <h6 class="text-center">CFP20 - Estética</h6>
          
        </div>

        <div class="col-md-4 col-lg-3 mb-4 gallery-item seccion1">
          <img src="../img/inscripciones/cfp20-corporal2do.jpg" alt="Trabajo 1" class="img-fluid" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-title="Trabajo 1" data-bs-content="Contenido del Trabajo 1"> 
          <h6 class="text-center">CFP20 - Corporal</h6>
          
        </div>
        <div class="col-md-4 col-lg-3 mb-4 gallery-item seccion1">
          <img src="../img/inscripciones/cfp20-informatica.jpg" alt="Trabajo 1" class="img-fluid" data-bs-toggle="modal" data-bs-target="#exampleModal3" data-bs-title="Trabajo 1" data-bs-content="Contenido del Trabajo 1"> 
          <h6 class="text-center">CFP20 - Informática</h6>
          
        </div>
        <div class="col-md-4 col-lg-3 mb-4 gallery-item seccion2">
         <!--  <img src="img/talleres-junio2.jpeg" alt="Trabajo 2" class="img-fluid" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-title="Trabajo 2" data-bs-content="Contenido del Trabajo 2"> -->
         <h6 class="text-center">Proximamente cursos Amdelco</h6>
        </div>
        <div class="col-md-4 col-lg-3 mb-4 gallery-item seccion3 ">
          <img src="../img/inscripciones/talleres-junio2.jpeg" alt="Trabajo 3" class="img-fluid " data-bs-toggle="modal" data-bs-target="#exampleModal4" data-bs-title="Trabajo 3" data-bs-content="Contenido del Trabajo 3">
          <h6 class="text-center">Talleres Junio/Julio 2023</h6>
        </div>
       
        
       
      </div>
    </div>
  
<!-- Ventana modal cfp20 Estetica-->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img height="800px" width="800px" src="../img/inscripciones/cfp20-estetica2do.jpg" alt="Imagen Ampliada" class="img-fluid modal-image">
          <p class="modal-content"></p>
        </div>
        <h2 class="text-center">CFP20- ESTÉTICA</h2>
        <div class="modal-footer mx-auto">
          
          <a target="_blank" href="https://cfpagencia.bue.edu.ar/scriptcase/app/GOETAL/app_Login/" type="button" class="btn btn-success p-3">Inscribite</a>
          <a download href="/img/inscripciones/cfp20-estetica2do.jpg" type="button" class="btn btn-primary p-3">Descargar</a>
          <button type="button" class="btn btn-secondary p-3" data-bs-dismiss="modal">Cerrar</button>
         
        </div>
      </div>
    </div>
  </div>


  <!-- Ventana modal cfp20 Corporal-->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img height="800px" width="800px" src="../img/inscripciones/cfp20-corporal2do.jpg" alt="Imagen Ampliada" class="img-fluid modal-image">
          <p class="modal-content"></p>
        </div>
        <h2 class="text-center">CFP20- CORPORAL</h2>
        <div class="modal-footer mx-auto">
          
          <a target="_blank" href="https://cfpagencia.bue.edu.ar/scriptcase/app/GOETAL/app_Login/" type="button" class="btn btn-success p-3">Inscribite</a>
          <a download href="/img/inscripciones/cfp20-corporal2do.jpg" type="button" class="btn btn-primary p-3">Descargar</a>
          <button type="button" class="btn btn-secondary p-3" data-bs-dismiss="modal">Cerrar</button>
         
        </div>
      </div>
    </div>
  </div>


  <!-- Ventana modal cfp20 Informatica-->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img height="800px" width="800px" src="../img/inscripciones/cfp20-informatica.jpg" alt="Imagen Ampliada" class="img-fluid modal-image">
          <p class="modal-content"></p>
        </div>
        <h2 class="text-center">CFP20- INFORMÁTICA</h2>
        <div class="modal-footer mx-auto">
          
          <a target="_blank" href="https://cfpagencia.bue.edu.ar/scriptcase/app/GOETAL/app_Login/" type="button" class="btn btn-success p-3">Inscribite</a>
          <a download href="/img/inscripciones/cfp20-informatica.jpg" type="button" class="btn btn-primary p-3">Descargar</a>
          <button type="button" class="btn btn-secondary p-3" data-bs-dismiss="modal">Cerrar</button>
         
        </div>
      </div>
    </div>
  </div>


  <!-- Ventana modal talleres -->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img height="800px" width="800px" src="../img/inscripciones/talleres-junio2.jpeg" alt="Imagen Ampliada" class="img-fluid modal-image">
          <p class="modal-content"></p>
        </div>
        <h2 class="text-center">Talleres Amdelco Junio/Julio</h2>
        <div class="modal-footer mx-auto">
          
          <a target="_blank" href="https://forms.gle/fbSSNFJHudEBRUip8" type="button" class="btn btn-success p-3">Inscribite</a>
          <a download href="/img/inscripciones/talleres-junio2.jpeg" type="button" class="btn btn-primary p-3">Descargar</a>
          <button type="button" class="btn btn-secondary p-3" data-bs-dismiss="modal">Cerrar</button>
         
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const filterButtons = document.querySelectorAll(".filter-button");
      const galleryItems = document.querySelectorAll(".gallery-item");
      const modalTitle = document.querySelector(".modal-title");
      const modalContent = document.querySelector(".modal-content");
      const modalImage = document.querySelector(".modal-image");

      filterButtons.forEach(button => {
        button.addEventListener("click", function() {
          const section = this.getAttribute("data-section");

          galleryItems.forEach(item => {
            item.classList.remove("active");

            if (section === "all" || item.classList.contains(section)) {
              item.classList.add("active");
            }
          });
        });
      });

    
    });
  </script>





<?php include "../layout/footer.php";?>




