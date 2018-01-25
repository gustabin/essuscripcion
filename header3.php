<?php
$valor = $_SESSION['valor'];
if ($valor == '1') 
	{
	$inicio = "active";
	}
if ($valor == '2') 
	{
	$inmobiliario = "active";
	}
if ($valor == '3') 
	{
	$general = "active";
	}
if ($valor == '4') 
	{
	$tarifas = "active";
	}
if ($valor == '5') 
	{
	$secciones = "active";
	}
if ($valor == '6') 
	{
	$contacto = "active";
	}
if ($valor == '7') 
	{
	$ventas = "active";
	}
if ($valor == '8') 
	{
	$login = "active";
	}
if ($valor == '9') 
	{
	$registrar = "active";
	}		
if ($valor == '10') 
	{
	$grafica = "active";
	}
if ($valor == '11') 
	{
	$perfil = "active";
	}
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <title>El siglo | minianuncios</title> 
  <meta name="keywords" content="minianuncios elsiglo, anuncios clasificados, minianuncios clasificados, avisos clasificados, avisos clasificados online, anuncios clasificados online, anuncios periodico, aviso periodico, aviso periodico online, anuncio periodico online">
  <meta name="description" content="Publique su mini anuncio clasificado online y pague con su tarjeta de credito">
  <meta name="viewport" content="width=device-width">
  <meta name="author" content="Ing. Gustavo Arias">

  <!-- Styles -->
  <link href="css/style-t1.css" rel="stylesheet">
  <link rel="stylesheet" href="css/flexslider.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/custom-styles.css">
  <link rel="stylesheet" href="css/bootstrap-modal.css">
  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../../../apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../../../apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../../../apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="../../../../apple-touch-icon-57-precomposed.png">
  <link href="img/favicon.ico" rel="shortcut icon">
  <link href="css/jquery-ui.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="css/jquery.ui.datepicker.css" rel="stylesheet" media="screen" />
  <link href="css/jquery.ui.core.css" rel="stylesheet" media="screen" />
  <link href="css/jquery.ui.theme.css" rel="stylesheet" media="screen" />
  <!-- .................................... $scripts .................................... -->
  <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
  <script type="text/javascript" language="javascript" src="js/jquery-ui.js"></script> 
  <script src="js/jquery.min.js"></script>
  <script src="js/modernizr.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.hoverdir.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.masonry.min.js"></script>
  <script src="js/jquery.fitvids.min.js"></script>
  <script src="js/jquery.flexslider.min.js"></script>
  <!--script src="<?php// echo INCLUDES ?>js/script.js"></script!--> 
  <script type="text/javascript" language="javascript" src="js/jquery.validate.js"></script>
  <script type="text/javascript" language="javascript" src="js/jquery.ui.datepicker.js"></script>
  <script type="text/JavaScript" language="javascript" src="js/jquery.ui.core.js"></script>
  <script type="text/JavaScript" language="javascript" src="js/jquery.ui.widget.js"></script>
  <script type="text/JavaScript" language="javascript" src="js/datepiker_lenguaje.js"></script>
  <script type="text/JavaScript" language="javascript" src="js/jquery.maskedinput.js"></script>	  
  <script type="text/javascript" src="js/jquery.tablesorter.js"></script> 
  <script type="text/javascript" src="js/jquery.tablesorter.pager.js"></script> 
  <script src="js/main.js"></script>

    
    <script>
        $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "fade"
      });
    });
    </script>
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand img-responsive" href="index.html"><img src="img/Banner_Publicidad.png" alt="avisos el siglo online"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="<?php echo $inicio ?>"><a href="index.php">Inicio</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Secciones <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="<?php echo $inmobiliario ?>"><a href="inmobiliario.php">Indice inmobiliario</a></li>
                  <li class="<?php echo $general ?>"><a href="general.php">Indice general</a></li>
                  <li class="<?php echo $tarifas ?>"><a href="tarifas.php">Tarifas</a></li>
                  <li class="<?php echo $secciones ?>"><a href="secciones.php">Publicar</a></li>
                  <?php if ($_SESSION['tipo']==3)  {?>
                  	<li class="<?php echo $ventas ?>" 'disabled'><a href="ventas.php">Ventas</a></li>   
                    <li class="<?php echo $grafica ?>" 'disabled'><a href="ventasGrafica.php">Grafica</a></li>               
                  <?php } else { ?>
				  	<li class='disabled'>  <a href="ventas.php">Ventas</a></li>
                    <li class='disabled'>  <a href="ventasGrafica.php">Grafica</a></li>
				  <?php } ?>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario <b class="caret"></b></a>
                <ul class="dropdown-menu">
                <?php if (empty($_SESSION['userID'])) {  ?>
                  <li class="<?php echo $login ?>"><a href="login.php">Login</a></li>
                  <li class="<?php echo $registrar ?>"><a href="signup.php">Registrar</a></li>
				<?php } ?>
                <?php if (!empty($_SESSION['userID'])) {  ?>                  
                  <li class="<?php echo $perfil ?>"><a href="perfil.php">Perfil</a></li>
				<?php } ?>   
                  <li><a href="logout.php">Salir</a></li>
                </ul>
              </li>
              <li class="<?php echo $contacto ?>"><a href="contacto.php">Contacto</a></li>
              <li><span class="LetrasNegras"><?php echo $_SESSION['nombre'] ." ". $_SESSION['apellido']?></span></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
      
