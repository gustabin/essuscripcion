<?php 
session_start();
if (empty($_SESSION['userID']))
	{
		header("Location: login.php");
	}
include "tools/corelib.php";
// conector de BD 
require_once('tools/mypathdb.php');
$_SESSION['valor'] = 1; //Activa la opcion del menu actual
include "header2.php";
include "menuSignin.php"; 
?>
    <!--Content-->
    <style type="text/css">
<!--
#content1 .container .row .col-sm-12 h3 {
	color: #000;
}
#content1 .container .row.margin-40 .col-sm-8 h4 {
	color: #000;
}
.subtitulo {
	color: #000;
}
#content1 .container .row.margin-40 .col-sm-4 h4 {
	color: #000;
}
#content1 .container .row.margin-40 .col-sm-4 p {
	color: #000;
}
.resaltado {
	color: #333;
}
-->
    </style>
    
<script type="text/javascript" language="javascript" src="<?php echo INCLUDES ?>js/jquery.form.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo INCLUDES ?>js/si.files.js"></script>

<script type='text/javascript'>                             // tablesorter
    $(document).ready(function() {
        $("#sTable").tablesorter({
            headers: {
                3: {   
                    sorter: false
                }
            }
        });
    });
</script>
<script type = "text/javascript">                            // tablesorter pagination
$(document).ready(function() {
    $('#sTable').tablesorter().tablesorterPager({container: $("#pager")}); 
}); 
</script>

<script Language="JavaScript">
    //Metodo para cargar los datos personales
    $("body").on('submit', '#formSuscriptor', function(event) {
		event.preventDefault()
		if ($('#formSuscriptor').valid()) {
			$.ajax({
				type: "POST",
				url: "ventaExaminar_Procesar.php",
				dataType: "json",
				data: $(this).serialize(),
				success: function(respuesta) {
					if (respuesta.error == 1) {
						$('#error').show();
						setTimeout(function() {
						$('#error').hide();
						}, 3000);
					}

					if (respuesta.exito == 1) {
						$('#exito').show();						
						setTimeout(function() {
						$('#exito').hide();
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
        <span class="resaltado">Essuscripcion</span> <small>Datos del suscriptor</small>
      </h2>
    </div>
  
  <!-- .................................... $Contenido .................................... -->
  <section class="section-content section-contact section-color-graylighter">  
      <div class="container">    
                
                <div id="sresults" class="col-md-12">     
                <div class="control-group">
		<button class="btn btn-primary" type="botton" onClick="window.location='<?php echo SERVER ?>ventas.php'"><< Atras</button> 
    </div> 
                 <!-- ================= mensajes de EXITO o de ERROR===========================================================  !--> 
	<div class="alert alert-danger mensaje_form" style="display: none" id="error">
		<button data-dismiss="alert" class="close" type="button">x</button>
		<strong>MENSAJE!</strong> <span class="textmensaje">Datos incompletos</span>
	 </div>
	 
	 <div class="alert alert-success mensaje_form control-group" style="display: none" id="exito">
		<button data-dismiss="alert" class="close" type="button">x</button>
		<strong>MENSAJE!</strong> <span class="textmensaje">Registro exitoso</span>
	 </div>		  
   			
<?php
		//================================================Recuperar registros tabla usuarios==================================================
		$userID = $_GET ['id'];
		
		$query = ("SELECT * FROM tbl_usuarios WHERE us_id= '$userID'");
		$resultado=mysql_query($query,$dbConn);
        while($data_us=mysql_fetch_array($resultado))
      {
		$plan = $data_us['us_plan'];
		if ($plan==0)
			{
			$plan="Periodo de prueba";
			}
        if ($plan==1)
			{
			$plan="Mensual";
			}
		if ($plan==2)
			{
			$plan="Trimestral";
			}
		if ($plan==3)
			{
			$plan="Semestral";
			}
		if ($plan==4)
			{
			$plan="Anual";
			}
	    ?>
        
        		<form class="form-vertical" id="formSuscriptor">
                
                        <div class="row show-grid">
                        <input id="user_id" name="user_id" type="hidden" value="<?php echo $data_us["us_id"]; ?>">
							<div class="col-md-6"><span class="show-grid-block">Email: <input name="email" type="text" class="span6 required" id="email" value="<?php echo $data_us["us_email"]; ?>" size="30" readonly="readonly" placeholder="email"></span></div>
						  <div class="col-md-6"><span class="show-grid-block">Plan: <?php echo $plan;?></span></div>							
						</div>
                        <div class="row show-grid">
							<div class="col-md-6"><span class="show-grid-block">Nombre: <input name="nombre" type="text" class="span6" id="nombre" value="<?php echo $data_us["us_nombre"]; ?>" size="25" placeholder="nombre"></span></div>
							<div class="col-md-6"><span class="show-grid-block">Apellido: <input name="apellido" type="text" class="span6" id="apellido" value="<?php echo $data_us["us_apellido"]; ?>" size="25" placeholder="apellido"></span></div>
						</div>
                        <div class="row show-grid">
							<div class="col-md-6"><span class="show-grid-block">Desde: <input name="desde" type="text" class="span6 required" id="desde" value="<?php echo $data_us["us_desde"]; ?>" size="8" readonly="readonly" placeholder="desde"></span></div>
							<div class="col-md-6"><span class="show-grid-block">Hasta: <input name="hasta" type="text" class="span6 required" id="hasta" value="<?php echo $data_us["us_hasta"]; ?>" size="8" placeholder="hasta"></span></div>
						</div>
                        <div class="row show-grid">
							<div class="col-md-4"><span class="show-grid-block">Subtotal: <input name="subtotal" type="text" class="span6" id="subtotal" value="<?php echo $data_us["us_subtotal"]; ?>" size="6" maxlength="9" placeholder="subtotal"></span></div>
							<div class="col-md-4"><span class="show-grid-block">IVA: <input name="iva" type="text" class="span6" id="iva" value="<?php echo $data_us["us_iva"]; ?>" size="5" maxlength="8" placeholder="iva"></span></div>
							<div class="col-md-4"><span class="show-grid-block">Total: <input name="total" type="text" class="span6" id="total" value="<?php echo $data_us["us_total"]; ?>" size="6" maxlength="9" placeholder="total"></span></div>
						</div>
                         <div class="row show-grid">
							<div class="col-md-4"><span class="show-grid-block">Empresa: <input name="empresa" type="text" class="span6" id="empresa" value="<?php echo $data_us["us_empresa"]; ?>" size="30" maxlength="30" placeholder="empresa"></span></div>
							<div class="col-md-4"><span class="show-grid-block">Cedula Rif: <input name="CedulaRif" type="text" class="span6" id="CedulaRif" value="<?php echo $data_us["us_cedulaRif"]; ?>" size="20" maxlength="20" placeholder="CedulaRif"></span></div>
                            
                            <div class="col-md-4"><span class="show-grid-block">Telefono: <input name="telefono" type="text" class="span6" id="telefono" value="<?php echo $data_us["us_telefono"]; ?>" size="11" maxlength="11" placeholder="telefono"></span></div>
							<div class="col-md-4"><span class="show-grid-block">Direccion: <input name="direccion" type="text" class="span6" id="direccion" value="<?php echo $data_us["us_direccion"]; ?>" size="40" maxlength="40" placeholder="direccion"></span></div>
						</div>
        <div class="control-group">         
			<button class="btn btn-primary" type="submit" id="enviar">Guardar</button>
			<button class="btn btn-default" type="reset" id="cancelar">Cancelar</button>
        </div>
                </form>
               
                
                
                
        <?php } // fin del bucle de instrucciones

mysql_free_result($resultado); // Liberamos los registros
?>
           
   
    </div>
    </div>    
</section>
						

  <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>