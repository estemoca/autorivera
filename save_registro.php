<?php

session_start();

include('includes/conexion.php');

$autor = $_SESSION['user'];

$escuela = $_POST['escuela'];

if ($escuela=="Auto_Driving") {
    $dir="CRA 8C # 185 A - 18";
    $url="../css/img/logo_1.png";
} else if ($escuela=="Agente_Guerrero") {
    $dir="CALLE 45 A sur # 54 A 55 piso 2";
    $url="../css/img/logo_2.png";
} else if ($escuela=="CEA") {
    $dir="Av Calle 145 No 91-19 Local 3-110";
    $url="../css/img/logo_2.png";
} else if ($escuela=="Conducoches") {
    $dir="DIAGONAL 47 sur # 53-17 Piso 2";
    $url="../css/img/logo_3.png";
} else if ($escuela=="Formacion_Vial") {
    $dir="TRANSVERSAL 126 B # 135-10";
    $url="../css/img/logo_4.png";
} else if ($escuela=="Suzuka") {
    $dir="CRA 69 B # 25-41 SUR PISO 2";
    $url="../css/img/logo_5.png";
} else if ($escuela=="Conduciendo_facil") {
    $dir="Carrera 69b 31-67 sur Barrio Carvajal";
    $url="../css/img/logo_6.png";

} else if ($escuela=="Carfusa") {
    $dir="Cra 5 N 9 - 41 Local104 fusagasuga";
    $url="../css/img/logo_7.png";
} else if ($escuela=="Academia_adam") {
    $dir="Calle 37A No 20-52 Br.El jordan V/cencio";
    $url="../css/img/logo_8.png";
} else if ($escuela=="Portales_conduccion") {
    $dir="Cra 8 N 7 - 04 local2 Espinal";
    $url="../css/img/logo_9.png";
} else if ($escuela=="Mclaren") {
    $dir="CALLE 28  No. 8 - 38  girardot";
    $url="../css/img/logo_10.png";
} else if ($escuela=="Autobello") {
    $dir="Carrera 47 52-11 segundo Piso bello - antioquia";
    $url="../css/img/logo_11.png";
} else if ($escuela=="Myroj") {
    $dir="Carrera 3 # 57-77 - Cali";
    $url="../css/img/logo_12.png";
} else if ($escuela=="Medicoches") {
    $dir="Carrera 69 B # 24 A 06 SUR - Bogota";
    $url="../css/img/logo_13.png";
} else {
    echo "Error escuela";
}

    $fecha_agenda = $_POST['fecha_agenda'];
    $hora = $_POST['hora'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $t_doc = $_POST['t_doc'];
    $n_doc = $_POST['n_doc'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $categoria = $_POST['categoria'];
    $tipo = $_POST['tipo'];
    $escuela = $_POST['escuela'];
    $examen = $_POST['examen'];
    $practica = $_POST['practica'];
    $horas = $_POST['horas'];
    $referido = $_POST['referido'];
    $tarea = $_POST['tarea'];
    $valor = $_POST['valor'];
    $abono = $_POST['abono'];
    $honorarios = $_POST['honorarios'];
    $comision = $_POST['comision'];
    $estado = $_POST['estado'];


    $comprobar = $n_doc;
    
    $query = "SELECT n_doc FROM registros WHERE n_doc = '$comprobar'";
    $result_tasks = mysqli_query($conn, $query); 
    $row = mysqli_fetch_assoc($result_tasks);
    
    
if($comprobar == $row['n_doc']){
    echo "<script> alert('El documento ya existe'); window.location= 'redirected.php'</script>";
} else {
    


if (isset($_POST['save_task'])) {
    $fecha_crea = date('Y-m-d H:i:s'); 
  $query = "INSERT INTO registros (fecha_agenda, hora, autor, nombres, apellidos, t_doc, n_doc, email, celular, categoria, tipo, escuela, examen, practica, horas, referido, tarea, valor, abono, honorarios, comision, estado, dir, url, fecha_crea) VALUES ('$fecha_agenda', '$hora', '$autor', '$nombres', '$apellidos', '$t_doc', '$n_doc', '$email', '$celular', '$categoria', '$tipo', '$escuela', '$examen', '$practica', '$horas', '$referido', '$tarea', '$valor', '$abono', '$honorarios', '$comision', '$estado', '$dir', '$url','$fecha_crea')";

  $result = mysqli_query($conn, $query);
    
  if(!$result) {
      
    die("<script> alert('Error al insertar datos'); window.location= 'redirected.php'</script>");
    
  }

  echo "<script> alert('Registro Exitoso'); window.location= 'redirected.php'</script>";

}
}

?>