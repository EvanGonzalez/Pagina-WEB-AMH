<?php
include './BaseDeDatos/conexion_db.php';
session_start();;
if (isset($_POST['Guardar'])) {
    $i = 0;
    while (!empty($_SESSION["delete[" . $i . "]"]) || $_SESSION["delete[" . $i . "]"] != 0) {
        $con = conectar();
        $query = $con->prepare("DELETE FROM imagenes_noticia WHERE imagen=?;");
        $query->bind_param("s", $_SESSION["delete[" . $i . "]"]);
        $query->execute();
        mysqli_close($con);
        unlink("FormNoticias/uploads/" . $_SESSION["delete[" . $i . "]"]);
        $_SESSION["Vas"] = 0;
        $i++;
    }
    $con = conectar();
    $tit = $_POST["Titulo"];
    $fecha = $_POST["FechaActual"];
    $desc = $_POST["enfermedadDescrip"];
    $query = $con->prepare("UPDATE noticia set titulo=?, fecha=?, descripcion=?, usuario=? where titulo = ?");
    $query->bind_param('sssss', $tit, $fecha, $desc, $_SESSION["username"], $_SESSION['titulo']);
    $query->execute();
    mysqli_close($con);
    if ($_FILES["file1"]["name"] != null || $_FILES["file2"]["name"] != null || $_FILES["file3"]["name"] != null) {

        if ($_FILES["file1"]["name"]) {
            if ($_SESSION["imagenes[0]" != 0]) {

                $archivonombre = $_FILES["file1"]["name"];
                $fuente = $_FILES["file1"]["tmp_name"];


                $target_path = "FormNoticias/uploads/" . $archivonombre; //indicamos la ruta de destino de los archivos
                unlink("FormNoticias/uploads/" . $_SESSION["imagenes[0]"]);
                // file was successfully deleted

                if (move_uploaded_file($fuente, $target_path)) {
                    $con = conectar();
                    $query = $con->prepare("UPDATE imagenes_noticia set imagen = ? where imagen = ?");
                    $query->bind_param('ss', $archivonombre, $_SESSION["imagenes[0]"]);
                    $query->execute();
                    mysqli_close($con);
                } else {
                }

            } else {
                if ($_FILES["file1"]["name"]) {
                    $archivonombre = $_FILES["file1"]["name"];
                    $fuente = $_FILES["file1"]["tmp_name"];


                    $target_path = "FormNoticias/uploads/" . $archivonombre; //indicamos la ruta de destino de los archivos



                    if (move_uploaded_file($fuente, $target_path)) {
                        $con = conectar();
                        $query = $con->prepare("Insert into imagenes_noticia(imagen,id_titulo) values(?,?)");
                        $query->bind_param('ss', $archivonombre, $_SESSION["idtitulo"]);
                        $query->execute();
                        mysqli_close($con);
                    } else {
                    }

                }
            }
        }
        if ($_FILES["file2"]["name"]) {
            if ($_SESSION["imagenes[1]"] != 0) {

                $archivonombre = $_FILES["file2"]["name"];
                $fuente = $_FILES["file2"]["tmp_name"];


                $target_path = "FormNoticias/uploads/" . $archivonombre; //indicamos la ruta de destino de los archivos
                unlink("FormNoticias/uploads/" . $_SESSION["imagenes[1]"]);
                // file was successfully deleted

                if (move_uploaded_file($fuente, $target_path)) {
                    $con = conectar();
                    $query = $con->prepare("UPDATE imagenes_noticia set imagen = ? where imagen = ?");
                    $query->bind_param('ss', $archivonombre, $_SESSION["imagenes[1]"]);
                    $query->execute();
                    mysqli_close($con);
                } else {
                }

            } else {
                if ($_FILES["file2"]["name"]) {
                    $archivonombre = $_FILES["file2"]["name"];
                    $fuente = $_FILES["file2"]["tmp_name"];


                    $target_path = "FormNoticias/uploads/" . $archivonombre; //indicamos la ruta de destino de los archivos



                    if (move_uploaded_file($fuente, $target_path)) {
                        $con = conectar();
                        $query = $con->prepare("Insert into imagenes_noticia(imagen,id_titulo) values(?,?)");
                        $query->bind_param('ss', $archivonombre, $_SESSION["idtitulo"]);
                        $query->execute();
                        mysqli_close($con);
                    } else {
                    }

                }
            }
        }

        if ($_FILES["file3"]["name"]) {
            if ($_SESSION["imagenes[2]"] != 0) {

                $archivonombre = $_FILES["file3"]["name"];
                $fuente = $_FILES["file3"]["tmp_name"];


                $target_path = "FormNoticias/uploads/" . $archivonombre; //indicamos la ruta de destino de los archivos
                unlink("FormNoticias/uploads/" . $_SESSION["imagenes[2]"]);
                // file was successfully deleted

                if (move_uploaded_file($fuente, $target_path)) {
                    $con = conectar();
                    $query = $con->prepare("UPDATE imagenes_noticia set imagen = ? where imagen = ?");
                    $query->bind_param('ss', $archivonombre, $_SESSION["imagenes[2]"]);
                    $query->execute();
                    mysqli_close($con);
                } else {
                }

            } else {
                if ($_FILES["file3"]["name"]) {
                    $archivonombre = $_FILES["file3"]["name"];
                    $fuente = $_FILES["file3"]["tmp_name"];


                    $target_path = "FormNoticias/uploads/" . $archivonombre; //indicamos la ruta de destino de los archivos



                    if (move_uploaded_file($fuente, $target_path)) {
                        $con = conectar();
                        $query = $con->prepare("Insert into imagenes_noticia(imagen,id_titulo) values(?,?)");
                        $query->bind_param('ss', $archivonombre, $_SESSION["idtitulo"]);
                        $query->execute();
                        mysqli_close($con);
                    } else {
                    }

                }
            }
        }
        unset($_SESSION["imagenes[0]"]);
        unset($_SESSION["imagenes[1]"]);
        unset($_SESSION["imagenes[2]"]);
    } 
    
    unset($_SESSION["delete[0]"]);
    unset($_SESSION["delete[1]"]);
    unset($_SESSION["delete[2]"]);
    
}
   
    
    ?>
    <meta http-equiv="refresh" content="0;url=NoticiasA.php">


