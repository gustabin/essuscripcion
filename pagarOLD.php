<?php 
session_start();
if (empty($_SESSION['userID']))
	{
		header("Location: login.php");
	}
else 
	{
	}
// plan 1 = mensual, plan 2 = trimestral, plan 3=semestral, plan 4 =anual
if (!empty($_GET ['plan'])) 
	{
	$_SESSION['plan']=$_GET ['plan'];
	}
else 
	{
	  if (empty($_SESSION['plan'])) 
	  	{
		  header("Location: tarifas.php");
	  	}
	}
	
include "tools/corelib.php";
//$valor = 1; //Activa la opcion del menu actual
$_SESSION['valor'] = 6; //Activa la opcion del menu actual
error_reporting(1);
include "header.php";
include "menuSignin.php"; 
require_once ('lib/mercadopago.php');

if ($_SESSION['plan']==1) 
	{
		$monto = floatval (600);
	}
if ($_SESSION['plan']==2) 
	{
		$monto = floatval (1080);
	}

if ($_SESSION['plan']==3) 
	{
		$monto = floatval (2160);
	}

if ($_SESSION['plan']==4) 
	{
		$monto = floatval (4320);
	}
//$_SESSION['total']=1000;
//$monto = floatval ($_SESSION['total']);
//$descripcion = $_SESSION['textoAviso'];
$descripcion = "Suscripcion PDF " . $_SESSION['nombre'] ." ". $_SESSION['apellido'];
	
//$mp = new MP('384765699688552', 'SWCUvzyYSxjorBkDXb99wy6PXdfQ8DKf'); //credenciales arias3000
$mp = new MP('3505046689785064', 'eYAYVdzzEM4tq2D7eKUbHt83VMcEVZuK'); //credenciales esavisos
$mp->sandbox_mode(TRUE);
$preference_data = array(
    "items" => array(
       array(
           "title" => "Suscripcion PDF el siglo",
           "quantity" => 1,
           "currency_id" => "VEF",
		   "description" => $descripcion,
           "unit_price" => $monto
       )
    )
);
$preference = $mp->create_preference ($preference_data);
?>

<style type="text/css">
<!--
.main .page-top .container .row .col-md-12 h2 {
	color: #000;
}
#destacado {
	color: #000;
}
-->
</style>


<div role="main" class="main"> 

	<section class="page-top">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="breadcrumb">
						<li><a href="index.php">Inicio</a></li>
						<li class="active">Registrar usuario</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">                            
					<h2>Suscribete ahora y disfruta de tres días GRATIS</h2>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="row">
			<div class="col-md-12">						
				<div class="col-sm-6">
					<div class="featured-box featured-box-secundary default info-content">
						<div class="box-content">
							<h4>Pagar suscripción</h4>
							
							
						</div>
					</div>
				</div>							
								
				<div class="col-sm-6">
					<p></p>
					<div class="owl-carousel" data-plugin-options='{"items": 1, "singleItem": false, "autoPlay": true}'>
						<div>
							<img class="img-responsive" src="img/logos/banner-essuscripcion-1.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="img/logos/banner-essuscripcion-2.jpg" alt="">
						</div>
						<div>
							<img class="img-responsive" src="img/logos/banner-essuscripcion-3.jpg" alt="">
						</div>
					</div>
				</div>									
			</div>
		</div>
	</div>
</div>
		
 <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>