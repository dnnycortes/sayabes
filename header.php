<?php
/**
 * La cabecera del tema
 *
 * Muestra todas las etiquetas meta necesarias para que el tema funcione
 *
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

	<meta name="apple-mobile-web-app-capable" content="yes">
	
	<!-- Hace que la barra de status aparezca negra con texto blanco. -->
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	
	<!-- Deshabilita la detección automática de números de teléfono. -->
	<meta name="format-detection" content="telephone=no">
	
	<!-- Pone el sitio en el tamaño que debe ser y evita que el usuario pueda hacer zoom en la página. -->
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	
	<!-- Iconos para el navegador-->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<link rel="bookmark" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	
	<!-- Iconos para ipad e iphone -->
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/icons/apple-touch-icon-144x144-precomposed.png">

	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php bloginfo( 'name' ); ?> <?php wp_title( '|', true, 'left' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
	
</head>
<body <?php body_class($class); ?> class="loading">
	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

<header class="main-header">
	<div class="main-width">
		<h1>
			<a href="<?php bloginfo('url'); ?>"><?php bloginfo( 'name' ); ?></a>
		</h1>
		<a href="javascript:void(0);" class="menu-toggle"> Menu </a>
		<div class="social-icons">
			<a href="https://www.facebook.com/pharmaclims/" target="_blank" class="social facebook">facebook</a>
			<a href="https://www.linkedin.com/company/pharma-clim-services-s.a-de-c.v/" target="_blank" class="social instagram">instagram</a>
		</div>
	</div>
</header>

<div class="main-menu">
	<a href="javascript:void(0);" class="btn-close">Cerrar</a>
	<br class="clear">
	<?php wp_nav_menu(array('theme_location' => 'primary'));?>
</div><!-- .main-menu -->

