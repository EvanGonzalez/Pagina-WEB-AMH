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
    <h3 class="letra3 text-center" id=textazul> Departamento de Español</h3>
    <!--termina miga de pan-->

    <!--Inicia contenendor de información-->
    <div class="container text-justify">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                
                    <div class="card my-4" id="cardEspañol">
                    <div class="card-body" id="">
                        <p>
                            “Lengua castellana mía,<br>  
                            habla de plata y cristal,<br>
                            ardiente como una llama, <br> 
                            viva cual un manantial”<br>
                        </p>
                        <p style="text-align:right;">Juana de Ibarbourou</p>
                     
                    </div>
                </div>
                
                
            </div>
        </div
        <div class="row">
            <div class="col-12 matematica" style="text-align: justify;">
                
                <p>El Departamento de español de la Escuela Secundaria Ángel María Herrera, consciente de que nuestra lengua debe ser utilizada con propiedad, fluidez y pulcritud, aplica variadas técnicas metodológicas para que el estudiante considere el idioma como un ente vivo. </p>
                <p>Es responsabilidad del Departamento planificar y ejecutar actividades que permitan descubrir valores y destrezas entre nuestros alumnos y también, enriquecer su nivel cultural.</p>
                <p>Año tras año, al aproximarse el 23 de abril, Día universal del idioma español, organizamos exposiciones de murales, afiches, alocuciones, separadores de libros, con la finalidad de rendirle homenaje al padre de las letras españolas, Don Miguel de Cervantes Saavedra y, por consiguiente, para ensalzar a la segunda lengua más hablada del mundo.</p>
                <p>Otra fecha de mucho valor en el Departamento es la Semana del libro (del 22 al 29 de septiembre). En este periodo, la meta es promover la lectura tanto en docentes como en educandos, para ello se realizan diversos concursos tales como: lecturas comprensivas, vocabularios, cuentacuentos, corales poéticas, cortometrajes, murales.</p>
                <p>Es digno reconocer el apoyo que otrora recibimos de instituciones como la Lotería Nacional de Beneficencia, Universidad Popular de Coclé (actualmente, Universidad del Trabajo), Universidad de Azuero y la Biblioteca Pública Fernando Guardia. De igual forma, valoramos el respaldo incondicional de padres de familia y docentes de los distintos departamentos.</p>
                <p>Es importante destacar que, en el año 1988, la escuela Secundaria Ángel María Herrera fue sede del Concurso provincial de oratoria patrocinado por la Caja de Ahorros. En esta ocasión, nuestra representante María Cristina Cheng S, fue la ganadora de la provincia de Coclé y del primer lugar a nivel nacional; hecho histórico ya que era la primera vez, en esta noble región coclesana, que se alcanzaba tal distinción en este renombrado concurso.</p>
                <p>En el año 2016, Dámaris Santamaría Reyes, se alzó con el galardón de la duodécima versión del Concurso Nacional de Oratoria cuyo tema fue: “Agua para todos, el reto frente al cambio climático”.</p>
                <p>Loor a los estudiantes que han pasado por esta memorable institución y han legado un laurel en la formación cultural de nuestro hermoso pueblo.</p>
                
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