<?php

	#$ldap_dn = "cn=read-only-admin, dc=example, dc=com";
	#$ldap_password ="password";
	#$ldap_con=ldap_connect("ldap.forumsys.com");
	#ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION,3);
	#if (ldap_bind($ldap_con, $ldap_dn, $ldap_password)) {
	#	echo "Bind successful";
	#}else {
	#	echo"Invalid user/pass or other errors";
	#}
 
?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
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
				<input type="text"  name="user" placeholder="Usuario" required pattern=[a-z]{5,15} title="No se permiten números y caracteres especiales">
				 <br>
				<input type="password" name="pass" placeholder="Contraseña" required>
				<br>
				<input type="submit" name="Ingresar" value="Enviar">
                </form>
	
              <div class="g-recaptcha" data-sitekey="6LcMa5kUAAAAAN0Fx9lSDT71BIW7OVqUHfCKZsxd" data-theme=""></div>

	</div>
   </div>

  
</body>
</html>
 
