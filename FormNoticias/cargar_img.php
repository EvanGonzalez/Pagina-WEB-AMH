<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<?php
session_start();
if(empty($_SESSION["username"])){
	
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
}else{
include '../BaseDeDatos/conexion_db.php';
$contar = 0;
foreach ($_FILES["imagenes"]['name'] as $key => $tmp_name) {
    $con = conectar();
    $query = $con->prepare("Select COUNT(*) as contar from imagenes_noticia where imagen = ?");
    $query->bind_param('s', $_FILES["imagenes"]["name"][$key]);
    $query->execute();

    $result = $query->get_result();
    if ($fila = $result->fetch_assoc()) {
        if ($fila['contar'] > 0) {
            $contar++;
        }
    }
    mysqli_close($con);
}

if ($contar === 0) {
    if (count($_FILES['imagenes']['tmp_name']) <= 3) {
        try {
            $tit = $_POST['Titulo'];
            $fech = $_POST['FechaActual'];
            $des = $_POST['enfermedadDescrip'];
            $query = conectar()->query('Insert into noticia(titulo,fecha,descripcion,usuario) Values ("' . $tit . '","' . $fech . '","' . $des . '","' . $_SESSION['username'] . '")') or die(conectar()->error);
            $con = conectar();
        } catch (Exception $e) {
            @$_SESSION["Vasf3"] = 1;
            header("Location: ../Formulario1.php");
        }
        mysqli_close($con);
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
                    $query = $con->prepare("Select id_titulo from noticia where titulo = ?");
                    $query->bind_param('s', $tit);
                    $query->execute();

                    $result = $query->get_result();
                    $fila = $result->fetch_assoc();
                    $idtitulo = $fila['id_titulo'];

                    $con = conectar();
                    $query = $con->prepare("Insert into imagenes_noticia(id_titulo,imagen) Values (?, ?)");
                    $query->bind_param('ss', $idtitulo, $archivonombre);
                    $query->execute();
                    mysqli_close($con);
                } else {
                }
                closedir($dir); //Cerramos la conexion con la carpeta destino


            }
        }
        echo '<div class="container">
							<div class="container">
								<div class="alert alert-success" role="alert">
									<h4 class="alert-heading">Error 201.....</h4>
									<p>Se ha insertado correctamente la noticia.............<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
									<hr>
								</div>
							</div>
						</div>';
        header("refresh:3;url=../NoticiasA.php");
    } else {
        header("Location: ../Formulario1.php");
        @$_SESSION["Vasf1"] = 1;
        @$_SESSION["Vasf2"] = 0;
    }
} else {
    @$_SESSION["Vasf1"] = 0;
    @$_SESSION["Vasf2"] = 1;
    header("Location: ../Formulario1.php");
}
}