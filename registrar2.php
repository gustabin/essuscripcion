<?php 
session_start();
include "tools/corelib.php";
//$valor = 1; //Activa la opcion del menu actual
$_SESSION['valor'] = 5; //Activa la opcion del menu actual
error_reporting(0);
include "header.php";
include "menuSignin.php"; 
         // require_once('tools/recaptchalib.php');
         // $publickey = "6Ld4A_sSAAAAAAO8xnibWAkg-_18Svuxkv8XYzMq"; // you got this from the signup page
//          echo recaptcha_get_html($publickey);


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
		$("body").on('submit', '#formRegistrar', function(event) 
		{
			event.preventDefault()
			if ($('#formRegistrar').valid()) 
			{ 
				$.ajax(
				{
					type: "POST",
					url: "registrar_Procesar.php",
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
						if (respuesta.error == 5) 
						{
							$('#error5').show();
							setTimeout(function() 
							{
								$('#error5').hide();
							}, 3000);
						}	
						if (respuesta.error == 6) 
						{
							$('#error6').show();
							setTimeout(function() 
							{
								$('#error6').hide();
							}, 3000);
						}	
						if (respuesta.exito == 1) 
						{
							$('#mensaje').show();
							setTimeout(function() 
							{
								$('#mensaje').hide();
							}, 3000);
							window.location.href='registrar_Listo.php';
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
					<h2>Suscribete ahora y disfruta de tres días GRATIS</h2>
				</div>
			</div>
		</div>
	</section>
<section class="section-content section-contact section-color-graylighter">
    <div class="container">
      <div class="row">
        <div class="span4">
          <h5>Disfruta de nuestro servicio</h5>
          <address>
            Estamos orgullosos de poder enviarte notificaciones de tus citas y recordatorios para tu bienestar.
            
          </address>
          <p>
          <h5>Soy un nuevo paciente!</h5>
          <p>Encuentre un Doctor y haga una cita en línea.</p>
          <p>
            <a class="btn btn-small btn-primary" href="login.php">Login</a>
          </p>
        </div>
        <div class="span8">
          <h5>Por favor completa los siguientes datos</h5>
          <form class="form-vertical" id="formPaciente">
            <div class="control-group">
              <input class="span4 required email" id="Email" name="Email" placeholder="Email" type="text">
              <input class="span4 required" minlength="6" id="Password" name="Password" placeholder="Password" type="password">
            </div>
			
			<div class="control-group">
              <input class="span4 required" id="Nombre" name="Nombre" placeholder="Nombre" type="text">
              <input class="span4 required" id="Apellido" name="Apellido" placeholder="Apellido" type="text">
            </div>
			
			<div class="control-group">
              <input class="span4 required tlf" id="Telefono" name="Telefono" placeholder="Teléfono" type="text">
              <input class="span4 required" id="fecha_nac" name="fecha_nac" placeholder="Fecha de Nacimiento" type="text" readonly="readonly">
            </div>
			
			<div class="control-group">
              <select class="span4 required tdtextarea" name="Sexo" id="Sexo">
			  <option value="">Seleccione sexo</option>
			  <option value="M">Masculino</option>
			  <option value="F">Femenino</option>
			  </select>
            </div>
			
            <div class="control-group">         
            <button class="btn btn-primary" type="submit">Enviar</button>
			<button class="btn btn-default" type="reset">Cancelar</button>
			</div>
          </form>
		     <div class="alert alert-success mensaje_form" style="display: none" id="mensaje">
				<button data-dismiss="alert" class="close" type="button">x</button>
				<strong>MENSAJE: </strong> <span class="textmensaje">Registro exitoso</span>
			 </div>
			 <div class="alert alert-danger mensaje_form" style="display: none" id="error1">
				<button data-dismiss="alert" class="close" type="button">x</button>
				<strong>MENSAJE: </strong> <span class="textmensaje">El password debe ser mayor de 6 caracteres</span>
			 </div>
			 <div class="alert alert-danger mensaje_form" style="display: none" id="error2">
				<button data-dismiss="alert" class="close" type="button">x</button>
				<strong>MENSAJE: </strong> <span class="textmensaje">El paciente ya está registrado</span>
			 </div>
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
							<h4>Registrar una cuenta</h4>
							<form class="form-vertical" id="formRegistrar">
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">															
											<input class="form-control input-lg required email" id="Email" name="Email" placeholder="Correo electrónico" type="email">											
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-6">
											<input class="form-control input-lg required" id="Password" name="Password" placeholder="Clave" type="password">
										</div>
										<div class="col-md-6">
											<input class="form-control input-lg required" id="Password2" name="Password2" placeholder="Reingrese la clave" type="password">
										</div>
									</div>
								</div>
                               
                                <!--div class="infoContent">  
   									<?php// echo recaptcha_get_html($publickey);?>
								</div-->  
                                
								<div class="row">
									<div class="col-md-12">
										<input type="submit" value="Registrar" class="btn btn-primary pull-right push-bottom" data-loading-text="Cargando...">
									</div>
								</div>
							</form>
							<p>Ya tienes una cuenta? <a href="login.php">Iniciar sesión!</a></p>
		     				<div class="alert alert-success mensaje_form" style="display: none" id="mensaje">
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Registro exitoso</span>
							</div>
							<div class="alert alert-danger mensaje_form" style="display: none" id="error1">
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">El password debe ser mayor de 6 caracteres</span>
							</div>
							<div class="alert alert-danger mensaje_form" style="display: none" id="error2">	
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Este usuario ya está registrado</span>
							</div>
                            <div class="alert alert-danger mensaje_form" style="display: none" id="error3">	
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Las claves no son iguales</span>
							</div>
                             <div class="alert alert-danger mensaje_form" style="display: none" id="error4">	
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Las claves no pueden estar en blanco</span>
							</div>
                            <div class="alert alert-danger mensaje_form" style="display: none" id="error5">	
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Debe escribir un correo electrónico</span>
							</div>
                             <div class="alert alert-danger mensaje_form" style="display: none" id="error6">	
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Ya existe una cuenta con ese correo electrónico</span>
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
					<p>&nbsp;</p>
					<div class="row">
						<div class="col-md-12">
							<p class="lead">
								Registrate y recibe  <span class="alternative-font">3 días gratis.</span> 
							</p>
						</div>
					</div>
				</div>									
			</div>
		</div>
	</div>
</div>
		
 <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>