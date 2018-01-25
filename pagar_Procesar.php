<?php
	session_start(); 
    include "tools/corelib.php";
	require_once('tools/mypathdb.php');
			
	$tipo="0"; //====== asignar tipo 0 inactivo, 1 demo, 2 usuario, 3 operador, 4 administrador ======================
	$fecha_actual = date("Y-m-d");
	$fecha = $fecha_actual;
	//======================sumar # de dias de acuerdo al plan a la fecha actual=======================================================
	// plan 1 = 30 dias, plan 2 = 90 dias, plan 3 = 180 dias, plan 4 = 365 dias =======================
	
	//$fechaHasta = strtotime ( '+2 day' , strtotime ( $fecha ) ) ;
	$fechaHasta = strtotime ( '+'.$_SESSION['NumeroDeDias'].' day' , strtotime ( $fecha ) ) ;
	
	$fechaHasta = date ( 'Y-m-j' , $fechaHasta );
	$userId = $_SESSION['userID'];

		//===========Generar el PIN numero aleatorio de 4 digitos ======================
	    mt_srand (time());
	    $pin = md5(mt_rand(1000,9999)); 
		$texto = $pin; 
		
		$plan=$_SESSION['plan'];
		$subtotal=$_SESSION['subtotal'];
		$iva=$_SESSION['iva'];
        $total=$_SESSION['total'];
	 //========================== Actualizar los datos en la tabla tbl_usuarios=====================
		$query =mysql_query("UPDATE tbl_usuarios SET us_desde='$fecha_actual', us_hasta='$fechaHasta', us_plan='$plan', us_subtotal='$subtotal', us_iva='$iva', us_total='$total'  WHERE us_id='$userId'"); 
		$_SESSION['vencido']=FALSE;
	//desconectar();
		mysql_close();
		
		$email=$_SESSION['email'];
		$nombre=$_SESSION['nombre'];
		$apellido=$_SESSION['apellido'];
		$telefono=$_SESSION['telefono'];
		$empresa=$_SESSION['Empresa'];
		$cedulaRif=$_SESSION['CedulaRif'];
		$direccion=$_SESSION['direccion'];
		$ciudad= $_SESSION['ciudad'];
		if ($plan==1)
			{
			$plan="Mensual";
			}
		if ($plan==2)
			{
			$plan="Trimestral";
			}
		if ($plan==3)
			{
			$plan="Semestral";
			}
		if ($plan==4)
			{
			$plan="Anual";
			}
		// ========================================envio de correo notificandome que un lector pago ===================
		//$destino ="contacto@essuscripcion.com";
		$destino ="contacto@essuscripcion.com";
		$asunto = "Contacto Web www.essuscripcion.com";
		$cabeceras = "Content-type: text/html";
		$cuerpo ="<h2>Hola, un lector pago la suscripción PDF</h2>
		Los datos enviados son los siguientes:<br>
		<b>Email: </b>$email<br>
		<b>Nombre: </b>$nombre<br>
		<b>Apellido: </b>$apellido<br>
		<b>Telefono: </b>$telefono<br>
		<b>Empresa: </b>$empresa<br>
		<b>Cedula ó Rif: </b>$cedulaRif<br>
		<b>Dirección: </b>$direccion<br>
		<b>Plan: </b>$plan<br>
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
		$asunto = "Pago de plan el siglo en PDF";
		$cabeceras = "Content-type: text/html";
		$cuerpo ="<h2>No te pierdas una edición!</h2><br>
        Hola <b>$nombre &nbsp; $apellido &nbsp; $empresa</b>,<br>
        Hemos recibido tu pago de la suscripción del diario el siglo en PDF!<br>
        El plan que elegistes es <b>$plan</b>
        lo cual te permitirá disfrutar del servicio desde el <b>$fecha_actual</b>
        hasta el <b>$fechaHasta</b><br><br>
		Tus amigos en essuscripcion,<br> (El Siglo por Suscripción).<br><br>
		<a href=".SERVER."buscarEdicion.php> <img src=".INCLUDES."logos/periodico.png /></a>
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

		//===================================================Redirigir a otra pagina============================================				
		header("Location: pagarProcesar_Listo.php");
?>