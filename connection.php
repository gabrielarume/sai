<?php
	$ldaprdn = 'user';
	$ldappass = 'password';

	$ldapconn = ldap_connect ("sai.cert.unam.mx");
		or die ("Coul not connect to LDAP server.");

	if ($ldapconn){
     
            	$ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

		if ($ldapbind){
			echo "LDAP bind succesfull..";
		}else{
			echo"LDAP bind failed...";
		}
	}

?>
