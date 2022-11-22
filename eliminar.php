<?php
include './BaseDeDatos/conexion_db.php';
session_start();
$idimagen = $_GET["vari"];
$con = conectar();
$query = $con->prepare("DELETE FROM imagenes_noticia WHERE imagen=?;");
$query->bind_param("s", $_SESSION["imagenes[" . $idimagen . "]"]);
$query->execute();
mysqli_close($con);

unlink("FormNoticias/uploads/" . $_SESSION["imagenes[" . $idimagen . "]"]);
unset($_SESSION["imagenes[0]"]);
unset($_SESSION["imagenes[1]"]);
unset($_SESSION["imagenes[2]"]);
header("Location: FormularioModificar.php?titulo=".$_SESSION["titulo"]);
