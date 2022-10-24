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
    <h3 class="letra3 text-center" id=textazul> Departamento de Ciencias Sociales</h3>
    <!--termina miga de pan-->

    <!--Inicia contenendor de información-->
    <div class="container text-justify">
        <div class="row">
            <div class="col-md-6" id="justify">
                <p>Es un departamento que está comprometido con la investigación y enseñanza interdisciplinaria en los niveles de Premedia y media, formando a los discentes para que sean críticos y valoren el pasado y presente de los pueblos; resaltando las tradiciones y se conviertan en ente activo dentro de la sociedad.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h3>Actividades</h3>
                    <h2></h2>
                </center>
                <div id="CARRUSEL">
                    <div>
                        <div class="carta">
                            <div class="carta-body">
                                <div class="carta-content">
                                    <div class="carta-txt">
                                        <ul class="textopagina2">
                                            <li>Diputado juvenil</li>
                                            <li>Confección de murales con los diferentes hechos históricos.</li>
                                            <li>Conferencias.</li>
                                            <li>Trabajos de investigación.</li>
                                            <li>Debates.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <center>
                    <h3>Proyectos ambientalistas</h3>
                    <br>
                </center>
                <div id="CARRUSEL">
                    <div>
                        <div class="carta">
                            <div class="carta-body">
                                <div class="carta-content">
                                    <div class="carta-txt">
                                        <ul class="textopagina2">
                                            <li>Reciclaje.</li>
                                            <li>Limpieza de playas.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <center>
                    <h3>Participación ciudadanía con el Tribunal Electoral</h3>
                    <h2></h2>
                </center>
                <div id="CARRUSEL">
                    <div>
                        <div class="carta">
                            <div class="carta-body">
                                <div class="carta-content">
                                    <div class="carta-txt">
                                        <ul class="textopagina2">
                                            <li>Semana de la Cívica electoral .</li>
                                            <li>Semana de la democracia .</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                    <center>
                        <h3>Medalla Omar Gallardo</h3>
                        <h2></h2>
                    </center>
                    <div id="CARRUSEL">
                        <div>
                            <div class="carta">
                                <div class="carta-body">
                                    <div class="carta-content">
                                        <div class="carta-txt">
                                            <ul class="textopagina2">
                                                <li>Se distingue al estudiante con el mayor índice académico en las asignaturas de Ciencias Sociales.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
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