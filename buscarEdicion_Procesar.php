<?php
	session_start(); 
	//$_SESSION['enlace'] = "";
	//adefine('INCLUDES', "ediciones/includes/");
    //include "lib/corelib.php"; 
	// conector de BD 
	include('tools/mypathdb.php');
	
	//$fecha_edicion = $_POST ['fecha_edicion'];
	$fecha_edicion = "VI-1 ". $_POST ['fecha_edicion']; //solo esta tomando la version de MARACAY
//var_dump($fecha_edicion);
//die();
	// ========================================Buscar los datos en la tabla tbl_edicionespdf ===============================
	$query = mysql_query("SELECT * FROM wp_h0q0ngyhbx_tbl_edicionespdf WHERE fecha='$fecha_edicion'");
	
	
	$data_edicion = mysql_fetch_array($query);	

	if(empty($data_edicion)) // =================== si no encuentra la fecha ============================================
	{
		
		$data = array("error" => '1'); 
		die(json_encode($data));
	}
	else
	{
		$_SESSION['fecha']  = $data_edicion['fecha']; 
		$_SESSION['enlace'] = $data_edicion['enlace'];

		$data = array("exito" => '1'); 
		die(json_encode($data));	
	}
	//desconectar();
	mysql_close();	//cerrar la conexion a la bd
?>