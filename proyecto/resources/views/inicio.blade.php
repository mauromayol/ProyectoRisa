<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Proyecto RISA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
        <div class="row py-3 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Proyecto</span>RISA</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="d-inline-flex flex-column text-center pr-3 border-right">
                        <h6>Horario de atención</h6>
                        <p class="m-0">8.00 - 20.00</p>
                    </div>
                    <div class="d-inline-flex flex-column text-center px-3 border-right">
                        <h6>Nuestro correo</h6>
                        <p class="m-0">Proyecto_Risa@gmail.com</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span class="text-primary">Safety</span>First</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="/" class="nav-item nav-link active">Inicio</a>
                    <a href = "/info" class="nav-item nav-link">Acerca de nosotros</a>
                    <a href="/servicio" class="nav-item nav-link">Servicios</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Solicitar Turnos</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="blog.html" class="dropdown-item">Atención</a>
                            <a href="single.html" class="dropdown-item">Cirugia</a>
                            <a href="single.html" class="dropdown-item">Urgencia</a>
                        </div>
                    </div>
                   
                </div>
                <button href="" class="boton"  onclick="openModal()">Iniciar sesion</button>
                
                <button onclick="window.location.href='registro'"class="boton">Registrarse</button>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h3 class="text-white mb-3 d-none d-sm-block">Conexión veterinaria sin límites</h3>
                        <h1 class="display-3 text-white mb-3">Cuidado veterinario de confianza</h1>
                        <h5 class="text-white mb-3 d-none d-sm-block">Conéctate con las mejores clínicas veterinarias de la ciudad</h5>
                        <!--<a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                        <a href="" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a>-->
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h3 class="text-white mb-3 d-none d-sm-block">Conexión veterinaria sin límites</h3>
                        <h1 class="display-3 text-white mb-3">Bienestar animal en un click</h1>
                        <h5 class="text-white mb-3 d-none d-sm-block">Conéctate con las mejores clínicas veterinarias de la ciudad</h5>
                       <!-- <a href="" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Book Now</a>
                        <a href="" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Learn More</a>-->
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>
    </div>
</div>
<!-- Carousel End -->
     <!-- info Start -->
     <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">Quines somos </h4>
                <h1 class="display-4 mb-4"><span class="text-primary">Proyecto</span>  <span class="text-secondary">RISA</span></h1>
                <h5 class="text-muted mb-3">¡Cuida a tu mascota como nunca antes! Descubre RISA, la red de clínicas veterinarias </h5>
                <p class="mb-4">Nuestra plataforma te brinda acceso instantáneo a una red completa de clínicas veterinarias, 
                    donde podrás encontrar toda la información que necesitas para cuidar de tu compañero peludo. 
                    Descubre una amplia gama de servicios médicos, desde consultas generales hasta especialidades avanzadas,
                     todo en un solo lugar.</p>
                     <div class="row py-2">
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-cat font-weight-normal text-secondary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Expertos comprometidos con el bienestar animal</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="flaticon-doctor font-weight-normal text-secondary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Simplificando el cuidado veterinario</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <h1 class="flaticon-care font-weight-normal text-secondary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Un mundo más saludable para las mascotas</h5>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center">
                                <h1 class="flaticon-dog font-weight-normal text-secondary m-0 mr-3"></h1>
                                <h5 class="text-truncate m-0">Tu mascota, nuestra prioridad</h5>
                            </div>
                        </div>
                    </div>
                
              
            </div>
            <div class="col-lg-5">
                <div class="row px-3">
                    <div class="col-12 p-0">
                        <img class="img-fluid w-100" src="img/about-1.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="img/about-2.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="img/about-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

<!-- ventana emergente para el inicio de sesion -->
<div class="">
    <div id="myModal" class="modal">
        <div id="contenedor">
            
            <div id="contenedorcentrado">
                <div id="login">
                    <form id="loginform" method="POST" action= 'iniciar_sesion'>
                        @csrf
                        <label for="correo">Correo</label>
                        <input id="usuario" type="email" name="correo" placeholder="Usuario" required>
                        
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" placeholder="Contraseña" name="password" required>
                        
                        <button type="submit"  title="Ingresar" name="Ingresar">Ingresar</button>
                    </form>
                    
                </div>
                <div id="derecho">
                    <div class="titulo">
                        Bienvenido
                    </div>
                    <hr>
                    <div class="pie-form">
                        <a href="#">¿Perdiste tu contraseña?</a>
                        <a href="/registro">¿No tienes Cuenta? Registrate</a>
                        <hr>
                        <a href="/">« Volver</a>
                    </div>
                </div>
            </div>
        <
    </div>
</div>
<script>
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }
        
    </script>
<!-- ventana emergente para el inicio de sesion -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-4 col-md-12 mb-5">
                <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Proyecto</span>RISA</h1>
                <p class="m-0">"El cuidado animal no solo demuestra compasión, sino que también refleja nuestra humanidad. Cada pequeño acto de amor y protección hacia ellos marca la diferencia en el mundo. ¡Juntos, podemos construir un futuro donde los animales sean valorados, respetados y protegidos!"</p>            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Contacto</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Cabred 1265, Posadas Misiones ARA</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>Directo +54 3764 43-36-79</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>Whatsapp +54 9 3764 17-90-19</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@consejoveterinariomisiones.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-primary mb-4">Links Populares</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>consejoveterinariomisiones/</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>ImuSA</a>
                            <!--<a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Team</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>-->
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white py-4 px-sm-3 px-md-5" style="background: #111111;">
        <div class="row">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">
                    &copy; <a class="text-white font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved. Designed by
                    <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>