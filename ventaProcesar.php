<?php
session_start(); 
error_reporting(0);
require_once('tools/mypathdb.php');

$_SESSION['nombreVenta'] = $_POST ['nombre'];

	$data = array("exito" => '1');
	die(json_encode($data));		
?>