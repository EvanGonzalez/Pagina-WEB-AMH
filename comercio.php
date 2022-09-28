<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css" type="text/css">
    <link rel="stylesheet" href="./css/footerstyle.css" type="text/css">
    <link rel="stylesheet" href="./css/MigaPan.css" type="text/css">
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
                include("Migas_Pan/MigaPan7.html")
                ?>
            </div>
        </div>
    </div>
    <br>
    <h3 class="letra3 text-center" id="textazul"> Departamento de Comercio</h3>
    
    <!--termina miga de pan-->

    <!--Inicia contenendor de información-->
    <div class="container ">

        <div class="row">
        <p><center><img src="img/imagen4.jpg" id="imgDepart"/></center><br></p>
            <div class="col-12 matematica " style="text-align: justify;">
                <p>En 1895, en la Escuela Secundaria Ángel María Herrera, se crea el bachillerato de comercio que brinda la oportunidad a jóvenes estudiantes de nuestra comunidad, de lograr una preparación profesional que le permite grandes salidas en el mercado de trabajo.</p>
                <p>Este bachillerato, creado a través de luchas y dificultades, cuenta en la actualidad laboratorio de software contable, salón de mecanografía, laboratorios de informática y salón de práctica profesional.</p>
                <p>Nuestra primera promoción fue en 1987 y posteriormente se   más, todas ellas con especialización en contabilidad. y así los egresados podrán convertirse en profesionales claves dentro de una organización pública o privada.  </p>
                <p>Durante todo el año escolar el departamento de comercio realiza diversas actividades, tales como:</p>
                <h3>Conmemoración de la semana de la secretaria:</h3>
                <ul>
                    <li>Alocución a la secretaría.</li>
                    <li>Confección de murales alusivos a la fecha.</li>
                    <li>Entrega de ramos de flores.</li>
                </ul>
                <h3>La semana del comercio se realiza en el mes de agosto y se realizan las siguientes actividades:</h3>
                <ul>
                    <li>Presentación de murales.</li>
                    <li>Exposición de equipo utilizado en laboratorio.</li>
                    <li>Concurso interno de mecanografía, estenografía y manejo de máquina.</li>
                    <li>Promoción de bachiller en comercio y contabilidad a los estudiantes de Premedia.</li>
                </ul>
                <p><b><i>“La semana de comercio se culmina con una convivencia personal administrativo, docente y educado del plantel”</i></b></p>
                <h3>Práctica de los estudiantes graduandos:</h3> 
                <p>Todos los años los distinguidos realizan una práctica profesional, premio obtenido del estudio y dedicación. Para que el estudiante pueda hacer sus labores en una empresa privada o pública, debe obtener un promedio no menos de 4.0 en las asignaturas básicas: Español Comercial, Práctica de Contabilidad. Los demás estudiantes realizan esta actividad dentro de la escuela. </p>
                <p>Nuestro centro educativo, a través del departamento de Comercio, ha recibido elogios por la eficiente labor de los estudiantes en las empresas e instituciones de la comunidad. </p>
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