<?php  $title ="FAQ"  ?>

<?php include "../layout/header.php";?>


<section class=" faq container">
        <h2 class="faq__title">Preguntas Frecuentes</h2>
        <div class="faq__question"> <i class="fa-solid fa-circle-question"></i></div>
       

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header bg-warning" id="headingOne">
      <button class="accordion-button font-weight-bold " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
           <strong>Horarios de atención administrativa</strong> 
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
            Horario de atención es de lunes a viernes de 10 a 21 hs.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         <strong>¿Cuándo son las inscripciones?</strong>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      Hay dos instancias de inscripción por año:
      <ul>
        <li>Para el primer cuatrimestre: comienzan en Diciembre.</li>
        <li> Para el segundo cuatrimestre: comienzan en Junio.</li>
      </ul>

      

        
       
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <strong>¿Qué tipo de certificación tienen?</strong>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
            Certificación Oficial.
      </div>
    </div>
  </div>
</div>


        
</section>




<?php include "../layout/footer.php";?>