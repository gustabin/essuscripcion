<?php
    include "tools/corelib.php";
	$nombre = $_POST ['nombre']; 
	$correo = $_POST ['correo'];
	$titulo = $_POST ['titulo'];
	$mensaje = $_POST ['mensaje'];
	
	//==========================validar que el nombre no este vacio===================
	if ($nombre==NULL)
	{
		//===================================================Redirigir a otra pagina============================================
		$data=array("error" => '1');
		die(json_encode($data));
	}	
	
	//==========================validar que el correo no este vacio===================
	if ($correo==NULL)
	{
		//===================================================Redirigir a otra pagina============================================
		$data=array("error" => '2');
		die(json_encode($data));
	}		
	
	//==========================validar que el titulo no este vacio===================
	if ($titulo==NULL)
	{
		//===================================================Redirigir a otra pagina============================================
		$data=array("error" => '3');
		die(json_encode($data));
	}

	//==========================validar que el mensaje no este vacio===================
	if ($mensaje==NULL)
	{
		//===================================================Redirigir a otra pagina============================================
		$data=array("error" => '4');
		die(json_encode($data));
	} 
	
		// ========================================envio de correo notificandome que un lector lleno el formulario de contacto ===================
		$destino ="contacto@essuscripcion.com";
		$asunto = "Contacto Web www.essuscripcion.com";
		$cabeceras = "Content-type: text/html";
		$cuerpo ="<h2>Hola, un lector te ha contactado por el formulario de essuscripción</h2>
		Los datos enviados son los siguientes:<br>
		<b>Nombre: </b>$nombre<br>
		<b>Correo: </b>$correo<br>
		<b>Titulo: </b>$titulo<br>
		<b>Mensaje: </b>$mensaje<br>
		 Tus amigos en essuscripción.com<br>
		<img src=".INCLUDES."clients/ContactoClientes.jpg />
		<p>	
	
		
		<h5>Av. Bolivar Oeste Nº 244, Edif El Siglo, <br>
		Sector La Romana, Maracay, Aragua, Venezuela <br>
		RIF J07508704-6<br> 
		<p></p>Designed by Ing Gustavo Arias<br>			
		
		© 2014 - All rights reserved<br></h5>
		</p>";
		$yourWebsite = "essuscripcion.com";
		$yourEmail   = "contacto@essuscripcion.com";
	    $cabeceras = "From: $yourWebsite <$yourEmail>\n" . "Content-type: text/html" ;
		mail($destino,$asunto,$cuerpo,$cabeceras);	 

		//===================================================Redirigir a otra pagina============================================				
		$data=array("exito" => '1');
		die(json_encode($data));
?>