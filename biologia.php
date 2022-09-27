<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css" type="text/css">
    <link rel="stylesheet" href="./css/footerstyle.css" type="text/css">
    <link rel="stylesheet" href="./css/header-style.css" type="text/css">
    <script src="js/scrollreveal.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Pagina Web</title>
</head>

<body id="fondoMain">
    <?php
    include("head.html")
    ?>

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
    <h3 class="letra3 text-center" style="color: #0079be;"> Departamento de Biología </h3>
    <!--termina miga de pan-->
    <center><img src="img/biologia.jpg"/></center>
    <!--Inicia contenendor de información-->
    <div class="container">

        <div class="row">
            <div class="col-12 matematica" style="text-align: justify;">
                <p> Hasta el año 2018 estuvieron unidos al departamento de Física y Química y durante ese tiempo apoyaban las actividades de INVAN que dirige el profesor Walter Ortega y las actividades eran en conjunto.</p>
                <p>Hicieron actividades durante más de 10 años de reciclaje de papel y de latas de aluminio como una manera de hacer conciencia y docencia sobre la tala indiscriminada y la contaminación por desechos no biológicos.</p>
                <p>Durante algún tiempo fuimos parte del proyecto Globe en la que los estudiantes tomaban datos atmosféricos para medir como se estaba desarrollando el Cambio Climático en ese momento (2008-2009). </p>
                <p>Fuimos centro de intercambio de becarios y voluntarios del programa JICA de la Embajada de Japón, voluntarios éstos que han compartido sus experiencias de éxito con docentes y estudiantes de nuestro centro educativo.</p>
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

    <footer>
        <?php
        include("footer.html");

        ?>
    </footer>



    <!--termina contenendor de informacion-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    <script src="js/index.js"></script>
    <!--scrip para la animacion de imagenes pagina 2-->
    <script src="js/main.js"></script>
    <!--scrip para la galeria de imagenes pagina 2-->


</body>

</html>