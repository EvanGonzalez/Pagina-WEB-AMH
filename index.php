<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css" type="text/css">
    <script src="js/scrollreveal.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Pagina Web</title>
</head>


<body id="fondo">
    <div class="row1">
        <?php
        include("Carrusel.html")
        ?>
    </div>

    <!--miga de pan-->
    <div class="container text-center">
        <div class="row">
            <div class="col-6">
                <?php
                include("MigaPan1pag.html")
                ?>
            </div>
        </div>
    </div>
    <br>
    <h2 class="letra2"> Colegio Ángel María Herrera Penonomé </h2>
    <!--termina miga de pan-->


    <!--Inicia contenendor de informacion-->
    <div class="container text-center">

        <div class="row">
            <div class="col-8">
                <h3 class="letra3"> Himno del plantel </h3>

                <?php
                include("colderechaPag1.html");
                echo '<h2> Galeria de Fotos </h2>';
                include("GaleriaImg2.html");
                ?>
            </div>
            <div class="col-4">
                <aside id="asistyle">
                    <h2 class="letra2">Noticias</h2>

                    <?php
                    include("colizquierP1.html");

                    ?>
                </aside>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-6">
                <?php
                include("Paginacion.html");

                ?>
            </div>
        </div>
    </div>



    <!--termina contenendor de informacion-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script src="js/index.js"></script>
    <!--scrip para la animacion de imagenes pagina 2-->
    <script src="js/main.js"></script>
    <!--scrip para la galeria de imagenes pagina 2-->


</body>

</html>