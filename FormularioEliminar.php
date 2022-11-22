<?php
	/*obteniendo la fecha actual del sistema */
	$id = $_GET["titulo"];
	include("./BaseDeDatos/conexion_db.php");

	$query = conectar()->query('Select * from imagenes_noticia, noticia where imagenes_noticia.titulo=noticia.titulo and imagenes_noticia.titulo="'.$id.'";')or die(conectar()->error);
	$valores = $query->fetch_assoc();
	$query_imagen = ("SELECT * FROM imagenes_noticia WHERE titulo = '".$valores['titulo']."'");
    $LV_EXEC = conectar()->query($query_imagen) or die(conectar()->error);
    WHILE ($LV_IMAGEN = $LV_EXEC->fetch_assoc()){
    	unlink('./FormNoticias/uploads/'.($LV_IMAGEN['imagen']).'');
    }
	$query1 = conectar()->query('Delete from imagenes_noticia where titulo="'.$id.'";')or die(conectar()->error);
	$query2 = conectar()->query('Delete from noticia where titulo="'.$id.'";')or die(conectar()->error);
	header("Location: ../NoticiasA.php");                   
?>
