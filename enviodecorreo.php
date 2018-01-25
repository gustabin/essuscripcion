<?php
// ========================================envio de correo notificandome que un lector se suscribio ===================
		session_start(); 
		$email=$_SESSION['email'];
		//$destino ="contacto@essuscripcion.com";
		SERVER= 'http://www.essuscripcion.com/';
		INCLUDES= 'http://www.essuscripcion.com/img/';
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
		mail($destino,$asunto,$cuerpo,$cabeceras);	 
		// ========================================envio de correo al lector ===================
		$destino = $email;
		$asunto = "Bienvenido a www.essuscripcion.com, el siglo en PDF";
		$cabeceras = "Content-type: text/html";
		$cuerpo ="<h2>essuscripción te da la Bienvenida!</h2><br>
        Hola <b>$email</b>,<br>
        En nuestro sitio puedes disfrutar cada día de un ejemplar del diario el siglo!<br>
        También podrás ver ediciones anteriores.<br><br>
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
		?>