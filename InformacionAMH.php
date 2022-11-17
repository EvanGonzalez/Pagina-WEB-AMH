<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css" type="text/css">
    <link rel="stylesheet" href="./css/footerstyle.css" type="text/css">
    <link rel="stylesheet" href="./css/animacionWeb.css" type="text/css">
    <link rel="stylesheet" href="./css/migapan.css" type="text/css">
    <link rel="stylesheet" href="./css/galeriadetexto.css" type="text/css">
    <link rel="stylesheet" href="./css/leermas.css" type="text/css">
    <link rel="stylesheet" href="/css/menutest.css" type="text/css">
    <link rel="shortcut icon" href="img/2.ico" type="image/x-icon">
    <script src="js/scrollreveal.js"></script>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>AMH: Nuestra Institución</title>
</head>


<body id="fondoMain">
    <?php
    include("./Menu_footer/menumain.html");
    ?>

    <!--miga de pan-->
    <div class="contenedorMigaPan text-center">
        <div class="row">
            <div class="col-6">
                <?php
                include("Migas_Pan/MigaPan2.html")
                ?>
            </div>
        </div>
    </div>
    <br>
    <!--termina miga de pan-->


    <!--Inicia contenendor de informacion-->
    <div class="container text-center">
        <h3 class="letra3"> Información </h3>
        <?php
        include("Nuestra_institucion/columnaPag2.html");
        ?>
    </div>

    <br><br>



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
    <!--scrip para la animacion de imagenes pagina 2-->
    <script src="js/directores.js"></script>
    <script src="js/animacion.js"></script>
    <script src="js/boton_up.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/leermas.js"></script>
    <script src="js/cardanimation.js"></script>
    <script src="js/galeriadetexto.js"></script>
</body>

</html>