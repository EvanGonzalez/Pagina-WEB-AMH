<!-- RUTA CORREGIDA -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css" type="text/css">
    <link rel="stylesheet" href="./css/footerstyle.css" type="text/css">
    <link rel="stylesheet" href="./css/MigaPan.css" type="text/css">
    <link rel="stylesheet" href="/css/menutest.css" type="text/css">
    <link rel="stylesheet" href="./css/Efectos2.css" type="text/css">

    <link rel="stylesheet" href="./Oferta_Academica/PremediaEfect.css" type="text/css">
    <link rel="shortcut icon" href="img/2.ico" type="image/x-icon">
    <script src="js/scrollreveal.js"></script>
    
    <title>AMH: Premedia</title>
</head>
<body id="fondoMain">
    <?php
     include("./Menu_Footer/menumain.html");
    ?>

    <!--miga de pan-->
    <div class="contenedorMigaPan text-center">
        <div class="row">
            <div class="col-md-12">
                <?php
                include("Migas_Pan/migapan20.html")
                ?>
            </div>
        </div>
    </div>
    <br>

    <!--termina miga de pan-->


    <!--Inicia contenendor de informacion-->
    <div class="container text-center">

        <div class="row">
            <div class="col-md-12 contenidoderecho">
                <h3 class="letra3"> Oferta Académica  </h3>
                <br>
                <hr>
                <?php
                    include ("./Oferta_Academica/OfertaAcademicaPremedia.html");
                ?>
                
            </div>

        </div>
    </div>

    <br><br>
    <?php
        include("botonArriba.html");
    ?>
    <footer>
        <?php
        include("./Menu_Footer/footer.html");
        ?>
    </footer>
    <!--termina contenendor de informacion-->
    <script src="js/index.js"></script>
    <script src="js/boton_up.js"></script>
    
</body>
</html>