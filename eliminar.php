<?php
include './BaseDeDatos/conexion_db.php';
session_start();
$query = conectar()->query('Select * from noticia, imagenes_noticia where noticia.id_titulo=imagenes_noticia.id_titulo and noticia.id_titulo="'.$_SESSION['idtitulo'].'";')or die(conectar()->error);
$images = mysqli_num_rows($query);
if($images>1){
    $idimagen = $_GET["vari"];
    $con = conectar();
    $query = $con->prepare("DELETE FROM imagenes_noticia WHERE imagen=?;");
    $query->bind_param("s", $_SESSION["imagenes[" . $idimagen . "]"]);
    $query->execute();
    mysqli_close($con);
    unlink("FormNoticias/uploads/" . $_SESSION["imagenes[" . $idimagen . "]"]);
    header("Location: FormularioModificar.php?idtitulo=".$_SESSION["idtitulo"]);
    $_SESSION["Vas"]=0;
}else{
    echo '<script>alert("La noticia debe contener al menos una imagen")</script>';
    header("Location: FormularioModificar.php?idtitulo=".$_SESSION["idtitulo"].'');
    $_SESSION["Vas"]=1;
}

unset($_SESSION["imagenes[0]"]);
unset($_SESSION["imagenes[1]"]);
unset($_SESSION["imagenes[2]"]);