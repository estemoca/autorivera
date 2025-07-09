<?php include("includes/conexion.php"); 

    $user = '';
    $name = '';
    $password = '';
    $mail = '';
    $avatar = '';
    $id_level = '';



if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM usuarios WHERE id=$id";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    
    $user = $row['user'];
    $name = $row['name'];
    $password = $row['password'];
    $mail = $row['mail'];
    $avatar = $row['avatar'];
    $id_level = $row['id_level'];

  }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $user = $_POST['user'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $mail = $_POST['mail'];
    $avatar = $_POST['avatar'];
    $id_level = $_POST['level'];




  $query = "UPDATE usuarios set user = '$user', name = '$name', password = '$password', mail = '$mail', avatar = '$avatar', id_level = '$id_level' WHERE id=$id";
  mysqli_query($conn, $query);
  echo "<script> alert('Registro Actualizado....'); window.location= 'layouts/level1/new_worked.php'</script>";
}

?>
    
    <form action="edit_worked.php?id=<?php echo $_GET['id']; ?>" method="POST">
    <fieldset class="linea">
        <legend><span class="fa fa-user"></span> Data Worked </legend>
        <div class="form-two">
        <div>
            <label>Nombre_Usuario:</label>
            <input type="text" name="user" value="<?php echo $user; ?>" required ></p>           
        </div>
        <div>
            <label for="">Nombre_Completo:</label>
            <input type="text" name="name" value="<?php echo $name; ?>" required ></p>
        </div>
        <div>
            <label for="">Contraseña:</label>
            <input type="password" name="password" value="<?php echo $password; ?>" required ></p>
        </div>
        <div>
            <label for="">E-mail:</label>
            <input type="text" name="mail" value="<?php echo $mail; ?>" required ></p>
        </div>
        <div>
        <label for="">Avatar:</label>
             <select class="form-control" name="avatar" >
                <option value="../../css/img/avatars/man-one.svg">Hombre 1</option>
                <option value="../../css/img/avatars/man-two.svg">Hombre 2</option>
                <option value="../../css/img/avatars/man-three.svg">Hombre 3</option>
                <option value="../../css/img/avatars/wom-one.svg">Mujer 1</option>
                <option value="../../css/img/avatars/wom-two.svg">Mujer 2</option>
                <option value="../../css/img/avatars/won-three.svg">Mujer 3</option>
              </select>
        </div>
        <div>
        <label for="">Nivel:</label>
             <select class="form-control" name="level">
               <option value="<?php echo $id_level; ?>" selected><?php echo $id_level; ?></option>
                <option value="4">Asesor</option>
                <option value="3">Secretaria</option>
              </select>
        </div>   
        <p class=""><input type="submit" class="form-boton" value="Crear Usuario" name="update"></p>
        </fieldset>
    </form>
    