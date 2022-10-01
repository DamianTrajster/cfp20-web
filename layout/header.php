<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">

    <title><?php echo $title ?></title>

    
    <!-- FAVICON -->
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="preload" href="css/styles.css" as="style">
    <link rel="stylesheet" href="/css/styles.css">
    
    <!-- ICONOS -->
    <script src="https://kit.fontawesome.com/ee2848b992.js" crossorigin="anonymous"></script>


    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <!-- CAROUSEL -->
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">


  </head>
  <body>
        <!-- MAIN NAVBAR -->
     
        <header>
                <nav class="top-nav" id="home">
                    <div class="container">
                        <div class="row justify-content-center justify-content-md-between ">
                            <div class="col-auto ">
                                <p>
                                    <i class="fa-solid fa-envelope"></i>
                                    <span>cfp20amdelco@gmail.com</span>
                                </p>
                                <p>
                                    <i class="fa-solid fa-phone-volume"></i>
                                    <span>4552-2517</span>
                                </p>
                            </div>
                            <div class="col-auto">
                                <div class="social-links">
                                    <a href="https://www.instagram.com/cfp20_amdelco/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="https://www.facebook.com/cfp20amdelco" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
                                    <a href="https://api.whatsapp.com/send?phone=541132076188&text=Hola,Necesito mas informacion!" target="_blank"><i class="fa-brands fa-whatsapp"></i></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

            
                <!-- BOT NAV -->
                <nav class="navbar navbar-expand-lg navbar-light bg-white " >
                    <div class="container">
                    <a class="navbar-brand" href="/index.php">
                        <img src="/img/logo.png" alt="cfp20-LOGO">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                        <li>
                            <a <?php if(stripos($_SERVER['REQUEST_URI'],'/index.php') !== false){echo 'class="active nav-link text-uppercase"';}else{echo 'class="nav-link text-uppercase"';}
                             ?> href="/index.php">inicio</a>
                        </li>
                        <li <?php if (stripos($_SERVER['REQUEST_URI'],'/pages/institucional.php') !== false) {echo 'class="active"';} ?>>
                            <a class="nav-link text-uppercase"  href="/pages/institucional.php">Institucional</a>
                        </li>
                        <li <?php if (stripos($_SERVER['REQUEST_URI'],'/pages/inscripciones.php') !== false) {echo 'class="active"';} ?>>
                            <a class="nav-link text-uppercase" href="/pages/inscripciones.php">Inscripciones</a>
                        </li>


                        <li class="nav-item dropdown">
                    <!--     <a class="nav-link dropdown-toggle  text-uppercase" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cursos
                        </a> -->

                        <a <?php if(stripos($_SERVER['REQUEST_URI'],'/cursos/amdelco.php') !== false || stripos($_SERVER['REQUEST_URI'],'/cursos/cfp20.php') !== false ){echo 'class="active nav-link text-uppercase"';}else{echo 'class="nav-link text-uppercase"';} ?> href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cursos
                            </a>
                        
                        <ul class="dropdown-menu">
                            <li  ><a class="dropdown-item text-uppercase" href="/cursos/amdelco.php">AMdelCo</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li ><a class="dropdown-item text-uppercase" href="/cursos/cfp20.php">C.F.P Nº20</a></li>
                        </ul>
                        </li>
                    
                        <li <?php if (stripos($_SERVER['REQUEST_URI'],'/pages/faq.php') !== false) {echo 'class="active"';} ?> >
                            <a class="nav-link text-uppercase" href="/pages/faq.php">Preguntas Frecuentes</a>
                        </li>


                        <li  >
                            <a class="nav-link text-uppercase" href="/pages/buscador.php">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </li>

                        
                        


                        
                        
                        
                        </ul>
                        <a class="btn btn-brand ms-lg-3" href="#" Data-bs-toggle="modal" data-bs-target="#exampleModal">Contacto</a>
                        
                    </div>
                    </div>
                </nav>
        </header>