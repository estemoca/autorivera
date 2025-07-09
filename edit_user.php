<?php 

session_start();

    $fecha_agenda = '';
    $hora = '';
    $autor = '';
    $nombres = '';
    $apellidos = '';
    $t_doc = '';
    $n_doc = '';
    $email = '';
    $celular = '';
    $categoria = '';
    $tipo = '';
    $escuela = '';
    $examen = '';
    $practica = '';
    $horas = '';
    $referido = '';
    $tarea = '';
    $valor = '';
    $abono = '';
    $honorarios = '';
    $comision = '';
    $estado = '';
    $dir = '';
    $url = '';
    $fecha_crea = '';
    $factura = '';
    $carga_tarea = '';
    $profesor = '';


if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM registros WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);

    $fecha_agenda = $row['fecha_agenda'];
    $hora = $row['hora'];
    $autor = $row['autor'];
    $nombres = $row['nombres'];
    $apellidos = $row['apellidos'];
    $t_doc = $row['t_doc'];
    $n_doc = $row['n_doc'];
    $email = $row['email'];
    $celular = $row['celular'];
    $categoria = $row['categoria'];
    $tipo = $row['tipo'];
    $escuela = $row['escuela'];
    $examen = $row['examen'];
    $practica = $row['practica'];
    $horas = $row['horas'];
    $referido = $row['referido'];
    $tarea = $row['tarea'];
    $valor = $row['valor'];
    $abono = $row['abono'];
    $honorarios = $row['honorarios'];
    $comision = $row['comision'];
    $estado = $row['estado'];
    $fecha_crea = $row['fecha_crea'];
    $factura = $row['factura'];
    $carga_tarea = $row['carga_tarea'];
    $profesor = $row['profesor'];
  }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $if = $_SESSION['id_level'];
    $fecha_agenda = $_POST['fecha_agenda'];
    $hora = $_POST['hora'];
    $autor = $_SESSION['user'];
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
    $tarea = $_POST['tarea'];
    $valor = $_POST['valor'];
    $abono = $_POST['abono'];
    $estado = $_POST['estado'];
    $fecha_crea = date('Y-m-d H:i:s');
    $factura = $_POST['factura'];
    $carga_tarea = $_POST['carga_tarea'];
    $profesor = $_POST['profesor'];
    
    if ($if == 3){
    $honorarios = $honorarios;
    $comision = $comision;
    $referido = $referido;
    } else {        
    $honorarios = $_POST['honorarios'];
    $comision = $_POST['comision'];
    $referido = $_POST['referido'];  
    }
    
    

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
          $dir="Cra 8 N 7 - 94 local2 Espinal";
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
      } else if ($escuela=="Convalidar") {
          $dir="Carrera 19 No 66-25 Barrio 7 agosto  - Bogota";
          $url="../css/img/logo_14.png";      
      } else {
          echo "Error escuela";
      }

  $query = "UPDATE registros set fecha_agenda = '$fecha_agenda', hora = '$hora', autor = '$autor', nombres = '$nombres', apellidos = '$apellidos', t_doc = '$t_doc', n_doc = '$n_doc', email = '$email', celular = '$celular', categoria = '$categoria', tipo = '$tipo', escuela = '$escuela', examen = '$examen', practica = '$practica', horas = '$horas', referido = '$referido', tarea = '$tarea', valor = '$valor', abono = '$abono', honorarios = '$honorarios', comision = '$comision', estado = '$estado', dir = '$dir', url = '$url', factura = '$factura', carga_tarea = '$carga_tarea', profesor = '$profesor', fecha_crea = '$fecha_crea' WHERE id=$id";
  mysqli_query($conn, $query);
  echo "<script> alert('Registro Actualizado....'); window.location= 'agendas.php'</script>";
} else {
    "<script> alert('Hubo un Error....'); window.location= 'agendas.php'</script>";
}

    if ($num == 3){
    $disabled = "disabled";
    $comi = "hidden";
    }


?>


<form action="edit_user.php?id=<?php echo $_GET['id']; ?>" method="POST"> 

<br>
<fieldset class="linea">
<legend><span class="fa fa-user"></span> Datos Usuario </legend>
<!-- PRIMERA LINEA FORM -->
<div class="form-one">
    <div class="">
      <label for="">Nombres:</label>
      <input type="text" style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();" name="nombres" value="<?php echo $nombres; ?>" required >
    </div>
    <div class="">
      <label for="">Apellidos:</label>
      <input type="text" style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();" name="apellidos" value="<?php echo $apellidos; ?>" required >
    </div>
    <div class="">
      <label for="">Tipo Documento</label>
      <select class="form-control" name="t_doc">
       <option value="<?php echo $t_doc; ?>" selected><?php echo $t_doc; ?></option>
        <option value="C.C.">C.C.</option>
        <option value="C.E.">C.E.</option>
        <option value="T.I.">T.I.</option>
        <option value="P.P.">P.P.</option>
      </select>
    </div>
    <div class="">
      <label for="">Numero Documento</label>
      <input type="text" name="n_doc" value="<?php echo $n_doc; ?>" pattern="[0-9]{1,10}" maxlength="10" required style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();">
    </div>
    <div class="">
      <label for="">E-mail:</label>
      <input type="email" name="email" value="<?php echo $email; ?>" required style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();">
    </div>
    <div class="">
      <label for="">Numero Celular:</label>
      <input type="text" name="celular" value="<?php echo $celular; ?>" maxlength="10" required style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();">
    </div>
    <div class="">
      <label for="">Último / Modificador:</label>
      <input type="text" style="color: #2801ff; text-transform:capitalize" name="$autor" value="<?php echo $autor; ?>" disabled>
    </div>
    <div class="">
      <label for="">Factura:</label>
      <input type="text" name="factura" value="<?php echo $factura; ?>" required>
    </div>
    <div class="">
      <input type="text" name="fecha_crea" value="<?php echo $fecha_crea; ?>" hidden>
    </div>
</div>
</fieldset>

<!-- SEGUNDA LINEA FORM -->
<fieldset>
<legend><span class="fa fa-school"></span> Datos Escuela </legend>
<div class="form-one">
    <div class="">
      <label for="">Escuela:</label>
      <select class="form-control" name="escuela">
       <option value="<?php echo $escuela; ?>" selected><?php echo $escuela; ?></option>
       <option value="Auto_Driving" >Auto_Driving</option>
        <option value="Agente_Guerrero">Agente_Guerrero</option>
        <option value="Conducoches">Conducoches</option>
        <option value="Formacion_Vial">Formacion_Vial</option>
        <option value="Suzuka">Suzuka</option>
        <option value="Conduciendo_facil">Conduciendo Facil</option>        
        <option value="Carfusa">Carfusa</option>
        <option value="Academia_adam">Academia_Adam</option>
        <option value="Portales_conduccion">Portales_Conduccion</option>        
        <option value="Mclaren">Mclaren</option>
        <option value="Autobello">Autobello</option>
        <option value="Myroj">Myroj</option>
        <option value="Medicoches">Medicoches</option>
        <option value="Convalidar">Convalidar</option>
      </select>
    </div>
    <div class="">
      <label for="">Categoria</label>
      <select class="form-control" name="categoria">
       <option value="<?php echo $categoria; ?>" selected><?php echo $categoria; ?></option>
        <option value="A2">A2</option>
        <option value="B1">B1</option>
        <option value="C1">C1</option>
        <option value="C2">C2</option>
        <option value="C3">C3</option>
        <option value="A2-B1">A2-B1</option>
        <option value="A2-C1">A2-C1</option>
        <option value="A2-C2">A2-C2</option>
        <option value="A2-C3">A2-C3</option>
      </select>
    </div>
    <div class="">
      <label for="">Tipo Tramite:</label>
      <select class="form-control" name="tipo">
       <option value="<?php echo $tipo; ?>" selected><?php echo $tipo; ?></option>
        <option value="Expedición">Expedición</option>
        <option value="Recategoria">Recategoria</option>
        <option value="Refrendación">Refrendación</option>
      </select>
    </div>
    <div <?php echo $comi ?>>
      <label for="">Honorarios:</label>
      <input type="text" name="honorarios" value="<?php echo $honorarios; ?>" required pattern="[0-9]{1,7}" maxlength="7" style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();">
    </div>
    <div class="">
      <label for="">Practica:</label>
      <select class="form-control" name="practica">
       <option value="<?php echo $practica; ?>" selected><?php echo $practica; ?></option>
        <option value="Sin_Practica">Sin_Practica</option>
        <option value="Practica_Escuela">Practica_Escuela</option>
        <option value="Practica_Externa">Practica_Externa</option>
      </select>
    </div>
    <div <?php echo $comi ?>>
      <label for="">Profesor:</label>
      <select class="form-control" name="profesor">
       <option value="<?php echo $profesor; ?>" selected><?php echo $profesor; ?></option>
        <option value="N/A">No Aplica</option>
        <option value="Pendiente">Pendiente</option>
        <option value="Raul_Debe">Raul_Debe</option>
        <option value="Raul_Pago">Raul_Pago</option>
        <option value="Ximena_Debe">Ximena_Debe</option>
        <option value="Ximena_Pago">Ximena_Pago</option>
      </select>
    </div>
    <div class="">
      <label for="">Horas:</label>
      <select class="form-control" name="horas">
       <option value="<?php echo $horas; ?>" selected><?php echo $horas; ?></option>
        <option value="NO">NO</option>
        <option value="5-Horas">5-Horas</option>
        <option value="10-Horas">10-Horas</option>
        <option value="Full-Moto">Full-Moto</option>
        <option value="Full-Carro">Full-Carro</option>
        <option value="Full_Moto_Carro">Full_Moto_Carro</option>
        <option value="10-Carro_Full_Moto">10-Carro_Full_Moto</option>
      </select>
    </div> 
    <div class="">
      <label for="">Examen:</label>
      <select class="form-control" name="examen">
       <option value="<?php echo $examen; ?>" selected><?php echo $examen; ?></option>
        <option value="Con_Medico">Con Examen</option>
        <option value="Sin_Medico">Sin Examen</option>
      </select>
    </div>
    <div class="">
      <label for="">Tarea:</label>
      <select class="form-control" name="tarea">
       <option value="<?php echo $tarea; ?>" selected><?php echo $tarea; ?></option>
        <option value="NO">NO</option>
        <option value="SI">SI</option>
      </select>
    </div>
    <div class="">
      <label for="">Carga-Tarea:</label>
      <select class="form-control" name="carga_tarea" required>
       <option value="<?php echo $carga_tarea; ?>" selected><?php echo $carga_tarea; ?></option>
        <option value="Pendiente">Pendiente</option>
        <option value="Enviado_Debe">Enviado_Debe</option>
        <option value="Enviado_Pago">Enviado_Pago</option>
        <option value="Finalizado_Debe">Finalizado_Debe</option>
        <option value="Finalizado_Pago">Finalizado_Pago</option>
        <option value="N/A">No Aplica</option>
      </select>
    </div>
    <div class="">
      <label for="">Referido:</label>
      <input type="text" name="referido" value="<?php echo $referido;?>" required <?php echo $disabled ?> style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();"> 
    </div>
    <div <?php echo $comi ?>>
      <label for="">Comisión:</label>
      <input type="text" name="comision" value="<?php echo $comision;?>" required pattern="[0-9]{1,7}" maxlength="7" style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();">
    </div>
    <div class="">
      <label for="">Valor:</label>
      <input type="text" name="valor" value="<?php echo $valor;?>" required pattern="[0-9]{1,7}" maxlength="7" style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();">
    </div>
    <div class="">
      <label for="">Abono:</label>
      <input type="text" name="abono" value="<?php echo $abono;?>" required pattern="[0-9]{1,7}" maxlength="7" style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();">
    </div>
    <div class="">
      <label for="">Fecha Agenda:</label>
    <input type="date" name="fecha_agenda" value="<?php echo $fecha_agenda; ?>">
    </div>
    <div class="">
      <label for="">Hora Agenda:</label>
    <input type="time" name="hora" min="05:00" max="18:30" step="1" value="<?php echo $hora; ?>">
    </div>
    <div class="">
      <label for="">Estado:</label>
      <select class="form-control" name="estado">
       <option value="<?php echo $estado; ?>" selected><?php echo $estado; ?></option>
        <option value="Agendado">Agendado</option>
        <option value="Certificado">Certificado</option>
        <option value="Matriculado">Matriculado</option>
        <option value="Pendiente">Pendiente</option>
        <option value="Pagado">Pagado</option>
        <option value="Desistió">Desistió</option>        
      </select>
    </div>
    <div>
        <button type="submit" name="update" class="form-boton">Actualizar Registro</button>
    </div>

    
 </div>

</form>



  
  




