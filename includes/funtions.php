<?php include('conexion.php'); 


function sesion_pemisos ()
    
{
    if($pass == $user['password']){
        $_SESSION['id']     = $user['id'];
        $_SESSION['user']   = $user['user'];
        $_SESSION['name']   = $user['name'];
        $_SESSION['nivel']  = $user['nivel'];
        $_SESSION['rol']    = $user['rol'];
        header("Location: home.php");
    } else {
     echo " <script> alert('Ups... datos Errados intente nuevamente'); window.location= 'index.php'</script>";
    }
}


function contar ($n1, $n2){
     
    // $conn = new mysqli("localhost", "escuela3_root", "Teresa0808.","escuela3_escuela");
    $conn = new mysqli("localhost", "root", "","autorivera");
    $sql = "SELECT COUNT(*) total FROM registros WHERE $n1 = '$n2'";
    $result = mysqli_query($conn, $sql);
    $fila = mysqli_fetch_assoc($result);
    $cuenta = $fila['total'];
    return $cuenta;
    
}

function informe ($n1, $n2, $n3, $n4){
     
    $conn = new mysqli("localhost", "escuela3_root", "Teresa0808.","escuela3_escuela");
    // $conn = new mysqli("localhost", "root", "","conduccion");
    $sql = "SELECT COUNT(*) total FROM registros WHERE $n1 = '$n2' AND $n3 = '$n4'";
    $result = mysqli_query($conn, $sql);
    $fila = mysqli_fetch_assoc($result);
    $cuenta = $fila['total'];
    return $cuenta;
    
}



?>


