<?php
  header('Content-type:application/xls');
  header('Content-Disposition: attachment; filename=informe.xls');
  require_once('../../includes/conexion.php');

  $query="SELECT * FROM registros";
  $resultado = mysqli_query($conn, $query);
  
?>

<table border="1">
    <tr>
        <th>Fecha Agenda</th>
        <th>Hora Agenda</th>
        <th>Usuario</th>
        <th>Tipo_Doc</th>
        <th>N_Documento</th>
        <th>E-mail</th>
        <th>Celular</th>
        <th>Escuela</th>
        <th>Estado</th>
        <th>Factura</th>
        <th>Categoria</th>
        <th>Valor</th>
        <th>referido</th>
        <th>Comision</th>
        <th>Tarea</th>
    </tr>
    
    <?php while ($row=mysqli_fetch_assoc($resultado)) { ?>
    <tr>
        <td><?php echo $row['fecha_agenda']; ?></td>
        <td><?php echo $row['hora']; ?></td>
        <td><?php echo $row['nombres']; ?> <?php echo $row['apellidos']; ?></td>
        <td><?php echo $row['t_doc']; ?></td>
        <td><?php echo $row['n_doc']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['celular']; ?></td>
        <td><?php echo $row['escuela']; ?></td>
        <td><?php echo $row['estado']; ?></td>
        <td><?php echo $row['factura']; ?></td>         
        <td><?php echo $row['categoria']; ?></td>
        <td><?php echo $row['valor']; ?></td>
        <td><?php echo $row['referido']; ?></td>
        <td><?php echo $row['comision']; ?></td>
        <td><?php echo $row['tarea']; ?></td>
    </tr>        
    <?php      
        }
        ?>
    </tr>
</table>