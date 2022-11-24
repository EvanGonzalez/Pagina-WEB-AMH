<?php
include './BaseDeDatos/conexion_db.php';
session_start();
if (isset($_POST['Guardar'])) {
    $existeunaimagen = true;
    if ($_SESSION["imagenes[0]"] == 0) {
        $existeunaimagen = false;
    }
    $existe1 = false;
    $existe2 = false;
    $existe3 = false;
    if ($_FILES["file1"]["name"] != null) {
        $existe1 = true;
    }
    if ($_FILES["file2"]["name"] != null) {
        $existe2 = true;
    }
    if ($_FILES["file3"]["name"] != null) {
        $existe3 = true;
    }
    $valid = false;
    if ($existe1 && $existe2 && $existe3) {
        if ($_FILES["file1"]["name"] != $_FILES["file2"]["name"] && $_FILES["file1"]["name"] != $_FILES["file3"]["name"] && $_FILES["file2"]["name"] != $_FILES["file3"]["name"]) {
            $valid = true;
        }
    } elseif ($existe1 && $existe2) {
        if ($_FILES["file1"]["name"] != $_FILES["file2"]["name"]) {
            $valid = true;
        }
    } elseif ($existe1 && $existe3) {
        if ($_FILES["file1"]["name"] != $_FILES["file3"]["name"]) {
            $valid = true;
        }
    } elseif ($existe2 && $existe3) {
        if ($_FILES["file2"]["name"] != $_FILES["file3"]["name"]) {
            $valid = true;
        }
    } elseif ($existe1 || $existe2 || $existe3) {
        $valid = true;
    }



    if ($existe1 || $existe2 || $existe3 || $existeunaimagen) {

        if ($valid) {
            $r = 1;
            $existArchi = false;
            while ($r <= 3) {
                $query_imagen = ("SELECT count(*) as 'contar', imagen FROM imagenes_noticia WHERE imagen ='" . $_FILES["file" . $r]["name"] . "'");
                $LV_EXEC = conectar()->query($query_imagen)
                    or die(conectar()->error);
                $i = 0;
                if ($img = $LV_EXEC->fetch_assoc()) {
                    if ($img["contar"] > 0) {
                        if ($img["imagen"] == $_SESSION["delete[0]"]) {
                        } elseif ($img["imagen"] == $_SESSION["delete[1]"]) {
                        } elseif ($img["imagen"] == $_SESSION["delete[2]"]) {
                        } else {
                            $existArchi = true;
                            $p = $r;
                            break;
                        }
                    }
                }

                $r++;
            }

            if ($existArchi) {

                $nom = $_FILES["file" . $p]["name"];



                header('Location: FormularioModificar.php?var=1&nom=' . $nom . '&idtitulo=' . $_SESSION["idtitulo"] . '');
            } else {
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
                        if ($_SESSION["imagenes[0]"] != 0) {

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
        }else{
            header('Location: FormularioModificar.php?var=2&nom=' . $nom . '&idtitulo=' . $_SESSION["idtitulo"] . '');
        }
    } else {
        header('Location: FormularioModificar.php?var=3&nom=' . $nom . '&idtitulo=' . $_SESSION["idtitulo"] . '');
    }
}

echo "<meta http-equiv='refresh' content='0;url=NoticiasA.php'";
?>
<!-- <meta http-equiv="refresh" content="0;url=NoticiasA.php"> -->