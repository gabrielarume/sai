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
	<div class="login">
		<article class="fondo">
			<img src="img/logo.png" alt="User">
			<h3>Inicio de Sesión</h3>
			<form class="" action="#" method="post">
				<input type="text" class="inp" name="user" placeholder="Usuario">
				<br>
				<input type="password" class="inp" name="pass" placeholder="Contraseña">
				<br>
				<input type="submit" class="btn" name="Ingresar" value="Enviar">
                              

			</form>
		</article>

              <div class="g-recaptcha" data-sitekey="6LcMa5kUAAAAAN0Fx9lSDT71BIW7OVqUHfCKZsxd" data-theme="dark"></div>

	</div>
	</div>

  
</body>
</html>
 
