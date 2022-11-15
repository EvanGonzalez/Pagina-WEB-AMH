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
echo "<script>alert(" . $contar. ")</script>";
if ($contar === 0) {

    $tit = $_POST['Titulo'];
    $fech = $_POST['FechaActual'];
    $des = $_POST['enfermedadDescrip'];
    $con = conectar();
    $query = $con->prepare("Insert into noticia(titulo,fecha,descripcion,usuario) Values (?, ?, ?, ?)");
    $query->bind_param('ssss', $tit, $fech, $des, $_SESSION['username']);
    $query->execute();
    mysqli_close($con);

    echo "<script>alert(" . count($_FILES['imagenes']['tmp_name']) . ")</script>";
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
                    echo "Los archivos $archivonombre se han cargado de forma correcta.<br>";
                } else {
                    echo "Se ha producido un error, por favor revise los archivos e intentelo de nuevo.<br>";
                }
                closedir($dir); //Cerramos la conexion con la carpeta destino





            }
        }
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>

        <body>

            <?php
            $con = conectar();
            $query = $con->prepare("SELECT imagen As img FROM imagenes_noticia Where titulo = ?;");
            $query->bind_param('s', $tit);
            $query->execute();
            $result = $query->get_result();
            while ($fila = $result->fetch_assoc()) { ?>
                <img width="100" src="uploads/<?php echo $fila['img'] ?>" />
            <?php
            }
            mysqli_close($con);
            ?>
        </body>

        </html>
<?php
    } else {
        echo "<script>alert('Error, la cantidad máxima de imágenes es 3')</script>";
    }
} else {
    echo "<script>alert('Error, por favor renombre el archivo, porque ya hay un archivo con ese nombre')</script>";
}
?>