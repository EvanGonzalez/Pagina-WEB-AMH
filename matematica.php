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
    <h3 class="letra3"> Departamento de Comercio </h3>
    <!--termina miga de pan-->

    <!--Inicia contenendor de información-->
    <div class="container text-justify">

        <div class="row">
            <div class="col-12 matematica">
                <p> Escuela secundaria Ángel María Herrera siempre ha sido conmemorada como un centro un centro educativo de gran prestigio y porvenir. </p>

                <h3>Actividades realizadas actualmente</h3> 
                <ul>
                    <li>Confección de murales por trimestre, con el propósito de resaltar estudiantes con índice académico que oscile 4.7 y 5.0. De esta manera les estimula hacia un estudio científico y entusiasta. </li>
                    <li>Premian a los mejores estudiantes estrellas de matemáticas de 9° y 12° grado. En cada promoción durante los años 2019 y 2021. </li>
                </ul>
                <h3>Actividades realizadas antes de la pandemia </h3> 
                <ul>
                    <li>Competencias o cursos a nivel interno e intercolegial entre paralelos.</li> 
                    <li>Se creó un club denominado Unión de Matemáticos Angelinos (UMA) que participaban alumnos de alto índice académico, quienes servían de modelo en las clases y ayudaban a los compañeros con dificultades en matemáticas.</li>  
                </ul>
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