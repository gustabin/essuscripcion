<?php
	session_start(); 
    include "tools/corelib.php";
	require_once('tools/mypathdb.php');
	
	$nombre = $_POST ['Nombre']; 
	$apellido = $_POST ['Apellido'];
	$telefono = $_POST ['telefono'];
	$empresa = $_POST ['Empresa'];
	$CedulaRif = $_POST ['CedulaRif'];
	$direccion = $_POST ['Direccion'];
	$ciudad = $_POST ['Ciudad'];
	$userId = $_SESSION['userID'];
	
	if (strlen($direccion)<12) {
			$data=array("error" => '1');
			die(json_encode($data));
			} 

    //========================== Actualizar los datos en la tabla tbl_usuarios=====================
	$query =mysql_query("UPDATE tbl_usuarios SET us_nombre='$nombre', us_apellido='$apellido', us_empresa='$empresa', us_cedulaRif='$CedulaRif', us_telefono='$telefono', us_direccion='$direccion', us_ciudad='$ciudad'  WHERE us_id='$userId'"); 
	
	
	$_SESSION['nombre']=$nombre;
	$_SESSION['apellido']=$apellido;
	$_SESSION['telefono']=$telefono;
	$_SESSION['Empresa']=$empresa;
	$_SESSION['CedulaRif']=$CedulaRif;
	$_SESSION['direccion']=$direccion;
	$_SESSION['ciudad']=$ciudad;
	//desconectar();
	mysql_close();	//cerrar la conexion a la bd
	$data=array("exito" => '1');
	die(json_encode($data));
?>