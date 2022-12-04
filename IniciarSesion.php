<!--Index de formulario login en etiqueta html-->
<html>
<!--En el head de este archivo hacemos referencia a las hojas de esilo, tipo de letra, iconos-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Titulo del archivo-->
    <title>Inicio de sesión</title>

    <!--Esta hoja de estilo permite el fondo de la escuela en el formulario-->
    <link rel="stylesheet" href="/Iniciosesion/sesion.css">	
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="img/2.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2&display=swap" rel="stylesheet">   
</head>
<!--Termina head-->

<!--Inicia cuerpo del archivo-->
<body>
    <!--Inicia etiqueda de php-->
    <?php
    //inicia una SESSION
    session_start();
    //obtiene la variable para el nombre de usuario enviado
    unset($_SESSION["username"]);
    //incluye el archivo que contiene el formulario
    include('./Iniciosesion/formulario.html');
    ?>
    <!--Cierre de etiqueta php-->
</body>
<!--Termina cuerpo del archivo-->
</html>
<!--Cierre de archivo index de formulario login en etiqueta html-->