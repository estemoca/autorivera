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
} else if ($num == 3){
?>    
<?php include('../../includes/conexion.php'); ?>
<?php include('../../includes/header.php'); ?>
<?php include('../../includes/funtions.php'); ?>

<?php                       
  $agendados = contar ('estado', 'agendado');
  $matriculado = contar ('estado', 'matriculado');
  $pendientes = contar ('estado', 'pendiente');
  $pagado = contar ('estado', 'pagado');
                      
  $age_age = informe ('escuela', 'agente_guerrero', 'estado', 'agendado');
  $age_matri = informe ('escuela', 'agente_guerrero', 'estado', 'matriculado');
  $age_pag = informe ('escuela', 'agente_guerrero', 'estado', 'pagado');
  $age_tar = informe ('escuela', 'agente_guerrero', 'tarea', 'si');
                      
  $con_age = informe ('escuela', 'conducoches', 'estado', 'agendado');
  $con_matri = informe ('escuela', 'conducoches', 'estado', 'matriculado');
  $con_pag = informe ('escuela', 'conducoches', 'estado', 'pagado');
  $con_tar = informe ('escuela', 'conducoches', 'tarea', 'si');

  $for_age = informe ('escuela', 'formacion_vial', 'estado', 'agendado');
  $for_matri = informe ('escuela', 'formacion_vial', 'estado', 'matriculado');
  $for_pag = informe ('escuela', 'formacion_vial', 'estado', 'pagado');
  $for_tar = informe ('escuela', 'formacion_vial', 'tarea', 'si');

  $suz_age = informe ('escuela', 'suzuka', 'estado', 'agendado');
  $suz_matri = informe ('escuela', 'suzuka', 'estado', 'matriculado');
  $suz_pag = informe ('escuela', 'suzuka', 'estado', 'pagado');
  $suz_tar = informe ('escuela', 'suzuka', 'tarea', 'si');
  
  $cea_age = informe ('escuela', 'Conduciendo_facil', 'estado', 'agendado');
  $cea_matri = informe ('escuela', 'Conduciendo_facil', 'estado', 'matriculado');
  $cea_pag = informe ('escuela', 'Conduciendo_facil', 'estado', 'pagado');
  $cea_tar = informe ('escuela', 'Conduciendo_facil', 'tarea', 'si');
  
  $caf_age = informe ('escuela', 'Carfusa', 'estado', 'agendado');
  $caf_matri = informe ('escuela', 'Carfusa', 'estado', 'matriculado');
  $caf_pag = informe ('escuela', 'Carfusa', 'estado', 'pagado');
  $caf_tar = informe ('escuela', 'Carfusa', 'tarea', 'si');

  $aad_age = informe ('escuela', 'Academia_adam', 'estado', 'agendado');
  $aad_matri = informe ('escuela', 'Academia_adam', 'estado', 'matriculado');
  $aad_pag = informe ('escuela', 'Academia_adam', 'estado', 'pagado');
  $aad_tar = informe ('escuela', 'Academia_adam', 'tarea', 'si');

  $poc_age = informe ('escuela', 'Portales_conduccion', 'estado', 'agendado');
  $poc_matri = informe ('escuela', 'Portales_conduccion', 'estado', 'matriculado');
  $poc_pag = informe ('escuela', 'Portales_conduccion', 'estado', 'pagado');
  $poc_tar = informe ('escuela', 'Portales_conduccion', 'tarea', 'si');

  $mal_age = informe ('escuela', 'Mclaren', 'estado', 'agendado');
  $mal_matri = informe ('escuela', 'Mclaren', 'estado', 'matriculado');
  $mal_pag = informe ('escuela', 'Mclaren', 'estado', 'pagado');
  $mal_tar = informe ('escuela', 'Mclaren', 'tarea', 'si');

  $atb_age = informe ('escuela', 'Autobello', 'estado', 'agendado');
  $atb_matri = informe ('escuela', 'Autobello', 'estado', 'matriculado');
  $atb_pag = informe ('escuela', 'Autobello', 'estado', 'pagado');
  $atb_tar = informe ('escuela', 'Autobello', 'tarea', 'si');

  $myr_age = informe ('escuela', 'Myroj', 'estado', 'agendado');
  $myr_matri = informe ('escuela', 'Myroj', 'estado', 'matriculado');
  $myr_pag = informe ('escuela', 'Myroj', 'estado', 'pagado');
  $myr_tar = informe ('escuela', 'Myroj', 'tarea', 'si');

  $mdc_age = informe ('escuela', 'Medicoches', 'estado', 'agendado');
  $mdc_matri = informe ('escuela', 'Medicoches', 'estado', 'matriculado');
  $mdc_pag = informe ('escuela', 'Medicoches', 'estado', 'pagado');
  $mdc_tar = informe ('escuela', 'Medicoches', 'tarea', 'si');

  $cov_age = informe ('escuela', 'Convalidar', 'estado', 'agendado');
  $cov_matri = informe ('escuela', 'Convalidar', 'estado', 'matriculado');
  $cov_pag = informe ('escuela', 'Convalidar', 'estado', 'pagado');
  $cov_tar = informe ('escuela', 'Convalidar', 'tarea', 'si');
                      
?>




<!-- Aqui el contenido de las paginas independientes --->
<div class="cards">
                <div class="card-single">
                    <div>
                        <h1><?php echo $agendados ?></h1>
                        <span>Agendados</span>
                    </div>
                    <div>
                        <span class="fas fa-address-card"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1><?php echo $matriculado ?></h1>
                        <span>Matriculados</span>
                    </div>
                    <div>
                        <span class="fas fa-user-graduate"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1><?php echo $pendientes ?></h1>
                        <span>Pendientes</span>
                    </div>
                    <div>
                        <span class="fas fa-question"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1><?php echo $pagado ?></h1>
                        <span>Pagados</span>
                    </div>
                    <div>
                        <span class="fas fa-cash-register"></span>
                    </div>
                </div>
                </div>
                <div class="cards-two">
                <div class="card-single">
                    <div>
                        <h3>Agente Guerrero</h3>
                        <p>-----------------------------</p>                        
                        <ul>
                            <li>Agendados: <?php echo $age_age ?></li>
                            <li>Matriculados: <?php echo $age_matri ?></li>
                            <li>Pagados: <?php echo $age_pag ?></li>
                            <li>Tarea: <?php echo $age_tar ?></li>
                        </ul>
                    </div>
                    <div>
                        <span class="fas fa-car-crash"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h3>Conducoches</h3>
                        <p>-----------------------------</p>                        
                        <ul>
                            <li>Agendados: <?php echo $con_age ?></li>
                            <li>Matriculados: <?php echo $con_matri ?></li>
                            <li>Pagados: <?php echo $con_pag ?></li>
                            <li>Tarea: <?php echo $con_tar ?></li>
                        </ul>
                    </div>
                    <div>
                        <span class="fas fa-car"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h3>Formación Vial</h3>
                        <p>-----------------------------</p>                        
                        <ul>
                            <li>Agendados: <?php echo $for_age ?></li>
                            <li>Matriculados: <?php echo $for_matri ?></li>
                            <li>Pagados: <?php echo $for_pag ?></li>
                            <li>Tarea: <?php echo $for_tar ?></li>
                        </ul>
                    </div>
                    <div>
                        <span class="fas fa-road"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h3>Suzuka</h3>
                        <p>-----------------------------</p>                        
                        <ul>
                            <li>Agendados: <?php echo $suz_age ?></li>
                            <li>Matriculados: <?php echo $suz_matri ?></li>
                            <li>Pagados: <?php echo $suz_pag ?></li>
                            <li>Tarea: <?php echo $suz_tar ?></li>
                        </ul>
                    </div>
                    <div>
                        <span class="fas fa-motorcycle"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h3>Conduciendo Facil</h3>
                        <p>-----------------------------</p>                        
                        <ul>
                            <li>Agendados: <?php echo $cea_age ?></li>
                            <li>Matriculados: <?php echo $cea_matri ?></li>
                            <li>Pagados: <?php echo $cea_pag ?></li>
                            <li>Tarea: <?php echo $cea_tar ?></li>
                        </ul>
                    </div>
                    <div>
                        <span class="fas fa-motorcycle"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h3>Carfusa</h3>
                        <p>-----------------------------</p>                        
                        <ul>
                            <li>Agendados: <?php echo $caf_age ?></li>
                            <li>Matriculados: <?php echo $caf_matri ?></li>
                            <li>Pagados: <?php echo $caf_pag ?></li>
                            <li>Tarea: <?php echo $caf_tar ?></li>
                        </ul>
                    </div>
                    <div>
                        <span class="fas fa-motorcycle"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h3>Academia Adam</h3>
                        <p>-----------------------------</p>                        
                        <ul>
                            <li>Agendados: <?php echo $aad_age ?></li>
                            <li>Matriculados: <?php echo $aad_matri ?></li>
                            <li>Pagados: <?php echo $aad_pag ?></li>
                            <li>Tarea: <?php echo $aad_tar ?></li>
                        </ul>
                    </div>
                    <div>
                        <span class="fas fa-car"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h3>Portales Conducción</h3>
                        <p>-----------------------------</p>                        
                        <ul>
                            <li>Agendados: <?php echo $poc_age ?></li>
                            <li>Matriculados: <?php echo $poc_matri ?></li>
                            <li>Pagados: <?php echo $poc_pag ?></li>
                            <li>Tarea: <?php echo $poc_tar ?></li>
                        </ul>
                    </div>
                    <div>
                        <span class="fas fa-motorcycle"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h3>Mclaren</h3>
                        <p>-----------------------------</p>                        
                        <ul>
                            <li>Agendados: <?php echo $mal_age ?></li>
                            <li>Matriculados: <?php echo $mal_matri ?></li>
                            <li>Pagados: <?php echo $mal_pag ?></li>
                            <li>Tarea: <?php echo $mal_tar ?></li>
                        </ul>
                    </div>
                    <div>
                        <span class="fas fa-car"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h3>Autobello</h3>
                        <p>-----------------------------</p>                        
                        <ul>
                            <li>Agendados: <?php echo $atb_age ?></li>
                            <li>Matriculados: <?php echo $atb_matri ?></li>
                            <li>Pagados: <?php echo $atb_pag ?></li>
                            <li>Tarea: <?php echo $atb_tar ?></li>
                        </ul>
                    </div>
                    <div>
                        <span class="fas fa-motorcycle"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h3>Myroj</h3>
                        <p>-----------------------------</p>                        
                        <ul>
                        <li>Agendados: <?php echo $myr_age ?></li>
                            <li>Matriculados: <?php echo $myr_matri ?></li>
                            <li>Pagados: <?php echo $myr_pag ?></li>
                            <li>Tarea: <?php echo $myr_tar ?></li>
                        </ul>
                    </div>
                    <div>
                        <span class="fas fa-car"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h3>Medicoches</h3>
                        <p>-----------------------------</p>                        
                        <ul>
                            <li>Agendados: <?php echo $mdc_age ?></li>
                            <li>Matriculados: <?php echo $mdc_matri ?></li>
                            <li>Pagados: <?php echo $mdc_pag ?></li>
                            <li>Tarea: <?php echo $mdc_tar ?></li>
                        </ul>
                    </div>
                    <div>
                        <span class="fas fa-motorcycle"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h3>Convalidar</h3>
                        <p>-----------------------------</p>                        
                        <ul>
                            <li>Agendados: <?php echo $cov_age ?></li>
                            <li>Matriculados: <?php echo $cov_matri ?></li>
                            <li>Pagados: <?php echo $cov_pag ?></li>
                            <li>Tarea: <?php echo $cov_tar ?></li>
                        </ul>
                    </div>
                    <div>
                        <span class="fas fa-motorcycle"></span>
                    </div>
                </div>
</div>
<!-- tablas con busquedas  --->


<!-- fin contenido de las paginas independientes --->

<?php include('../../includes/footer.php'); ?>
    
<?php    
} else {
    header("Location: ../../redirected.php");
}
?>
