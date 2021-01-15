<?php 
include "./conexion.php";
    $nombre= $_POST['nombre'];
    $ap= $_POST['ap'];
    $email= $_POST['email'];
    $pass1= $_POST['pass1'];
    $pass2= $_POST['pass2'];
    if($pass1 != $pass2){
        echo "El password no coincide";
        header("Location: ../usuarios.php?error=los campos no coinciden");
    }else{
        $pass1=sha1($pass1);
        $conexion->query("insert into usuarios (nombre, apellidos, email, password, img_perfil)
        values('$nombre', '$ap', '$email', '$pass1', 'defaul.jpg')") or die($conexion ->error);
        header("Location: ../usuarios.php");
    }
?>