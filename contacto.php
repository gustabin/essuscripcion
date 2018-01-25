<?php 
session_start();
include "tools/corelib.php";
//$valor = 1; //Activa la opcion del menu actual
$_SESSION['valor'] = 3; //Activa la opcion del menu actual
include "header2.php";
include "menuSignin.php";  

?>
   <script language="JavaScript" type="text/JavaScript">
	$(document).ready(function() {
                        $("#fecha_nac").datepicker({
                            changeYear: true,
                            minDate: new Date(1900, 1 - 1, 1),
                            maxDate: '-18Y',
                            dateFormat: 'yy-mm-dd',
                            defaultDate: new Date(1970, 1 - 1, 1),
                            changeMonth: true,
                            changeYear: true,
                            yearRange: '-110:-18'
                        });					
						//MASCARA EN EL INPUT
                        $(".tlf").mask("(0999) 999-99-99");	
						})

    	//Metodo para cargar el formulario 
		$("body").on('submit', '#formContacto', function(event) 
		{
			event.preventDefault()
			if ($('#formContacto').valid()) 
			{ 
				$.ajax(
				{
					type: "POST",
					url: "contacto_Procesar.php",
					dataType: "json",
					data: $(this).serialize(),
					success: function(respuesta) 
					{
						if (respuesta.error == 1) 
						{ //nunca ocurre
							$('#error1').show();
							setTimeout(function() 
							{
								$('#error1').hide();
							}, 3000);
						}
						if (respuesta.error == 2) 
						{
							$('#error2').show();
							setTimeout(function() 
							{
								$('#error2').hide();
							}, 3000);
						}		
						if (respuesta.error == 3) 
						{
							$('#error3').show();
							setTimeout(function() 
							{
								$('#error3').hide();
							}, 3000);
						}	
						if (respuesta.error == 4) 
						{
							$('#error4').show();
							setTimeout(function() 
							{
								$('#error4').hide();
							}, 3000);
						}	
						if (respuesta.exito == 1) 
						{
							$('#mensaje').show();
							setTimeout(function() 
							{
								$('#mensaje').hide();
							}, 3000);
							window.location.href='contacto_Listo.php';
						}	
					}
				});
			}
		});

	    
</script>
			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="index.php">Inicio</a></li>
									<li class="active">Contacto</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Contáctanos</h2>
							</div>
						</div>
					</div>
				</section>

				<!-- Google Maps -->
				<div id="googlemaps" class="google-map"></div>

				<div class="container">

					<div class="row">
						<div class="col-md-6">
							<h2 class="short"><strong>Contacto</strong> </h2>
							<form class="form-vertical" id="formContacto">
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<label>Nombre *</label>
											<input type="text" value="" maxlength="100" class="form-control input-lg required" name="nombre" id="nombre" placeholder="Introduzca su nombre">
										</div>
										<div class="col-md-6">
											<label>Correo electrónico *</label>											
                                            <input type="email" value="" maxlength="100" class="form-control input-lg required email" name="correo" id="correo" placeholder="Correo electrónico">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Título</label>											
                                            <input type="text" value="" maxlength="100" class="form-control input-lg required" name="titulo" id="titulo" placeholder="Introduzca un título">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<label>Mensaje *</label>											
                                            <textarea maxlength="5000" rows="4" cols="50" class="form-control input-lg required" name="mensaje" id="mensaje" placeholder="Introduzca un mensaje..."></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
                                        <input type="submit" value="Enviar mensaje" class="btn btn-primary pull-right push-bottom" data-loading-text="Cargando...">
									</div>
								</div>
							</form>
                            <p class="log-in-info">Ya tienes una cuenta? <a href="login.php" id="headerSignIn">Iniciar sesión!</a></p>
		     				<div class="alert alert-success mensaje_form" style="display: none" id="mensaje">
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Registro exitoso</span>
							</div>
							<div class="alert alert-danger mensaje_form" style="display: none" id="error1">
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Debe escribir su nombre</span>
							</div>
							<div class="alert alert-danger mensaje_form" style="display: none" id="error2">	
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Debe escribir su correo</span>
							</div>
                            <div class="alert alert-danger mensaje_form" style="display: none" id="error3">	
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Debe escribir un titulo</span>
							</div>
                             <div class="alert alert-danger mensaje_form" style="display: none" id="error4">	
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Debe escribir un mensaje</span>
							</div>
						</div>
						<div class="col-md-6">

							<h4 class="push-top">Mantente en <strong>contacto</strong></h4>
							<p>Nos es muy grato responder todas tus inquietudes, muy pronto nos pondremos en contacto contigo.</p>

							<hr />

							<h4>Nuestras <strong>oficinas</strong></h4>
							<ul class="list-unstyled">
								<li><i class="fa fa-map-marker"></i> <strong>Dirección:</strong> Av. Bolivar Oeste Nº 244, Edif El Siglo, Sector La Romana, Maracay, Aragua, Venezuela</li>
								<li><i class="fa fa-phone"></i> <strong>Teléfono:</strong> (0243) 554-9265 / 554-4867 Fax (0243) 554-5154</li>
								<li><i class="fa fa-envelope"></i> <strong>Correo electrónico:</strong> <a href="mailto:contacto@essuscripcion.com">escribenos </a></li>
							</ul>

							<hr />

							<h4>Horario <strong>de atención</strong></h4>
							<ul class="list-unstyled">
								<li><i class="fa fa-time"></i> Lunes - Viernes 8am a 5pm</li>
								<li><i class="fa fa-time"></i> Sabado y Domingo - Cerrado</li>
							</ul>

						</div>

					</div>

				</div>

			</div>

			<section class="call-to-action featured footer">
				<div class="container">
					<div class="row">
						<div class="center">
							<h3>el siglo en  <strong>suscripcion</strong> esta en todas <strong>partes</strong> buscanos en la red! <a href="registrar.php" target="_blank" class="btn btn-lg btn-primary" data-appear-animation="bounceIn">suscribete ya!</a> <span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -22px;"></span></h3>
						</div>
					</div>
				</div>
			</section>
            
 <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>