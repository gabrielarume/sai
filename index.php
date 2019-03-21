<?php 
 
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Inicio de Sesión</title>
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
	</div>
	</div>

    <script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>
  <script>
  grecaptcha.ready(function() {
      grecaptcha.execute('reCAPTCHA_site_key', {action: 'homepage'}).then(function(token) {
         ...
      });
  });
  </script>
</body>
</html>
 
