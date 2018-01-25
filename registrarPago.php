<?php 
session_start();
include "tools/corelib.php";
require_once('tools/mypathdb.php');
//$valor = 1; //Activa la opcion del menu actual
$_SESSION['valor'] = 6; //Activa la opcion del menu actual
error_reporting(1);
include "header.php";
include "menuSignin.php"; 

$subtotal= number_format($_SESSION['subtotal'], 2, '.', '');
$iva= number_format($_SESSION['iva'], 2, '.', '');
$total= number_format($_SESSION['total'], 2, '.', '');


//=================================Datos del cliente =================
$userID= $_SESSION['userID'];
$email= $_SESSION['email'];
$nombre= $_SESSION['nombre'];
$apellido= $_SESSION['apellido'];
$telefono= $_SESSION['telefono'];
$empresa= $_SESSION['empresa'];
$cedulaRif= $_SESSION['cedulaRif'];
$direccion= $_SESSION['direccion'];
$ciudad= $_SESSION['ciudad'];


			// ===============================================Grabar los datos ===============================================
			// ===============================================Buscar los datos en la tabla=====================================	
			
	//if(empty($_SESSION['us_id']))
		//{
			// ===============================================Insertar los datos en la tabla=====================================
			$query_avisos = mysql_query("INSERT INTO tbl_avisos (av_userID, av_dias, av_fecha, av_palabras, av_adicionales, av_subtotal, av_iva, av_total, av_textoAviso, av_seccion, av_fechaVenta) VALUES ('$userID', '$dias', '$fecha', '$palabras', '$adicionales', '$subtotal', '$iva', '$total', '$textoAviso', '$seccion', NOW())");
//$query_avisos = ("INSERT INTO tbl_avisos (av_userID, av_dias, av_fecha, av_palabras, av_adicionales, av_subtotal, av_iva, av_total, av_textoAviso) VALUES ('$userID', '$dias', '$fecha', '$palabras', '$adicionales', '$subtotal', '$iva', '$total', '$textoAviso')");

			if($query_avisos == false) 
			{
				$data=array("error" => '2');
				die(json_encode($data));
			//}

			//$av_id = mysql_insert_id();
			//$_SESSION['av_id']=$av_id ;			
		} else {
			

		// ========================================envio de correo notificandome que un usuario se anuncio ===================
		$destino ="contacto@essuscripcion.com";
		$asunto = "Contacto Web esavisos";
		$cabeceras = "Content-type: text/html";
		$cuerpo ="<h2>Hola, un usuario se anuncio en esavisos</h2>
		Los datos enviados son los siguientes:<br>
		<b>Email: </b>$email<br>
		<b>Empresa:</b>$empresa<br>
		<b>Contacto:</b>$nombre $apellido<br>
		<b>Cedula / Rif: </b>$cedulaRif<br>
		<b>Telefono: </b>$telefono<br>
		<b>Dirección: </b>$direccion<br>
		<b>Texto del minianuncio:  </b>$textoAviso<br>
		<b>Número de dias: </b>$dias<br>
		<b>Número de palabras: </b>$palabras<br>
		<b>Palabras adicionales:  </b>$adicionales<br>
		<b>Subtotal: </b>$subtotal<br>
		<b>IVA:  </b>$iva<br>
		<b>Total:  </b>$total<br>
		
		Tus amigos en esavisos.<br>
		<img src=".INCLUDES."avisosonline.jpg />
		<p>		
		<img src=".INCLUDES."ellogotabin.png />
		<h5>Calle Sanchez Carrero Sur N° 58, Sector Centro<br>
		Maracay, Estado Aragua, 2103<br>
		RIF J403661448<br> 
		<p></p>Designed by Ing Gustavo Arias<br>
		© 2014 - All rights reserved<br></h5>
		</p>";
		$yourWebsite = "essuscripcion.com";
		$yourEmail   = "contacto@essuscripcion.com";
	    $cabeceras = "From: $yourWebsite <$yourEmail>\n" . "Content-type: text/html" ;
		mail($destino,$asunto,$cuerpo,$cabeceras);	
		
		// ========================================envio de correo al usuario ===================
		$destino = $email;
		$asunto = "Gracias por anunciar con nosotros - el siglo";
		$cabeceras = "Content-type: text/html";
		$cuerpo ="<h2>Anunciante - esavisos.com te publica!</h2><br>
        Estimado <b>$nombre $apellido</b>,<br>
        Hemos procesado un pago para publicar lo siguiente:<br>
		<b>Texto del minianuncio:  </b>$textoAviso<br>
		<b>Sección:  </b>$seccion<br>
		<b>Número de dias: </b>$dias<br>
		<b>Número de palabras: </b>$palabras<br>
		<b>Palabras adicionales:  </b>$adicionales<br>
		<b>Subtotal: </b>$subtotal<br>
		<b>IVA:  </b>$iva<br>
		<b>Total:  </b>$total<br>
        <a href=".SERVER."/login.php>Ingresa a tu cuenta</a>  con tu nombre de usuario: <b> $email </b><br>
		y tu clave:  <b> $clave </b><br><br> 
        Tus amigos en esavisos.com<br>
		<img src=".INCLUDES."avisosonline.jpg />
		<p>	
		<h5>Av. Bolivar Oeste Nº 244, Edif El Siglo, Sector La Romana,  <br>
		Maracay, Estado Aragua | (0243) 554-4867 |<br>
		RIF J07508704-6<br> 
		
		<p></p>Designed by Ing Gustavo Arias<br>
		© 2014 - All rights reserved<br></h5>		
		</p>";
		$yourWebsite = "essuscripcion.com";
		$yourEmail   = "contacto@essuscripcion.com";
	    $cabeceras = "From: $yourWebsite <$yourEmail>\n" . "Content-type: text/html" ;

		mail($destino,$asunto,$cuerpo,$cabeceras);
		header("Location: listo.php");
	//var_dump("listo");
		//	die();
					}
?>	
			//=========================================== REedireccion a otra pagina  =====================================
			//Los datos se han insertado correctamente.';		
			$data = array("exito" => '1');
			//die(json_encode($data));		
			//desconectar();
			mysql_close();	//cerrar la conexion a la bd
			//header("Location: listo.php")
			//window.location.href='listo.php';
			var_dump("listo");
			die();
					}
?>