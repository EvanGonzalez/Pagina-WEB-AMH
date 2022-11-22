<?php
session_start();
include '../BaseDeDatos/conexion_db.php';
$contar = 0;
foreach ($_FILES["imagenes"]['name'] as $key => $tmp_name) {
    $con = conectar();
    $query = $con->prepare("Select COUNT(*) as contar from imagenes_noticia where imagen = ?");
    $query->bind_param('s', $_FILES["imagenes"]["name"][$key]);
    $query->execute();
   
    $result = $query->get_result();
    if($fila = $result->fetch_assoc()) {
        if ($fila['contar'] > 0) {
            $contar++;
        }
    }
    mysqli_close($con);
}

if ($contar === 0) {

    $tit = $_POST['Titulo'];
    $fech = $_POST['FechaActual'];
    $des = $_POST['enfermedadDescrip'];
    $con = conectar();
    $query = $con->prepare("Insert into noticia(titulo,fecha,descripcion,usuario) Values (?, ?, ?, ?)");
    $query->bind_param('ssss', $tit, $fech, $des, $_SESSION['username']);
    $query->execute();
    mysqli_close($con);
    if (count($_FILES['imagenes']['tmp_name']) <= 3) {

        foreach ($_FILES["imagenes"]['tmp_name'] as $key => $tmp_name) {

            //condicional si el fuchero existe
            if ($_FILES["imagenes"]["name"][$key]) {
                $archivonombre = $_FILES["imagenes"]["name"][$key];
                $fuente = $_FILES["imagenes"]["tmp_name"][$key];

                $carpeta = 'uploads/'; //Declaramos el nombre de la carpeta que guardara los archivos

                if (!file_exists($carpeta)) {
                    mkdir($carpeta, 0777) or die("Hubo un error al crear el directorio de almacenamiento");
                }

                $dir = opendir($carpeta);
                $target_path = $carpeta . '/' . $archivonombre; //indicamos la ruta de destino de los archivos


                if (move_uploaded_file($fuente, $target_path)) {
                    $con = conectar();
                    $query = $con->prepare("Insert into imagenes_noticia(titulo,imagen) Values (?, ?)");
                    $query->bind_param('ss', $tit, $archivonombre);
                    $query->execute();
                    mysqli_close($con);
                   
                } else {
                   
                }
                closedir($dir); //Cerramos la conexion con la carpeta destino

                header("Location: ../NoticiasA.php");



            }
        }

    } else {
        echo "<script>alert('Error, la cantidad máxima de imágenes es 3')</script>";
    }
} else {
    echo "<script>alert('Error, por favor renombre el archivo, porque ya hay un archivo con ese nombre')</script>";
}