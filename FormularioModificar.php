<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<?php
/*obteniendo la fecha actual del sistema */
$fechaActual = date('Y-m-d');
$id = $_GET["idtitulo"];
// var es una variable para validar cual fue el error que se obtuvo al guardar los cambios
$Validacion = $_GET["var"];
// La variable nom es para saber cual es el nombre de la imagen que está causando conflicto, ya que existe en la BD
$nom = $_GET["nom"];
include("./BaseDeDatos/conexion_db.php");
session_start();
if (empty($_SESSION["username"])) {
	// Validación para saber si el usuario ingresó su usuario y contraseña, de los contrario mandará error y  redirigirá a la interfaz de inicio de sesión
	echo '<div class="container">
	<div class="container">
		<div class="alert alert-danger" role="alert">
			<h4 class="alert-heading">Error 201.....</h4>
			<p>No has iniciado sesión.............<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
			<hr>
		</div>
	</div>
</div>';
	header("refresh:3;url=IniciarSesion.php");
} else {
	// Se añade la varible de sesión idtitulo, el id de la imagen
	$_SESSION["idtitulo"] = $id;
	// Aquí se verifica si es la primera vez que entra a esta interfaz para hacer la consulta, si no utiliza las variables de sesión 
	if ($_SESSION["cont"] == 0) { 
		// Se hace la consulta a la BD, de las imagenes y del título
		$query_imagen = ("SELECT imagen,id_titulo FROM imagenes_noticia WHERE id_titulo ='" . $id . "'");
		// Hace la conexión con la BD
		$LV_EXEC = conectar()->query($query_imagen)
			or die(conectar()->error);
		// Inicia la variable en cero para inicializar el array de sesión
		$i = 0;
		// Mientras haya una imagen en la consulta que se hizo anteriormente 
		while ($LV_IMAGEN = $LV_EXEC->fetch_assoc()) {
			// Se añaden las imágenes de la BD a las variables de sesión
			$_SESSION['imagenes[' . $i . ']'] = $LV_IMAGEN["imagen"];
			// Se guarda el id del titulo en idtit
			$idtit = $LV_IMAGEN["id_titulo"];
			// Se incrementa el contador para saber la posición de el array de sesión
			$i++;
		}
		// El contador en la sesión se define en uno para saber que ya se realizó la consulta y que las imágenes ya están en las variables de sesión
		$_SESSION["cont"] = 1;
		// Se hace la consulta del titulo de la imagen con el id de la imagen
		$query_imagen = ("SELECT titulo FROM noticia WHERE id_titulo ='" . $idtit . "'");
		// Se ejecuta la consulta
		$LV_EXEC = conectar()->query($query_imagen)
			or die(conectar()->error);
		// Se guarda la consulta en $LV_IMAGEN
		$LV_IMAGEN = $LV_EXEC->fetch_assoc();
		// Se guarda el titulo en una varible de sesión, llamada titulo
		$_SESSION["titulo"] = $LV_IMAGEN["titulo"];
	}
	// Como las imágenes se guardan en orden de llegada de 0 hasta 2
	// Se verifica cuantas imágenes hay en las variables de sesión, se verifica cero porque es el indicador si hay o no imagenes en la variable
	if ($_SESSION["imagenes[0]"] != 0) {
		// Si hay una imagen en la posición 0 se asigna 1 para saber que hay una imagen
		$i = 1;
	}
	if ($_SESSION["imagenes[1]"] != 0) {
		// Si hay una imagen en la posición 1 se asigna 2 para saber que hay dos imágenes
		$i = 2;
	}
	if ($_SESSION["imagenes[2]"] != 0) {
		// Si hay una imagen en la posición 2 se asigna 3 para saber que hay tres imágenes
		$i = 3;
	}
	// Si no hay ninguna imagen en la posición 0, porque se eliminaron, se asigna 0
	if ($_SESSION["imagenes[0]"] == 0) {
		$i = 0;
	}
	// Se inicializa en 0 una nueva varible ($e) que será el contador hasta la cantidad de imágenes guardadas en las varibles de sesión
	$e = 0;
	// Mientras no se pase de la cantidad de imágenes guardadas
	while ($e < $i) {
		// Se inicializa otra variable de contador ($a)
		$a = 0;
		// Mientras $a sea menor a la cantidad de imágenes guardadas
		while ($a < $i) {
			// Si se ha eliminado una imagen, esta se guardará en un array de sesión llamada delete
			// Si existe la imagen tanto en el array de imágenes, como en el de eliminadas
			if ($_SESSION["imagenes[" . $e . "]"] === $_SESSION["delete[" . $a . "]"]) {
				// Se asigna la posición ($e) en un nuevo contador ($o)
				$o = $e;
				// Mientras $o sea menor a la cantidad de imágenes guardadas
				while ($o < $i) {
					// Si el contador es igual a la última posición de se asigna cero, para eliminarla el dato
					if ($o == $i - 1) {
						$_SESSION["imagenes[" . $o . "]"] = 0;
					} else {
						// Mientras no sea la última posición se irán reemplazando la imagen actual con la Siguiente, cuando es cero pasa arriba del if para eliminar la última posición 
						$_SESSION["imagenes[" . $o . "]"] = $_SESSION["imagenes[" . ($o + 1) . "]"];
					}
					// Se incrementa el contador $o
					$o++;
				}
			}
			// Se incrementa el contador $a
			$a++;
		}
		// Se incrementa el contador $e
		$e++;
	}
	// Si la última posición de las imágenes eliminadas se le asigna a la primera posición de  el array de imágenes en cero
	if ($_SESSION["delete[2]"] != 0) {
		$_SESSION["imagenes[0]"] = 0;
	}
	
?>
	<!DOCTYPE html>
	<html lang="es">

	<head>
		<!-- Llamado a los link requeridos -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="./css/estilo.css" type="text/css">
		<link rel="stylesheet" href="./css/footerstyle.css" type="text/css">
		<link rel="stylesheet" href="./css/MigaPan.css" type="text/css">
		<link rel="stylesheet" href="./css/header-style.css" type="text/css">
		<link rel="stylesheet" href="/css/menutest.css" type="text/css">
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
		// Inclusión del menu
		include("./Menu_Footer/menuadmin.html");
		?>

		<!--miga de pan-->
		<div class="contenedorMigaPan text-center">
			<div class="col-6">
				<?php
				// Inclusión de las migas de pan
				include("Migas_Pan/MigaPan12.html")
				?>
			</div>
		</div>
		<br>
		<!--termina miga de pan-->


		<!--Inicia contenendor de informacion-->
		<!--Inicio de la clase container..-->
		<div class="container">
			<!-- Una vez presionado el botón de guardar cambios o de descartar cambios se redirigirá a GuardarCambios.php -->
			<form action="GuardarCambios.php" method="post" enctype="multipart/form-data"">
			<!--Inicio del Form..-->
			<div class=" row">
				<!--Inicio de la clase Row..-->
				<center>
					<h1 class="my-4" id="titulo1">Noticias.</h1>
				</center>
				<?php
				// Si la validación es 1 significa que es un error de foreing key, ya que la imagen ya existe en la BD
				if ($Validacion == 1) {
					echo '<div class="container">
					<div class="container">
						<div class="alert alert-danger" role="alert">
							<h4 class="alert-heading">Error 405.....</h4>
							<p>La imagen ' . $nom . ' ya existe en la base de datos .............<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
							<hr>
						</div>
					</div>
				</div>';
				}
				// Si validacion es 2, significa que ha enviado la imagen duplicada
				if ($Validacion == 2) {
					echo '<div class="container">
					<div class="container">
						<div class="alert alert-danger" role="alert">
							<h4 class="alert-heading">Error 405.....</h4>
							<p>Ha insertado una imagen duplicada .............<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
							<hr>
						</div>
					</div>
				</div>';
				}
				// Si validacion es 3, significa que eliminó todas las imágenes y debe haber por lo menos una
				if ($Validacion == 3) {
					echo '<div class="container">
					<div class="container">
						<div class="alert alert-danger" role="alert">
							<h4 class="alert-heading">Error 405.....</h4>
							<p>Debe haber por lo menos una imagen en la noticia .............<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
							<hr>
						</div>
					</div>
				</div>';
				}
				// Si validacion es 4, significa que el titulo ya existe en otra noticia, por ello no se puede modificar a ese titulo
				if ($Validacion == 4) {
					echo '<div class="container">
					<div class="container">
						<div class="alert alert-danger" role="alert">
							<h4 class="alert-heading">Error 201.....</h4>
							<p>Ya existe una noticia con ese título.............<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
							<hr>
						</div>
					</div>
				</div>';
				}
				?>
				<div class="col-md-12">
					<div class="card my-4" id="card1" style="background-color: #121b4f; color: white;">
						<h5 class="card-header" style="background-color: #0079be;"> <b>Datos de la noticia</b></h5>
						<div class="card-body">
							<div class="container" id="minicontainer">
								<div class="row">
									<?php
									// Se hace la consulta de todos los datos de la tabla noticia
									$query = conectar()->query('Select * from noticia where titulo="' . $_SESSION["titulo"] . '";') or die(conectar()->error);
									// Se obtienen los resultados
									$valores = $query->fetch_assoc();
									?>
									<!-- inicia fila -->
									<div class="col-md-6">
										<label for="" id="colorNombres">Titulo:</label>
										<!-- Se imprime el titulo en el input -->
										<input type="text" class="form-control" name="Titulo" value="<?php echo $valores['titulo']; ?>" placeholder="" required="required"><br>
									</div>
									<div class="col-md-3">
										<label for="" id="colorNombres">Fecha:</label>
										<!-- Se imprime la fecha actual -->
										<input type="text" class="form-control" name="FechaActual" <?php echo 'value="' . $fechaActual . '"' ?> required="required" readonly><br>
									</div>
								</div>
							</div>
							<div class="col-md-12" id="Descripcion">
								<label for="">Descripción:</label>
								<div class="form-floating">
									<!-- Se imprime la descripción  -->
									<textarea for="inlineRadio5" name="enfermedadDescrip" class="form-control" placeholder="Deja tu respuesta" id="floatingTextarea2" style="height: 100px" spellcheck="false" data-ms-editor="true" required="required"><?php echo $valores['descripcion'] ?></textarea><br>
								</div>
							</div>

							<div class="card-group">



								<div class="card">

									<div class="card-body" id="elim">
										<h4 class="card-title">Title</h4>
										<?php
										// Si no hay imágenes en la posición cero
										if ($_SESSION["imagenes[0]"] == 0) {
										?>
											<!-- Se imprime una imagen que dice que no hay imagen en esa posición -->
											<img class="card-img-top" src="./FormNoticias/uploads/SIN-IMAGEN.jpg" height="200px" width="70px" id="imagen1" alt="Card image cap">
										<?php
										} else {
										?>
											<!-- Por el contrario, si hay una imagen, se imprime esta imagen -->
											<img class="card-img-top" src="./FormNoticias/uploads/<?php echo $_SESSION["imagenes[0]"]; ?>" height="200px" width="70px" id="imagen1" alt="Card image cap">
										<?php

										}
										?>

										<!-- input de tipo file, para captar las imágenes -->
										<input class="form-control" type="file" accept="image/jpeg,image/jpg,image/png" name="file1" id="img1">
										<?php
										// Si hay una imagen se añade el botón de eliminar
										if ($_SESSION["imagenes[0]"] != 0) {
										?>
											<center>
												<br>
												<!-- En el evento OnClick hace el llamado a a la función Eliminar de JavaScript -->
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
										// Si no hay imágenes en la posición uno
										if ($_SESSION["imagenes[1]"] == 0) {
										?>
										<!-- Se imprime una imagen que dice que no hay imagen en esa posición -->
											<img class="card-img-top" src="./FormNoticias/uploads/SIN-IMAGEN.jpg" height="200px" width="70px" alt="Card image cap" id="imagen2">
										<?php
										} else {
										?>
										<!-- Por el contrario, si hay una imagen, se imprime esta imagen -->											
											<img class="card-img-top" src="./FormNoticias/uploads/<?php echo $_SESSION["imagenes[1]"] ;?>" height="200px" width="70px" alt="Card image cap" id="imagen2">
										<?php

										}
										?>
										<!-- input de tipo file, para captar las imágenes -->
										<input class="form-control" type="file" accept="image/jpeg,image/jpg,image/png" name="file2" id="img2">
										<?php
										// Si hay una imagen se añade el botón de eliminar
										if ($_SESSION["imagenes[1]"] != 0) {
										?>
											<center>
												<br>
												<!-- En el evento OnClick hace el llamado a a la función Eliminar de JavaScript -->
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
										// Si no hay imágenes en la posición dos
										if ($_SESSION["imagenes[2]"] == 0) {
										?>
										<!-- Se imprime una imagen que dice que no hay imagen en esa posición -->
											<img class="card-img-top" src="./FormNoticias/uploads/SIN-IMAGEN.jpg" id="imagen3" height="200px" width="70px" alt="Card image cap">
										<?php
										} else {
										?>
										<!-- Por el contrario, si hay una imagen, se imprime esta imagen -->
											
											<img class="card-img-top" src="./FormNoticias/uploads/<?php echo $_SESSION["imagenes[2]"] ;?>" id="imagen3" height="200px" width="70px" alt="Card image cap">
										<?php

										}
										?>
										<!-- input de tipo file, para captar las imágenes -->
										<input class="form-control" type="file" id="img3" accept="image/jpeg,image/jpg,image/png" name="file3" id="formFileMultiple">
										<?php
										// Si hay una imagen se añade el botón de eliminar
										if ($_SESSION["imagenes[2]"] != 0) {
										?>
											<center>
												<br>
												<!-- En el evento OnClick hace el llamado a a la función Eliminar de JavaScript -->
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
								<!-- Botón guardar cambios -->
								<button type="submit" name="Guardar" class="btn btn-primary">Guardar Cambios</button>&nbsp;&nbsp;
								<!-- Botón Descartar Cambios -->
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
		// Inclusión del botón que te lleva arriba de la interfaz
		include("botonArriba.html");
		?>
		<footer>
			<?php
			// Inclusión del footer 
			include("./Menu_Footer/footer.html");

			?>
		</footer>

		<!--termina contenendor de informacion-->
		<!-- Llamados a los recursos necesarios -->
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
		<script src="js/boton_up.js"></script>

		<script src="/js/JS.js"></script>


	</body>

	</html>
<?php } ?>