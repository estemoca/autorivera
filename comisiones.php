<?php session_start(); 

$if = $_SESSION['id_level'];


?>

<table id="example" class="table">
        <thead class="thead-dark">
          <tr>
            <th style="display:none;">Agenda</th>
            <th>Agenda</th>
            <th>Escuela</th>
            <th>Estado</th>
            <th>Asesor</th>
            <th>Comisión</th>
            <th>Documento</th>
            <th>Celular</th>
            <th>Panel_de_Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php
          // $query = "SELECT fecha_agenda, hora, escuela, estado, nombres, apellidos, n_doc, celular, fecha_crea, id FROM registros ORDER BY fecha_agenda ASC";
          $query = "SELECT DATE_FORMAT(fecha_agenda, '%Y-%m-%d') AS fecha, estado, escuela, referido, comision, apellidos, n_doc, celular, id FROM registros ORDER BY fecha_agenda ASC";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { 
            $arrayFechas=explode("-",$row['fecha']);
            ?>
          <tr>
            <td style="display:none;"><?php echo $row['fecha']; ?></td>
            <td><?php echo $arrayFechas[2],"-",$arrayFechas[1]."-".$arrayFechas[0]; ?></td>
            <td><?php echo $row['escuela']; ?></td>
            <td><?php echo $row['estado']; ?></td>
            <td><?php echo $row['referido']; ?></td>         
            <td><?php if ($if < 3) { echo $row['comision']; } else { echo "Sin Permisos"; } ?></td>
            <td><?php echo $row['n_doc']; ?></td>
            <td><?php echo $row['celular']; ?></td>
            <td>
              <a href="edit_user.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <span class="fas fa-marker marker"></span>
              </a>
              <a href="mpdf/index.php?id=<?php echo $row['id']?>" target="_blank" class="btn btn-success">
               <span class="fas fa-print print"></span>
                <?php if($num <= 2){ ?>
              </a>
              <a href="eliminar_users.php?id=<?php echo $row['id']?>" class="btn btn-danger">
               <span class="fas fa-trash-alt trash"></span>
                <?php } ?>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
