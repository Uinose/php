<?php
session_start();
//unset($_SESSION['userData']); //elimina una sola variable de sesion
session_destroy();
header("Location: ../login.php");
?>