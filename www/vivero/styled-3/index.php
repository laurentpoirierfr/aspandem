<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Rellena el Formulario.';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = ' ';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml">
 <head>

   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
   
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="vivero" content="plantas,flores,tierras,sustratos,abonos,macetas" />
		<meta name="plantas" content="sunpatiens,alegrias,geranios,gitanillas,plumbagos,abelias,cactus," />
		<meta name="arbustos" content="gazania,metrosidero,romero,lavanda,aromaticas,tomillo,albahaca,agapanto,romero" />
		<meta name="arboles" content="palmeras,photinias,arecas,kentia" />
		<meta name="palmaceas" content="canariensis," />
		<meta name="macetas" content="ceramica,barro,plastico,jardinera" />
		<meta name="tienda" content="decoraci&oacute;n" />
		<meta name="mantenimiento" content="jardines,riegos" />
		<meta name="Asesoramiento" content="Planteamiento de Jardines" />
		<meta name="frutales" content="arboles,limon,naranjo,lima,manzano,aguacate" />
		<meta name="centro jardineria" content="marbella,san pedro alcantara,nueva andalucia,la campana" />
		<meta name="discapacidad" content="personas,intelectual,tareas,ocupacionales,formaci&oacute;n" />
		<meta name="Centro especial de empleo" content="discapacidad" />
		<meta name="marbella" content="nueva andalucia,estepona,fuengirola,benahavis,san pedro" />
		<meta name="Aspandem" content="vivero,tienda" />
		<meta name="Jesus Villalba" content="Paginas web,dominios,correos." />
		<meta name="Tienda Jardineria" content="plantas de interior,cubre macetas,herramientas" />
		<meta name="description" content="Productores de Plantas para Jardin, Centro de Terapia Ocupacional para Personas con DIscapacidad, Vendemos plantas para todo tipo de jardines en Marbella y San Pedro-29660 Marbella, Abonos,Tierras y Sustratos" />
		<meta name="robots" content="index, follow" />
		<meta name="generator" content="RapidWeaver" />
		<link rel="icon" href="http://viveroaspandem.es/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="http://viveroaspandem.es/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="http://viveroaspandem.es/apple-touch-icon.png" />
		<!-- User defined head content such as meta tags and encoding options -->
	<title>CONTACTO | Vivero Aspandem</title>
	
	<!-- Google's Font service -->		
	<link href='https://fonts.googleapis.com/css?family=Raleway:400|Ruluko|Open%20Sans%20Condensed:300|Bree%20Serif|?rwcache=557655949' rel='stylesheet' type='text/css'>  
	<!-- Awesome Font - Icons -->  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css"> 
		   		   
	<link rel="stylesheet" type="text/css" media="all" href="../rw_common/themes/lander/consolidated-10.css?rwcache=557655949" />
		
	
	
	<!-- Style variations - these are set up in the theme.plist -->
	<!-- User defined styles -->
			
	 <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
	 <!-- jquery 1.11.0 embedded -->
	 <script type="text/javascript" src="../rw_common/themes/lander/js/jquery.min.js?rwcache=557655949"></script>	  
     <script type="text/javascript" src="../rw_common/themes/lander/javascript.js?rwcache=557655949"></script>
	 <script type="text/javascript" src="../rw_common/themes/lander/js/box.js?rwcache=557655949"></script>
	 <script type="text/javascript" src="../rw_common/themes/lander/js/multithemes.js?rwcache=557655949"></script> 
	 
	<!-- User defined javascript -->
	
	
	
</head>
	
<!-- This page was created with RapidWeaver from Realmac Software. http://www.realmacsoftware.com -->

<body>
<div id="container"><!-- Start container -->	 
<!--box trigger-->
<div id="drop" class="togglebox">
    <i class="fa fa-plus-square-o"></i>
  </div>
<div class="clearer"></div>
 <!--drop nav --> 
  <div id="accordion"><!-- BOX-->	 
     <div id="navcontainer_box">
     <div id="navcontainer_opacity"></div>
       <div id="navcontainer"><ul><li><a href="../" rel="" class="currentAncestor parent">INICIO</a><ul><li><a href="../styled/" rel="">QUIENES SOMOS</a></li><li><a href="../styled-7/" rel="">NUESTRAS PLANTAS</a></li><li><a href="../styled-9/" rel="">COMO LLEGAR</a></li><li><a href="./" rel="" id="current">CONTACTO</a></li></ul></li><li><a href="../styled-8/" rel="" class="parent">LA TIENDA ASPANDEM</a><ul><li><a href="../styled-8/styled-4/" rel="">TALLER DE MADERA</a></li><li><a href="../styled-8/styled-2/" rel="">ARTES GRAFICAS</a></li><li><a href="../styled-8/styled-5/" rel="">TALLER DE COSTURA</a></li><li><a href="../styled-8/styled-6/" rel="">LAVANDERIA</a></li></ul></li><li><a href="../sitemap/" rel="">SITE MAP</a></li></ul></div>
      </div>
    </div><!-- BOX END--> 
   <div class="clearer"></div>    
  <div id="headerbox">  
   <div id="rw-banner-image"> </div>    
    <div id="banner_grid"></div>        
      <div id="pageHeader"><!-- Start page header -->
     <div id="logo"><a href="http://viveroaspandem.es/"></a></div>
	  <div id="fade_titles">	
	   <h1>Vivero Aspandem</h1>
	   <h2>Al Servicio de las Personas con Discapacidad</h2></div>
    </div><!-- End page header -->        
  <div id="breadcrumbcontainer_box">  
    <div id="opacity_background"></div>
     <div id="breadcrumbcontainer">   
        
      </div><!-- End breadcrumb -->
    </div><!-- End breadcrumbcontainer_box -->  
  </div><!-- End headerbox-->     
 <div id="global_width">	 	
	 <div id="contentContainer"><!-- Start main content wrapper -->
		 <div id="content"><!-- Start content -->
		   
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form class="rw-contact-form" action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Nombre</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Correo Electronico</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Asunto</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Mensaje</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="Borrar" />
		<input class="form-input-button" type="submit" name="submitButton" value="Enviar" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>

		 </div><!-- End content -->
	 </div><!-- End main content wrapper -->
  <div id="sidebarBackground"></div>
<div id="sidebarContainer"><!-- Start Sidebar wrapper -->
  <div class="sideHeader">CONTACTO</div><!-- Sidebar header -->
	 <div id="sidebar"><!-- Start sidebar content -->
	  <!-- sidebar content such as the blog archive links -->
	 <div class="clearer"></div>
		<span style="font:18px Arial, Verdana, Helvetica, sans-serif; "><a href="../" title="INICIO">INICIO</a></span><span style="font:18px Arial, Verdana, Helvetica, sans-serif; "><br /></span><span style="font:18px Arial, Verdana, Helvetica, sans-serif; "><a href="../styled/" title="QUIENES SOMOS">QUIENES SOMOS</a></span><span style="font:18px Arial, Verdana, Helvetica, sans-serif; "><br /></span><span style="font:18px Arial, Verdana, Helvetica, sans-serif; "><a href="../styled-7/" title="NUESTRAS PLANTAS">NUESTRAS PLANTAS</a></span><span style="font:18px Arial, Verdana, Helvetica, sans-serif; "><br /></span><span style="font:18px Arial, Verdana, Helvetica, sans-serif; "><a href="../styled-9/" title="COMO LLEGAR">COMO LLEGAR</a></span><span style="font:18px Arial, Verdana, Helvetica, sans-serif; "><br /></span><span style="font:18px Arial, Verdana, Helvetica, sans-serif; "><a href="./" title="CONTACTO">CONTACTO</a></span><span style="font:18px Arial, Verdana, Helvetica, sans-serif; "><br /></span><span style="font:18px Arial, Verdana, Helvetica, sans-serif; "><a href="../styled-8/" title="LA TIENDA ASPANDEM">LA TIENDA ASPANDEM</a></span><br /><br /><img class="imageStyle" alt="IMG_0288" src="files/img_0288.jpg" width="202" height="152" /><br /><span style="font:20px ArialRoundedMTBold; color:#6ECE68;">Contacto:</span><br /><span style="font:18px Arial, Verdana, Helvetica, sans-serif; color:#C4EC9F;">Fijo   :   952 81 26 73 <br />Mvi :      674 37 75 77</span><span style="font:11px Verdana-Italic; "><em><br /></em></span><span style="font:20px ArialRoundedMTBold; color:#6ECE68;">Correo: </span><span style="font:20px ArialRoundedMTBold; color:#347525;"> </span><span style="font:20px ArialRoundedMTBold; ">   </span><span style="font:14px Verdana-Italic; "><em>        &nbsp;<br /></em></span><span style="font:18px Arial, Verdana, Helvetica, sans-serif; "><a href="mailto:tienda@viveroaspandem.es">tienda@viveroaspandem.es</a></span><span style="font:14px Verdana-Italic; "><em><br /></em></span><span style="font:20px ArialRoundedMTBold; color:#6ECE68;">Direcci&oacute;n:</span><span style="font:14px Verdana-Italic; "><em><br /></em></span><span style="font:18px Arial, Verdana, Helvetica, sans-serif; "><a href="https://www.google.com/maps/dir//aspandem/@36.5041569,-5.0451816,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0xd7329fef9bbaa1d:0xfe0981f3b6aa9c14!2m2!1d-4.9751415!2d36.5041774">C/ Benito Perez Galdos. s/n<br />29660 Nueva Andaluc&iacute;a <br />Marbella</a></span><span style="font:18px Arial, Verdana, Helvetica, sans-serif; "><br /></span><span style="font:11px Verdana-Italic; "><em><br /></em></span><!-- sidebar content you enter in the page inspector -->		
     </div><!-- End sidebar content -->
   </div><!-- End sidebar wrapper -->
 </div><!-- global_width -->
<div class="clearer"></div>	
  <div id="footer"><!-- Start Footer -->
   <div class="footer_breadcrumbcontainer"> </div>
	  <p>Fijo: 952 81 26 73 M&oacute;vil: 674 37 75 77&nbsp;  &nbsp;Correo Electronico: tienda@viveroaspandem.es </p>
  </div><!-- End Footer -->
</div><!-- End container -->

 <div id="up"><a href="#up"><span><i class="fa fa-angle-up"></i></span></a></div>

<!-- trigger options in multithemes.js -->
<div id="banner_parallax_on_off" class="settings"></div>
<div id="menuOpened" class="settings"></div>
<div id="banner_fade_in" class="settings"></div>

<!-- theme by http://www.multithemes.com -->
</body>
</html>
