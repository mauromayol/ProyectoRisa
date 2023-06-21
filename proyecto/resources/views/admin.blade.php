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
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>
    
<div>
    <h1>Tablas de consulta SQL</h1>
     
    <div class='tabla_1'>
        <h3>Tabla de Usuarios</h3>
        <div class='tabla_usuario'>
            <table>
            <thead>
            <tr>
                <th>id usuario</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Fecha de nacimiento</th>
                <th>Domicilio</th>
                <th>telefono 1</th>
                <th>Telefono 2</th>
                <th>Correo_electronico</th>
                <th>Password</th>
                <th>Estado</th>
                <th>Ciudad</th>
                <th>Provincia</th>
                <th>Barrio</th>
                           <!-- Agrega más columnas si es necesario -->
            </tr>
            </thead>
            <tbody>
            @foreach($resultados as $resultado)
                          
            <tr>
                          
                <td>{{ $resultado->id_usuario }}</td>
                <td>{{ $resultado->nombre }}</td>
                <td>{{ $resultado->apellido}}</td>
                <td>{{ $resultado->DNI}}</td>
                <td>{{ $resultado->fecha_nacimiento }}</td>
                <td>{{ $resultado->domicilio }}</td>
                <td>{{ $resultado->telefono_1 }}</td>
                <td>{{ $resultado->telefono_2 }}</td>
                <td>{{ $resultado->correo_electronico }}</td>
                <td>{{ $resultado->password }}</td>
                <td>{{ $resultado->estado }}</td>
                <td>{{ $resultado->ciudad }}</td>
                <td>{{ $resultado->provincia }}</td>
                <td>{{ $resultado->barrio }}</td>
                <!-- Muestra los valores de las columnas correspondientes -->
                      
            </tr>
            @endforeach
             </tbody>
            </table>
        </div>
        <div class="separador"></div>
        <div class='botones'>
            <a >Agregar</a>
            <a >Modificar</a>
            <a >Borrar</a>
        </div>
       
    </div>
    <!--inicio tabla de clinicas-->
    <div class ="tabla_2">
        <div class="clinicas">
            <h3>Clinicas </h3>
      
        <table>
            <thead>
            <tr>
                <th>Id clinica</th>
                <th>Barrio</th>
                <th>Especialidad</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Correo electronico</th>
                <th>Sucursal</th>
                <th>Telefono</th>
                <th>Cuit</th>
                <th>Estado</th>
                <th>Encargado</th>
                <!-- Agrega más columnas si es necesario -->
            </tr>
            </thead>
            <tbody>
            @foreach($clinicas as $clinica)
                         
            <tr>
               <td>{{ $clinica->id_clinica }}</td>
               <td>{{ DB::table('barrio')->where('id_barrio', $clinica->id_barrio)->value('nombre') }}</td>
               <td>{{ DB::table('especialidad')->where('id_especialidad', $clinica->id_especialidad)->value('nombre') }}</td>

                <td>{{ $clinica->nombre }}</td>
                <td>{{ $clinica->direccion }}</td>
               <td>{{ $clinica->correo}}</td>
                <td>{{ $clinica->sucursal}}</td>
                <td>{{ $clinica->telefono}}</td>
                <td>{{ $clinica->cuit}}</td>
                <td>{{ $clinica->estado}}</td>
                <td>{{ $clinica->encargado}}</td>
                <!-- Muestra los valores de las columnas correspondientes -->
                      
            </tr>
            @endforeach
             </tbody>
            </table>
        </div>
        <div class="separador"></div>
        <div class='botones'>
            <a  href="/clinicas">Agregar</a>
            <a >Modificar</a>
            <a >Borrar</a>
        </div>
    </div>  
    </div>
</div>
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
</body>
</html>

</html>