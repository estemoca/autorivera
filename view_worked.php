<table class="table">
        <thead class="thead-dark">
          <tr>
            <th>Usuario</th>
            <th>Nombre Usuario</th>
            <th>Contraseña</th>
            <th>Nivel</th>
            <th>Panel Acciones</th>
          </tr>
        </thead>
        <tbody>

        <?php
         
        $query = "SELECT * FROM usuarios";
        $result_tasks = mysqli_query($conn, $query); 
        $row = mysqli_fetch_assoc($result_tasks);  

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['user']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['password']; ?></td>         
            <td><?php echo $row['id_level']; ?></td>
            <td>
              <a href="../../edit_worked.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <span class="fas fa-marker marker"></span>
              </a>
              <a href="?id=<?php echo $row['id'] ?>" onclick="return Confirmation()">
                <span class="fas fa-trash-alt trash"></span>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
        <script type="text/javascript">
            function Confirmation() {
 
                if (confirm('Esta seguro de eliminar este usuario ?')==true) {
                    
                 <?php                    
                    if(isset($_GET['id'])) {
                      $id = $_GET['id'];
                      $query = "DELETE FROM usuarios WHERE id = $id";
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
