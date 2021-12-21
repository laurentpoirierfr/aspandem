<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Presupuestos sin compromiso';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = 'Gracias por contar con nosotros y con nuestra misi&oacute;n';
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
		<meta name="Vivero" content="plantas,arboles,arbustos,abonos,macetas,tierras,sustratos,interior,esterior,jardineria,riego,ornamentales," />
		<meta name="Jesus Villalba" content="Paginas web,dominios,correos." />
		<meta name="Tienda Jardineria" content="plantas de interior,cubre macetas,herramientas" />
		<meta name="robots" content="noindex, follow" />
		<meta name="generator" content="RapidWeaver" />
		<link rel="apple-touch-icon" href="http://viveroaspandem.es/apple-touch-icon.png" />
		<!-- User defined head content such as meta tags and encoding options -->
	<title>CONTACTO | VIVERO ASPANDEM</title>
	
	<!-- Google's Font service -->		
	<link href='https://fonts.googleapis.com/css?family=Raleway:400|Ruluko|Open%20Sans%20Condensed:300|Bree%20Serif|?rwcache=555584048' rel='stylesheet' type='text/css'>  
	<!-- Awesome Font - Icons -->  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css"> 
		   		   
	<link rel="stylesheet" type="text/css" media="all" href="../rw_common/themes/lander/consolidated.css?rwcache=555584048" />
		
	
	
	<!-- Style variations - these are set up in the theme.plist -->
	<!-- User defined styles -->
			
	 <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
	 <!-- jquery 1.11.0 embedded -->
	 <script type="text/javascript" src="../rw_common/themes/lander/js/jquery.min.js?rwcache=555584048"></script>	  
     <script type="text/javascript" src="../rw_common/themes/lander/javascript.js?rwcache=555584048"></script>
	 <script type="text/javascript" src="../rw_common/themes/lander/js/box.js?rwcache=555584048"></script>
	 <script type="text/javascript" src="../rw_common/themes/lander/js/multithemes.js?rwcache=555584048"></script> 
	 
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
       <div id="navcontainer"><ul><li><a href="../" rel="" class="currentAncestor parent">INICIO</a><ul><li><a href="../styled-3/page10.html" rel="">QUIENES SOMOS</a></li><li><a href="../Fotos/page3.html" rel="">NUESTRAS PLANTAS</a></li><li><a href="page1.php" rel="" id="current">CONTACTO</a></li><li><a href="../Aspandem/page2.html" rel="">ASPANDEM</a></li></ul></li></ul></div>
      </div>
    </div><!-- BOX END--> 
   <div class="clearer"></div>    
  <div id="headerbox">  
   <div id="rw-banner-image"> </div>    
    <div id="banner_grid"></div>        
      <div id="pageHeader"><!-- Start page header -->
     <div id="logo"><a href="http://viveroaspandem.es/"></a></div>
	  <div id="fade_titles">	
	   <h1>VIVERO ASPANDEM</h1>
	   <h2>CENTRO ESPECIAL EMPLEO PARA PERSONAS CON DISCAPACIDAD</h2></div>
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
		<label>Nombre</label> <br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Email</label> <br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Asunto</label> <br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Mensage</label> <br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		
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
  <div class="sideHeader">Contacto</div><!-- Sidebar header -->
	 <div id="sidebar"><!-- Start sidebar content -->
	  <!-- sidebar content such as the blog archive links -->
	 <div class="clearer"></div>
		<a href="../" title="INICIO">INICIO</a><br /><a href="../styled-3/page10.html" title="QUIENES SOMOS">QUIENES SOMOS</a><br /><a href="../Fotos/page3.html" title="NUESTRAS PLANTAS">NUESTRAS PLANTAS</a><br /><br /><br /><br /><span style="font:14px &#39;Lucida Grande&#39;, LucidaGrande, Verdana, sans-serif; color:#D2D2D2;">Contactos:</span><span style="font:14px &#39;Lucida Grande&#39;, LucidaGrande, Verdana, sans-serif; color:#D2D2D2;"><br /></span><span style="font:11px Verdana-Italic; color:#3FBC2E;"><em>Fijo : 952 81 26 73 </em></span><span style="font:11px Verdana-Italic; color:#3FBC2E;"><em><br /></em></span><span style="font:11px Verdana-Italic; color:#3FBC2E;"><em>Mvi : 674 37 75 77</em></span><span style="font:11px Verdana-Italic; color:#D2D2D2;"><em><br /></em></span><span style="font:11px Verdana, sans-serif; color:#D2D2D2;">Correo: </span><span style="font:11px Verdana-Italic; color:#D2D2D2;"><em>&nbsp;</em></span><span style="font:11px Verdana-Italic; color:#D2D2D2;"><em><br /></em></span><span style="font:12px Verdana-Italic; color:#5FC755;"><em><a href="mailto:tienda@viveroaspandem.es">tienda@viveroaspandem.es</a></em></span><span style="font:11px Verdana-Italic; color:#D2D2D2;"><em><br /></em></span><span style="font:11px Verdana, sans-serif; color:#D2D2D2;">Direcci&oacute;n:</span><span style="font:11px Verdana-Italic; color:#D2D2D2;"><em><br /></em></span><span style="font:11px Verdana-Italic; color:#5FC755;"><em><a href="https://www.google.com/maps/dir//aspandem/@36.5041569,-5.0451816,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0xd7329fef9bbaa1d:0xfe0981f3b6aa9c14!2m2!1d-4.9751415!2d36.5041774">C/ Benito Perez Galdos. s/n</a></em></span><span style="font:11px Verdana-Italic; color:#5FC755;"><em><a href="https://www.google.com/maps/dir//aspandem/@36.5041569,-5.0451816,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0xd7329fef9bbaa1d:0xfe0981f3b6aa9c14!2m2!1d-4.9751415!2d36.5041774"><br /></a></em></span><span style="font:11px Verdana-Italic; color:#5FC755;"><em><a href="https://www.google.com/maps/dir//aspandem/@36.5041569,-5.0451816,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0xd7329fef9bbaa1d:0xfe0981f3b6aa9c14!2m2!1d-4.9751415!2d36.5041774">29660 Nueva Andaluc&iacute;a </a></em></span><span style="font:11px Verdana-Italic; color:#5FC755;"><em><a href="https://www.google.com/maps/dir//aspandem/@36.5041569,-5.0451816,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0xd7329fef9bbaa1d:0xfe0981f3b6aa9c14!2m2!1d-4.9751415!2d36.5041774"><br /></a></em></span><span style="font:11px Verdana-Italic; color:#5FC755;"><em><a href="https://www.google.com/maps/dir//aspandem/@36.5041569,-5.0451816,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0xd7329fef9bbaa1d:0xfe0981f3b6aa9c14!2m2!1d-4.9751415!2d36.5041774">Marbella</a></em></span><span style="font:11px Verdana-Italic; color:#D2D2D2;"><em><br /></em></span><!-- sidebar content you enter in the page inspector -->		
     </div><!-- End sidebar content -->
   </div><!-- End sidebar wrapper -->
 </div><!-- global_width -->
<div class="clearer"></div>	
  <div id="footer"><!-- Start Footer -->
   <div class="footer_breadcrumbcontainer"> </div>
	  <p>Vivero Aspandem <a href="#" id="rw_email_contact">Contacto</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":ti";var _rwObsfuscatedHref3 = "end";var _rwObsfuscatedHref4 = "a@v";var _rwObsfuscatedHref5 = "ive";var _rwObsfuscatedHref6 = "roa";var _rwObsfuscatedHref7 = "spa";var _rwObsfuscatedHref8 = "nde";var _rwObsfuscatedHref9 = "m.e";var _rwObsfuscatedHref10 = "s";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8+_rwObsfuscatedHref9+_rwObsfuscatedHref10; document.getElementById("rw_email_contact").href = _rwObsfuscatedHref;</script></p>
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
