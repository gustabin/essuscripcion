<?php 
session_start();
include "tools/corelib.php";
//$valor = 1; //Activa la opcion del menu actual
$_SESSION['valor'] = 2; //Activa la opcion del menu actual
include "header.php";
include "menuSignin.php"; 

?>
			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="index.php">Inicio</a></li>
									<li class="active">Tarifas</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Tabla de Tarifas</h2>
							</div>
						</div>
					</div>
				</section>
				
				
				<div class="container">

					<h2><strong>4 planes</strong> en promoción de lanzamiento.</h2>

					<div class="row">
						<div class="col-md-12">
							
								<a class="btn btn-lg btn-primary" href="detalles.php">Detalles del servicio</a> Oferta por tiempo  <span class="alternative-font">limitado.</span> 
							
						</div>
					</div>

					<hr class="tall" />

					<h3 class="short"><strong>Suscripción</strong> al siglo en PDF</h3>
					<p>Ahorre hasta un 40%</p>

					<div class="row">

						<div class="pricing-table">
							<div class="col-md-3 col-sm-6">
								<div class="plan">
									<h3>Mensual<span>31200Bs</span></h3>
									<a class="btn btn-lg btn-primary" href="pagar.php?plan=1">Suscribete</a>
									<ul>
										<li><b>30</b> Ejemplares</li>
										<li><b>Acceso</b> a publicaciones anteriores</li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="plan">
									<h3>Trimestral<span>56160Bs</span></h3>
									<a class="btn btn-lg btn-primary" href="pagar.php?plan=2">Suscribete</a>
									<ul>
										<li><b>90</b> Ejemplares</li> 
										<li><b>Acceso</b> a publicaciones anteriores</li>
										<li><b>Ahorra</b> 40%</li>										
									</ul> 
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="plan">
									<h3>Semestral<span>112320Bs</span></h3>
									<a class="btn btn-lg btn-primary" href="pagar.php?plan=3">Suscribete</a>
									<ul>
										<li><b>180</b> Ejemplares</li>
										<li><b>Acceso</b> a publicaciones anteriores</li>
										<li><b>Ahorra</b> 40%</li>	
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 center">
								<div class="plan most-popular">		
								<div class="plan-ribbon-wrapper"><div class="plan-ribbon">Popular</div></div>
									<h3>Anual<span>224640Bs</span></h3>
									<a class="btn btn-lg btn-primary" href="pagar.php?plan=4">Suscribete</a>
									<ul>
										<li><b>360</b> Ejemplares</li>
										<li><b>Acceso</b> a publicaciones anteriores</li>
										<li><b>Ahorra</b> 40%</li>	
									</ul>
								</div>
							</div>
						</div>

					</div>

				
			</div>

              <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>