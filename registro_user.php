<form action="../../save_registro.php" method="POST"> 

<br>
<fieldset class="linea">
<legend><span class="fa fa-user"></span> Datos Usuario </legend>
<!-- PRIMERA LINEA FORM -->
<div class="form-one">
    <div class="">
      <label for="">Nombres:</label>
      <input type="text" name="nombres" class="form-control" required style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();">
    </div>
    <div class="">
      <label for="">Apellidos:</label>
      <input type="text" name="apellidos" class="form-control" required style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();">
    </div>
    <div class="">
      <label for="">Tipo Documento</label>
      <select class="form-control" name="t_doc">
        <option value="C.C." selected>C.C.</option>
        <option value="C.E.">C.E.</option>
        <option value="T.I.">T.I.</option>
        <option value="P.P.">P.P.</option>
      </select>
    </div>
    <div class="">
      <label for="">Numero Documento</label>
      <input type="text" name="n_doc" class="form-control" maxlength="10" pattern="[0-9]{1,10}" required style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();">
    </div>
    <div class="">
      <label for="">E-mail:</label>
      <input type="email" name="email" class="form-control" required style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();">
    </div>
    <div class="">
      <label for="">Numero Celular:</label>
      <input type="text" name="celular" class="form-control" maxlength="10" required style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();">
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
        <option value="Auto_Driving" selected>Auto_Driving</option>
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
        <option value="A2" selected>A2</option>
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
        <option value="Expedición" selected>Expedición</option>
        <option value="Recategoria">Recategoria</option>
        <option value="Refrendación">Refrendación</option>
      </select>
    </div>
    <div class="">
      <label for="">Honorarios:</label>
      <input type="text" name="honorarios" class="form-control" pattern="[0-9]{1,7}" maxlength="7" required style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();">
    </div>
    <div class="">
      <label for="">Practica:</label>
      <select class="form-control" name="practica">
        <option value="Sin_Practica" selected>Sin_Practica</option>
        <option value="Practica_Escuela">Practica_Escuela</option>
        <option value="Practica_Externa">Practica_Externa</option>
      </select>
    </div>
    <div class="">
      <label for="">Horas:</label>
      <select class="form-control" name="horas">
        <option value="NO"selected>NO</option>
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
        <option value="Con_Medico"selected>Con Examen</option>
        <option value="Sin_Medico">Sin Examen</option>
      </select>
    </div>
    <div class="">
      <label for=""> Tarea:</label>
      <select class="form-control" name="tarea">
        <option value="NO"selected>NO</option>
        <option value="SI">SI</option>
      </select>
    </div>
    <div class="2">
      <label for="">Referido:</label>
      <input type="text" name="referido" pattern="[a-z+A-Z]{1,15}" class="form-control" required placeholder="NO NUMEROS" style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();">
    </div>
        <div class="">
      <label for="">comision:</label>
      <input type="text" name="comision" class="form-control" pattern="[0-9]{1,7}" maxlength="7" required style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();">
    </div>
    <div class="">
      <label for="">Valor:</label>
      <input type="text" name="valor" class="form-control" pattern="[0-9]{1,7}" maxlength="7" required style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();">
    </div>
    <div class="">
      <label for="">Abono:</label>
      <input type="text" name="abono" class="form-control" pattern="[0-9]{1,7}" maxlength="7" required style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();">
    </div>
    <div class="">
      <label for="">Fecha Agenda:</label>
    <input type="date" name="fecha_agenda">
    </div>
    <div class="">
      <label for="">Hora Agenda:</label>
    <input type="time" name="hora" value="06:00" min="06:00" max="18:30" step="1">
    </div>
        <div class="">
      <label for="">Estado:</label>
      <select class="form-control" name="estado">
        <option value="Agendado"selected>Agendado</option>
        <option value="Certificado">Certificado</option>
        <option value="Matriculado">Matriculado</option>
        <option value="Pendiente">Pendiente</option>
        <option value="Pagado">Pagado</option>       
      </select>
    </div>
    <div>
        <button type="submit" name="save_task" class="form-boton">Guardar Registro</button>
    </div>

    
 </div>

</form>



  
  




