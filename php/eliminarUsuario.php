<?php
    include "./conexion.php";
    $id= $_POST['id'];
    $conexion->query("delete from usuarios wher id=$id")or die($conexion->error);
    header("Location: ./../usuarios.php");
?>