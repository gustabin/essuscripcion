<?php 
session_start();
include "tools/corelib.php";
//$valor = 1; //Activa la opcion del menu actual
$_SESSION['valor'] = 5; //Activa la opcion del menu actual
error_reporting(0);
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
		$("body").on('submit', '#formRegistrar', function(event) 
		{
			event.preventDefault()
			if ($('#formRegistrar').valid()) 
			{ 
				$.ajax(
				{
					type: "POST",
					url: "registrarDatos_Procesar.php",
					dataType: "json",
					data: $(this).serialize(),
					success: function(respuesta) 
					{
						if (respuesta.exito == 1) 
						{
							$('#mensaje').show();
							setTimeout(function() 
							{
								$('#mensaje').hide();
							}, 3000);
							window.location.href='pagar.php';
						}	
						
						if (respuesta.error == 1) 
						{
						  	$('#error1').show();
							setTimeout(function() 
							{
						  		$('#error1').hide();
							}, 3000);
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
					<h2>Completa los datos para poder realizar el pago</h2>
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
							<h4>Ingresa lo siguiente:</h4>
							<form class="form-vertical" id="formRegistrar">
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">															
											<input class="form-control input-lg required" id="Nombre" name="Nombre" placeholder="Nombre" type="text">											
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input class="form-control input-lg required" id="Apellido" name="Apellido" placeholder="Apellido" type="text">
										</div>
									</div>
								</div>
                                <div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input class="form-control input-lg" id="telefono" name="telefono" placeholder="telefono" type="text">
										</div>
									</div>
								</div>
                                <div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input class="form-control input-lg" id="Empresa" name="Empresa" placeholder="Empresa (opcional)" type="text">
										</div>
									</div>
								</div>
                                <div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input class="form-control input-lg required" id="CedulaRif" name="CedulaRif" placeholder="Cedula ó Rif" type="text">
										</div>
									</div>
								</div>
                                <div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input class="form-control input-lg required" id="Direccion" name="Direccion" placeholder="Dirección completa" type="text">
										</div>
									</div>
								</div>
                                <div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<input class="form-control input-lg required" id="Ciudad" name="Ciudad" placeholder="Ciudad" type="text">
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
							
		     				<div class="alert alert-success mensaje_form" style="display: none" id="mensaje">
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Registro exitoso</span>
							</div>
							<div class="alert alert-danger mensaje_form" style="display: none" id="error1">
								<button data-dismiss="alert" class="close" type="button">x</button>
								<strong>MENSAJE: </strong> <span class="textmensaje">Coloque su dirección completa</span>
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
					
				</div>									
			</div>
		</div>
	</div>
</div>
		
 <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>