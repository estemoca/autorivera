<?php
session_start();
error_reporting (0);
$varsesion = $_SESSION['user'];
if($varsesion == null || $varsesion = ''){
    echo " <script> alert('USTED NO TIENE PERMISOS'); window.location= '../../index.php'</script>";
    die();
}

$num = $_SESSION['id_level'];
 
if(!isset($_SESSION['user'])){
    header('Location: index.php');
    exit;
} else if ($num == 2){
?>    
<?php include('../../includes/conexion.php'); ?>
<?php include('../../includes/header.php'); ?>

<!-- Aqui el contenido de las paginas independientes --->
<div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Clientes Totales</span>
                    </div>
                    <div>
                        <span class="fas fa-address-card"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>5</h1>
                        <span>Formacion Vial</span>
                    </div>
                    <div>
                        <span class="fas fa-hotel"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>5</h1>
                        <span>Agente Guerrero</span>
                    </div>
                    <div>
                        <span class="fas fa-hotel"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>5</h1>
                        <span>Suzuka</span>
                    </div>
                    <div>
                        <span class="fas fa-hotel"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>5</h1>
                        <span>Conduciendo facil</span> 
                    </div>
                    <div>
                        <span class="fas fa-motorcycle"></span>
                    </div>
                </div>
</div>
<!-- tablas con busquedas  --->
<div class="cards-table">
<div class="card-table">
<?php include('../../test_tabla.php'); ?>
</div>

<!-- fin contenido de las paginas independientes --->

<?php include('../../includes/footer.php'); ?>
    
<?php    
} else {
    header("Location: ../../redirected.php");
}
?>
