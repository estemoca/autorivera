<?php

include('includes/conexion.php');

    $user = $_POST['user'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $mail = $_POST['mail'];
    $level = $_POST['level'];


    $comprobar = $user;
    
    $query = "SELECT user FROM usuarios WHERE user = '$comprobar'";
    $result_tasks = mysqli_query($conn, $query); 
    $row = mysqli_fetch_assoc($result_tasks);


if($comprobar == $row['user']){
    echo "<script> alert('El usuario ya existe'); window.location= 'layouts/level1/new_worked.php'</script>";
} else {
    

if (isset($_POST['save_task'])) {
    
  $query = "INSERT INTO usuarios (user, name, password, mail, id_level) VALUES ('$user', '$name', '$password', '$mail', '$level')";
  // var_dump($query);exit();
  $result = mysqli_query($conn, $query);


  if(!$result) {
      
    die("<script> alert('Error al insertar datos'); window.location= 'layouts/level1/new_worked.php'</script>");
    
  }

  echo "<script> alert('Usuario Agregado'); window.location= 'layouts/level1/new_worked.php'</script>";

}
}

?>