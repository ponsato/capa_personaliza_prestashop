<?php 
$color_header_nav = $_POST['color_header_nav'];
$link_header_nav = $_POST['link_header_nav'];
$link_header_nav_hover = $_POST['link_header_nav_hover'];
$link_header_nav_visited = $_POST['link_header_nav_visited'];
$color_header_top = $_POST['color_header_top'];
$link_header_top = $_POST['link_header_top'];
$link_header_top_hover = $_POST['link_header_top_hover'];
$link_header_top_visited = $_POST['link_header_top_visited'];
$menu_drop_background = $_POST['menu_drop_background'];
$color_body_background = $_POST['color_body_background'];
$color_footer_background = $_POST['color_footer_background'];
$color_section_wrapper = $_POST['color_section_wrapper'];
$color_titles = $_POST['color_titles'];
$color_body_text = $_POST['color_body_text'];
$link_body = $_POST['link_body'];
$link_body_hover = $_POST['link_body_hover'];
$link_body_visited = $_POST['link_body_visited'];
$tipografia_body = $_POST['tipografia_body'];
$color_footer_text_color_h3 = $_POST['color_footer_text_color_h3'];
$color_footer_text = $_POST['color_footer_text'];
$link_footer = $_POST['link_footer'];
$link_footer_hover = $_POST['link_footer_hover'];
$link_footer_visited = $_POST['link_footer_visited'];
$tipografia_secundaria = $_POST['tipografia_secundaria'];
$color_default_color = $_POST['color_default_color'];
$color_default_secondary_color = $_POST['color_default_secondary_color'];

actualiza_colores_db($color_header_nav, 
					 $link_header_nav, 
					 $link_header_nav_hover, 
					 $link_header_nav_visited, 
					 $color_header_top, 
					 $link_header_top, 
					 $link_header_top_hover, 
					 $link_header_top_visited, 
					 $menu_drop_background, 
					 $color_body_background, 
					 $color_footer_background, 
					 $color_section_wrapper, 
					 $color_titles, 
					 $color_body_text, 
					 $link_body, 
					 $link_body_hover, 
					 $link_body_visited, 
					 $tipografia_body, 
					 $color_footer_text_color_h3, 
					 $color_footer_text, 
					 $link_footer, 
					 $link_footer_hover, 
					 $link_footer_visited, 
					 $tipografia_secundaria,
					 $color_default_color,
					 $color_default_secondary_color);

function actualiza_colores_db($color_header_nav, 
							  $link_header_nav, 
							  $link_header_nav_hover, 
							  $link_header_nav_visited, 
							  $color_header_top, 
							  $link_header_top, 
							  $link_header_top_hover, 
							  $link_header_top_visited, 
							  $menu_drop_background, 
							  $color_body_background, 
							  $color_footer_background, 
							  $color_section_wrapper, 
							  $color_titles, 
							  $color_body_text, 
							  $link_body, 
							  $link_body_hover, 
							  $link_body_visited, 
							  $tipografia_body, 
							  $color_footer_text_color_h3, 
							  $color_footer_text, 
							  $link_footer, 
							  $link_footer_hover, 
							  $link_footer_visited, 
							  $tipografia_secundaria,
							  $color_default_color,
							  $color_default_secondary_color) {
	// Conecto con la base de datos de prestashop  
    $hostname = 'localhost';
    $nombreUsuario = 'bn_prestashop';
    $contrasena = '4c2b5a4d28';
    $nombre_base_datos = 'tienda17';

    $conexion = mysqli_connect($hostname, $nombreUsuario, $contrasena, $nombre_base_datos);
    if($conexion->connect_error) {
        die('Ha fallado la conexión: ' . $conexion->connect_error);
    }
		
	// Obtengo la id de la tienda que se está mostrando mediante la url consultando en la tabla ps_shop_url
	$url_actual= $_SERVER["HTTP_HOST"];
	$consulta_id_tienda = "SELECT id_shop_url FROM ps_shop_url WHERE domain = '$url_actual'";
	$sql_consulta_id_tienda= mysqli_query($conexion, $consulta_id_tienda) or die (mysqli_error());
	while($rows = mysqli_fetch_assoc($sql_consulta_id_tienda)) {
		$recojo_id_tienda = $rows;
	}
	$id_tienda = implode("", $recojo_id_tienda);
    
	// Barra de navegación
    $actualizo_header_nav = "UPDATE ps_personaliza SET color_header_nav = '$color_header_nav' WHERE id='$id_tienda'";
	$actualizo_link_header_nav = "UPDATE ps_personaliza SET link_header_nav = '$link_header_nav' WHERE id='$id_tienda'";
	$actualizo_link_header_nav_hover = "UPDATE ps_personaliza SET link_header_nav_hover = '$link_header_nav_hover' WHERE id='$id_tienda'";
	$actualizo_link_header_nav_visited = "UPDATE ps_personaliza SET link_header_nav_visited = '$link_header_nav_visited' WHERE id='$id_tienda'";
	
	// Cabecera
    $actualizo_header_top = "UPDATE ps_personaliza SET color_header_top = '$color_header_top' WHERE id='$id_tienda'";
	$actualizo_link_header_top = "UPDATE ps_personaliza SET link_header_top = '$link_header_top' WHERE id='$id_tienda'";
	$actualizo_link_header_top_hover = "UPDATE ps_personaliza SET link_header_top_hover = '$link_header_top_hover' WHERE id='$id_tienda'";
	$actualizo_link_header_top_visited = "UPDATE ps_personaliza SET link_header_top_visited = '$link_header_top_visited' WHERE id='$id_tienda'";
	$actualizo_menu_drop_background = "UPDATE ps_personaliza SET menu_drop_background = '$menu_drop_background' WHERE id='$id_tienda'";
	
	// Cuerpo
    $actualizo_body_background = "UPDATE ps_personaliza SET color_body_background = '$color_body_background' WHERE id='$id_tienda'";
	$actualizo_section_wrapper = "UPDATE ps_personaliza SET color_section_wrapper = '$color_section_wrapper' WHERE id='$id_tienda'";
	$actualizo_color_titles = "UPDATE ps_personaliza SET color_titles = '$color_titles' WHERE id='$id_tienda'";
	$actualizo_color_body_text = "UPDATE ps_personaliza SET color_body_text = '$color_body_text' WHERE id='$id_tienda'";
	$actualizo_link_body = "UPDATE ps_personaliza SET link_body = '$link_body' WHERE id='$id_tienda'";
	$actualizo_link_body_hover = "UPDATE ps_personaliza SET link_body_hover = '$link_body_hover' WHERE id='$id_tienda'";
	$actualizo_link_body_visited = "UPDATE ps_personaliza SET link_body_visited = '$link_body_visited' WHERE id='$id_tienda'";
	
	// Footer
    $actualizo_footer_background = "UPDATE ps_personaliza SET color_footer_background = '$color_footer_background' WHERE id='$id_tienda'";
	$actualizo_footer_text_color_h3 = "UPDATE ps_personaliza SET color_footer_text_color_h3 = '$color_footer_text_color_h3' WHERE id='$id_tienda'";
	$actualizo_footer_text = "UPDATE ps_personaliza SET color_footer_text = '$color_footer_text' WHERE id='$id_tienda'";
	$actualizo_link_footer = "UPDATE ps_personaliza SET link_footer = '$link_footer' WHERE id='$id_tienda'";
	$actualizo_link_footer_hover = "UPDATE ps_personaliza SET link_footer_hover = '$link_footer_hover' WHERE id='$id_tienda'";
	$actualizo_link_footer_visited = "UPDATE ps_personaliza SET link_footer_visited = '$link_footer_visited' WHERE id='$id_tienda'";
	
	// Tipografías
    $actualizo_tipografia_body = "UPDATE ps_personaliza SET tipo_body = '$tipografia_body' WHERE id='$id_tienda'";
	$actualizo_tipografia_secundaria = "UPDATE ps_personaliza SET tipo_secundaria = '$tipografia_secundaria' WHERE id='$id_tienda'";
	
	// Otros
	$actualizo_color_default_color = "UPDATE ps_personaliza SET color_default_color = '$color_default_color' WHERE id='$id_tienda'";
	$actualizo_color_default_secondary_color = "UPDATE ps_personaliza SET color_default_secondary_color = '$color_default_secondary_color' WHERE id='$id_tienda'";
    
    if(($conexion->query($actualizo_header_nav) === TRUE) && 
	   ($conexion->query($actualizo_link_header_nav) === TRUE) && 
	   ($conexion->query($actualizo_link_header_nav_hover) === TRUE) && 
	   ($conexion->query($actualizo_link_header_nav_visited) === TRUE) && 
	   ($conexion->query($actualizo_header_top) === TRUE) && 
	   ($conexion->query($actualizo_link_header_top) === TRUE) && 
	   ($conexion->query($actualizo_link_header_top_hover) === TRUE) && 
	   ($conexion->query($actualizo_link_header_top_visited) === TRUE) && 
	   ($conexion->query($actualizo_menu_drop_background) === TRUE) && 
	   ($conexion->query($actualizo_body_background) === TRUE) && 
	   ($conexion->query($actualizo_footer_background) === TRUE) && 
	   ($conexion->query($actualizo_section_wrapper) === TRUE) && 
	   ($conexion->query($actualizo_color_titles) === TRUE) && 
	   ($conexion->query($actualizo_color_body_text) === TRUE) && 
	   ($conexion->query($actualizo_link_body) === TRUE) && 
	   ($conexion->query($actualizo_link_body_hover) === TRUE) && 
	   ($conexion->query($actualizo_link_body_visited) === TRUE) && 
	   ($conexion->query($actualizo_tipografia_body) === TRUE) && 
	   ($conexion->query($actualizo_footer_text_color_h3) === TRUE) && 
	   ($conexion->query($actualizo_footer_text) === TRUE) && 
	   ($conexion->query($actualizo_link_footer) === TRUE) && 
	   ($conexion->query($actualizo_link_footer_hover) === TRUE) && 
	   ($conexion->query($actualizo_link_footer_visited) === TRUE) && 
	   ($conexion->query($actualizo_tipografia_secundaria) === TRUE) &&
	   ($conexion->query($actualizo_color_default_color) === TRUE) &&
	   ($conexion->query($actualizo_color_default_secondary_color) === TRUE)) {
        echo "ha funcionado";
    } else {
        echo "NO ha funcionado";
    }
}
 
//$conexion->close();
?>
