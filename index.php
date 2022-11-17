<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css" type="text/css">
    <link rel="stylesheet" href="./css/footerstyle.css" type="text/css">
    <link rel="stylesheet" href="./css/migapan.css" type="text/css">
    <link rel="stylesheet" href="/css/menutest.css" type="text/css">
    <link rel="stylesheet" href="/css/carruselp.css">
    <link rel="shortcut icon" href="img/2.ico" type="image/x-icon">
    <script src="js/scrollreveal.js"></script>
    
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <title>Escuela Secundaria Ángel María Herrera</title>
</head>

<body id="fondoMain">
    <?php
        include("./menu_footer/menumain.html");
    ?>
    <div class="">
        <?php
            include("./carruselmain/carruselprincipal.html");
        ?>
    </div>

    <!--miga de pan-->
    <div class="container text-center">
            <?php
            include("Migas_Pan/MigaPan1.html")
            ?>
    </div>

    <br>
    <h2 class="letra2"> Escuela Secundaria Ángel María Herrera, Penonomé </h2>
    <!--termina miga de pan-->

    <!--Inicia contenendor de información-->
    <div class="container text-center">

        <div class="row">
            <div class="col-md-8 contenidoderecho">
                <h3 class="letra3"> Himno del plantel </h3>
                <?php
                include("inicio/colderechapag1.html");?>
                <audio controls>
                    <source src="audio/audio_himno.mp3" type="audio/mp3">
                </audio>   
                <br>
                <hr>           
                <?php 
                    echo '<h2 id="textazul"> Galería de Fotos </h2>
                    <br>';
                    include("inicio/GaleriaImg2.html");
                ?>

            </div>
            <div class="col-md-4 contenidoizquierdo">
                <aside id="asistyle">
                    <h2 class="letra2">Noticias</h2>

                    <?php
                    include("inicio/colizquierP1.html");

                    ?>
                </aside>
            </div>
        </div>
    </div>


    <?php
    include("botonArriba.html");
    ?>

    <footer>
        <?php
        include("./Menu_footer/footer.html");
        ?>
    </footer>



    <!--termina contenendor de informacion-->
    
    <script src="js/index.js"></script>
    <!--scrip para la galeria de imagenes pagina 2-->
    <script src="js/boton_up.js"></script>
    <!-- javascrip para carrusel -->
    <script src="/carruselmain/carrusel.js"></script>
    
    
    
</body>

</html>