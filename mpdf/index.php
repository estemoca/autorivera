<?php
include_once('fpdf/fpdf.php');
require_once __DIR__ . '/vendor/autoload.php';



    

  //$conn = new mysqli("localhost", "escuela3_root", "Teresa0808.", "escuela3_escuela");
  $conn = new mysqli("localhost", "root", "","autorivera");
  
  $conn->query("SET NAMES 'utf8'");
  $id = $_GET['id'];
  $query = "SELECT DATE_FORMAT(fecha_agenda, '%d-%m-%y') AS fecha, tarea , hora, categoria, tipo, examen, practica, horas, valor, nombres, apellidos, n_doc, t_doc, email, celular, dir, url, id FROM registros WHERE id = $id";
  $result = mysqli_query($conn, $query);
  while($row = mysqli_fetch_assoc($result)) {   
          if($row['tarea']=='SI'){
        $tarea='     <tr>
        <td>Tarea:</td>
        <td>Con tarea</td>
    </tr>';
    }else{
        $tarea='';
    }   

$html = '
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap core CSS -->
  
  <title>PDF</title>
  <!-- Bootstrap core CSS -->
  <link href="../css/pdf.css" rel="stylesheet">


</head>


<body>

<div class="contenedor">

<!---------- HEADER ------------>
<div class="uno"> 

    <div class="uno_1">
        <div class="logo">
        <img src="'.$row['url'].'" >    
        </div>
        <br>
        <h4 class="h61"> '.$row['dir'].' </h4>
    </div>
    
<div class="uno_2">    
    <table class="referido">
        <tr>
            <td>Referido:</td>
            <td>Marcela Rivera</td>
        </tr>
        <tr>
            <td>Fecha Agenda:</td>
            <td>'.$row['fecha'].'</td>
        </tr>
            <tr>
            <td>Hora Agenda:</td>
            <td>'.$row['hora'].'</td>
        </tr>
    </table>
    </div>
</div> <!---------- DIV CIERRE CUERPO 1 ------------>

<!---------- CUERPO 1------------>
<div class="cuerpo-1">
                                    <!--            float 1         -->
                                    

<div class="flotante">
<div class="dato_user"><H3>Remisión Usuario</H3></div>
<table>
     <tr>
         <td>Nombre:</td>
         <td>'.$row['nombres'].' '.$row['apellidos'].'</td>
     </tr>
     <tr>
         <td>T. Doc:</td>
         <td>'.$row['t_doc'].'</td>
     </tr>
     <tr>
         <td>N. Doc:</td>
         <td>'.$row['n_doc'].'</td>
     </tr>
     <tr>
         <td>Correo:</td>
         <td>'.$row['email'].'</td>
     </tr>
     <tr>
         <td>Celular:</td>
         <td>'.$row['celular'].'</td>
     </tr>
</table>
</div>


                                    <!--            float 2         -->



<div class="flotante-2">
<div class="dato_user"><H3>Matrícula</H3></div>
<table>
     <tr>
         <td>Tipo:</td>
         <td>'.$row['tipo'].'</td>
     </tr>
     <tr>
         <td>Categoría:</td>
         <td>'.$row['categoria'].'</td>
     </tr>
     <tr>
         <td>Práctica:</td>
         <td>'.$row['practica'].'</td>
     </tr>
     <tr>
         <td>Horas:</td>
         <td>'.$row['horas'].'</td>
     </tr>
     <tr>
         <td>Examen:</td>
         <td>'.$row['examen'].'</td>
     </tr>
     '.$tarea.'
</table>
</div>
</div> <!---------- DIV CIERRE CUERPO 1 ------------>

<!---------- CUERPO 2 ------------>

<div class="cuerpo-2">
<div class="valor"><H3>Cotización</H3></div>
<div class="text2">
Valor declarado a pagar por los items relacionados en el campo matrícula
</div>
<div class="precio">($ '.$row['valor'].')</div>
</div>

<!--        nota         -->

<div class="cuerpo-2">
<div class="valor"><H3>Nota</H3></div>
<div class="text">
Señor@ usuario tenga en cuenta no entregar dinero a personas de la calle y evite hablar con ellos, recuerde que su agendamiento es importante y puede evitar demoras en su proceso de matrícula. También le recordamos que (ESTO NO ES UNA FACTURA) y que los valores del sim no se incluyen.
</div>
</div>


<div class="cuerpo-3">
<div class="text3">
Dirección: ('.$row['dir'].') / Cel. 3118410662
';
    }
$html.='
</div>
</div>

</div> <!---------- DIV CIERRE CONTENEDOR ------------>



    
    
</body>
</html>';




$nombre_salida = ('Ingresa.pdf');
$mpdf = new \Mpdf\Mpdf();
$css = file_get_contents('css/pdf.css');
$mpdf->WriteHTML($css,1);
$mpdf->WriteHTML($html);
$mpdf->Output();



?>























