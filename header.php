<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1" />
    <title>DASHBOARD</title>
    
    <link rel="stylesheet" href="../../css/styles.css" />
    <link rel="stylesheet" href="../../css/tablas.css" />
        <link rel="stylesheet" href="../../css/iconos.css" />

    <link href="../../css/icons/css/all.css" rel="stylesheet"> <!--iconos --->
    <!--     LIBRERIAS EXTERNAS  --->
    <link href="js/jquery-3.5.1.js" rel="stylesheet">
    <link href="js/jquery.dataTables.min.js" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    
  </head>
  <body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><?php echo strtoupper($_SESSION['rol']); ?></h2>
        </div>
        <div class="sidebar-menu">
          
       <?php 
            $xd = $_SESSION['nivel']; 
            
            if($xd==1){
                include('perfil_admin.php');
            }else if ($xd==2){
                include('perfil_coordinador.php');
            }else if ($xd==3){
                include('perfil_secretaria.php');
            }else if ($xd==4){
                include('perfil_asesor.php');
            }else{
                echo "error";
            }
            
            $avatar = $_SESSION['avatar'];
            
       ?> 
 
           
        </div>
    </div>
    
    <div class="main-content">
        <header>
            <h3>   
              <label for="nav-toggle" class="pointer">
                  <span class="fas fa-bars"></span>
              </label>
              Administrador Escuela de conducci®Æn
            </h3>
<!--         <div class="search-wrapper">
                <span class="fas fa-search"></span>
                <input type="search" name="busqueda" id="busqueda" placeholder="Buscador Global">
            </div> 
-->
            <div class="user-wrapper">
                <img src="<?php echo $avatar; ?>" width="50px" height="50px" alt="">
                <div>
                    <h4><?php echo ucfirst($_SESSION['name']); ?></h4>
                    <small><a href="../../cerrar_sesion.php">Cerrar Sesi√≥n</a></small>
                </div>
            </div>
        </header>
        <main>
   