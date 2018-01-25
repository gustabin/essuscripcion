<?php
	session_start();  
	include "tools/corelib.php";
	error_reporting(0);
		// conector de BD 
		require_once('tools/mypathdb.php');
		$user_id = $_POST ['user_id'];
		$email = $_POST ['email'];
		$nombre = $_POST ['nombre'];
		$apellido = $_POST ['apellido'];
		$telefono = $_POST ['telefono'];		
		$hasta= $_POST['hasta'];
		$subtotal= $_POST['subtotal'];	
		$iva= $_POST['iva'];	
		$total= $_POST['total'];
		$empresa= $_POST['empresa'];
		$CedulaRif= $_POST['CedulaRif'];
		$direccion= $_POST['direccion'];

			// ===============================================Grabar los datos ===============================================
			// ===============================================Buscar los datos en la tabla=====================================	
		// ===============================================Actualizar los datos en la tabla=====================================	
		
		$query = mysql_query("UPDATE tbl_usuarios SET us_nombre='$nombre', us_apellido='$apellido', us_hasta='$hasta', us_subtotal='$subtotal', us_iva='$iva', us_total='$total', us_telefono='$telefono', us_empresa='$empresa', us_cedulaRif='$CedulaRif', us_direccion='$direccion' WHERE us_id='$user_id'");	
		//$query = ("UPDATE tbl_usuarios SET us_nombre='$nombre', us_apellido='$apellido', us_hasta='$hasta', us_subtotal='$subtotal', us_iva='$iva', us_total='$total', us_empresa='$empresa', us_CedulaRif='$CedulaRif', us_direccion='$direccion' WHERE us_id='$user_id'");	
		//var_dump($query);
		//die();

		// ========================================envio de correo notificandome que un doctor modifico los datos ===================
		//$destino ="asistentetumacaed@gmail.com";
		$destino ="gustabin@yahoo.com";
		$asunto = "Contacto Web essuscripcion";
		$cabeceras = "Content-type: text/html";
		$cuerpo ="<h2>Hola, alguien modifico los datos ESSUSCRIPCION</h2>
		Los datos enviados son los siguientes:<br>
		<b>Email: </b>$email<br>
		<b>Nombre: </b>$nombre $apellido<br>	
		<b>Hasta: </b>$hasta<br>	
		<b>Empresa: </b>$empresa<br>	
		<b>Telefono: </b>$telefono<br>	
		<b>CedulaRif: </b>$CedulaRif<br>	
		<b>Direccion: </b>$direccion<br>
		
		 Tus amigos en ESSUSCRIPCION.<br>
		<img src=".INCLUDES."logos/banner-essuscripcion-1.jpg />
		<p>		
		<img src=".INCLUDES."ellogotabin.png />
		<h5>Calle Sanchez Carrero Sur N° 58, Sector Centro<br>
		Maracay, Estado Aragua, 2103<br>
		RIF J403661448<br> 
		<p></p>Designed by tabinsoft<br>
		© tabinsoft 2014 - All rights reserved<br></h5>
		</p>";
		$yourWebsite = "essuscripcion.com";
		$yourEmail   = "contacto@essuscripcion.com";
	    $cabeceras = "From: $yourWebsite <$yourEmail>\n" . "Content-type: text/html" ;
		mail($destino,$asunto,$cuerpo,$cabeceras);	
		
		//=========================================== REedireccion a otra pagina  =====================================
			//Los datos se han insertado correctamente.';		
			$data = array("exito" => '1');
			die(json_encode($data));									
			mysql_close();	//cerrar la conexion a la bd
?>