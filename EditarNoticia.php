<?php
/*obteniendo la fecha actual del sistema */
$fechaActual = date('Y-m-d');

?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/estilo.css" type="text/css">
	<link rel="stylesheet" href="./css/footerstyle.css" type="text/css">
	<link rel="stylesheet" href="./css/migapan.css" type="text/css">
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
	include("./menu_footer/headAdmin.html");
	?>

	<!--miga de pan-->
	<div class="contenedorMigaPan text-center">
		<div class="row">
			<div class="col-6">
				<?php
				include("migas_pan/migapan12.html")
				?>
			</div>
		</div>
	</div>
	<br>
	<!--termina miga de pan-->


	<!--Inicia contenendor de informacion-->
	<!--Inicio de la clase container..-->
	<div class="container">
		<form action="./FormNoticias/cargar_img.php" method="post" enctype="multipart/form-data"">
			<!--Inicio del Form..-->
			<div class="row">
				<!--Inicio de la clase Row..-->
				<center>
					<h1 class="my-4" id="titulo1">Noticias.</h1>
				</center>
                <div class="row">
                    <div class="col-md-3">
                        <form action="" method="post">
                            <a href="actualizar.php?id=<?php echo $row["CedulaEstudiante"];?>" class="btn btn-primary">Modificar</a>
                            <a href="procesareliminar.php?id=<?php echo $row["CedulaEstudiante"];?>" class="btn btn-primary">Eliminar</a> </div></td>                                               
                        </form>
                    </div>
                    <div class="col-md-3">
                        <form action="" method="post">
                        
                        </form>
                    </div>
                </div>
				<div class="col-md-12">
					<div class="card my-4" id="card1" style="background-color: #121b4f; color: white;">
						<h5 class="card-header" style="background-color: #0079be;"> <b>Datos de la noticia</b></h5>
						<div class="card-body">
							<div class="container" id="minicontainer">
								<div class="row">
									<!-- inicia fila -->
									<div class="col-md-6">
										<label for="" id="colorNombres">Titulo:</label>
										<input type="text" class="form-control" name="Titulo" value="" placeholder=""><br>
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
									<textarea for="inlineRadio5" name="enfermedadDescrip" class="form-control" placeholder="Deja tu respuesta" id="floatingTextarea2" style="height: 100px" spellcheck="false" data-ms-editor="true" require></textarea><br>
								</div>
							</div>

							<div class="">
								<div class="">
									<div class="">
										<h4 class="text-center">Cargar Imagen de Noticia</h4>
										<div class="form-group">

											<div class="col-12 ">
												<input type="file" class="form-control" name="imagenes[]" accept="image/jpeg,image/jpg,image/png" multiple>
											</div>
										</div>

									</div>
								</div>
							</div>
							<br>

							<!--<div class="" id="myimagenes">
								<div class="dz-default dz-message">
									<input type="file" name="archivo_img" id="">
									<button class="dz-button" type="button"><img src="img/upload.png" alt=""></button>
								</div>
							</div>-->
							<div class="button">
								<button name="aceptar" type="submit" id="send">Aceptar</button>
							</div>
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
		include("./menu_footer/footer.html");

		?>
	</footer>

	<!--termina contenendor de informacion-->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
	<script src="js/boton_up.js"></script>


</body>

</html>