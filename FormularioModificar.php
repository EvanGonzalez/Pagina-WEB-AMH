<?php
/*obteniendo la fecha actual del sistema */
$fechaActual = date('Y-m-d');
$id = $_GET["idtitulo"];
include("./BaseDeDatos/conexion_db.php");
session_start();
$_SESSION["idtitulo"] = $id;
/* $Validacion = $_SESSION["Vas"];
unset($_SESSION["Vas"]); */
if ($_SESSION["cont"] == 0) {
	$query_imagen = ("SELECT imagen,id_titulo FROM imagenes_noticia WHERE id_titulo ='" . $id . "'");
	$LV_EXEC = conectar()->query($query_imagen)
		or die(conectar()->error);
	$i = 0;
	while ($LV_IMAGEN = $LV_EXEC->fetch_assoc()) {
		$arr[$i] = $LV_IMAGEN["imagen"];
		$_SESSION['imagenes[' . $i . ']'] = $LV_IMAGEN["imagen"];
		$idtit = $LV_IMAGEN["id_titulo"];
		$i++;
	}
	$_SESSION["cont"] = 1;
	$query_imagen = ("SELECT titulo FROM noticia WHERE id_titulo ='" . $idtit . "'");
	$LV_EXEC = conectar()->query($query_imagen)
		or die(conectar()->error);
	$LV_IMAGEN = $LV_EXEC->fetch_assoc();
	$_SESSION["titulo"] = $LV_IMAGEN["titulo"];
}
if ($_SESSION["imagenes[0]"] != 0) {
	$i = 1;
}
if ($_SESSION["imagenes[1]"] != 0) {
	$i = 2;
}
if ($_SESSION["imagenes[2]"] != 0) {
	$i = 3;
}

$e = 0;
while ($e < $i) {
	$a = 0;
	while ($a < $i) {
		if ($_SESSION["imagenes[" . $e . "]"] == $_SESSION["delete[" . $a . "]"]) {
			$o = $e;
			while ($o < $i) {
				if ($o == $i - 1) {
					$_SESSION["imagenes[" . $o . "]"] = 0;
					$i--;
				} else {
					$_SESSION["imagenes[" . $o . "]"] = $_SESSION["imagenes[" . ($o + 1) . "]"];
				}
				$o++;
			}
		}
		$a++;
	}

	$e++;
}
/* while ($e < $i) {
	if ($_SESSION["imagenes[" . $e . "]"] == $_SESSION["delete[" . $e . "]"]) {
		$a = $e;
		while ($a < count($arr)) {
			if ($a == count($arr) - 1) {
				unset($arr[$a]);
			} else {
				$arr[$a] = $arr[$a + 1];
			}
			$a++;
		}
	}
	$e++;
} */

?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/estilo.css" type="text/css">
	<link rel="stylesheet" href="./css/footerstyle.css" type="text/css">
	<link rel="stylesheet" href="./css/MigaPan.css" type="text/css">
	<link rel="stylesheet" href="./css/header-style.css" type="text/css">
	<link rel="stylesheet" href="./FormNoticias/Noticias.css" type="text/css">
	<!--paquete de complementos y dependecias de js para el dropzone-->
	<link rel="stylesheet" href="node_modules/dropzone/dist/dropzone.css">
	<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
	<!--paquete de complementos y dependecias de js para los elementos bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<title>Pagina Web</title>
</head>


<body id="fondoMain">
	<?php
	include("./Menu_footer/headAdmin.html");
	?>

	<!--miga de pan-->
	<div class="contenedorMigaPan text-center">
		<div class="row">
			<div class="col-6">
				<?php
				include("Migas_Pan/MigaPan12.html")
				?>
			</div>
		</div>
	</div>
	<br>
	<!--termina miga de pan-->


	<!--Inicia contenendor de informacion-->
	<!--Inicio de la clase container..-->
	<div class="container">
		<form action="GuardarCambios.php" method="post" enctype="multipart/form-data"">
			<!--Inicio del Form..-->
			<div class=" row">
			<!--Inicio de la clase Row..-->
			<center>
				<h1 class="my-4" id="titulo1">Noticias.</h1>
			</center>
			<?php
			/* 
			if ($Validacion == 1) {
				echo '<div class="container">
					<div class="container">
						<div class="alert alert-success" role="alert">
							<h4 class="alert-heading">Error 405.....</h4>
							<p>Las Noticias deben Contener al menos una imagen.............<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
							<hr>
						</div>
					</div>
				</div>';
			} */
			?>
			<div class="col-md-12">
				<div class="card my-4" id="card1" style="background-color: #121b4f; color: white;">
					<h5 class="card-header" style="background-color: #0079be;"> <b>Datos de la noticia</b></h5>
					<div class="card-body">
						<div class="container" id="minicontainer">
							<div class="row">
								<?php
								$query = conectar()->query('Select * from noticia where titulo="' . $_SESSION["titulo"] . '";') or die(conectar()->error);
								$valores = $query->fetch_assoc();
								?>
								<!-- inicia fila -->
								<div class="col-md-6">
									<label for="" id="colorNombres">Titulo:</label>
									<input type="text" class="form-control" name="Titulo" value="<?php echo $valores['titulo']; ?>" placeholder="" required="required"><br>
								</div>
								<div class="col-md-3">
									<label for="" id="colorNombres">Fecha:</label>
									<input type="text" class="form-control" name="FechaActual" <?php echo 'value="' . $fechaActual . '"' ?> required="required" readonly><br>
								</div>
							</div>
						</div>
						<div class="col-md-12" id="Descripcion">
							<label for="">Descripción:</label>
							<div class="form-floating">
								<textarea for="inlineRadio5" name="enfermedadDescrip" class="form-control" placeholder="Deja tu respuesta" id="floatingTextarea2" style="height: 100px" spellcheck="false" data-ms-editor="true" required="required"><?php echo $valores['descripcion'] ?></textarea><br>
							</div>
						</div>

						<div class="card-group">



							<div class="card">

								<div class="card-body" id="elim">
									<h4 class="card-title">Title</h4>
									<?php
									if ($_SESSION["imagenes[0]"]==0) {
									?>
										<img class="card-img-top" src="/FormNoticias/uploads/SIN-IMAGEN.jpg" height="200px" width="70px" id="imagen1" alt="Card image cap">
									<?php
									} else {
									?>
										<img class="card-img-top" src="FormNoticias/uploads/<?php echo $_SESSION["imagenes[0]"] ?>" height="200px" width="70px" id="imagen1" alt="Card image cap">
									<?php

									}
									?>


									<input class="form-control" type="file" name="file1" id="img1">
									<?php
									if ($_SESSION["imagenes[1]"]!=0) {

									?>


										<center>
											<br>

											<button class="btn btn-danger" id="elim1" onclick="Eliminar('#imagen1','#img1')" type="button">Eliminar</button>
										</center>
									<?php
									}
									?>
								</div>
							</div>
							<div class="card">

								<div class="card-body">
									<h4 class="card-title">Title</h4>

									<?php
									if ($_SESSION["imagenes[1]"]==0) {
									?>
										<img class="card-img-top" src="FormNoticias/uploads/SIN-IMAGEN.jpg" height="200px" width="70px" alt="Card image cap" id="imagen2">
									<?php
									} else {
									?>
										<img class="card-img-top" src="FormNoticias/uploads/<?php echo $_SESSION["imagenes[1]"] ?>" height="200px" width="70px" alt="Card image cap" id="imagen2">
									<?php

									}
									?>
									<input class="form-control" type="file" name="file2" id="img2">
									<?php
									if ($_SESSION["imagenes[1]"]!=0) {

									?>

										<center>
											<br>
											<button class="btn btn-danger" type="button" onclick="Eliminar('#imagen2','#img2')">Eliminar</button>
										</center>
									<?php
									}
									?>
								</div>
							</div>
							<div class="card">

								<div class="card-body">
									<h4 class="card-title">Title</h4>
									<?php
									if ($_SESSION["imagenes[2]"]==0) {
									?>
										<img class="card-img-top" src="FormNoticias/uploads/SIN-IMAGEN.jpg" id="imagen3" height="200px" width="70px" alt="Card image cap">
									<?php
									} else {
									?>
										<img class="card-img-top" src="FormNoticias/uploads/<?php echo $_SESSION["imagenes[2]"] ?>" id="imagen3" height="200px" width="70px" alt="Card image cap">
									<?php

									}
									?>
									<input class="form-control" type="file" id="img3" name="file3" id="formFileMultiple">
									<?php
									if ($_SESSION["imagenes[2]"]!=0) {

									?>
										<center>
											<br>
											<button class="btn btn-danger" onclick="Eliminar('#imagen3','#img3')" type="button">Eliminar</button>
										</center>
									<?php
									}
									?>
								</div>
							</div>

						</div>
						<br><br>



						<div class="button">
							<button type="submit" name="Guardar" class="btn btn-primary">Guardar Cambios</button>&nbsp;&nbsp;
							<button type="submit" name="Descartar" class="btn btn-secondary">Descartar Cambios</button>

						</div>
						<br><br>
					</div>
				</div>
			</div>
	</div>
	<!--Fin de la clase row..-->
	</form>
	<!--Fin del Form..-->
	</div>
	<!--Fin de la clase container..-->




	<!-- fin de formulario -->


	<?php
	include("botonArriba.html");
	?>
	<footer>
		<?php
		include("./Menu_footer/footer.html");

		?>
	</footer>

	<!--termina contenendor de informacion-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
	<script src="js/boton_up.js"></script>

	<script src="/js/JS.js"></script>


</body>

</html>