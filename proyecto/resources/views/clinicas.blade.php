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
    <link href="css/registro.css" rel="stylesheet">
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
<!-- seccion de registros -->
<div class="fondo_registro">
<div class="registro">
<div class="title_form">
    <h2>Por favor complete el siguiente formulario para poder registrar la clinica en el sistema</h2>
     </div>
     
     <div class="form_container">
     <div class="form">
     <form action="registro_clinicas" method="POST " id="formulario">
        
            <!-- el barrio es por select box -->
            <label type="text" for="barrios">Barrios</label>
            <select name="barrio" id="barrio">
               <option value="">Seleccione un barrio</option>
                @foreach ($barrios as $barrio)
                <option value="{{ $barrio->nombre}}">{{ $barrio->nombre }}</option>
                @endforeach
           </select>
            <!-- la especialidad es por select box-->
            <label type="text" for="especialidad">Especialidad</label>
            <select name="especialidad" id="especialidad">
               <option value="">Seleccione la especialidad</option>
                @foreach ($especialidades as $especialidad)
                <option value="{{ $especialidad->nombre}}">{{ $especialidad->nombre }}</option>
                @endforeach
           </select>
             <label for="nombre">Nombre:</label>
             <input type="text" pattern="[A-Za-z\s]+" title="Por favor, ingresa solo letras y espacios" id="nombre" name="nombre" required>
             <label  id="domicilio" name="domicilio"> Domicilio</label>
             <input type="text" id="domicilio" name="domicilio" required>
             <label for="correo">Correo electrónico:</label>
             <input type="email" id="correo" name="correo" required>
             <label  id="sucursal" name="sucursal"> Sucursal</label>
             <input type="text" pattern="^\[0-9]+$" title="Por favor, ingresa solo números" id="sucursal" name="sucursal" required>
             <label  id="telefono" name="telefono"> Telefono de contacto</label>
             <input type="text" pattern="^\d{10}$" title="Por favor, ingresa solo números sin 0 ni 15" id="telefono" name="telefono" required>
             <label for="CUIT">CUIT:</label>
             <input type="text" pattern="^\d{2}-\d{8}-\d{1}$" title="Por favor, ingresa solo números"id="CUIT" name="CUIT" required>
             <label for="estado">Estado:</label>
             <input type="text" pattern="[A-Za-z\s]+" title="Por favor, ingresa solo letras y espacios" id="estado" name="estado" required>
             <label  id="encargado" name="encargado"> encargado</label>
             <input type="text" id="encargado" name="encargado" required>           
            <div class="button-group">
             <button type="button" onclick="window.location.href='/admin'">Atrás</button>
             <button type="submit">Registrar</button>
         </div>
              
         </form>
     </div>
     </div>   
    </div>
</div>
<!--finaliza la seccion de registros -->
<!-- Footer Start -->
<div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-4 col-md-12 mb-5">
            <h1 class="mb-3 display-5 text-capitalize text-white"><span class="text-primary">Pet</span>Lover</h1>
            <p class="m-0">Ipsum amet sed vero et lorem stet eos ut, labore sed sed stet sea est ipsum ut. Volup amet ea sanct ipsum, dolore vero lorem no duo eirmod. Eirmod amet ipsum no ipsum lorem clita ut. Ut sed sit lorem ea lorem sed, amet stet sit sea ea diam tempor kasd kasd. Diam nonumy etsit tempor ut sed diam sed et ea</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="text-primary mb-4">Get In Touch</h5>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>123 Street, New York, USA</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                    <div class="d-flex justify-content-start mt-4">
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-primary mb-4">Popular Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Team</a>
                        <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-primary mb-4">Newsletter</h5>
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control border-0" placeholder="Your Name" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control border-0" placeholder="Your Email" required="required" />
                        </div>
                        <div>
                            <button class="btn btn-lg btn-primary btn-block border-0" type="submit">Submit Now</button>
                        </div>
                    </form>
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
<script src="/js/registro.js"></script>
<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script src="js/registro.js"></script>
</body>
</body>

</html>






   