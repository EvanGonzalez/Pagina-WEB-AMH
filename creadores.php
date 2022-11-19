<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css" type="text/css">
    <link rel="stylesheet" href="./css/footerstyle.css" type="text/css">
    <link rel="stylesheet" href="/css/menutest.css" type="text/css">
    <link rel="stylesheet" href="./css/migapan.css" type="text/css">
    <link rel="shortcut icon" href="img/2.ico" type="image/x-icon">
    <script src="js/scrollreveal.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Creadores y Colaboradores</title>
</head>

<body id="fondoMain">
    <?php
    include("./menu_footer/menumain.html");
    ?>
    <!--miga de pan-->
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6">
                <?php

                include("migas_pan/migapan8.html")
                ?>
            </div>
        </div>
    </div>
    <br>
    <h2 class="letra2">Créditos</h2>
    <!--termina miga de pan-->

    <!--Inicia contenendor de información-->
    <div class="container text-justify">
        <div class="row text-center">
            <div class="col-md-12">
                <div class="card my-4" style="background-color: #121b4f;color:white;">
                    <h5 class="card-header" style="background-color:#0079be;"><b>Equipo Desarrollador</b></h5>
                    <div class="card-body">
                        <!--foto de los desarrolladores-->
                        <center><img src="img/IMG_5982.JPG" alt="" width="100%"></center>
                        <br>
                        <p id="justify">
                            La Universidad Tecnológica de Panamá, Centro Regional de Coclé y los estudiantes
                            de tercer año de la carrera de Licenciatura en Desarrollo de Software - 2022,
                            agradece el apoyo de los colaboradores de la Escuela Secundaria Ángel María Herrera,
                            en el desarrollo del portal web dinámico https://nombreweb.com/.
                            Este sitio web, es el proyecto final de la asignatura de Desarrollo de Software VII,
                            a cargo de la docente Ing. María Yahaira Tejedor M. de Fernández.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center">
            <h3>Asesora del proyecto:</h3>
            <p>Ing. María Yahaira Tejedor M. de Fernández</p>
            <div class="col-md-4 ">
                <div class="card my-4" style="background-color: #121b4f;color:white;">
                    <h5 class="card-header" style="background-color:#0079be;"><b>Interfaces</b></h5>
                    <div class="card-body">
                        Evan González<br>
                        Emir Robinson<br>
                        Alvis Sánchez<br>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="card my-4" style="background-color: #121b4f;color:white;">
                    <h5 class="card-header" style="background-color:#0079be;"><b>Formularios</b></h5>
                    <div class="card-body">
                        Stella Ibarra<br>
                        Angela Carrión<br>
                        Elyam López<br>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="card my-4" style="background-color: #121b4f;color:white;">
                    <h5 class="card-header" style="background-color:#0079be;"><b>Base de datos</b></h5>
                    <div class="card-body">
                        Martin Fuentes<br>
                        Luis García<br>
                        Oscar Rodríguez<br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-12">
                <div class="card my-4" style="background-color: #121b4f;color:white;">
                    <h5 class="card-header" style="background-color:#0079be;"><b>Colaboradores del Ángel María Herrera</b></h5>
                    <div class="card-body">
                        <!--foto de los colaboradores-->
                        <center><img src="img/IMG_5971.JPG" alt="" width="100%"></center>
                        <br>
                        De izq. a derecha profesores: Jorge Marín, María Cedeño, María Elena Mendieta, Dayra Martínez, Érica Arias, Marisol Magallón y licenciada Gladys Montero.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("botonArriba.html");
    ?>
    <footer>
        <?php
        include("./menu_footer/footer.html");
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