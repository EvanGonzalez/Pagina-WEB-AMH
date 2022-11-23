const $seleccionArchivos = document.querySelector("#img2"),
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

const $seleccionArchivos1 = document.querySelector("#img1"),
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

const $seleccionArchivos3 = document.querySelector("#img3"),
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

function Eliminar(id, id2) {
const $imagenPrevisualizacion1 = document.querySelector(id);
// Y a la fuente de la imagen le ponemos el objectURL
$imagenPrevisualizacion1.src = "./FormNoticias/uploads/SIN-IMAGEN.jpg";
const $elemento = document.querySelector(id2);
$elemento.value = "";
if(id=="#imagen1"){
    window.location.href = 'eliminar.php?vari=0';
}else{
    if(id=="#imagen2"){
        window.location.href = 'eliminar.php?vari=1';
    }else{
        window.location.href = 'eliminar.php?vari=2';
    }
}

}