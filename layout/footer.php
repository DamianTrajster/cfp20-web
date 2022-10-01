   <!-- FOOTER -->
   <footer>
            <div class="footer-top">
                <div class="container d-flex flex-column flex-md-row align-items-md-center ">
                    <div class="col-lg-6 ">
                            <a class="navbar-brand" href="/index.php">
                                <img src="/img/logo.png" alt="cfp20-LOGO">
                            </a>
                            
                            <div class="social-links">
                                <a href="https://www.instagram.com/cfp20_amdelco/"  target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.facebook.com/cfp20amdelco" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                                <a href="https://api.whatsapp.com/send?phone=541132076188&text=Hola,Necesito mas informacion!" target="_blank"><i class="fa-brands fa-whatsapp"></i></i></a>
                            </div>
                      
                    </div>
                    <iframe  title="myFrame" class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.012457791985!2d-58.45695599510097!3d-34.57855133178062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5e7e69339d7%3A0xb7ab9fd5898290f8!2sDelgado%20769%2C%20C1427BDI%20CABA!5e0!3m2!1ses!2sar!4v1663889061343!5m2!1ses!2sar" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
                </div>
            </div>

            <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <p class="mb-0"> Copyright &copy; CFP20 AMdelCO - Todos los derecho Reservados </p>
                            </div>
                        </div>
                    </div>
            </div>
        </footer>

  


      
    <!-- MODAL -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
           <div class="modal-body ">
                <div class="container-fluid">
                        <div class="row justify-content-center" >
                        

                            <div class="col-lg-12  ">
                                <form  id="form" class="row p-lg-5 gy-3 needs-validation"  novalidate >
                                    <div class="col-12">
                                        <h2>Dejanos tu mensaje en el siguiente formulario</h2>
                                    </div>
        
                                    <div class="col-lg-6">
                                       <label for="validationCustom01" class="form-label">Nombre</label>
                                       <input type="text"  class="form-control" id="validationCustom01" placeholder="Nombre"  name="name" required >
                                       <div class="invalid-feedback">
                                        Este campo es Obligatorio
                                      </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                                        <input type="text"  class="form-control" id="exampleFormControlInput1" placeholder="Apellido" name="last" required >
                                        <div class="invalid-feedback">
                                        Este campo es Obligatorio
                                      </div>
                                     </div>
                                   
        
                                     <div class="col-lg-12">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="correo@correo.com" required>
                                        <div class="invalid-feedback">
                                        Este campo es Obligatorio
                                      </div>
                                     </div>
                                     <div class="col-12">
                                        <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                                        <div class="invalid-feedback">
                                            Este campo es Obligatorio
                                      </div>
                                     </div>
                                     <div class="col-12">
                                    <input type="submit" class="btn btn-brand" id="button" value="Enviar mensaje" >         <button type="button" class="btn btn-secondary" id="button2"  data-bs-dismiss="modal">Close</button>
                                     </div>
                                </form>
                                <script type="text/javascript"
                                    src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

                                <script type="text/javascript">
                                    emailjs.init('kSYVe_aINgl44XhbC')
                                </script>
                            </div>
                        </div>
                </div>
            </div>
         
        </div>
        </div>
    </div>



    <!-- GO TOP -->
    <div class="go-top-container">
        <div class="go-top-button">
            <i class="fas fa-chevron-up"></i>
        </div>
    </div>



   


<!-- SCRIPT MODAL -->
    <script>
        const btn = document.getElementById('button');
       const reset = document.getElementById('exampleModal')



        document.getElementById('form')
        .addEventListener('submit', function(event) {
        event.preventDefault();

      
            
        
        
        btn.value = 'Enviando..';

        const serviceID = 'default_service';
        const templateID = 'template_ysycquk';

        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
            btn.value= "Enviar Mensaje"
      
        }else {
            emailjs.sendForm(serviceID, templateID, this)
            .then(() => {
            btn.value = 'Enviar mensaje';
            Swal.fire(
                
                'Mensaje enviado correctamente!',
                'Presione el boton para continuar!',
                'success'
                   
                
                )
               
              
                $('#exampleModal').modal('hide')
                document.getElementById("form").reset();
                
            

            }, (err) => {
            btn.value = 'Enviar mensaje';
            alert(JSON.stringify(err));
            });
        }
        });


       
    </script>


    <script>
       // Example starter JavaScript for disabling form submissions if there are invalid fields
            (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
                }, false)
            })
            })()
    </script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="/js/app.js"></script>




  </body>
</html>