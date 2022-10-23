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
    <h3 class="letra3 text-center" id=textazul> Departamento de Inglés</h3>
    <!--termina miga de pan-->

    <!--Inicia contenendor de información-->
    <div class="container text-justify">
        <div class="row">
            
        </div>
        <div class="row">
        
        </div>
        <div class="row" >
            <div class="col-md-4">
                <div class="card my-4">
                    <h3 class="card-header">Ganadora del Concurso Nacional de Oratoria 2016</h3>
                    <div class="card-body">
                        <div class="thumbnail">
                            <!-- Incio del thumbnail -->
                            <center><img src="img/oratoria.jpg" alt="" id="thumb"></center>
                            <div class="caption">
                                <!-- Incio de la clase caption -->
                                <p>
                                    <center>
                                        <a href="https://www.tvn-2.com/nacionales/damaris-santamaria-concurso-nacional-oratoria-video_1_1577603.html" class="btn btn-primary" target="blank">Ver más</a>
                                    </center>
                                </p>
                            </div><!-- fin de la clase caption  -->
                        </div>
                        <!--termina thumbnail-->
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