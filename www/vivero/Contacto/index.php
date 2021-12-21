<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Rellenar el formulario para enviar un correo.';	
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
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<meta charset="utf-8" />

		<!-- User defined head content such as meta tags and encoding options -->
		
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="Vivero" content="plantas,arboles,arbustos,abonos,macetas,tierras,sustratos,interior,esterior,jardineria,riego,ornamentales," />
		<meta name="Jesus Villalba" content="Paginas web,dominios,correos,redes sociales," />
		<meta name="Tienda Jardineria" content="plantas de interior,cubre macetas,herramientas,barro,ceramica,fitosanitarios," />
		<meta name="Vivero Marbella" content="Nueva Andalucia,Marbella,San Pedro," />
		<meta name="description" content="Contacto de Vivero Aspandem " />
		<meta name="robots" content="noindex, follow" />
		<meta name="generator" content="RapidWeaver" />
		<link rel="icon" href="http://viveroaspandem.es/favicon.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="http://viveroaspandem.es/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="http://viveroaspandem.es/apple-touch-icon.png" />
		

		<!-- User defined head content -->
		

		<!-- Meta tags -->
	  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

		<title>Contactanos</title>

		<!-- Load some fonts from Google's Font service -->
		<link href='https://fonts.googleapis.com/css?family=Open Sans:400,300,800|Noto Serif|Arvo' rel='stylesheet' type='text/css'>

		<!-- CSS stylesheets reset -->
	  <link rel="stylesheet" type="text/css" media="all" href="../rw_common/themes/tesla/consolidated-10.css?rwcache=641230566" />
		

		<!-- CSS for the Foundation framework's CSS that handles the responsive columnized layout -->
	  

	  <!-- Main Stylesheet -->
		

	  <!-- Loads Font Awesome v4.0.3 CSS from CDN -->
	  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	
		<!-- RapidWeaver Color Picker Stylesheet -->
		  

	  <!-- Theme specific media queries -->
		

		<!-- Base RapidWeaver javascript -->
		<script type="text/javascript" src="../rw_common/themes/tesla/javascript.js?rwcache=641230566"></script>

		<!-- jQuery 1.8 is included in the theme internally -->
	  <script src="../rw_common/themes/tesla/js/jquery.min.js?rwcache=641230566"></script>

	  <!-- Theme specific javascript, along with jQuery Easing and a few other elements -->
	  <script src="../rw_common/themes/tesla/js/elixir.js?rwcache=641230566"></script>

		<!-- Style variations -->
		

		<!-- User defined styles -->
		<style type="text/css" media="all">header{
	background-image:url(../resources/D3.png);}</style>

		<!-- User defined javascript -->
		

		<!-- Plugin injected code -->
		

	
	</head>
	
	<!-- This page was created with RapidWeaver from Realmac Software. http://www.realmacsoftware.com -->

	<body>

			<header role="banner">

				<!-- Site Logo -->
				<div id="logo" data-0="opacity: 1;" data-top-bottom="opacity: 0;" data-anchor-target="#logo">
			  	<img src="../rw_common/images/ASPANDEM AZUL CLARO.png" width="379" height="268" alt="Vivero Aspandem"/>  
				</div>
				
				<div id="title_wrapper">
						<!-- Site Title -->
						<h1 id="site_title" data-0="opacity: 1; top:0px;" data-600="opacity: 0; top: 80px;" data-anchor-target="#site_title">
							C O N T A C T O
						</h1>

						<!-- Site Slogan -->
						<h2 id="site_slogan" data-0="opacity: 1; top:0px;" data-600="opacity: 0; top: 80px;" data-anchor-target="#site_slogan">
							ASESORAMIENTO PERSONALIZADO
						</h2>

						<!-- Scroll down button -->
						<div id="scroll_down_button" data-0="opacity: 1; top:0px;" data-400="opacity: 0; top: 100px;" data-anchor-target="#scroll_down_button">
							<i class="fa fa-angle-down"></i>
						</div>
				</div>
				
				<!-- Top level navigation -->
				<div id="navigation_bar">
					<div class="row site_width">
						<div class="large-12 columns">
							<nav id="top_navigation"><ul><li><a href="../" rel="" class="currentAncestor parent">VIVERO ASPANDEM</a></li><li><a href="HTTP://ASPANDEM.ORG" rel="">ASPANDEM</a></li><li><a href="../Empleo/" rel="">SERVICIOS</a></li></ul></nav>
						</div>
					</div>
				</div>

			</header>

		<!-- Sub-navigation -->
		<div id="sub_navigation_bar">
			<div class="row site_width">
				<div class="large-12 columns">
					<nav id="sub_navigation"><ul><li><ul><li><a href="../Mapa/" rel="">UBICACIÓN</a></li><li><a href="../Plantas/" rel="">NUESTRAS PLANTAS</a></li><li><a href="./" rel="" id="current">CONTACTO</a></li><li><a href="../offsite/" rel="">RESEÑAS</a></li></ul></li></ul></nav>
				</div>
			</div>
		</div>

		<!-- Mobile Navigation -->
		<div id="mobile_navigation_toggle">
			<i id="mobile_navigation_toggle_icon" class="fa fa-bars"></i>
		</div>
		<nav id="mobile_navigation">
			<ul><li><a href="../" rel="" class="currentAncestor parent">VIVERO ASPANDEM</a><ul><li><a href="../Mapa/" rel="">UBICACIÓN</a></li><li><a href="../Plantas/" rel="">NUESTRAS PLANTAS</a></li><li><a href="./" rel="" id="current">CONTACTO</a></li><li><a href="../offsite/" rel="">RESEÑAS</a></li></ul></li><li><a href="HTTP://ASPANDEM.ORG" rel="">ASPANDEM</a></li><li><a href="../Empleo/" rel="">SERVICIOS</a></li></ul>
		</nav>

		<!-- Main Content area and sidebar -->
		<div class="row site_width" id="container">
			<section id="content"class="large-8 columns">
				
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

			</section>
			<aside id="sidebar" class="large-4 columns">
				<!-- Sidebar content -->
				<h4 id="sidebar_title">CONTACTO</h4>
				<div id="sidebar_content"><br /><img class="imageStyle" alt="Captura de pantalla 2020-02-05 a las 16.10.55" src="files/captura-de-pantalla-2020-02-05-a-las-16.10.55.png" width="281" height="364" /><br /><span style="font:20px ArialRoundedMTBold; color:#6ECE68;">Contacto:</span><br /><span style="font:18px Arial, Verdana, Helvetica, sans-serif; color:#F5430A;">Tfno: 952 81 26 73 <br />M&oacute;v:  674 37 75 77</span><span style="font:11px Verdana-Italic; "><em><br /></em></span><span style="font:20px ArialRoundedMTBold; color:#6ECE68;">E-mail: </span><span style="font:20px ArialRoundedMTBold; color:#347525;"> </span><span style="font:20px ArialRoundedMTBold; ">   </span><span style="font:14px Verdana-Italic; "><em>        &nbsp;<br /></em></span><span style="font:18px Arial, Verdana, Helvetica, sans-serif; "><a href="mailto:tienda@viveroaspandem.es">tienda@viveroaspandem.es</a></span><span style="font:14px Verdana-Italic; "><em><br /></em></span><span style="font:20px ArialRoundedMTBold; color:#6ECE68;">Direcci&oacute;n:</span><span style="font:14px Verdana-Italic; "><em><br /></em></span><span style="font:18px Arial, Verdana, Helvetica, sans-serif; "><a href="https://www.google.com/maps/dir//aspandem/@36.5041569,-5.0451816,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0xd7329fef9bbaa1d:0xfe0981f3b6aa9c14!2m2!1d-4.9751415!2d36.5041774">C/ Benito Perez Galdos. s/n<br />29660 Nueva Andaluc&iacute;a <br />Marbella</a></span><span style="font:18px Arial, Verdana, Helvetica, sans-serif; "><br /><br /></span></div>
				<div id="archives">
					
				</div>
			</aside>
		</div>

		<!-- Footer -->
		<footer class="row site_width">
			<div id="footer_content" class="large-12 columns">
				<div id="breadcrumb_container">
					<i class="fa fa-folder-open-o"></i> <span id="breadcrumb"></span>
				</div>
				Fijo: 952 81 26 73 M&oacute;vil: 674 37 75 77&nbsp;  &nbsp;E-Mail: tienda@viveroaspandem.es  <a href="#" id="rw_email_contact">Contacto</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":ti";var _rwObsfuscatedHref3 = "end";var _rwObsfuscatedHref4 = "a@v";var _rwObsfuscatedHref5 = "ive";var _rwObsfuscatedHref6 = "roa";var _rwObsfuscatedHref7 = "spa";var _rwObsfuscatedHref8 = "nde";var _rwObsfuscatedHref9 = "m.e";var _rwObsfuscatedHref10 = "s";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8+_rwObsfuscatedHref9+_rwObsfuscatedHref10; document.getElementById("rw_email_contact").href = _rwObsfuscatedHref;</script>
			</div>
		</footer>

		<!-- Scroll up button -->
		<div id="scroll_up_button"><i class="fa fa-angle-up"></i></div>

		<!-- Handles loading Skrollr, which helps in animating portions of the header area. -->
		<!-- We check to see if the user is on an mobile device or not, and only serve up -->
		<!-- the animations on non-mobile devices. -->
		<script>
			$elixir(window).load(function() {
			  if(!(/Android|iPhone|iPad|iPod|BlackBerry|Windows Phone/i).test(navigator.userAgent || navigator.vendor || window.opera)){
			      skrollr.init({
			          forceHeight: false
			      });
			  }
			});
		</script>

	</body>

</html>
