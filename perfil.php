<?php 
session_start(); 
include "tools/corelib.php";
//$_SESSION['valor'] = 11; //Activa la opcion del menu actual
include "header2.php";
include "menuSignin.php";
require_once('tools/mypathdb.php');
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
    $("body").on('submit', '#actualizarUsuario', function(event) {
	event.preventDefault()
	if ($('#actualizarUsuario').valid()) {
	    $.ajax({
		type: "POST",
		url: "perfil_Procesar.php",
		dataType: "json",
		data: $(this).serialize(),
		success: function(respuesta) {
		    if (respuesta.error == 1) { //nunca ocurre
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
  <style type="text/css">
<!--
.titulo {
	color: #000;
}
.section-content.section-contact.section-color-graylighter .container .row .span8 h4 {
	color: #000;
}
.section-content.section-contact.section-color-graylighter .container .row .span6 h4 {
	color: #000;
}
.letrabonita {
	color: #000;
}
-->
  </style>
  
  <section class="section-breadcrumb section-color-graylighter">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="index.php">Inicio</a><span class="divider">/</span></li>
        <li class="active">Registrar</li>
      </ul>
    </div>
  </section>
  <!-- .................................... $Contact .................................... -->
  
    <div class="container" style="margin-top:10px">
      <h2 class="section-title">
        <span class="titulo">Perfil de</span> <small>usuario</small>
      </h2>
  </div>
  
  
  <?php
  	$userID= $_SESSION['userID'];
  	$query = mysql_query("SELECT * FROM tbl_usuarios WHERE us_id = '$userID'"); 
	//$query = mysql_query("SELECT * FROM tbl_usuarios WHERE us_email = '$email'"); 
	$dataUsuario = mysql_fetch_array($query);	
	
	if($dataUsuario == false) 
	{
		header("Location: login.php");
	}
	else
	{		
		$_SESSION['email'] = $dataUsuario['us_email']; 
		$_SESSION['clave'] = $dataUsuario['us_clave']; 
		$_SESSION['nombre'] = $dataUsuario['us_nombre']; 
		$_SESSION['apellido'] = $dataUsuario['us_apellido']; 
		$_SESSION['telefono'] = $dataUsuario['us_telefono']; 
		$_SESSION['empresa'] = $dataUsuario['us_empresa']; 
		$_SESSION['cedulaRif'] = $dataUsuario['us_cedulaRif']; 
		$_SESSION['direccion'] = $dataUsuario['us_direccion']; 
		$_SESSION['ciudad'] = $dataUsuario['us_ciudad']; 
	}
  ?>
  
  <!-- .................................... $Contact .................................... -->
  <section class="section-content section-contact section-color-graylighter">
    <div class="container">
      <div class="row">
        <div class="span8">
          <h4>Actualización de datos</h4>
          <form class="form-vertical" id="actualizarUsuario">
			<div class="control-group">
              Nombre: <input class="span4 required tdtextarea" id="Nombre" name="Nombre" value="<?php echo $_SESSION['nombre']?>" type="text" maxlength="40">
              Apellido: <input class="span4 required tdtextarea" id="Apellido" name="Apellido" value="<?php echo $_SESSION['apellido']?>" type="text" maxlength="40">
              Cédula o RIF: <input class="span4 required tdtextarea" id="CedulaRif" name="CedulaRif" value="<?php echo $_SESSION['cedulaRif']?>" type="text" maxlength="10">
            </div>
            <div class="control-group">
              Correo electrónico: <input class="span4 required email tdtextarea" id="Correo" name="Correo" value="<?php echo $_SESSION['email']?>" type="text" maxlength="50" disabled="disabled">
              Clave: <input name="Clave" type="password" class="span4 required tdtextarea" id="Clave" value="<?php echo $_SESSION['clave']?>" maxlength="20" minlength="6">
              Teléfono: <input name="telefono" type="text" class="span4 required tdtextarea" id="telefono" value="<?php echo $_SESSION['telefono']?>" maxlength="11" minlength="11">
            </div>
            <div class="control-group">
              Empresa (Opcional): <input class="span4 tdtextarea" id="Empresa" name="Empresa" value="<?php echo $_SESSION['empresa']?>" type="text" maxlength="50">
              Dirección: <input name="Direccion" type="text" class="span4 required tdtextarea" id="Direccion" value="<?php echo $_SESSION['direccion']?>" maxlength="100">
              Ciudad: <input name="Ciudad" type="text" class="span4 required tdtextarea" id="Ciudad" value="<?php echo $_SESSION['ciudad']?>" maxlength="100">
            </div>
			
            <div class="control-group">         
            <button class="btn btn-primary" type="submit">Actualizar</button>
			<button class="btn btn-default" type="reset">Cancelar</button>
			</div>
          </form>
          
			<div class="alert alert-success mensaje_form" style="display: none" id="mensaje">
				<button data-dismiss="alert" class="close" type="button">x</button>
				<strong>MENSAJE: </strong> <span class="textmensaje">Perfil actualizado exitosamente</span>
			 </div>
			 <div class="alert alert-danger mensaje_form" style="display: none" id="error1">
				<button data-dismiss="alert" class="close" type="button">x</button>
				<strong>MENSAJE: </strong> <span class="textmensaje">La clave debe ser mayor de 6 caracteres</span>
			 </div>
			 <div class="alert alert-danger mensaje_form" style="display: none" id="error2">
				<button data-dismiss="alert" class="close" type="button">x</button>
				<strong>MENSAJE: </strong> <span class="textmensaje">El usuario ya está registrado</span>
			 </div>
        </div>
        
        <div class="span4">
          <h4>Minianuncios clasificados el siglo Online.</h4>
          <p>
          <h5>La forma más fácil de anunciarse en el periodico.</h5>
		  <address>
            Gracias por preferirnos...
          </address>	
          <p class="log-in-info"><span class="letrabonita">Quieres publicar un minianuncio?</span> <a href="secciones.php" id="headerSignIn">Publica Ya!</a></p>	  
        </div>
        
      </div>
      
    </div>
    
  </section>
  <section class="call-to-action featured footer">
				<div class="container">
					<div class="row">
						<div class="center">
							<h3>publica tus <strong>avisos</strong> en el siglo en  todas <strong>partes;</strong> buscanos en la red! <a href="secciones.php" target="_blank" class="btn btn-lg btn-primary" data-appear-animation="bounceIn">publica ya!</a> <span class="arrow hlb hidden-xs hidden-sm hidden-md" data-appear-animation="rotateInUpLeft" style="top: -22px;"></span></h3>
						</div>
					</div>
				</div>
    </section>
  <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>