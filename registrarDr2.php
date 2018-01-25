<?php 
//session_start();
//session_destroy(); 
//include "lib/corelib.php";
//require_once('tools/mypathdb.php');
//include "lib/class/class.php";
//include "lib/class/nombres.php";
error_reporting(1);
//$_SESSION['valor'] = 10; //Activa la opcion del menu actual 
include "header.php";
?>
<script Language="JavaScript">
	$(document).ready(function() {
		$('#titulo').html("Paso 1/ Datos Personales");
		//$('#contenido').load('registrarDrVista.php');		
	
    	//MASCARA EN EL INPUT
         $(".tlf").mask("(0999) 999-99-99");			 
	});
	
	
	function ocultarCiudades(){   //funcion para desaparecer cbo_ciudades
		$('#cbo_ciudades').hide();
	} 
		 
	
    //Metodo para cargar los datos personales
    $("body").on('submit', '#formDoctor', function(event) {
		event.preventDefault()
		if ($('#formDoctor').valid()) {
			$.ajax({
				type: "POST",
				url: "registrarDr2Procesar.php",
				dataType: "json",
				data: $(this).serialize(),
				success: function(respuesta) {
					if (respuesta.error == 1) {
						$('#error1').show();
						setTimeout(function() {
						$('#error1').hide();
						}, 3000);
					}
					if (respuesta.error == 2) {
						$('#error2').show();
						setTimeout(function() {
						$('#error2').hide();
						}, 3000);
					}
					if (respuesta.exito == 1) {
						$('#mensaje').show();						
						$('#siguiente').show();
						$('#enviar').hide();
						$('#cancelar').hide();
						setTimeout(function() {
						$('#mensaje').hide();
						}, 3000);						
					}		    
				}
			});
		}
	});	
	    
</script> 
  <!-- .................................... $breadcrumb .................................... -->
  <section class="section-breadcrumb section-color-graylighter">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="#"><span id="titulo"></span></a></li>
      </ul>
    </div>
  </section>
  <!-- .................................... $Titulo .................................... -->
  
    <div class="container" style="margin-top:10px">
      <h2 class="section-title">
        Registrar 
        <small>Doctor</small>
      </h2>
      </div>
  
  <!-- .................................... $Contenido .................................... -->
  <section class="section-content section-contact section-color-graylighter">
    <div class="container">
      <div class="row">
        <div id="contenido">  
       <div class="span8">
	<h5>Por favor completa los siguientes datos</h5>
    

  	<form class="form-vertical" id="formDoctor">
		<div class="control-group">
	  		<input name="Email" type="text" class="span4 required email" id="Email" value="<?php //echo $generador->palabras();?><?php //echo rand(5, 15)?><?php //echo $generador->palabras();?>" placeholder="Email">
		  	<input name="Password" type="password" class="span4 required" id="Password"  placeholder="Password"> 
		</div>
	
		<div class="control-group">
			<input name="Nombre" type="text" class="span4 required" id="Nombre" placeholder="Nombre">
		  	<input name="Apellido" type="text" class="span4 required" id="Apellido"placeholder="Apellido">
		</div>	
        <div class="control-group">
                    <input name="telefono" type="text" class="required" id="telefono" style="width:55%" placeholder="telefono">              
		</div>	
		<div class="control-group">
	  		<input name="Direccion" type="text" class="required" id="Direccion" style="width:95%" placeholder="Dirección">              
		</div>			
	
		<div class="control-group">
			<span id="ciudadesCombo"> </span>				
		</div>
	
		<div class="control-group">              	
			<input name="celular" type="text" class="span4 required tlf" id="celular" value="<?php //echo rand(5, 2123456789)?>" placeholder="Teléfono">
		</div>
	
		<div class="control-group">         
			<button class="btn btn-primary" type="submit" id="enviar">Guardar</button>
			<button class="btn btn-default" type="reset" id="cancelar">Cancelar</button>
		</div>
        
  </form> <!--cierre del formulario !-->

	 <!-- ================= boton SIGUIENTE  =====================================================================  !-->
     <div class="control-group" style="display: none" id="siguiente">    
		<button class="btn btn-primary" type="botton" onClick="window.location='registrarDr2Foto.php'">Siguiente</button>
	 </div>
     
     <!-- ================= mensajes de EXITO o de ERROR===========================================================  !-->
     <div class="alert alert-success mensaje_form" style="display: none" id="mensaje">
		<button data-dismiss="alert" class="close" type="button">x</button>
		<strong>MENSAJE!</strong> <span class="textmensaje">Registro exitoso</span>          
	 </div>    
   	 
      
	 <div class="alert alert-danger mensaje_form" style="display: none" id="error1">
		<button data-dismiss="alert" class="close" type="button">x</button>
		<strong>MENSAJE!</strong> <span class="textmensaje">El password debe ser mayor de 6 caracteres</span>
	 </div>
     
	 <div class="alert alert-danger mensaje_form" style="display: none" id="error2">
		<button data-dismiss="alert" class="close" type="button">x</button>
		<strong>MENSAJE!</strong> <span class="textmensaje">El doctor ya está registrado</span>
	 </div>
     
</div><!--cierre de spam de formulario !-->
        </div>        
      </div>
    </div>
  </section>
    <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>