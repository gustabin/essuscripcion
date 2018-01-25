<?php 
session_start();
//include "lib/corelib.php";
//$valor = 1; //Activa la opcion del menu actual
$_SESSION['valor'] = 1; //Activa la opcion del menu actual
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
									<li class="active">Usuario registrado</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Activación</h2>
							</div>
						</div>
					</div>
				</section>
                

				<div class="container">
					<h2>Validar cuenta</h2>

					<div class="row">
						<div class="col-md-6">
							<img class="pull-left" src="img/device.png" width="200" height="140" data-appear-animation="fadeInRightBig">
							<h4>Registro exitoso</h4>
							<p>Estimado lector, le hemos enviado un correo electrónico con un link de activación, debe hacerle click para poder comenzar a utilizar nuestro servicio.</p>
							<p>Te recordamos que nuestro servicio tiene un costo de acuerdo a la tarifa del plan que elijas.</p>
							<p>Una vez vencido los 3 días GRATIS deberás <a href="tarifas.php">elegir un plan</a> para poder seguir disfrutando del servicio.</p>
                        <p>El equipo de essuscripción.</p>
							<hr>
						</div>
							<div class="col-md-6">
					<div class="row center">
							<h2 class="short word-rotator-title">
                                Ya estas casi listo para  
								<strong>
									<span class="word-rotate">
										<span class="word-rotate-items">
											
											<span>leer</span>
                                            <span>ojear</span>
                                            <span>revisar</span>
                                            <span>mirar</span>
                                            <span>chequear</span>
                                            <span>vacilarte</span>
                                            <span>disfrutar</span>
                                            <span>observar</span>
                                            <span>examinar</span>
										</span>
									</span>
								</strong>
								nuestro diario en formato PDF...
							</h2>
							<h4 class="lead tall">Cada día tenemos nuevos lectores que utilizan nuestra plataforma digital.</h4>
					</div>
							</div>
					</div>
                    <div class="slider-container">
					
				</div>
				<div class="home-intro">
					<div class="container">
				
						<div class="row">
							<div class="col-md-8">
								<p>
									Disfruta de nuestra publicación  <em>en todas partes!</em>
									<span>Accese a nuestro diario cada vez que quiera y desde la plataforma de su preferencia.</span>
								</p>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
		
<!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>