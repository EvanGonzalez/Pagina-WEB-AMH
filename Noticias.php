<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css" type="text/css">
    <link rel="stylesheet" href="./css/footerstyle.css" type="text/css">
    <link rel="stylesheet" href="./css/MigaPan.css" type="text/css">
    <link rel="stylesheet" href="./css/header-style.css" type="text/css">
    <link rel="stylesheet" href="./FormNoticias/Noticias.css" type="text/css">
    
    <!--paquete de complementos y dependecias de js para los elementos bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Pagina Web</title>
</head>


<body id="fondoMain">
    <?php
    include("./Menu_footer/head.html");
    ?>

    <!--miga de pan-->
    <div class="contenedorMigaPan text-center">
        <div class="row">
            <div class="col-6">
                <?php
                include("Migas_Pan/MigaPan19.html")
                ?>
            </div>
        </div>
    </div>
    <br>
    <!--termina miga de pan-->


    <!--Inicia contenendor de informacion-->
    <!--Inicio de la clase container..-->
   
    <!--Fin de la clase container..-->




    <!-- fin de formulario -->


    <?php
    include("botonArriba.html");
    ?>
    <footer>
        <?php
        include("./Menu_footer/footer.html");

        ?>
    </footer>

    <!--termina contenendor de informacion-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="js/boton_up.js"></script>

</body>

</html>