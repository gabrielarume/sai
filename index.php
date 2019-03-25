<?php 
 
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Inicio de Sesión</title>
         <script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<link rel="stylesheet" href="stilo.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montez|Pathway+Gothic+One" rel="stylesheet">
</head>
<body>
	<div class="contenedor">
    <div class="login-box">
	    <img src="img/logo.png" class="avatar" alt="User">
			<h3>Inicio de Sesión</h3>
			<form action="valida.php" method="post">
				<input type="text"  name="user" placeholder="Usuario" required>
				 <br>
				<input type="password" name="pass" placeholder="Contraseña" required>
				<br>
				<input type="submit" name="Ingresar" value="Enviar">
                </form>
	
              <div class="g-recaptcha" data-sitekey="6LcMa5kUAAAAAN0Fx9lSDT71BIW7OVqUHfCKZsxd" data-theme="dark"></div>

	</div>
   </div>

  
</body>
</html>
 
