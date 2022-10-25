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
    <div class="contenedorMigaPan text-center">
        <div class="row">
            <div class="col-6">
                <?php
                include("Migas_Pan/MigaPan10.html")
                ?>
            </div>
        </div>
    </div>
    <br>
    <!--termina miga de pan-->


    <!--Inicia contenendor de informacion-->
    <div class="container text-center">
        <h3 class="letra3"> Subdirectora administrativa </h3>

        <div class="title h1 text-center">Dra. Inelda Tuñon.</div>
        <center><img src="img/subdirectora admistrativa Dra. Inelda Tuñón.jpg" class="imgtecnicodocente" /></center><br>
        <ul class="textopaginatecnico">

        </ul>



        <ul class="textopaginatecnico2">
            <div class="title h1 text-center">Formación Académica</div>
            Inicio sus estudios primarios en la escuela Manuel José Hurtado, secundaria primer ciclo en el instituto América y su segundo ciclo en el colegio privado Instituto Istmeño, donde se le otorgó diploma de Bachiller en Ciencias.

            Curso estudio universitario, en la Universidad de Panamá y obtuvo el título de Licenciada en Administración de empresa, después obtuvo el título de licenciada en Economía.

            Además, en la Universidad Santa María La Antigua, obtuvo el título de Maestría en ingeniería Económica, sus estudios se ampliaron cuando también participo en el curso de Economía para funcionarios públicos por la universidad de IOWA en la ciudad de Panamá, un crédito de postgrado. Logro postgrado y diplomados en administración de empresa.
            <br><br>
            <li>Doctora en Ciencias Económicas y Empresariales. </li>
        </ul>

        <div class="title h1 text-center">Experiencia Laboral</div>
        <ul class="textopaginatecnico">


        </ul>

    </div>
    <br><br>





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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

    <script src="js/index.js"></script>
    <!--scrip para la animacion de imagenes pagina 2-->
    <script src="js/main.js"></script>
    <!--scrip para la galeria de imagenes pagina 2-->
    <script src="js/directores.js"></script>
    <script src="js/animacion.js"></script>
    <script src="js/boton_up.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/leermas.js"></script>
    <script src="js/cardanimation.js"></script>
    <script src="js/galeriadetexto.js"></script>
</body>

</html>