//prueba de carga de js
console.log("se cargo el archivo registro.js");

// Obtener referencia al formulario
const form = document.querySelector('form');

// Obtener referencia a los campos del formulario
const nombreInput = document.getElementById('nombre');
const apellidoInput = document.getElementById('apellido');
const dniInput = document.getElementById('dni');
const fecha_nacimiento=document.getElementById('fecha_nacimiento');
const domicilio=document.getElementById('domicilio');
const telefono_1 = document.getElementById('telefono_1');
const telefono_2 = document.getElementById('telefono_2');
const correoInput = document.getElementById('correo');
const nombre_usuario = document.getElementById('nombre_usuario');
const passwordInput = document.getElementById('password');
const provincia = document.getElementById('provincia');
const ciudad=   document.getElementById('ciudad');
const barrio= document.getElementById('barrio');



// Expresiones regulares para validación
const dniRegex = /^\d{8}$/;
const nombreRegex = /^[A-Za-z\s]+$/;
const apellidoRegex = /^[A-Za-z\s]+$/;
const telefono_1Regex =/^\d{8}$/;
const telefono_2Regex =/^\d{8}$/;
const nombre_usuarioRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
const correoRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
const passwordRgex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;


// Función de validación del formulario
function validarFormulario(event) {
  event.preventDefault(); // Evitar que el formulario se envíe automáticamente

  // Obtener los valores de los campos del formulario
  const nombre = nombreInput.value.trim();
  const apellido = apellidoInput.value.trim();
  const dni = dniInput.value.trim();
  const correo = correoInput.value.trim();
  const passwordInput = passwordInput.value;
  const telefono_1 = telefono_1.value.trim();
  const telefono_2 = telefono_2.value.trim();
  const fecha_nacimiento=fecha_nacimiento.value.trim();
  const domicilio=domicilio.value.trim(); 
  const provincia = provincia.value.trim();
  const ciudad = ciudad.value.trim();
  const barrio = barrio.value.trim();
  const tipo_usuario=tipo_usuario.value.trim();



  // Validar los campos
  if (nombre === '') {
    mostrarError('Por favor, ingresa tu nombre');
    return;
  }

  if (apellido === '') {
    mostrarError('Por favor, ingresa tu apellido');
    return;
  }

  if (!dniRegex.test(dni)) {
    mostrarError('Por favor, ingresa un DNI válido de 8 dígitos');
    return;
  }

  if (!correoRegex.test(correo)) {
    mostrarError('Por favor, ingresa un correo electrónico válido');
    return;
  }

  if (!passwordRegex.test(passwordInput)) {
    mostrarError(
      'La contraseña debe tener al menos 8 caracteres, incluir al menos una letra minúscula, una letra mayúscula y un número'
    );
    return;
  }

  if (!telefono_1Regex.test(telefono_1)) {
    mostrarError('Por favor, ingresa un número de teléfono válido de 9 dígitos');
    return;
  }
  if (!telefono_2Regex.test(telefono_2)) {
    mostrarError('Por favor, ingresa un número de teléfono válido de 9 dígitos');
    return;
  }

  // Si todas las validaciones pasan, se puede enviar el formulario
  form.submit();
}

// Función para mostrar mensajes de error


   
  
  

 
  
  function validarFechaNacimiento() {
    const fecha_nacimientoInput = document.getElementById("fecha_nacimiento");
    const fecha_nacimiento = new Date(fecha_nacimientoInput.value);
    const hoy = new Date();
  
    const edadMinima = 18;
    const edadMaxima =99;
  
    const diff = hoy.getTime() - fecha_nacimiento.getTime();
    const edad = Math.floor(diff / (1000 * 60 * 60 * 24 * 365.25));
  
    if (edad < edadMinima || edad > edadMaxima) {
      alert("Debes ser mayor de 18  y menor de 100 años para continuar.");
      return;
    }
    }




    // confirmacion del registro
    function mostrarError(mensaje) {
        // Crear elemento de mensaje de error
        const errorDiv = document.createElement('div');
        errorDiv.className = 'error';
        errorDiv.textContent = mensaje;
      
        // Insertar el mensaje de error antes del formulario
        form.parentNode.insertBefore(errorDiv, form);
      }
      
      // funcion para cambiar de secciones del formulario de registro
      // Agregar el evento de submit al formulario para ejecutar la validación
      form.addEventListener('submit', validarFormulario);
      function siguiente(actual, siguiente) {
          document.getElementById(actual).classList.remove('current');
          document.getElementById(siguiente).classList.add('current');
        }
      // funcion para cambiar de secciones del formulario de registro
        function anterior(actual, anterior) {
          document.getElementById(actual).classList.remove('current');
          document.getElementById(anterior).classList.add('/');
        }
 // experimento
    $(document).ready(function() {
        // Cuando cambia la selección de la provincia
        $('#provincia').change(function() {
            var provinciaId = $(this).val(); // Obtener el ID de la provincia seleccionada

            // Realizar una solicitud AJAX para obtener las ciudades de la provincia seleccionada
            $.ajax({
                url: '/ciudades/' + provinciaId, // Ruta de la API que devuelve las ciudades
                type: 'GET',
                success: function(data) {
                    // Limpiar las opciones actuales de ciudades
                    $('#ciudad').empty();
                    $('#ciudad').append('<option value="">Seleccione una ciudad</option>');

                    // Agregar las nuevas opciones de ciudades
                    $.each(data, function(key, value) {
                        $('#ciudad').append('<option value="' + value.id + '">' + value.nombre + '</option>');
                    });
                }
            });
        });

        // Cuando cambia la selección de la ciudad
        $('#ciudad').change(function() {
            var ciudadId = $(this).val(); // Obtener el ID de la ciudad seleccionada

            // Realizar una solicitud AJAX para obtener los barrios de la ciudad seleccionada
            $.ajax({
                url: '/barrios/' + ciudadId, // Ruta de la API que devuelve los barrios
                type: 'GET',
                success: function(data) {
                    // Limpiar las opciones actuales de barrios
                    $('#barrio').empty();
                    $('#barrio').append('<option value="">Seleccione un barrio</option>');

                    // Agregar las nuevas opciones de barrios
                    $.each(data, function(key, value) {
                        $('#barrio').append('<option value="' + value.id + '">' + value.nombre + '</option>');
                    });
                }
            });
        });
    });

    $(document).ready(function() {
      $('#CUIT').mask('99--99999999-9');
    });   