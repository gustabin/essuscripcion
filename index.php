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
							<div class="col-md-4">
								<div class="get-started">
                                <?php if (empty($_SESSION['userID']) AND $_SESSION['vencido']<>true) {?>
									<a href="registrar.php" class="btn btn-lg btn-primary">Regístrate Ya!</a>
                                    <a href="login.php" class="btn btn-lg btn-primary">Ingresar</a>
									<div class="learn-more"> <a href="detalles.php">leer más</a></div>
								<?php }
								else
									{?>
									<a href="micuenta.php" class="btn btn-lg btn-primary">Mi cuenta</a>
									<?php }
								?>
                                </div>
							</div>
						</div>
				
					</div>
				</div>
				
				<div class="container">
				
					<div class="row center">
						<div class="col-md-12">
							<h2 class="short word-rotator-title">el siglo en formato PDF es mucho más fácil de leer.
					    </h2>
							<p class="featured lead">
								La prensa digital, un pequeño paso para el hombre un gran paso para la comunicación.
							</p>
						</div>
					</div>
				
				</div>
				
				<div class="home-concept">
					<div class="container">
				
						<div class="row center">
							<span class="sun"></span>
							<span class="cloud"></span>
							<div class="col-md-2 col-md-offset-1">
								<div class="process-image" data-appear-animation="bounceIn">
									<img src="img/home-concept-item-1.png" alt="" />
									<strong>Redacción</strong>
								</div>
							</div>
							<div class="col-md-2">
								<div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="200">
									<img src="img/home-concept-item-2.png" alt="" />
									<strong>Diagramación</strong>
								</div>
							</div>
							<div class="col-md-2">
								<div class="process-image" data-appear-animation="bounceIn" data-appear-animation-delay="400">
									<img src="img/home-concept-item-3.png" alt="" />
									<strong>Publicación</strong>
								</div>
							</div>
							<div class="col-md-4 col-md-offset-1">
								<div class="project-image">
									<div id="fcSlideshow" class="fc-slideshow">
										<ul class="fc-slides">
											<li><img class="img-responsive" src="img/projects/project-home-1.jpg" /></li>
											<li><img src="img/projects/project-home-2.jpg" border="0" class="img-responsive" /></li>
											<li><img class="img-responsive" src="img/projects/project-home-3.jpg" /></li>
										</ul>
									</div>
								<strong class="our-work">el siglo en PDF</strong></div>
							</div>
						</div>
				
					</div>
				</div>
				
				<div class="container">
				
					<div class="row">
						<hr class="tall" />
					</div>
				
				</div>
				
				<div class="container">
				
					<div class="row">
						<div class="col-md-8">
							<h2>+ <strong>ventajas</strong></h2>
							<div class="row">
								<div class="col-sm-6">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-group"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Interactividad</h4>
											<p class="tall"></p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-globe"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Distribución libre de condiciones geográficas</h4>
											<p class="tall"></p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-line-chart"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Aumento de lectores potenciales</h4>
											<p class="tall"></p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-dollar"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Eliminación de costos de impresión</h4>
											<p class="tall"></p>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-newspaper-o "></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Acercamiento al lector a la producción periodística</h4>
											<p class="tall"></p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-film"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Posibilidad de insertar audio, vídeo, animaciones</h4>
											<p class="tall"></p>
										</div>
									</div>
									<div class="feature-box">
										<div class="feature-box-icon">
											<i class="fa fa-bars"></i>
										</div>
										<div class="feature-box-info">
											<h4 class="shorter">Aumento de espacio sin depender de las limitaciones de las páginas</h4>
											<p class="tall"></p>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<h2>y mucha más...</h2>
 
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												<i class="fa fa-usd"></i>
												Tarifas de suscripción
											</a>
										</h4>
									</div>
									<div id="collapseOne" class="accordion-body collapse in">
										<div class="panel-body">
											A través de nuestra web podrás disfrutar de tu suscripción en todos los dispositivos soportados sin problemas. <a href="tarifas.php" style=" color: #09F"> Conoce nuestras tarifas.</a>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												<i class="fa fa-comment"></i>
												Contáctanos
											</a>
										</h4>
									</div>
									<div id="collapseTwo" class="accordion-body collapse">
										<div class="panel-body">
											Puedes escribirnos directamente por aqui, si lo prefieres también puedes comunicarte con nosotros a través de nuestros números de teléfono (0243) 554-9265 / 554-4867 Fax (0243) 554-5154 <a href="mailto:contacto@essuscripcion.com" style=" color: #09F"> o a nuestro correo electrónico.</a>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
												<i class="fa fa-laptop"></i>
												Portafolio de periodicos
											</a>
										</h4>
									</div>
									<div id="collapseThree" class="accordion-body collapse">
										<div class="panel-body">
											Disfruta de una nueva edición diaria de nuestro matutino asi como también de ediciones pasadas.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				
					<hr class="tall" />
					<div class="row center">
						<div class="col-md-12">
							<h2 class="short word-rotator-title">
                                Características que te 
								<strong>
									<span class="word-rotate">
										<span class="word-rotate-items">
											<span>encantarán,</span>
											<span>gustarán,</span>
                                            <span>agradarán,</span>
                                            <span>complacerán,</span>
                                            <span>deleitarán,</span>
                                            <span>entusiasmarán,</span>
                                            <span>interesarán,</span>
                                            <span>cautivarán,</span>
                                            <span>satisfacerán,</span>
										</span>
									</span>
								</strong>
								traemos el futuro para tus publicaciones actuales...
							</h2>
							<h4 class="lead tall">Cada día tenemos nuevos lectores que utilizan nuestra plataforma digital.</h4>
						</div>
					</div>
					<div class="row center">
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
				
				<div class="map-section">
					<section class="featured footer map">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<div class="recent-posts push-bottom">
										<h2>Multiples <strong>plataformas</strong> soportadas</h2>
										<div class="row">
											<div class="owl-carousel" data-plugin-options='{"items": 1, "autoHeight": true}'>
												<div>
													<div class="col-md-12">
														<article>															
															<p><i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i>&nbsp; Nuestra publicación no solo trabaja en Pc, utilizamos las últimas tecnologías de Internet para traer también esta experiencia excepcional para todos los principales tablets y smartphones. &nbsp; <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></p>															
														</article>
													</div>
													
												</div>
												<div>
													<div class="col-md-12">
														<article>															
															<img class="img-responsive" src="img/logos/plataformas.png" alt=""></p>
														</article>
													</div>													
												</div>
												<div>
													<div class="col-md-12">
														<article>															
															<h4>Esto es sólo el comienzo.</h4>
															<p><i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i> &nbsp;Estamos trabajando duro para ofrecer nuevas características en breve para superar su experiencia lectores. &nbsp;<i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></p>
														</article>
													</div>													
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<h2><strong>Que</strong> dice la gente...</h2>
									<div class="row">
										<div class="owl-carousel push-bottom" data-plugin-options='{"items": 1, "autoHeight": true}'>
											<div>
												<div class="col-md-12">
													<blockquote class="testimonial">
													<p>Hoy en día la información aparece instantaneamente en las redes sociales, como medio de comunicación debemos aportar nuestro granito de arena brindandole a nuestros lectores este tipo de tecnología que exigen nuestros tiempos.</p>
													</blockquote>
													<div class="testimonial-arrow-down"></div>
													<div class="testimonial-author">
														<div class="img-thumbnail img-thumbnail-small">
															<img src="img/clients/client-2.jpg" alt="">
														</div>
														<p><strong>Alberto Martinez</strong><span>Jefe de Farandula - el siglo, c.a.</span></p>
													</div>
												</div>
											</div>
											<div>
												<div class="col-md-12">
													<blockquote class="testimonial">
													<p>En tiempos de cambios, la tecnología juega un papel fundamental, la necesidad de mantenerse informado de una buena fuente como la de el siglo cuando se presenta en este formato digital es sin duda alguna una herramienta que contribuye con el desarrollo de nuestra región.</p>
													</blockquote>
													<div class="testimonial-arrow-down"></div>
													<div class="testimonial-author">
														<div class="img-thumbnail img-thumbnail-small">
															<img src="img/clients/client-1.jpg" alt="">
														</div>
														<p><strong>Tulio Capriles</strong><span>Presidente - el siglo, c.a.</span></p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>			
              <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>