
<table id="example" class="table" data-filtering="true">
        <thead class="thead-dark">
          <tr>
            <th style="display:none;">Agenda</th>
            <th >Agenda</th>
            <th>Hora</th>
            <th>Escuela</th>
            <th>Estado</th>
            <th>Usuario</th>
            <th>Documento</th>
            <th>Celular</th>
            <th>Panel_de_Acciones</th>
          </tr>
        </thead>
        <tbody>

          <?php
          header("Content-Type: text/html;charset=utf-8");   
          // $query = "SELECT CONCAT(YEAR(fecha_agenda),'-',MONTH(fecha_agenda),'-',DAY(fecha_agenda)) AS fecha, hora, escuela, estado, nombres, apellidos, n_doc, celular, fecha_crea, id FROM registros ORDER BY fecha_agenda ASC";
          $query = "SELECT DATE_FORMAT(fecha_agenda, '%Y-%m-%d') AS fecha , hora, escuela, estado, nombres, apellidos, n_doc, celular, fecha_crea, id FROM registros ORDER BY fecha_agenda ASC";
          // $query = "SELECT fecha_agenda as fecha, hora, escuela, estado, nombres, apellidos, n_doc, celular, fecha_crea, id FROM registros ORDER BY fecha_agenda ASC";
          // var_dump($query);exit();
          $result_tasks = mysqli_query($conn, $query);
          while($row = mysqli_fetch_assoc($result_tasks)) {
            $arrayFechas=explode("-",$row['fecha']);
             ?>
          
          <tr>
            <td style="display:none;"><?php echo $row['fecha']; ?></td>
            <td><?php echo $arrayFechas[2],"-",$arrayFechas[1]."-".$arrayFechas[0]; ?></td>
            <td><?php echo $row['hora']; ?></td>
            <td><?php echo $row['escuela']; ?></td>
            <td><?php echo $row['estado']; ?></td>         
            <td><?php echo $row['nombres']; ?> <?php echo $row['apellidos']; ?></td>
            <td><?php echo $row['n_doc']; ?></td>
            <td><?php echo $row['celular']; ?></td>
            <td>
              <a href="edit_user.php?id=<?php echo $row['id']?>">
                <span class="fas fa-marker marker"></span>
              </a>
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
        <script type="text/javascript">
            function Confirmation() {
 
                if (confirm('Esta seguro de eliminar el registro?')==true) {
                    
                 <?php                    
                    if(isset($_GET['id'])) {
                      $id = $_GET['id'];
                      $query = "DELETE FROM registros WHERE id = $id";
                      $result = mysqli_query($conn, $query);
                      if(!$result) {
                        die("Query Failed.");
                      }
                    } 
                   ?>
                    location.reload();
                    
                    alert('El registro ha sido eliminado correctamente!!!');
                    
                    return true;
                }else{
                    //alert('Cancelo la eliminacion');
                    return false;
                }
            }
        </script>
      </table>
      



 


      
    