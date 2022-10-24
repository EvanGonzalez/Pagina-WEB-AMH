<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css" type="text/css">
    <link rel="stylesheet" href="./css/footerstyle.css" type="text/css">
    <link rel="stylesheet" href="./css/animacionWeb.css" type="text/css">
    <link rel="stylesheet" href="./css/MigaPan.css" type="text/css">
    <link rel="stylesheet" href="./css/galeriadetexto.css" type="text/css">
    <link rel="stylesheet" href="./css/leermas.css" type="text/css">
    <link rel="stylesheet" href="./css/header-style.css" type="text/css">
    <link rel="stylesheet" href="./scss/cardsanimation.scss">
    <script src="js/scrollreveal.js"></script>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
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
                include("Migas_Pan/MigaPan4.html")
                ?>
            </div>
        </div>
    </div>
    <br>
    <h3 class="letra3 text-center" id=textazul> Departamento de Afines</h3>
    <!--termina miga de pan-->

    <!--Inicia contenendor de información-->
    <div class="container text-justify">
        <div class="row">
            <div class="col-md-12">
                <h3>DESCRIPCION</h3>
                <p>El departamento de afines está formado por trece (13) profesores de diversas asignaturas, cada uno dedicado a su especialidad. La mayoría trabaja con estudiantes de Premedia y el resto con estudiante de media. Tiene un coordinador para todo el departamento que se elige cada dos años.</p>
                <p>Este departamento se distingue por su diversidad de talentos, competencias, destrezas. Esta inmerso en toda las actividades curriculares y extracurriculares del plantel. Potencia en los estudiantes el desarrollo de las habilidades duras y blandas.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <table border="1">
                <tr>
                    <td>asignatura</td>
                    <td>descripcion</td>
                </tr>
                <tr>
                    <td>asignatura</td>
                    <td>descripcion</td>
                </tr>
                <tr>
                    <td>asignatura</td>
                    <td>descripcion</td>
                </tr>
                <tr>
                    <td>asignatura</td>
                    <td>descripcion</td>
                </tr>
                <tr>
                    <td>asignatura</td>
                    <td>descripcion</td>
                </tr>
                <tr>
                    <td>asignatura</td>
                    <td>descripcion</td>
                </tr>
                <tr>
                    <td>asignatura</td>
                    <td>descripcion</td>
                </tr>
            </table>
                <h3>FAMILIA Y DESARROLLO COMUNITARIO </h3>
                <p>La materia de <b>familia</b> y desarrollo comunitario, desde su inicio, ha tratado de cumplir los planes y programas establecidos por el Ministerio de Educación.</p>
                <p>Proporcionamos al estudiante los conocimientos requeridos en las diferentes áreas que la asignatura exige.</p>
                <p>Durante el desarrollo de nuestras clases despertamos el interés de los estudiantes a través de la realización de proyectos manuales que luego se exponen en la feria del departamento, que se realiza en el mes de octubre, dónde se conmemora la semana de la alimentación.</p>
            </div>
        </div>
    </div>
    <?php
    include("botonArriba.html");
    ?>
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
    <script src="js/boton_up.js"></script>

</body>

</html>