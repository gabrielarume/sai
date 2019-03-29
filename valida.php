<?php
        #resivir los datos 
        #$user =$_POST['user'];
        #$password =$_POST['password'];
	#echo $user;

	#autentificacion LDAP
	$ldap_dn = "uid=" .$_POST["user"].", dc=example,dc=com";
	$ldap_password = $_POST["password"];

	$ldap_con = ldap_connect("ldap.forumsys.com");
	ldap_set_option($ldap_com, LDAP_OPT_PROTOCOL_VERSION, 3);

	if (@ldap_bind($ldap_con, $ldap_dn, $ldap_password)){
		echo "Inicio de sesión valida";
	}else{ 
		echo "Inicio de sesión no valida";
 	}

	#$login =array(
	#	'usuario'=> $user,
        #		'password'=> $password
	#	);
	#
	#echo $login[$user];
?>
