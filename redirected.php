<?php
session_start();

$num = $_SESSION['id_level'];
 
if(!isset($_SESSION['user'])){
    header('Location: index.php');
    exit;
} else if ($num == 1){
    header("Location: layouts/level1/index.php");
} else if ($num == 2) {
    header("Location: layouts/level2/index.php");
} else if ($num == 3) {
    header("Location: layouts/level3/index.php");
} else if ($num == 4) {
    header("Location: layouts/level4/index.php");
} else {
   echo " <script> alert('USTED NO TIENE PERMISOS'); window.location= 'index.php'</script>";
}
?>


