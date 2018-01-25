<?php 
session_start();
if (empty($_SESSION['userID']))
	{
		header("Location: login.php");
	}
else 
	{
	}
if ($_SESSION['vencido']==true)
	{
		header("Location: pagar.php");
	}
else 
	{
	}
include "tools/corelib.php";
//$valor = 1; //Activa la opcion del menu actual
$_SESSION['valor'] = 2; //Activa la opcion del menu actual
include "header2.php";
include "menuSignin.php"; 
//define('INCLUDES', "http://www.elsiglo.com.ve/wp-content/plugins/elsiglo/ediciones/includes/");

?>

  <script language="JavaScript" type="text/JavaScript">
	$(document).ready(function() {
                        $("#fecha_edicion").datepicker({
                            changeYear: true,
                            minDate: new Date(1998, 1 - 1, 1),
                            maxDate: '-0Y',
                            dateFormat: 'dd-mm-yy',
							defaultdate:'12-02-20',	
                            changeMonth: true,
                            changeYear: true,
                            yearRange: '-3:-0'
                        });					
                        
						})

    //Metodo para cargar el formulario 
    $("body").on('submit', '#formBuscarEdicion', function(event) {
	event.preventDefault()
	if ($('#formBuscarEdicion').valid()) {
	    $.ajax({
		type: "POST",
		url: "buscarEdicion_Procesar.php",
		dataType: "json",
		data: $(this).serialize(),
		success: function(respuesta) {
		    if (respuesta.error == 1) { 
			  $('#error').show();
			setTimeout(function() {
			  $('#error1').hide();
			}, 3000);
		    }
			  if (respuesta.exito == 1) {
			  $('#mensaje').show();
			  setTimeout(function() {
			  $('#mensaje').hide();
			}, 9000);
			  window.location.href='mostrarEdicion.php';
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
									<li class="active">Buscar</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Buscar edición</h2>
							</div>
						</div>
					</div>
				</section>
				
				
				<div class="container">
					<h2><strong>el siglo  </strong> en versión <span class="alternative-font">PDF</span> </h2>
					<div class="row">
						<div class="pricing-table">	
                        	<div class="col-md-9 col-sm-9">
								<div class="plan">
									<?php
										include('tools/mypathdb.php');
										$_SESSION['enlace'] = "<b>Lo sentimos aún no hemos publicado la versión para este día</b> <p></p> si gusta comuniquese con <a href='mailto:contacto@essuscripcion.com'> contacto@essuscripcion.com</a> ó <p></p> por el teléfono (0243) 554-9265 y le atenderemos de inmediato.";
										$hoy = date("d-m-Y");
										$fecha_edicion = "VI-1 ". $hoy; //solo esta tomando la version de MARACAY para el dia de hoy

										// ========================================Buscar los datos en la tabla tbl_edicionespdf ===============================
										$query = mysql_query("SELECT * FROM wp_h0q0ngyhbx_tbl_edicionespdf WHERE fecha='$fecha_edicion'");
										$data_edicion = mysql_fetch_array($query);	
										if(empty($data_edicion)) // =================== si no encuentra la fecha ============================================
										{
											
											$data = array("error" => '1'); 
											//die(json_encode($data));
											//mensaje de version no publicada aun
										}
										else
										{
											$_SESSION['fecha']  = $data_edicion['fecha']; 
											$_SESSION['enlace'] = $data_edicion['enlace'];
									
											//$data = array("exito" => '1'); 
											//die(json_encode($data));	
										}
										//desconectar();
										mysql_close();	//cerrar la conexion a la bd
									echo $_SESSION['enlace'];
									?>
								</div>
							</div>						
							<div class="col-md-3 col-sm-3">
								<div class="plan">
									<h3>Selecciona una fecha a consultar</h3>
                                    <form class="form-vertical" id="formBuscarEdicion">
                                      <div class="control-group">
                                        <input class="span2 required" id="fecha_edicion" name="fecha_edicion" placeholder="Fecha" type="text" readonly="readonly">
                                      </div>
                                      <p></p>
                                      <div class="control-group">         
                                      <button class="btn btn-primary" type="submit">Buscar</button>
                                      <button class="btn btn-default" type="reset">Cancelar</button>
                                      </div>
                                    </form>
									<ul>
										<li><div class="alert alert-success mensaje_form" style="display: none" id="mensaje">
                                            <button data-dismiss="alert" class="close" type="button">x</button>
                                            <strong>MENSAJE: </strong> <span class="textmensaje">Edición encontrada</span>
                                         </div></li> 
										<li><div class="alert alert-danger mensaje_form" style="display: none" id="error">
                                            <button data-dismiss="alert" class="close" type="button">x</button>
                                            <strong>MENSAJE: </strong> <span class="textmensaje">No hay edición para esa fecha, intentelo con otra</span>
                                         </div></li>									
									</ul> 
								</div>
							</div>
						</div>
					</div>
			</div>

              <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>