<?php 
session_start();
if (empty($_SESSION['userID']))
	{
		header("Location: registrar.php");   
	}
else 
	{
	}
// plan 1 = mensual, plan 2 = trimestral, plan 3=semestral, plan 4 =anual
if (!empty($_GET ['plan'])) 
	{
	$_SESSION['plan']=$_GET ['plan'];
	}
else 
	{
	  if (empty($_SESSION['plan'])) 
	  	{
		  header("Location: tarifas.php");
	  	}
	}
if (empty($_SESSION['nombre']))
	{
		header("Location: registrarDatos.php");
	}
include "tools/corelib.php";
//$valor = 1; //Activa la opcion del menu actual
$_SESSION['valor'] = 6; //Activa la opcion del menu actual
error_reporting(1);
include "header.php";
include "menuSignin.php"; 
require_once ('lib/mercadopago.php');
if ($_SESSION['plan']==1) 
	{
		$valor = floatval (31200);
		$_SESSION['NombrePlan']="Mensual";
		$_SESSION['NumeroDeDias']=30;
	}
if ($_SESSION['plan']==2) 
	{
		$valor = floatval (56160);
		$_SESSION['NombrePlan']="Trimestral";
		$_SESSION['NumeroDeDias']=90;
	}

if ($_SESSION['plan']==3) 
	{
		$valor = floatval (112320);
		$_SESSION['NombrePlan']="Semestral";
		$_SESSION['NumeroDeDias']=180;
	}

if ($_SESSION['plan']==4) 
	{
		$valor = floatval (224640);
		$_SESSION['NombrePlan']="Anual";
		$_SESSION['NumeroDeDias']=365;
	}
$_SESSION['subtotal'] = $valor;
$_SESSION['iva'] = $_SESSION['subtotal'] * 0.12;
$_SESSION['total'] = $_SESSION['subtotal']+ $_SESSION['iva'];
$monto = floatval ($_SESSION['total']);
//$descripcion = $_SESSION['textoAviso'];
$descripcion = "Suscripcion PDF " . $_SESSION['nombre'] ." ". $_SESSION['apellido'];
//$mp = new MP('384765699688552', 'SWCUvzyYSxjorBkDXb99wy6PXdfQ8DKf'); //credenciales arias3000
$mp = new MP('3505046689785064', 'eYAYVdzzEM4tq2D7eKUbHt83VMcEVZuK'); //credenciales esavisos
//$mp->sandbox_mode(TRUE);
$mp->sandbox_mode(FALSE);
$preference_data = array(
    "items" => array(
       array(
           "title" => "Suscripcion PDF el siglo",
           "quantity" => 1,
           "currency_id" => "VEF",
		   "description" => $descripcion,
           "unit_price" => $monto
       )
    )
);
$preference = $mp->create_preference ($preference_data);
?>

<style type="text/css">
<!--
.main .page-top .container .row .col-md-12 h2 {
	color: #000;
}
#destacado {
	color: #000;
}
-->
</style>


<div role="main" class="main"> 

	<section class="page-top">
		<div class="container">			
			<div class="row">
				<div class="col-md-12">                            
					<h3>el siglo en PDF, la forma más fácil de leer</h3>
				</div>
			</div>
		</div>
	</section>

  <div class="container">
				<div class="col-sm-6; align:'center';">
						<div class="box-content">
							<h2><span id="destacado">Su suscripción a el diario el siglo en version PDF</span></h2>
                            
                                <p>
                          		  Plan: &nbsp; <span id="destacado"><?php echo $_SESSION['NombrePlan']; ?>&nbsp; </span> 
                                  <p></p> 
                                  Costo: &nbsp; <span id="destacado"><?php echo number_format($_SESSION['subtotal'], 2, '.', ''); ?>&nbsp; BsF</span>
                                  <p></p> 
                                  IVA: &nbsp; <span id="destacado"><?php echo number_format($_SESSION['iva'], 2, '.', '');  ?>&nbsp; BsF</span>
                                  <p></p> 
                                  TOTAL: &nbsp; <span id="destacado"><?php echo number_format($_SESSION['total'], 2, '.', ''); ?>  &nbsp; BsF</span>
  								  </h4>
				        	    </p>
									
  <script type="text/javascript" src="http://mp-tools.mlstatic.com/buttons/render.js"></script>

<script type="text/javascript">
function execute_my_onreturn (json) {
  if (json.collection_status=='approved'){
    alert ('Pago acreditado');
	window.location.href='pagar_Procesar.php';
  } else if(json.collection_status=='pending'){
    alert ('El usuario no completó el pago');
  } else if(json.collection_status=='in_process'){    
    alert ('El pago está siendo revisado');    
  } else if(json.collection_status=='rejected'){
    alert ('El pago fué rechazado, el usuario puede intentar nuevamente el pago');
  } else if(json.collection_status==null){
    alert ('El usuario no completó el proceso de pago, no se ha generado ningún pago');
  }
}
</script>                                


<div class="row col-sd-12">
    <div class="col-md-6">            
      <p>
      <a href="<?php echo $preference['response']['init_point']; ?><?php //echo $preference['response']['sandbox_init_point']; ?>" name="MP-Checkout" class="lightblue-M-Ov-VeAll" mp-mode="modal" onreturn="execute_my_onreturn">Pagar</a>
      </p>
    </div>
          
          <div class="col-md-6">
		  
		  <!--h2>Pagos <strong>internacionales</strong></h2>
				
		  <p></p>
		  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="479ZV8SXLG3B8">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form!-->
            
			
          </div>
		  
</div>
<p><a href="tarifas.php">Cancelar</a></p>







<script type="text/javascript">
    (function(){function $MPBR_load(){window.$MPBR_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;
    s.src = ("https:"==document.location.protocol?"https://www.mercadopago.com/org-img/jsapi/mptools/buttons/":"http://mp-tools.mlstatic.com/buttons/")+"render.js";
    var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPBR_loaded = true;})();}
    window.$MPBR_loaded !== true ? (window.attachEvent ? window.attachEvent('onload', $MPBR_load) : window.addEventListener('load', $MPBR_load, false)) : null;})();
</script>    
                  
                                				
				  </div>
                        <p></p>
                        <p></p>
				</div>
  </div>
</div>
		
 <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>