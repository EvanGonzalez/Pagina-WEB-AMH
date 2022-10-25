<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css" type="text/css">
    <link rel="stylesheet" href="./css/footerstyle.css" type="text/css">
    <link rel="stylesheet" href="./css/Efectos2.css" type="text/css">
    <link rel="stylesheet" href="./css/animacionWeb.css" type="text/css">
    <link rel="stylesheet" href="./css/MigaPan.css" type="text/css">
    <link rel="stylesheet" href="./css/header-style.css" type="text/css">
    <link rel="stylesheet" href="./css/infinitocarrusel.css" type="text/css">
    <link rel="stylesheet" href="/css/carruselPequeño.css" >
    <link rel="stylesheet" href="/css/galeriadetexto.css" >
    <link rel="shortcut icon" href="img/2.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="js/scrollreveal.js"></script>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>AMH: Oferta Académica</title>
</head>


<body id="fondoMain">
    <?php
    include("head.html")
    ?>

    <!--miga de pan-->
    <div class="contenedorMigaPan text-center">
        <div class="row">
            <div class="col-6">
                <?php
                include("Migas_Pan/MigaPan3.html")
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
                <h3 class="letra3"> Oferta Académica </h3>

                <?php
                include("Oferta_Academica/columIzquiPag3.html");
                ?>
            </div>

        </div>
    </div>

    <div class="container text-center ">
        <div class="row">
            <div class="col-6">
                <?php
                include("Paginacion.html");

                ?>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/index.js"></script>
    <!--scrip para la animacion de imagenes pagina 2-->
    <script src="js/main.js"></script>
    <!--scrip para la galeria de imagenes pagina 2-->
    <script src="js/directores.js"></script>
    <script src="js/animacion.js"></script>
    <script src="js/Minimenu.js"></script>
    <script src="js/Ofertas.js"></script>
    <script src="js/boton_up.js"></script>
    <script src="js/efectogaleria.js"></script>
    <script src="js/CarruselPequeño.js"></script>
</body>

</html>