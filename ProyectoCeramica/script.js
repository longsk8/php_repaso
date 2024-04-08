console.log("funcionando")
const nombreProducto = document.getElementById('nombre')
const descripcionProducto = document.getElementById('descripcion')
const nombreImagenProducto = document.getElementById('nombre_imagen')
const imagenProducto = document.getElementById('imagen');

//verefico si esta todo bine
//console.log(nombreImagenProducto,descripcionProducto,precioProducto,nombreProducto);
let errorNombreMostrado = false; // Variable para controlar si el mensaje de error de nombre ya ha sido mostrado
//evento nombre del produto utilizo blur cuando sale del input el admin le muestro un mensaje informativo
nombreProducto.addEventListener("click", function (e) {
    const input = e.target;
    const valorInput = e.target.value;

    if (valorInput.length === 0 && !errorNombreMostrado) {
        const errorContainer = document.createElement('p'); // Crea un nuevo elemento <div> para contener el mensaje de error
        errorContainer.classList.add('error'); 
        errorContainer.textContent = 'Nombre de la ceramica que vas a ingresar ejemplo: Taza';// Agrega el mensaje de error al contenido del contenedor
        errorContainer.style.color = 'blue';
        const parentElement = input.parentNode; // Elemento padre del campo de entrada
        parentElement.insertBefore(errorContainer, input.nextSibling); // Inserta el contenedor de error después del campo de entrada

        errorNombreMostrado = true; // Actualiza el estado de la variable para indicar que el mensaje de error ya ha sido mostrado
    }
});

// Declarar el error de la descripción
let errorDescripcionMostrado = false;
//descripcion del producto
descripcionProducto.addEventListener("click", function (e) {
    const input = e.target;
    const descripcionInput = e.target.value;

    if (descripcionInput.length === 0 && !errorDescripcionMostrado) {
        const errorContainer = document.createElement('p');
        errorContainer.classList.add('error');
        errorContainer.textContent = 'Descripción del producto ejemplo: Taza diseño dragón';
        errorContainer.style.color = 'blue';

        const parentElement = input.parentNode;
        parentElement.insertBefore(errorContainer, input.nextSibling);

        errorDescripcionMostrado = true;
    }
});

let errorNombreImagen = false;
//evento como el administrador tiene que ingresar el producto
nombreImagenProducto.addEventListener("click", function (e) {
    const input = e.target;
    const nombreImagenInput = e.target.value;

    if (nombreImagenInput.length === 0 && !errorNombreImagen) {
        const errorContainer = document.createElement('p');
        errorContainer.classList.add('error');
        errorContainer.textContent = 'Guardar nombre de la imagen ejemplo = si el archivo es taza.jpg solo guarda el nombre taza';
        errorContainer.style.color = 'blue';

        const parentElement = input.parentNode;
        parentElement.insertBefore(errorContainer, input.nextSibling);

        errorNombreImagen = true;
    }
});

//evento de como el usuario aldministrador tiene que ingresar el archivo
let errorArchivo = false;

imagenProducto.addEventListener('change', function(e) {
    const file = e.target.files[0]; // Obtiene el archivo seleccionado
  
    if (file) {
      const extension = file.name.split('.').pop().toLowerCase(); // Obtiene la extensión del archivo
  
      if (extension !== 'jpg') {
        const errorContainer = document.createElement('p');
        errorContainer.classList.add('error');
        errorContainer.textContent = 'Solo se permiten archivos JPG.';
        errorContainer.style.color = 'red';
  
        const parentElement = e.target.parentNode;
        parentElement.insertBefore(errorContainer, e.target.nextSibling);

        errorArchivo = true;
      }
    }
  });

  
  
  
  
  
  
  







