<?php
	session_start(); 
    include "tools/corelib.php";
	require_once('tools/mypathdb.php');
	
	$email = strtolower ($_POST ['Email']); 
	$clave = $_POST ['Password'];
	$verificarclave = $_POST ['Password2'];
	
	if ($clave <> $verificarclave) 
		{
		$data=array("error" => '3');
		die(json_encode($data));
		}
	
			
	$tipo="0"; //====== asignar tipo 0 inactivo, 1 demo, 2 usuario, 3 operador, 4 administrador ======================
	$fecha_actual = date("Y-m-d");
	
	
	$fecha = $fecha_actual;
	
	//======================sumar 2 dias de cortesia a la fecha actual=======================================================
		
	$fechaHasta = strtotime ( '+2 day' , strtotime ( $fecha ) ) ;
		
	$fechaHasta = date ( 'Y-m-j' , $fechaHasta );

		//===========Generar el PIN numero aleatorio de 4 digitos ======================
	    mt_srand (time());
	    $pin = md5(mt_rand(1000,9999)); 
		$texto = $pin; 
	// ===============================================Grabar los datos ===============================================================
	// ===============================================Introducir los datos en la tabla tbl_usuarios ==================================
	$query = "INSERT INTO tbl_usuarios (us_clave, us_tipo, us_fecha, us_desde, us_hasta, us_email, us_pin) VALUES ('".$clave."','".$tipo."',  '".$fecha."', '".$fecha_actual."', '".$fechaHasta."', '".$email."', '".$pin."')";
	
	//var_dump($query);
	//die();

	$insertarUsuario = mysql_query($query); 
	$us_id = mysql_insert_id(); //obtener el ultimo us_id
	
	if($insertarUsuario == false) 
	{
		$data=array("error" => '6');
		die(json_encode($data));
	}
	else
	{
		//Los datos se han insertado correctamente.
		//========asignar valor a variable de session ==============
		//$_SESSION['email']=$email;
		//$_SESSION['clave']=$clave;
		//$_SESSION['user_id']=$us_id;
		//desconectar();
		mysql_close();

		// ========================================envio de correo notificandome que un lector se suscribio ===================
		//$destino ="contacto@essuscripcion.com";
		$destino ="contacto@essuscripcion.com";
		$asunto = "Contacto Web www.essuscripcion.com";
		$cabeceras = "Content-type: text/html";
		$cuerpo ="<h2>Hola, un lector se ha registrado en la Web de essuscripción</h2>
		Los datos enviados son los siguientes:<br>
		<b>Email: </b>$email<br>
		 Tus amigos en essuscripción.com<br>
		<a href=".SERVER."login.php> <img src=".INCLUDES."logos/periodico.png /></a>
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
		//mail($destino,$asunto,$cuerpo,$cabeceras);	 
		// ========================================envio de correo al lector ===================
		$destino = $email;
		$asunto = "Bienvenido a www.essuscripcion.com, el siglo en PDF";
		$cabeceras = "Content-type: text/html";
		$cuerpo ="<h2>essuscripción te da la Bienvenida!</h2><br>
        Hola <b>$email</b>,<br>
        En nuestro sitio puedes disfrutar cada día de un ejemplar del diario el siglo!<br>		
        También podrás ver ediciones anteriores.<br><br>
		Nota: Aunque disfrutes de algunos días GRATIS se trata de un servicio PAGO POR SUSCRIPCIÓN, <br>
		cuando se hallan vencido los días de prueba deberás suscribirte a alguno de nuestros planes para <br>
		poder seguir accesando al periódico en formato PDF<br><br>
        <a href=".SERVER."activar.php?pin=$texto>Activa tu cuenta</a> para poder disfrutar de nuestro servicio.<br><br>
         Tus amigos en essuscripcion, (El Siglo por Suscripción).<br>
		<a href=".SERVER."activar.php?pin=$texto> <img src=".INCLUDES."logos/periodico.png /></a>
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
		$data=array("exito" => '1');
		die(json_encode($data));
	}	
?>