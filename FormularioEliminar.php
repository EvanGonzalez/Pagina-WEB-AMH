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
	/*obteniendo la fecha actual del sistema */
	$id = $_GET["idtitulo"];
	include("./BaseDeDatos/conexion_db.php");

	$query = conectar()->query('Select * from imagenes_noticia, noticia where imagenes_noticia.id_titulo=noticia.id_titulo and imagenes_noticia.id_titulo="'.$id.'";')or die(conectar()->error);
	$valores = $query->fetch_assoc();
	$query_imagen = ("SELECT * FROM imagenes_noticia WHERE id_titulo = '".$id."'");
    $LV_EXEC = conectar()->query($query_imagen) or die(conectar()->error);
    WHILE ($LV_IMAGEN = $LV_EXEC->fetch_assoc()){
    	unlink('./FormNoticias/uploads/'.($LV_IMAGEN['imagen']).'');
    }
	$query1 = conectar()->query('Delete from imagenes_noticia where id_titulo="'.$id.'";')or die(conectar()->error);
	$query2 = conectar()->query('Delete from noticia where id_titulo="'.$id.'";')or die(conectar()->error);
	echo '<div class="container">
	<div class="container">
		<div class="alert alert-success" role="alert">
			<h4 class="alert-heading">Protocolo 434.....</h4>
			<p>Se ha eliminado correctamente la noticia.............<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
			<hr>
		</div>
	</div>
</div>';
header("refresh:3;url=../NoticiasA.php"); 
}                 
?>
