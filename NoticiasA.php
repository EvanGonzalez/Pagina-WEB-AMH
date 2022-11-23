<?php
    session_start();
    $_SESSION["Vas"]=0;
?>
<!-- NoticiasA-->
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css" type="text/css">
    <link rel="stylesheet" href="./css/footerstyle.css" type="text/css">
    <link rel="stylesheet" href="./css/MigaPan.css" type="text/css">
    <link rel="stylesheet" href="./css/header-style.css" type="text/css">
    <link rel="stylesheet" href="./FormNoticiasA/NoticiasA.css" type="text/css">
    <link rel="shortcut icon" href="img/2.ico" type="image/x-icon"><!--  -->
     <!--Complemento para Imagen responsive-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/EstiloNoticia.css" />
    <!--paquete de complementos y dependecias de js para los elementos bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Noticias</title>
</head>
<body id="fondoMain">

<!-- HEADER -->
<?php
    include("./Menu_Footer/headAdmin.html");
    ?>

    <!--miga de pan-->
    <div class="contenedorMigaPan text-center">
        <div class="row">
            <div class="col-md-12">
                <?php
                include("Migas_Pan/MigaPan19.html")
                ?>
            </div>
        </div>
    </div>
    <br>

<?php
include("./BaseDeDatos/conexion_db.php");
    $query = conectar()->query("select * from noticia;")or die(conectar()->error);
    // (PRD_CATEGPROD = $filtro or $filtro is null)
    
    //esto es para configurar los NoticiasA por paginas
    $Noticia_x_pag = 2;

    //contar articulos de la base de Datos
    $total_NoticiasA_db = mysqli_num_rows($query);
    if($total_NoticiasA_db>0){
        //esto es necesario para configurar la cantidad de paginas que deben existir
        $paginas = $total_NoticiasA_db/$Noticia_x_pag;
        $paginas = ceil($paginas);
        //esto es para comprobar que el usuario no le quite el numero a la pagina o coloque algo innecesarios :D
        if (!isset($_GET['pagina'])) {
            echo '<meta http-equiv="refresh" content="0;url=NoticiasA.php?pagina=1">';
        }else{
            if ($_GET['pagina']>$paginas ||$_GET['pagina']<=0) {
                echo '<meta http-equiv="refresh" content="0;url=NoticiasA.php?pagina=1">';
            }else{
                require_once("contenidoNoticiasA.php");
            }
        }
    }else{
        echo'<div class="container">
                <div class="container">
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Error 404.....</h4>
                        <p>Aún no se han cargado noticias para mostrar en el sitio..............................<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></p>
                        <hr>
                        
                    </div>
                </div>
            </div>';
    }
    
?>
<?php
    include("botonArriba.html");
    ?>
    <footer>
        <?php
        include("./Menu_Footer/footer.html");

        ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="js/boton_up.js"></script>
</body>
</html>
<!--Fin NoticiasA-->