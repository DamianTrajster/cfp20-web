<?php  $title ="CFP20 | INICIO"  ?>

<?php include "./layout/header.php" ; ?>  

<form id="form" class="contact-form" name="contact-form" action="/phpmailer.php" method="POST">
      <div class="col-sm-5 col-sm-offset-1">
          <div class="form-group">
             <label>Nombre *</label>
             <input type="text" id="nombre" name="nombre" class="form-control" >
           </div>

           <div class="form-group">
              <label>Email *</label>
              <input type="email" id="email" name="email" class="form-control" >
           </div> 

           <div class="form-group">
               <label>Asunto *</label>
               <input type="text" id="asunto" name="asunto" class="form-control" >
           </div>

           <div class="form-group">
                <label>Mensaje *</label>
                <textarea name="mensaje" id="mensaje"  class="form-control" rows="8"></textarea>
           </div>                        

           <div class="form-group">
                <input type="submit" id="submit" name="submit" class="btn btn-primary btn-lg" value="Enviar" />
           </div>                      
      </div> 
</form>

<?php include "./layout/footer.php" ;  ?>  