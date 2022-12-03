<?php
// Se inicia la sesión
session_start();
// Obtengo el id de imagen que viene del archivo JS.js de JavaScript
$idimagen = $_GET["vari"];
// Si en la variable de sesión delete en  la posición 0 es igual a cero 
if ($_SESSION["delete[0]"] == 0) {
    // El archivo de la imagen se pasa a las imágenes eliminadas
    $_SESSION["delete[0]"] = $_SESSION["imagenes[" . $idimagen . "]"];
} else {
    // Si ya hay una imagen eliminada en la posición 0
    // Se verifica que delete en la posición 1 sea igual a cero
    if ($_SESSION["delete[1]"] == 0) {
        // Si está disponible se guarda la eliminación de esta imagen en esta posición
        $_SESSION["delete[1]"] = $_SESSION["imagenes[" . $idimagen . "]"];
    } else {
        // Si tampoco está disponible la posición 1, pasa a la posición 2
        if ($_SESSION["delete[2]"] == 0) {
            // Se añaden la última imagen eliminada a las eliminadas en la posición 2
            $_SESSION["delete[2]"] = $_SESSION["imagenes[" . $idimagen . "]"];
        }
    }
}
// Por último se redirige a FormularioModificar.php
header("Location: FormularioModificar.php?idtitulo=" . $_SESSION["idtitulo"]."&var=0&nom=0");
