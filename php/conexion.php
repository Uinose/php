<?php 
    $servidor="localhost";
    $nombreBD="fashion";
    $usuarios="root";
    $password="";
    $conexion = new mysqli($servidor, $usuarios, $password, $nombreBD);
    if($conexion -> connect_error){
        die("No se pudo conectar a la base de datos");
    }
?>