<?php 
session_start();
if (isset($_SESSION['user'])){
    header("Location: redirected.php"); 
} else {
session_destroy();
?>  
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>:: Sistema Remisiones ::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/icons/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles2.css">
</head>
<body>
	<div class="container">
		<div class="img">
			<img src="css/img/car.svg">
		</div>
		<div class="login-content">
			<form action="login.php" method="post">
				<img src="css/img/avatars/wom-one.svg" width="100px" height="100px" class="imgini">
				
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usuario</h5>
           		   		<input type="text" class="input" name="user">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
            	<a href="#">Olvide Contraseña?</a>
            	<input type="submit" class="btn" value="iniciar Sesion" name="save_task">
            </form>
        </div>
        <h6>Escuela de conduccion</h6>
    </div>
    
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
<?php 

} 

?> 