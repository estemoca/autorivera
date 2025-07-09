<?php

session_start();


include("includes/conexion.php");

/* Traigo las variables del formulario */

$user = $_POST['user'];
$pass = $_POST['password'];



$query = mysqli_query($conn,  "SELECT * FROM usuarios INNER JOIN roles ON roles.nivel = usuarios.id_level WHERE user = '$user'");

$permisos = mysqli_fetch_array($query);


                        
    if($pass == $permisos ['password']){
        $_SESSION['id']         = $permisos['id'];
        $_SESSION['user']       = $permisos['user'];
        $_SESSION['name']       = $permisos['name'];
        $_SESSION['id_level']   = $permisos['id_level'];
        $_SESSION['nivel']      = $permisos['nivel'];
        $_SESSION['rol']        = $permisos['rol'];
        $_SESSION['avatar']     = $permisos['avatar'];
        header("Location: redirected.php");
    } else {
      echo " <script> alert('Ups... datos Errados intente nuevamente'); window.location= 'index.php'</script>";
    }

?>