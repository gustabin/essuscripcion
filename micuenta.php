<?php 
session_start();
if (empty($_SESSION['userID']))
	{
		header("Location: login.php");
	}
include "tools/corelib.php";
//$valor = 1; //Activa la opcion del menu actual
$_SESSION['valor'] = 10; //Activa la opcion del menu actual
include "header.php";
include "menuSignin.php"; 

?>
<style type="text/css">
<!--
.negra {
	font-weight: bold;
}
-->
</style>

			<div role="main" class="main">

				<section class="page-top">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<ul class="breadcrumb">
									<li><a href="index.php">Inicio</a></li>
									<li class="active">Mi cuenta</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h2>Perfil</h2>
							</div>
						</div>
					</div>
				</section>
		<?php
		$plan=$_SESSION['plan'];
		if ($plan==0)
			{
			$plan="Período de prueba";
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
				<div class="container">
					<h2><strong>Mi cuenta</strong> en essuscripcion.com el siglo en formato PDF.</h2>

					<div class="row">
						<div class="col-md-12">
							<p class="lead">
								Plan  <span class="alternative-font"><?php echo $plan;?></span> 
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<section class="panel form-wizard" id="w2">
								<div class="tabs">
									<ul class="nav nav-tabs nav-justify">
										<li class="active">
											<a href="#w2-account" data-toggle="tab" class="text-center">
												<span class="badge hidden-xs">Datos</span>
												Cuenta
											</a>
										</li>
									</ul>
										<div class="tab-content">
											<div id="w2-account" class="tab-pane active">
												<div class="form-group">
													<span class="negra">Nombre:</span> &nbsp; <?php echo $_SESSION['nombre']?>												  
											  </div>
												<div class="form-group">
													<span class="negra">Apellido:</span> &nbsp; <?php echo $_SESSION['apellido']?>
											  </div>
                                                <div class="form-group">
													<span class="negra">Correo: </span>&nbsp; <?php echo $_SESSION['email']?>
											  </div>
                                                <div class="form-group">
													<span class="negra">Empresa: </span>&nbsp; <?php echo $_SESSION['empresa']?>
											  </div>
                                                <div class="form-group">
													<span class="negra">Cédula ó Rif: </span>&nbsp; <?php echo $_SESSION['CedulaRif']?>
											  </div>
                                              <div class="form-group">
													<span class="negra">Teléfono: </span>&nbsp; <?php echo $_SESSION['telefono']?>
											  </div>												
                                                <div class="form-group">
													<span class="negra">Dirección: </span>&nbsp; <?php echo $_SESSION['direccion']?>													
											  </div>        
                                                <div class="form-group">
													<span class="negra">Ciudad: </span>&nbsp; <?php echo $_SESSION['ciudad']?>													
											  </div>                                 
											</div>																						
										</div>									
								</div>								
							</section>
						</div>

					</div>

				
			</div>

              <!-- .................................... $footer .................................... -->
  <?php include "footer.php"; ?>