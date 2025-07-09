<table class="table">
        <thead class="thead-dark">
          <tr>
            <th>Fecha Agenda</th>
            <th>Hora</th>
            <th>Escuela</th>
            <th>Categoria</th>
            <th>Usuario</th>
            <th>Documento</th>
            <th>Celular</th>
            <th>Asesor</th>
            <th>Remision</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $varsesion = $_SESSION['user'];
             
          $query = "SELECT DATE_FORMAT(fecha_agenda, '%d-%m-%y') AS fecha, hora, escuela, categoria, nombres, apellidos, n_doc, celular, referido, fecha_crea, id FROM registros WHERE referido='$varsesion'";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['fecha']; ?></td>
            <td><?php echo $row['hora']; ?></td>
            <td><?php echo $row['escuela']; ?></td>
            <td><?php echo $row['categoria']; ?></td>         
            <td><?php echo $row['nombres']; ?> <?php echo $row['apellidos']; ?></td>
            <td><?php echo $row['n_doc']; ?></td>
            <td><?php echo $row['celular']; ?></td>
            <td><?php echo $row['referido']; ?></td>
            <td>
              <a href="../../mpdf/index.php?id=<?php echo $row['id']?>" target="_blank">
               <span class="fas fa-print print"></span>
                <?php if($num <= 2){ ?>
              </a>
              <a href="?id=<?php echo $row['id'] ?>" onclick="return Confirmation()">
               <span class="fas fa-trash-alt trash"></span>
                <?php } ?>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>

      </table>
      



 


      
    