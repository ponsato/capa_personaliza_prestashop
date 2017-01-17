<?php 
// Conecto con la base de datos de prestashop
	$hostname = 'localhost';
    $nombreUsuario = 'bn_prestashop';
    $contrasena = '4c2b5a4d28';
    $nombre_base_datos = 'tienda17';

    $conexion = mysqli_connect($hostname, $nombreUsuario , $contrasena, $nombre_base_datos);
    if($conexion->connect_error) {
        die('Ha fallado la conexión: ' . $conexion->connect_error);
    }
	// Obtengo los valores establecidos en la base de datos

		/*  Para Barra de navegación */
	$header_nav = "SELECT color_header_nav FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_header_nav = mysqli_query($conexion, $header_nav) or die (mysqli_error());
	if (!$color_header_nav) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($f = mysqli_fetch_array($color_header_nav)) {
			$valor_header_nav = $f[0];
		}
	}
	$link_header_nav = "SELECT link_header_nav FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_link_header_nav = mysqli_query($conexion, $link_header_nav) or die (mysqli_error());
	if (!$color_link_header_nav) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($f = mysqli_fetch_array($color_link_header_nav)) {
			$valor_link_header_nav = $f[0];
		}
	}
	$link_header_nav_hover = "SELECT link_header_nav_hover FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_link_header_nav_hover = mysqli_query($conexion, $link_header_nav_hover) or die (mysqli_error());
	if (!$color_link_header_nav_hover) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($f = mysqli_fetch_array($color_link_header_nav_hover)) {
			$valor_link_header_nav_hover = $f[0];
		}
	}
	$link_header_nav_visited = "SELECT link_header_nav_visited FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_link_header_nav_visited = mysqli_query($conexion, $link_header_nav_visited) or die (mysqli_error());
	if (!$color_link_header_nav_visited) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($f = mysqli_fetch_array($color_link_header_nav_visited)) {
			$valor_link_header_nav_visited = $f[0];
		}
	}

		/* Para Cabecera */
	$header_top = "SELECT color_header_top FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_header_top = mysqli_query($conexion, $header_top) or die (mysqli_error());
	if (!$color_header_top) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($j = mysqli_fetch_array($color_header_top)) {
			$valor_header_top = $j[0];
		}
	}
	$link_header_top = "SELECT link_header_top FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_link_header_top = mysqli_query($conexion, $link_header_top) or die (mysqli_error());
	if (!$color_link_header_top) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($f = mysqli_fetch_array($color_link_header_top)) {
			$valor_link_header_top = $f[0];
		}
	}
	$link_header_top_hover = "SELECT link_header_top_hover FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_link_header_top_hover = mysqli_query($conexion, $link_header_top_hover) or die (mysqli_error());
	if (!$color_link_header_top_hover) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($f = mysqli_fetch_array($color_link_header_top_hover)) {
			$valor_link_header_top_hover = $f[0];
		}
	}
	$link_header_top_visited = "SELECT link_header_top_visited FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_link_header_top_visited = mysqli_query($conexion, $link_header_top_visited) or die (mysqli_error());
	if (!$color_link_header_top_visited) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($f = mysqli_fetch_array($color_link_header_top_visited)) {
			$valor_link_header_top_visited = $f[0];
		}
	}
	$menu_drop_background = "SELECT menu_drop_background FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_menu_drop_background = mysqli_query($conexion, $menu_drop_background) or die (mysqli_error());
	if (!$color_menu_drop_background) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($f = mysqli_fetch_array($color_menu_drop_background)) {
			$valor_menu_drop_background = $f[0];
		}
	}

		/* Para Cuerpo */
	$body_background = "SELECT color_body_background FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_body_background = mysqli_query($conexion, $body_background) or die (mysqli_error());
	if (!$color_body_background) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($k = mysqli_fetch_array($color_body_background)) {
			$valor_body_background = $k[0];
		}
	}
	$section_wrapper = "SELECT color_section_wrapper FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_section_wrapper = mysqli_query($conexion, $section_wrapper) or die (mysqli_error());
	if (!$color_section_wrapper) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($m = mysqli_fetch_array($color_section_wrapper)) {
			$valor_section_wrapper = $m[0];
		}
	}
	$titles = "SELECT color_titles FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_titles = mysqli_query($conexion, $titles) or die (mysqli_error());
	if (!$color_titles) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($m = mysqli_fetch_array($color_titles)) {
			$valor_color_titles = $m[0];
		}
	}
	$body_text = "SELECT color_body_text FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_body_text = mysqli_query($conexion, $body_text) or die (mysqli_error());
	if (!$color_body_text) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($m = mysqli_fetch_array($color_body_text)) {
			$valor_color_body_text = $m[0];
		}
	}
	$link_body = "SELECT link_body FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_link_body = mysqli_query($conexion, $link_body) or die (mysqli_error());
	if (!$color_link_body) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($m = mysqli_fetch_array($color_link_body)) {
			$valor_link_body = $m[0];
		}
	}
	$link_body_hover = "SELECT link_body_hover FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_link_body_hover = mysqli_query($conexion, $link_body_hover) or die (mysqli_error());
	if (!$color_link_body_hover) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($m = mysqli_fetch_array($color_link_body_hover)) {
			$valor_link_body_hover = $m[0];
		}
	}
	$link_body_visited = "SELECT link_body_visited FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_link_body_visited = mysqli_query($conexion, $link_body_visited) or die (mysqli_error());
	if (!$color_link_body_visited) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($m = mysqli_fetch_array($color_link_body_visited)) {
			$valor_link_body_visited = $m[0];
		}
	}

		/* Para Footer_background */
	$footer_background = "SELECT color_footer_background FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_footer_background = mysqli_query($conexion, $footer_background) or die (mysqli_error());
	if (!$color_footer_background) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($l = mysqli_fetch_array($color_footer_background)) {
			$valor_footer_background = $l[0];
		}
	}
	$footer_text_color_h3 = "SELECT color_footer_text_color_h3 FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_footer_text_color_h3 = mysqli_query($conexion, $footer_text_color_h3) or die (mysqli_error());
	if (!$color_footer_text_color_h3) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($o = mysqli_fetch_array($color_footer_text_color_h3)) {
			$valor_footer_text_color_h3 = $o[0];
		}
	}
	$footer_text_color = "SELECT color_footer_text FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_footer_text = mysqli_query($conexion, $footer_text_color) or die (mysqli_error());
	if (!$color_footer_text) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($o = mysqli_fetch_array($color_footer_text)) {
			$valor_color_footer_text = $o[0];
		}
	}
	$link_footer = "SELECT link_footer FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_link_footer = mysqli_query($conexion, $link_footer) or die (mysqli_error());
	if (!$color_link_footer) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($m = mysqli_fetch_array($color_link_footer)) {
			$valor_link_footer = $m[0];
		}
	}
	$link_footer_hover = "SELECT link_footer_hover FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_link_footer_hover = mysqli_query($conexion, $link_footer_hover) or die (mysqli_error());
	if (!$color_link_footer_hover) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($m = mysqli_fetch_array($color_link_footer_hover)) {
			$valor_link_footer_hover = $m[0];
		}
	}
	$link_footer_visited = "SELECT link_footer_visited FROM ps_personaliza WHERE id = '$id_tienda'";
	$color_link_footer_visited = mysqli_query($conexion, $link_footer_visited) or die (mysqli_error());
	if (!$color_link_footer_visited) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($m = mysqli_fetch_array($color_link_footer_visited)) {
			$valor_link_footer_visited = $m[0];
		}
	}

		/* Para Tipografías */
	$tipo_body = "SELECT tipo_body FROM ps_personaliza WHERE id = '$id_tienda'";
	$tipografia_body = mysqli_query($conexion, $tipo_body) or die (mysqli_error());
	if (!$tipografia_body) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($m = mysqli_fetch_array($tipografia_body)) {
			$valor_tipografia_body = $m[0];
		}
	}
	$tipo_secundaria = "SELECT tipo_secundaria FROM ps_personaliza WHERE id = '$id_tienda'";
	$tipografia_secundaria = mysqli_query($conexion, $tipo_secundaria) or die (mysqli_error());
	if (!$tipografia_secundaria) {
		echo '<br/>no se ha podido obtener el valor: ' . $conexion->error;
	} else {
		// Guardo el valor en una variable
		while ($t = mysqli_fetch_array($tipografia_secundaria)) {
			$valor_tipografia_secundaria = $t[0];
		}
	}

	// Aplico los nuevos estilos css con los nuevos valores
	$valor_tipografia_body_import = str_replace(" ", "+", $valor_tipografia_body);
	$valor_tipografia_secuandaria_import = str_replace(" ", "+", $valor_tipografia_secundaria);

$css = "<style type='text/css'>
	@import url(http://fonts.googleapis.com/css?family=$valor_tipografia_body_import);
	@import url(http://fonts.googleapis.com/css?family=$valor_tipografia_secuandaria_import);

	/* Barra de navegación */
	.header-nav, #header div.nav {
		background-color: $valor_header_nav;
		margin-bottom: 0px !important;
	}
	main #header nav.header-nav a, #header div.nav a, #header div.nav span strong {
		color: $valor_link_header_nav;
	}
	main #header nav.header-nav a:hover, #header div.nav a:hover {
		color: $valor_link_header_nav_hover;
	}
	main #header nav.header-nav a:visited, #header div.nav a:visited {
		color: $valor_link_header_nav_visited;
	}
	
	/* Cabecera */
	main #header div.header-top {
	    padding-top: 1em;
		background-color: $valor_header_top;
	}
	main #header div.header-top li a[data-depth=\"0\"], main #header div.header-top li a[data-depth=\"1\"] {
		color: $valor_link_header_top;
	}
	main #header div.header-top .top-menu li a:hover, main #header div.header-top .top-menu a[data-depth=\"0\"]:hover, #header .top-menu a[data-depth=\"1\"]:hover {
		color: $valor_link_header_top_hover;
	}
	main #header div.header-top li a:visited {
		color: $valor_link_header_top_visited;
	}
	ul#top-menu li .popover {
		background: $valor_menu_drop_background;
	}
	/* 1.6 */
	#page .header-container #header {
		background-color: $valor_header_top;
	}
	#page .header-container #header a, .sf-menu li li li a {
		color: $valor_link_header_top;
	}
	#page .header-container #header a:hover, .sf-menu li li li a:hover {
		color: $valor_link_header_top_hover;
	}
	#page .header-container #header a:visited, .sf-menu li li li a:visited {
		color: $valor_link_header_top_visited;
	}
	.sf-menu ul {
		background: $valor_menu_drop_background;
	}
	/*****/
	
	/* Cuerpo */
	html body, #page .columns-container {
		background-color: $valor_body_background;
	}
	section#wrapper, .columns-container #columns.container {
		background-color: $valor_section_wrapper;
	}
	h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6, #content #custom-text h1, #content #custom-text h2, #content #custom-text h3, #content #custom-text h4, #content #custom-text h5, #content #custom-text h6, #content #custom-text .h1, #content #custom-text .h2, #content #custom-text .h3, #content #custom-text .h4, #content #custom-text .h5, #content #custom-text .h6, h1.h1.products-section-title.text-uppercase,
	/* 1.6 */
	#homepage-slider .homeslider-description h2, .right-block h5, #cmsinfo_block h3	{
		color: $valor_color_titles;
	}
	#content #custom-text p, #content p {
		color: $valor_color_body_text;
	}
	section#wrapper a, .right-block h5 a {
		color: $valor_link_body;
	}
	section#wrapper a:hover, .right-block h5 a:hover {
		color: $valor_link_body_hover;
	}
	section#wrapper a:visited, .right-block h5 a:visited {
		color: $valor_link_body_visited;
	}
	
	/* Footer */
	footer#footer, #page .footer-container, #page .footer-container footer#footer {
		background: $valor_footer_background;
	}
	main footer#footer .footer-container .container h3, main footer#footer .footer-container .container h4,
	/* 1.6 */
	#footer .row h4  {
		color: $valor_footer_text_color_h3;
	}
	body main footer#footer p, ul.toggle-footer li {
		color: $valor_color_footer_text;
	}
	body main footer#footer ul li a, .footer-container #footer ul li a {
		color: $valor_link_footer;
	}
	body main footer#footer ul li a:hover, .footer-container #footer ul li a:hover {
		color: $valor_link_footer_hover;
	}
	body main footer#footer ul li a:visited, .footer-container #footer ul li a:visited {
		color: $valor_link_footer_visited;
	}
	
	/* Tipografías */
	html body, h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
		font-family: '$valor_tipografia_body', Open Sans, sans-serif;
	}
	#header, footer#footer {
		font-family: '$valor_tipografia_secundaria', Open Sans, sans-serif;
	}
	</style>";
print $css;
?>