<?php 
include "tools/corelib.php";
$valor = $_SESSION['valor'];
if ($valor == '1') 
	{
	$inicio = "active";
	}
if ($valor == '2') 
	{
	$tarifas = "active";
	}
if ($valor == '3') 
	{
	$contacto = "active";
	}
if ($valor == '4') 
	{
	$login = "active";
	}
if ($valor == '5') 
	{
	$registrarse = "active";
	}
if ($valor == '6') 
	{
	$pagar = "active";
	}
if ($valor == '7') 
	{
	$ediciones = "active";
	}
if ($valor == '8') 
	{
	$ventas = "active";
	}
if ($valor == '9') 
	{
	$grafica = "active";
	}
if ($valor == '10') 
	{
	$micuenta = "active";
	}
?>
    <body>
		<div class="body">
			<header id="header">
				<div class="container">
					
					
						<img  src="img/logo3.png" alt="el siglo por suscripcion" width="264" height="93">
						
					
					<ul class="social-icons">
				    <li class="facebook"><a href="http://es-la.facebook.com/elsiglocomve" target="_blank" title="Facebook">Facebook</a></li>
						<li class="twitter"><a href="http://twitter.com/elsiglocomve" target="_blank" title="Twitter">Twitter</a></li>
						<li class="youtube"><a href="http://www.youtube.com/user/elsiglocomve" target="_blank" title="Linkedin">Linkedin</a></li>
                        <li class="instagram"><a href="http://instagram.com/elsiglocomve" target="_blank" title="Instagram">Instagram</a></li>
					</ul>
					<nav>
						<ul class="nav nav-pills nav-top">							
							<li class="phone">
								<span><i class="fa fa-phone"></i>(0243) 554-9265</span>                                
							</li>
						</ul>                        
					</nav>
                    <nav>						
                        <ul class="nav nav-pills nav-top">							
							<li class="phone">								
                                <span><i class="fa fa-calendar"></i><?php echo date("d-m-Y H:i");?></span>
							</li>
						</ul>
					</nav>
					
				</div>
				<div class="navbar-collapse nav-main-collapse collapse">
				  <div class="container">
						<nav class="nav-main mega-menu">
							<ul class="nav nav-pills nav-main" id="mainMenu">
								<li class="<?php echo $inicio ?>">
									<a href="index.php">Inicio</a>
								</li>
								<li class="<?php echo $tarifas ?>">
									<a href="tarifas.php">Tarifas</a>
								</li>                                
                                <li class="<?php echo $ediciones ?>">
									<a href="buscarEdicion.php">Ediciones</a>
								</li>								
								<li class="dropdown <?php echo $contacto ?>">
									<a class="dropdown-toggle" href="#">
										Contacto
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="dropdown-menu">
										 <li><a href="contacto.php">Contacto</a></li>
										<?php if ($_SESSION['tipo']==3)  {?>
                                        <li><a href="ventas.php">Ventas</a></li>   
                                        <li><a href="ventasGrafica.php">Grafica</a></li>               
										<?php } ?>
									</ul>
								</li>
								
								<?php
								$userID = $_SESSION['userID'];
								if(empty($userID))
								{?>
								<li class="<?php echo $login ?>">
									<a href="login.php">Login</a>
								</li>
                                <li class="<?php echo $registrarse ?>">
									<a href="registrar.php">Registrarse</a>
								</li>
								<?php
								}								
								?>
                                
                                
								<li class="<?php echo $pagar ?>">
									<a href="pagar.php">Pagar</a>
								</li>	
                                <?php								
								if(!empty($userID))
								{?>
								<li class="<?php echo $logout ?>">
									<a href="logout.php">Logout</a>
								</li>                                
								<?php
								}								

                                if ($_SESSION['vencido']==true)
									{?>
										<li><span class="alternative-font">EXPIRO SU SUSCRIPCION</span> </li>
									<?php
									}
								if(!empty($userID))
									{?>
										<li><a href="micuenta.php"><i class="fa fa-user">&nbsp;<?php echo $_SESSION['nombre'] ." ". $_SESSION['apellido']?></i></a></li>	
									<?php
                                    }
							
								?>								
						  </ul>
						</nav>
					</div>
				</div>
			</header>