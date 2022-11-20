<?php
    function conectar(){
    $host = "localhost";
    $usuario = "escuojyx_admin_amh ";
    $contraseña = "FpghAMG_2k22 ";
    $db = "escuojyx_basedatos_amh";
    
    $conexion = mysqli_connect($host, $usuario, $contraseña, $db);

   return $conexion;
   
}
/* if($conexion){
        echo "Conectado correctamente";
    }else{
        echo "Sin conexion";
    } */


    
?>