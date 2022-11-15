<?php
    function conectar(){
    $host = "localhost:3306";
    $usuario = "root";
    $contraseña = "";
    $db = "db_amh";
    
    $conexion = mysqli_connect($host, $usuario, $contraseña, $db);

   return $conexion;
   
}
/* if($conexion){
        echo "Conectado correctamente";
    }else{
        echo "Sin conexion";
    } */


    
?>