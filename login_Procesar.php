<?php
	session_start(); 
    include "tools/corelib.php";
	// conector de BD 
	
	require_once('tools/mypathdb.php');
	$email = strtolower ($_POST ['Email']); 
	$clave = $_POST ['Password'];


	//==========================validar que el email no este vacio===================
	if ($email==NULL)
	{
		$data=array("error" => '1');
		die(json_encode($data));
	}	

	//==========================validar que la clave no este vacia===================
	if ($clave==NULL) 
	{
		$data=array("error" => '2');
		die(json_encode($data));
	}	
	
	
	
	$query = mysql_query("SELECT * FROM tbl_usuarios WHERE us_email = '$email' AND us_clave = '$clave'"); 
	$dataUsuario = mysql_fetch_array($query);	
	
	$usuario = $dataUsuario['us_tipo'];  //====== tipo 0 inactivo, 1 demo, 2 usuario, 3 operador, 4 administrador ====================
	$fechaHasta = $dataUsuario['us_hasta']; 
	//var_dump($fechaHasta);
		//die();
	//$_SESSION['userID'] = $userID;
	
	
	
	if($dataUsuario == false) 
	{
		$data=array("error" => '5');
		die(json_encode($data));
	}
	else
	{
		$_SESSION['userID'] = $dataUsuario['us_id']; 
		$_SESSION['plan'] = $dataUsuario['us_plan']; 
		$_SESSION['nombre'] = $dataUsuario['us_nombre']; 
		$_SESSION['apellido'] = $dataUsuario['us_apellido']; 
		$_SESSION['clave'] = $dataUsuario['us_clave']; 
		$_SESSION['email'] = $dataUsuario['us_email']; 
		$_SESSION['telefono'] = $dataUsuario['us_telefono']; 
		$_SESSION['empresa']= $dataUsuario['us_empresa'];
		$_SESSION['CedulaRif']= $dataUsuario['us_cedulaRif'];
		$_SESSION['direccion']= $dataUsuario['us_direccion'];
		$_SESSION['ciudad']= $dataUsuario['us_ciudad'];
		$_SESSION['tipo']= $dataUsuario['us_tipo'];
		//================== validar que este activo, us_tipo <>0 =========================================
		if ($usuario==0)
		{
			$data=array("error" => '4');
			die(json_encode($data));
		}
		//====================comparar la fecha del dia para ver si aun esta activa la suscripcion ==============
		$fecha_actual = date("Y-m-d");
		
		if ($fecha_actual==$fechaHasta)
		{
			$data=array("exito" => '2');
			die(json_encode($data));
		}
		
		if ($fecha_actual>$fechaHasta)
		{
			$_SESSION['vencido']=true;
			$data=array("error" => '3');
			die(json_encode($data));
		}
	}

	//===================================================Redirigir a otra pagina============================================				
	$data=array("exito" => '1');
	die(json_encode($data));
?>