// Asigna la imagen cargada
const $seleccionArchivos = document.querySelector("#img2"),
  // Se asigna la previsualización de la imagen cargada
  $imagenPrevisualizacion = document.querySelector("#imagen2");

// Escuchar cuando cambie
$seleccionArchivos.addEventListener("change", () => {
  // Los archivos seleccionados, pueden ser muchos o uno
  const archivos = $seleccionArchivos.files;
  // Si no hay archivos salimos de la función y quitamos la imagen
  if (!archivos || !archivos.length) {
    $imagenPrevisualizacion.src = "";
    return;
  }
  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
  const primerArchivo = archivos[0];
  // Lo convertimos a un objeto de tipo objectURL
  const objectURL = URL.createObjectURL(primerArchivo);
  // Y a la fuente de la imagen le ponemos el objectURL
  $imagenPrevisualizacion.src = objectURL;
});
// Asigna la imagen cargada
const $seleccionArchivos1 = document.querySelector("#img1"),
  // Se asigna la previsualización de la imagen cargada
  $imagenPrevisualizacion1 = document.querySelector("#imagen1");

// Escuchar cuando cambie
$seleccionArchivos1.addEventListener("change", () => {
  // Los archivos seleccionados, pueden ser muchos o uno
  const archivos = $seleccionArchivos1.files;
  // Si no hay archivos salimos de la función y quitamos la imagen
  if (!archivos || !archivos.length) {
    $imagenPrevisualizacion1.src = "";
    return;
  }
  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
  const primerArchivo = archivos[0];
  // Lo convertimos a un objeto de tipo objectURL
  const objectURL = URL.createObjectURL(primerArchivo);
  // Y a la fuente de la imagen le ponemos el objectURL
  $imagenPrevisualizacion1.src = objectURL;
});
// Asigna la imagen cargada
const $seleccionArchivos3 = document.querySelector("#img3"),
  // Se asigna la previsualización de la imagen cargada
  $imagenPrevisualizacion3 = document.querySelector("#imagen3");

// Escuchar cuando cambie
$seleccionArchivos3.addEventListener("change", () => {
  // Los archivos seleccionados, pueden ser muchos o uno
  const archivos = $seleccionArchivos3.files;
  // Si no hay archivos salimos de la función y quitamos la imagen
  if (!archivos || !archivos.length) {
    $imagenPrevisualizacion3.src = "";
    return;
  }
  // Ahora tomamos el primer archivo, el cual vamos a previsualizar
  const primerArchivo = archivos[0];
  // Lo convertimos a un objeto de tipo objectURL
  const objectURL = URL.createObjectURL(primerArchivo);
  // Y a la fuente de la imagen le ponemos el objectURL
  $imagenPrevisualizacion3.src = objectURL;
});
// Función eliminar imagen
function Eliminar(id, id2) {
  // Se asigna el botón que realizó la acción de OnClick
  const $imagenPrevisualizacion1 = document.querySelector(id);
  // Se añade la imagen SIN-IMAGEN.jpg para que no se muestre la imagen anterior
  $imagenPrevisualizacion1.src = "./FormNoticias/uploads/SIN-IMAGEN.jpg";
  // El valor de el input se asigna al elemento
  const $elemento = document.querySelector(id2);
  // Se asigna "" para eliminar el dato
  $elemento.value = "";
  if (id == "#imagen1") {
    // Si es la imagen 1 osea en el array de imágenes
    // Se redirige a el archivo Eliminar.php y se le envia una variable en cero, para saber que se eliminará la imagen en la posicón cero
    window.location.href = "eliminar.php?vari=0";
  } else {
    if (id == "#imagen2") {
      // Si es la imagen 2 osea en el array de imágenes
      // Se redirige a el archivo Eliminar.php y se le envia una variable en uno, para saber que se eliminará la imagen en la posicón uno
      window.location.href = "eliminar.php?vari=1";
    } else {
      // Si es la imagen 3 osea en el array de imágenes
      // Se redirige a el archivo Eliminar.php y se le envia una variable en dos, para saber que se eliminará la imagen en la posicón dos
      window.location.href = "eliminar.php?vari=2";
    }
  }
}
