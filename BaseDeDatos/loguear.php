<?php

    include 'conexion_db.php';

    session_start();

    $usuario = $_POST['txtusuario'];
    $contraseña = $_POST['txtpassword'];
    $con=conectar();
    $query = $con->prepare( "SELECT COUNT(*) As contar FROM iniciar_sesion Where usuario = ? and contrasena = ?;");
    $query->bind_param('ss', $usuario,$contraseña);
    $query->execute();
    $result=$query->get_result();
    $arr=$result->fetch_assoc();
    mysqli_close($con);
    if($arr['contar']>0){
        $_SESSION['username'] = $usuario;
        header("location: ../../Formulario1.php");
    }else{
        ?>
        <!DOCTYPE html>
		<html lang = "es">
		<head>	
				<meta charset = "utf-8">
				<title>  </title>
				<link href="../../css_/styles.css" rel="stylesheet" type="text/css" >		
		</head>

		<body>
			
		</body>

		</html>
        <center>
    	
    	<div class="errorlogin">
	    	<h1 class=""> Error de Autenticación, Usuario o Contraseña Incorrectas</h1>
	    	<a href="../../IniciarSesion.php">Regresar al Inicio de Sesión</a>
	    </div>
    </center>
        <?php
    }
?>