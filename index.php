<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css" type="text/css">
    <link rel="stylesheet" href="./css/footerstyle.css" type="text/css">
    <script src="js/scrollreveal.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Pagina Web</title>
</head>

6
<body id="fondoMain">
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

    <?php
                include("footer.html");

                ?>

    <!--termina contenendor de informacion-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    <script src="js/index.js"></script>
    <!--scrip para la animacion de imagenes pagina 2-->
    <script src="js/main.js"></script>
    <!--scrip para la galeria de imagenes pagina 2-->


</body>

</html>