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


   
  
  // Datos de las provincias
  const provincias = [
    "Misiones",
    "Buenos Aires",
    "Córdoba",
    "Santa Fe",
    "Mendoza",
    "Tucumán",
    "Entre Ríos",
    "Salta",
    "Chaco",
    "Corrientes",
    "San Juan",
    "Jujuy",
    "Río Negro",
    "Formosa",
    "Neuquén",
    "Chubut",
    "San Luis",
    "Catamarca",
    "La Rioja",
    "La Pampa",
    "Santa Cruz",
    "Santiago del Estero",
    "Tierra del Fuego"
  ];

  // Obtener los elementos select
 
  const selectProvincias = document.getElementById("selectProvincias");
    // Cargar las opciones de las provincias
  provincias.forEach((provincia) => {
    const option = document.createElement("option");
    option.text = provincia;
    selectProvincias.add(option);
  });
// cargar las opciones de las ciudades
const ciudades = [
    "Posadas",
    "Eldorado",
    "Oberá",
    "Puerto Iguazú",
    "Aristóbulo del Valle",
    "San Vicente",
    "Montecarlo",
    "Jardín América",
    "Leandro N. Alem",
    "San Ignacio",
    "Campo Grande",
    "Garupá",
    "Candelaria",
    "San Pedro",
    "Bonpland",
    "San Antonio",
    "Cerro Azul",
    "San Javier",
    "Puerto Esperanza",
    "Colonia Alberdi",
    "Puerto Libertad",
    "Dos de Mayo",
    "El Alcázar",
    "Panambí",
    "San Martín",
    "Caa Yarí",
    "Puerto Piray",
    "Puerto Rico",
    "Santa Ana",
    "Santa Rita",
    "Santo Pipó",
    "Tres Capones",
    "Azara",
    "Gobernador López",
    "Corpus",
    "Puerto Leoni",
    "Colonia Aurora",
    "Colonia Delicia",
    "Puerto Rico"
  ];
  const selectCiudades = document.getElementById("selectCiudades");
  // Cargar las opciones de las ciudades
  ciudades.forEach((ciudad) => {
    const option = document.createElement("option");
    option.text = ciudad;
    selectCiudades.add(option);
  });

  // cargar las opciones de los barrios
  const barrios = [
    "Villa Urquiza",
    "Miguel Lanús",
    "Santa Rita",
    "Villa Cabello",
    "Itaembé Guazú",
    "Itaembé Mini",
    "Itaembé Potí",
    "La Dolores",
    "Villa Sarita",
    "Barrio A-4",
    "Barrio A-3-2",
    "Barrio A-3-1",
    "Barrio A-3-3",
    "Barrio A-2",
    "Barrio A-1",
    "Barrio Norte",
    "Barrio Sur",
    "Itaembé Miní Ampliación",
    "Centro",
    "Km. 4",
    "Villa Svea",
    "Villa Barreyro",
    "Villa Gunther",
    "Villa Falk",
    "Villa Ruff",
    "San Miguel",
    "San José",
    "Bella Vista",
    "San Francisco",
    "Centro",
    "Zona Este",
    "Zona Oeste",
    "Zona Sur",
    "Villa Martos",
    "Villa Victoria",
    "Villa Nueva",
    "Villa Londín",
    "Villa Ruff",
    "Villa Elena"
  ];

  // Obtener el elemento select
  const selectBarrios = document.getElementById("selectBarrios");

  // Cargar las opciones del select
  barrios.forEach((barrio) => {
    const option = document.createElement("option");
    option.text = barrio;
    selectBarrios.add(option);
  });

  // cargar el tipo de usuario
    const usuarios=[
    "Cliente",
    "Veterinario",
    "Administrativo"
  ];
  const tipo_usuario = document.getElementById("tipo_usuario");

  // Cargar las opciones de las ciudades
  usuarios.forEach((usuario) => {
    const option = document.createElement("option");
    option.text = usuario;
    tipo_usuario.add(option);
  });

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
      