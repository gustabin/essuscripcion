<?php 
session_start();
include "tools/corelib.php";
//$valor = 1; //Activa la opcion del menu actual
$_SESSION['valor'] = 4; //Activa la opcion del menu actual
error_reporting(1);
include "header.php";
include "menuSignin.php"; 
?>
   <script language="JavaScript" type="text/JavaScript">
	

    	//Metodo para cargar el formulario 
		$("body").on('submit', '#formLogin', function(event) 
		{
			event.preventDefault()
			if ($('#formLogin').valid()) 
			{ 
				$.ajax(
				{
					type: "POST",
					url: "login_Procesar.php",
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
							window.location.href='pagar.php';
						}	
						if (respuesta.error == 4) 
						{
							$('#error4').show();
							setTimeout(function() 
							{
								$('#error4').hide();
							}, 3000);
						}	
						if (respuesta.error == 5) 
						{
							$('#error5').show();
							setTimeout(function() 
							{
								$('#error5').hide();
							}, 3000);
						}
						if (respuesta.exito == 1) 
						{
							$('#mensaje').show();
							setTimeout(function() 
							{
								$('#mensaje').hide();
							}, 3000);
							//window.location.href='tools/ver.php';
							window.location.href='buscarEdicion.php';
						}	
						if (respuesta.exito == 2) 
						{
							$('#mensaje2').show();
							setTimeout(function() 
							{
								$('#mensaje2').hide();
							}, 3000);
							//window.location.href='tools/ver.php';
							window.location.href='buscarEdicion.php';							
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
						<li class="active">Registrar usuario</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">                            
					<h2>Suscribirse</h2>
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
							<h4>Inicio de sesión</h4>
								<form id="formLogin">
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<input class="form-control input-lg required email" id="Email" name="Email" placeholder="Correo electrónico" type="email">											
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<a class="pull-right" id="" href="recuperar.php">Recuperar clave?</a>
												<input class="form-control input-lg required" id="Password" name="Password" placeholder="Clave" type="password">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<span class="remember-box checkbox">
												<label for="rememberme">
													<input type="checkbox" id="rememberme" name="rememberme">Recuerdame
												</label>
											</span>
										</div>
										<div class="col-md-6">
											<input type="submit" value="Iniciar" class="btn btn-primary pull-right push-bottom" data-loading-text="Cargando...">
										</div>
									</div>
								</form>
							<p>No tienes una cuenta todavia? <a href="registrar.php">Registrate!</a></p>
		     				<div class="alert alert-success mensaje_form" style="display: none" id="mensaje">
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Ingresando, por favor espere...</span>
							</div>	
							<div class="alert alert-success mensaje_form" style="display: none" id="mensaje2">	
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Hoy vence su suscripción</span>
							</div>						
                             
                            <div class="alert alert-danger mensaje_form" style="display: none" id="error1">	
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Debe escribir un correo electrónico</span>
							</div>
							<div class="alert alert-danger mensaje_form" style="display: none" id="error2">	
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Debe escribir una clave</span>
							</div>
                             <div class="alert alert-danger mensaje_form" style="display: none" id="error3">	
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Su suscripción esta vencida</span>
							</div>
							<div class="alert alert-danger mensaje_form" style="display: none" id="error4">	
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Aun no ha activado su cuenta</span>
							</div>
							<div class="alert alert-danger mensaje_form" style="display: none" id="error5">	
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Clave incorrecta, intente nuevamente</span>
							</div>
							
                            
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