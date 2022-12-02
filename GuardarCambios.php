<!-- Link de diseño de bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<?php
// inclusión del archivo conexion de la BD
include './BaseDeDatos/conexion_db.php';
// Inicio de la sesión
session_start();
// Si no ha iniciado sesión
if (empty($_SESSION["username"])) {
// Manda error y redirige al inicio de sesión
    echo '<div class="container">
	<div class="container">
		<div class="alert alert-danger" role="alert">
			<h4 class="alert-heading">Error 201.....</h4>
			<p>No has iniciado sesión.............<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
			<hr>
		</div>
	</div>
</div>';
    header("refresh:3;url=../IniciarSesion.php");
} else {
// Si ha presionado el botón guardar en la interfaz
    if (isset($_POST['Guardar'])) {
        // Inicializamos la variable en true
        $existeunaimagen = true;
        // Si en la primera imagenes[0] no hay imagen significa que no hay ninguna imagen
        if ($_SESSION["imagenes[0]"] == 0) {
            // Si no existe ninguna imagen el valor será false
            $existeunaimagen = false;
        }
        // Inicializamos las variables en false
        $existe1 = false;
        $existe2 = false;
        $existe3 = false;
        // Si existe un archivo subido en cualquier de las tres imágenes
        if ($_FILES["file1"]["name"] != null) {
            // Si existe en la primer input file
            $existe1 = true;
        }
        if ($_FILES["file2"]["name"] != null) {
            // Si existe en el segundo input file
            $existe2 = true;
        }
        if ($_FILES["file3"]["name"] != null) {
            // Si existe en el tercer input file
            $existe3 = true;
        }
        // Inicializamos valid en false
        $valid = false;
        // Si existen las tres imágenes en el input file
        if ($existe1 && $existe2 && $existe3) {
            // Si los nombres de cada uno de los archivos subidos son diferentes
            if ($_FILES["file1"]["name"] != $_FILES["file2"]["name"] && $_FILES["file1"]["name"] != $_FILES["file3"]["name"] && $_FILES["file2"]["name"] != $_FILES["file3"]["name"]) {
                $valid = true;
            }
            // Si solo existe en la primera y segundo input file
        } elseif ($existe1 && $existe2) {
            // Si los nombres de estos dos son distintos
            if ($_FILES["file1"]["name"] != $_FILES["file2"]["name"]) {
                $valid = true;
            }
            // Si solo existe el primero y el tercer input file
        } elseif ($existe1 && $existe3) {
            // Si el nombre de estos dos son distintos
            if ($_FILES["file1"]["name"] != $_FILES["file3"]["name"]) {
                $valid = true;
            }
            // Si solo existen el segundo y el tercer input file
        } elseif ($existe2 && $existe3) {
            // Si los nombres de estos dos son distintos
            if ($_FILES["file2"]["name"] != $_FILES["file3"]["name"]) {
                $valid = true;
            }
            // Si solo existe un input file
        } elseif ($existe1 || $existe2 || $existe3) {
            $valid = true;
        } else {
            // Si no existe ninguno
            $valid = true;
        }


        // Si existe una imagen que quedó de la consulta de la BD o si tan siquiera subió una imagen
        if ($existe1 || $existe2 || $existe3 || $existeunaimagen) {
            // Si todos los archivos subidos tienen diferentes nombres y no son iguales
            if ($valid) {
                // $r es un contador inicializado en 1
                $r = 1;
                // Inicializamos $existArchi en false
                $existArchi = false;
                // Mientras el contador sea menor o igual a 3, para que recorra las tres imágenes eliminadas
                while ($r <= 3) {
                    // Se realiza la consulta de cuantas imagenes hay y de las imágenes en sí
                    $query_imagen = ("SELECT count(*) as 'contar', imagen FROM imagenes_noticia WHERE imagen ='" . $_FILES["file" . $r]["name"] . "'");
                    // Se ejecuta la consulta
                    $LV_EXEC = conectar()->query($query_imagen)
                        or die(conectar()->error);
                    $i = 0;
                    // Si existe una imagen en la consulta
                    if ($img = $LV_EXEC->fetch_assoc()) {
                        // Si el contador de las imágenes es mayor a cero
                        if ($img["contar"] > 0) {
                            // Si la imagen de la consulta está dentro de las eliminadas
                            if ($img["imagen"] == $_SESSION["delete[0]"]) {
                            } elseif ($img["imagen"] == $_SESSION["delete[1]"]) {
                            } elseif ($img["imagen"] == $_SESSION["delete[2]"]) {
                            } else {
                                // Si no esta dentro de las eliminadas
                                // Significa que está duplicada la imagen
                                $existArchi = true;
                                // Se guarda la posición del archivo duplicado
                                $p = $r;
                                // Se cierra el ciclo
                                break;
                            }
                        }
                    }
                    // incrementa el contador
                    $r++;
                }
                // Si no esta dentro de las imágenes eliminadas, pero si en la BD
                if ($existArchi) {
                    // obtengo el nombre del archivo duplicado con la posición $p
                    $nom = $_FILES["file" . $p]["name"];
                    // Se redirige a FormularioModificar,php con var=1 para identificar el tipo de error y el nombre del archivo duplicado
                    header('Location: FormularioModificar.php?var=1&nom=' . $nom . '&idtitulo=' . $_SESSION["idtitulo"] . '');
                } else {
                    // Después de todas estás validaciones se procede a realizar los cambios, todo esto dentro de un try catch para obtener los errores que se puedan dar en la ejecución de alguna modificación
                    try {
                        // Hacemos la conexión con la BD
                        $con = conectar();
                        // Obtenemos el titulo de la Noticia modificado
                        $tit = $_POST["Titulo"];
                        // La fecha actual
                        $fecha = $_POST["FechaActual"];
                        // Y la descripción modificada
                        $desc = $_POST["enfermedadDescrip"];
                        // Realizamos la consulta
                        $query = $con->prepare("UPDATE noticia set titulo=?, fecha=?, descripcion=?, usuario=? where titulo = ?");
                        // La añadimos por parámetros
                        $query->bind_param('sssss', $tit, $fecha, $desc, $_SESSION["username"], $_SESSION['titulo']);
                        // Ejecutamos la actulización de los datos
                        $query->execute();
                        // Cerramos la conexion
                        mysqli_close($con);
                        // inicializamos $i en cero, que será el contador
                        $i = 0;
                        // Si la variable de sesión delete está vacio o tiene 0
                        while (!empty($_SESSION["delete[" . $i . "]"]) || $_SESSION["delete[" . $i . "]"] != 0) {
                            // Realiza la conexión
                            $con = conectar();
                            // Se realiza el comando de eliminar
                            $query = $con->prepare("DELETE FROM imagenes_noticia WHERE imagen=?;");
                            // Se pasa por parámetros
                            $query->bind_param("s", $_SESSION["delete[" . $i . "]"]);
                            // Se ejecuta la eliminación de los nombres de los archivos de la BD
                            $query->execute();
                            // Se cierra la conexión
                            mysqli_close($con);
                            // Se elimina el archivo almacenado en la carpeta uploads
                            unlink("FormNoticias/uploads/" . $_SESSION["delete[" . $i . "]"]);
                            // La variable de sesión Vas se le asigna 0
                            $_SESSION["Vas"] = 0;
                            // Contador aumenta
                            $i++;
                        }
                        // Si existe por lo menos un archivo subido nuevo
                        if ($_FILES["file1"]["name"] != null || $_FILES["file2"]["name"] != null || $_FILES["file3"]["name"] != null) {
                            // Si es el primer input file
                            if ($_FILES["file1"]["name"]) {
                                // Si en la sesión es distinto de imágenes es distinto de cero
                                if ($_SESSION["imagenes[0]"] != 0) {
                                    // Se guarda el nombre del archivo
                                    $archivonombre = "1".$_FILES["file1"]["name"];
                                    // Y donde se almacenó temporalmente el archivo
                                    $fuente = $_FILES["file1"]["tmp_name"];

                                    $target_path = "FormNoticias/uploads/" . $archivonombre; //indicamos la ruta de destino de los archivos
                                    // Se elimina la imagen de la carpeta uploads
                                    unlink("FormNoticias/uploads/" . $_SESSION["imagenes[0]"]);
                                    // Se mueve el archivo nuevo a la ruta especificada previamente
                                    if (move_uploaded_file($fuente, $target_path)) {
                                        // Realiza la conexión con la BD
                                        $con = conectar();
                                        // Se realiza la actulización
                                        $query = $con->prepare("UPDATE imagenes_noticia set imagen = ? where imagen = ?");
                                        // Se pasa por parámetros los valores de la actualización
                                        $query->bind_param('ss', $archivonombre, $_SESSION["imagenes[0]"]);
                                        // Se ejecuta la actualización de los datos
                                        $query->execute();
                                        // Se cierra la conexión
                                        mysqli_close($con);
                                    } else {
                                    }
                                } else {
                                    // Si no había una imagen previa en la BD
                                    // Verifica que tenga un archivo el input file
                                    if ($_FILES["file1"]["name"]) {
                                        // Se guarda el nombre del archivo
                                        $archivonombre ="1". $_FILES["file1"]["name"];
                                        // La ruta temporal del archivo
                                        $fuente = $_FILES["file1"]["tmp_name"];

                                        $target_path = "FormNoticias/uploads/" . $archivonombre; //indicamos la ruta de destino de los archivos
                                        // Se mueve el archivo de donde se almacenó temporalmente a la carpeta de uploads
                                        if (move_uploaded_file($fuente, $target_path)) {
                                            // Realiza la conexión con la BD
                                            $con = conectar();
                                            // Se prepara la sentencia de la inserción a la BD
                                            $query = $con->prepare("Insert into imagenes_noticia(imagen,id_titulo) values(?,?)");
                                            // Se pasa por parámetros los valores a almacenar
                                            $query->bind_param('ss', $archivonombre, $_SESSION["idtitulo"]);
                                            // Se ejecuta la inserción
                                            $query->execute();
                                            // Se cierra la conexión
                                            mysqli_close($con);
                                        } else {
                                        }
                                    }
                                }
                            }
                            // NOTA: TODOS LOS PASOS ANTERIORES SE REPITEN PARA LAS TRES ARCHIVOS DE IMÁGENES
                            if ($_FILES["file2"]["name"]) {
                                if ($_SESSION["imagenes[1]"] != 0) {

                                    $archivonombre = "1".$_FILES["file2"]["name"];
                                    $fuente = $_FILES["file2"]["tmp_name"];


                                    $target_path = "FormNoticias/uploads/" . $archivonombre; //indicamos la ruta de destino de los archivos
                                    unlink("FormNoticias/uploads/" . $_SESSION["imagenes[1]"]);
                                    // file was successfully deleted

                                    if (move_uploaded_file($fuente, $target_path)) {
                                        $con = conectar();
                                        $query = $con->prepare("UPDATE imagenes_noticia set imagen = ? where imagen = ?");
                                        $query->bind_param('ss', $archivonombre, $_SESSION["imagenes[1]"]);
                                        $query->execute();
                                        mysqli_close($con);
                                    } else {
                                    }
                                } else {
                                    if ($_FILES["file2"]["name"]) {
                                        $archivonombre = "1".$_FILES["file2"]["name"];
                                        $fuente = $_FILES["file2"]["tmp_name"];


                                        $target_path = "FormNoticias/uploads/" . $archivonombre; //indicamos la ruta de destino de los archivos



                                        if (move_uploaded_file($fuente, $target_path)) {
                                            $con = conectar();
                                            $query = $con->prepare("Insert into imagenes_noticia(imagen,id_titulo) values(?,?)");
                                            $query->bind_param('ss', $archivonombre, $_SESSION["idtitulo"]);
                                            $query->execute();
                                            mysqli_close($con);
                                        } else {
                                        }
                                    }
                                }
                            }
                            // NOTA: TODOS LOS PASOS ANTERIORES SE REPITEN PARA LAS TRES ARCHIVOS DE IMÁGENES
                            if ($_FILES["file3"]["name"]) {
                                if ($_SESSION["imagenes[2]"] != 0) {

                                    $archivonombre ="1". $_FILES["file3"]["name"];
                                    $fuente = $_FILES["file3"]["tmp_name"];


                                    $target_path = "FormNoticias/uploads/" . $archivonombre; //indicamos la ruta de destino de los archivos
                                    unlink("FormNoticias/uploads/" . $_SESSION["imagenes[2]"]);
                                    // file was successfully deleted

                                    if (move_uploaded_file($fuente, $target_path)) {
                                        $con = conectar();
                                        $query = $con->prepare("UPDATE imagenes_noticia set imagen = ? where imagen = ?");
                                        $query->bind_param('ss', $archivonombre, $_SESSION["imagenes[2]"]);
                                        $query->execute();
                                        mysqli_close($con);
                                    } else {
                                    }
                                } else {
                                    if ($_FILES["file3"]["name"]) {
                                        $archivonombre = "1".$_FILES["file3"]["name"];
                                        $fuente = $_FILES["file3"]["tmp_name"];


                                        $target_path = "FormNoticias/uploads/" . $archivonombre; //indicamos la ruta de destino de los archivos



                                        if (move_uploaded_file($fuente, $target_path)) {
                                            $con = conectar();
                                            $query = $con->prepare("Insert into imagenes_noticia(imagen,id_titulo) values(?,?)");
                                            $query->bind_param('ss', $archivonombre, $_SESSION["idtitulo"]);
                                            $query->execute();
                                            mysqli_close($con);
                                        } else {
                                        }
                                    }
                                }
                            }
                            // Al final se limpian las variables de sesión almacenadas
                            unset($_SESSION["imagenes[0]"]);
                            unset($_SESSION["imagenes[1]"]);
                            unset($_SESSION["imagenes[2]"]);
                            unset($_SESSION["delete[0]"]);
                            unset($_SESSION["delete[1]"]);
                            unset($_SESSION["delete[2]"]);
                        }
                        // Manda un mensaje que se han realizado los cambios correctamente
                        echo '<div class="container">
                                <div class="container">
                                    <div class="alert alert-success" role="alert">
                                    <h4 class="alert-heading">Protocolo 533.....</h4>
                                    <p>Se han realizado los cambios correctamente en la noticia.............<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
                                    <hr>
                                     </div>
                                </div>
                            </div>';
                            // Se redirige a la interfaz para ver la noticia publicada
                        header("refresh:3;url=../NoticiasA.php");
                    } catch (Exception $e) {
                        // Algún error captado dentro de la ejecución se captará en está sección
                        @$_SESSION["Vasf3"] = 1;
                        // Se redirige al formulario de modificar con un mensaje de error
                        header('Location: FormularioModificar.php?var=4&nom=' . $nom . '&idtitulo=' . $_SESSION["idtitulo"] . '');
                    }
                }
            } else {
                // Se redirige al formulario de modificar con un mensaje de error
                header('Location: FormularioModificar.php?var=2&nom=' . $nom . '&idtitulo=' . $_SESSION["idtitulo"] . '');
            }
        } else {
            // Se redirige al formulario de modificar con un mensaje de error
            header('Location: FormularioModificar.php?var=3&nom=' . $nom . '&idtitulo=' . $_SESSION["idtitulo"] . '');
        }
    }
}

?>
<!-- Si seleccionó descartar cambios -->
 <meta http-equiv="refresh" content="0;url=NoticiasA.php">