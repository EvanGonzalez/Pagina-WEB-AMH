<?php
include './BaseDeDatos/conexion_db.php';
session_start();
if (isset($_POST['Guardar'])) {


    if ($_FILES["file1"]["name"] != null || $_FILES["file2"]["name"] != null || $_FILES["file3"]["name"] != null) {

        if ($_FILES["file1"]["name"]) {
            if ($_SESSION["imagenes[0]"]) {

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

                echo "Se actualizó correctamente imagen 1";
            } else {
                if ($_FILES["file1"]["name"]) {
                    $archivonombre = $_FILES["file1"]["name"];
                    $fuente = $_FILES["file1"]["tmp_name"];


                    $target_path = "FormNoticias/uploads/" . $archivonombre; //indicamos la ruta de destino de los archivos



                    if (move_uploaded_file($fuente, $target_path)) {
                        $con = conectar();
                        $query = $con->prepare("Insert into imagenes_noticia(imagen,titulo) values(?,?)");
                        $query->bind_param('ss', $archivonombre, $_SESSION["titulo"]);
                        $query->execute();
                        mysqli_close($con);
                    } else {
                    }

                    echo "Se insertó correctamente imagen 1";
                }
            }
        }
        if ($_FILES["file2"]["name"]) {
            if ($_SESSION["imagenes[1]"]) {

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

                echo "Se actualizó correctamente imagen 2";
            } else {
                if ($_FILES["file2"]["name"]) {
                    $archivonombre = $_FILES["file2"]["name"];
                    $fuente = $_FILES["file2"]["tmp_name"];


                    $target_path = "FormNoticias/uploads/" . $archivonombre; //indicamos la ruta de destino de los archivos



                    if (move_uploaded_file($fuente, $target_path)) {
                        $con = conectar();
                        $query = $con->prepare("Insert into imagenes_noticia(imagen,titulo) values(?,?)");
                        $query->bind_param('ss', $archivonombre, $_SESSION["titulo"]);
                        $query->execute();
                        mysqli_close($con);
                    } else {
                    }

                    echo "Se insertó correctamente imagen 2";
                }
            }
        }

        if ($_FILES["file3"]["name"]) {
            if ($_SESSION["imagenes[2]"]) {

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

                echo "Se actualizó correctamente imagen 3";
            } else {
                if ($_FILES["file3"]["name"]) {
                    $archivonombre = $_FILES["file3"]["name"];
                    $fuente = $_FILES["file3"]["tmp_name"];


                    $target_path = "FormNoticias/uploads/" . $archivonombre; //indicamos la ruta de destino de los archivos



                    if (move_uploaded_file($fuente, $target_path)) {
                        $con = conectar();
                        $query = $con->prepare("Insert into imagenes_noticia(imagen,titulo) values(?,?)");
                        $query->bind_param('ss', $archivonombre, $_SESSION["titulo"]);
                        $query->execute();
                        mysqli_close($con);
                    } else {
                    }

                    echo "Se insertó correctamente imagen 3";
                }
            }
        }
        unset($_SESSION["imagenes[0]"]);
        unset($_SESSION["imagenes[1]"]);
        unset($_SESSION["imagenes[2]"]);
    } else {
        echo "Me sali";
    }
}
header("Location: NoticiasA.php");
