<?php
ini_set('track_errors', 1); 
	$ruta_para_color = $_POST['ruta_para_color'];
	$color_primario = $_POST['color_primario'];
	$nuevo_color_primario = $_POST['nuevo_color_primario'];
	$color_secundario = $_POST['color_secundario'];
	$nuevo_color_secundario = $_POST['nuevo_color_secundario'];
	$url_tienda_actual = $_SERVER["HTTP_HOST"];
	$url_tienda_actual = 'http://'.$url_tienda_actual.'/themes/';
	$ruta_para_color = str_replace($url_tienda_actual, '../', $ruta_para_color);

	$contenido = file_get_contents($ruta_para_color) or die ($php_errormsg);
	$contenido = str_replace($color_primario, $nuevo_color_primario, $contenido);
	$contenido = str_replace($color_secundario, $nuevo_color_secundario, $contenido);
	file_put_contents($ruta_para_color, $contenido) or die ($php_errormsg);
	echo $ruta_para_color;

?>