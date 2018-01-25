<?php
	include "tools/corelib.php";
	// conector de BD 
	require_once('tools/mypathdb.php');
	$email = $_POST ['Email'];

	// ===============================================Buscar el password del usuario=====================================
	$query = mysql_query("SELECT * FROM tbl_usuarios WHERE us_email = '$email'");
	$dataUsuario = mysql_fetch_array($query);	
	
	$usuario = $dataUsuario['us_tipo'];
	$userID = $dataUsuario['us_id']; 
	$clave = $dataUsuario['us_clave']; 
		
	if(empty($dataUsuario))
		{
		$data=array("error" => '1');
		die(json_encode($data));
		}
	else
		{		
		//Consegui el registro		
		// ==================envio de correo con el password ===================
		$destino = $email;
		//$asunto = html_entity_decode("&#9745; Recuperar Clave de CitaDr");
		
		$asunto = "Recuperar Clave de essuscripcion";
		$cabeceras = "Content-type: text/html"; 
		$cuerpo ="<h1>essuscripcion te ayuda!</h1>
				Hola,<br><br> 
				Hemos recuperado tu password<br>
				<strong>".$clave."</strong><br><br>
				Recuerda ingresar a tu cuenta</a>  con tu nombre de usuario: <b> $email </b><br><br>
				Tus amigos en essuscripcion.com<br>
				<img src=".INCLUDES."img1.jpg /><br>
<p>		

<h5>Av. Bolivar Oeste Nº 244, Edif El Siglo, Sector La Romana,  <br>
		Maracay, Estado Aragua | (0243) 554-4867 |<br>
		RIF J07508704-6<br> <br>
		<p></p>Designed by Ing Gustavo Arias<br>
		© 2014 - All rights reserved<br></h5>	 
</p>";

		$yourWebsite = "essuscripcion.com";
		$yourEmail   = "contacto@essuscripcion.com";
	    $cabeceras = "From: $yourWebsite <$yourEmail>\n" . "Content-type: text/html" ;
		mail($destino,$asunto,$cuerpo,$cabeceras);		
		$data = array("exito" => '1');
		die(json_encode($data));				
		}
			
		//desconectar();
		mysql_close();
?>