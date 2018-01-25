<?php 
session_start();
date_default_timezone_set('America/Caracas');
include "tools/corelib.php";
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
									<li class="active">Detalles del servicio</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Servicio de suscripción</h2>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row center">
						<div class="col-md-12">
							<h2 class="short word-rotator-title">Una nueva manera de  <strong class="inverted" data-appear-animation="bounceIn">
									<span class="word-rotate" data-plugin-options='{"delay": 2000}'>
										<span class="word-rotate-items">
											<span>ver las noticias.</span>
											<span>leer el periódico.</span>
											<span>leer el siglo.</span>
										</span>
									</span>
								</strong>
							</h2>
							<p class="featured lead">
								<strong>SISTEMA DE SUSCRIPCIÓN PAGO:</strong> &nbsp;En nuestro sitio puedes disfrutar cada día de un ejemplar del diario <strong>el siglo</strong> &nbsp;<span class="alternative-font">en formato digital PDF.</span> &nbsp; También podrás ver ediciones anteriores!<br><br>
		Nota: Aunque disfrutes de algunos días GRATIS se trata de un servicio PAGO POR SUSCRIPCIÓN, cuando se hallan vencido los días de prueba deberás suscribirte a alguno de <a href="tarifas.php"><span class="alternative-font">nuestros planes</span></a> &nbsp;para poder seguir accesando al periódico en formato PDF. </p>
						</div>
					</div>

					<hr class="tall" />
				</div>

				<div class="container">

					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-4">
									<div class="feature-box secundary">
										<div class="feature-box-icon">
											<i class="fa fa-group"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Soporte técnico</h4>
											<p class="tall">Estamos a la orden para ayudarte con tu servicio, resolver problemas de facturación y <span class="alternative-font">cualquier duda </span> que se presente con tu cuenta. </p>
										</div>
									</div>
									<div class="feature-box secundary">
										<div class="feature-box-icon">
											<i class="fa fa-file"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Ediciones nuevas / viejas</h4>
											<p class="tall">Puedes mantenerte actualizado con las últimas noticias asi como revisar ediciones anteriores. Lleva contigo tu hemeroteca digital!</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="feature-box secundary">
										<div class="feature-box-icon">
											<i class="fa fa-film"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Período de prueba</h4>
											<p class="tall">Disfruta  nuestro servicio  unos  días sin ningún compromiso. Registrate y pruebalo! Para suscribirte tan solo elige y paga por el plan que desees.</p>
										</div>
									</div>
									<div class="feature-box secundary">
										<div class="feature-box-icon">
											<i class="fa fa-check"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Beneficios</h4>
											<p class="tall">Edición al alcance de un click,  solo necesita navegar en &nbsp;<span class="alternative-font"> internet.</span> Fácil de accesar, práctico de leer y sin ensuciarse las manos.</p>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="feature-box secundary">
										<div class="feature-box-icon">
											<i class="fa fa-bars"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Tarifas</h4>
											<p class="tall">Disponemos de planes ajustados a tus necesidades, mensual, trimestral, semestral y anual. Con descuentos hasta un 40%</p>
										</div>
									</div>
									<div class="feature-box secundary">
										<div class="feature-box-icon">
											<i class="fa fa-desktop"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Portatil</h4>
											<p class="tall">Se puede leer en cualquier dispositivo, PC, laptop, tablet o desde un teléfono inteligente. Como magia se adapta a cualquier equipo!</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<section class="featured highlight footer">
					<div class="container">
						<div class="row center counters">
							<div class="col-md-3 col-sm-6">
								<strong data-to="87000" data-append="+">0</strong>
								<label>Lectores felices</label>
							</div>
							<div class="col-md-3 col-sm-6">
								<strong data-to="42">0</strong>
								<label>Años de antigüedad</label>
							</div>
							<div class="col-md-3 col-sm-6">
								<strong data-to="360">0</strong>
								<label>Ediciones anuales</label>
							</div>
							<div class="col-md-3 col-sm-6">
								<strong data-to="1590">0</strong>
								<label>Arboles salvados</label>
							</div>
						</div>
					</div>
				</section>
				

				<section class="call-to-action featured footer">
					<div class="container">
						<div class="row">
							<div class="center">
								<h3>Diario <strong>el siglo</strong>  el matutino de los valles de Aragua <a href="registrar.php"  class="btn btn-lg btn-primary" data-appear-animation="bounceIn">Registrate ya!</a> <span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -22px;"></span></h3>
							</div>
						</div>
					</div>
				</section>

			</div>
              <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>