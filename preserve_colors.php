<?php 
// Rescato los colores aplicados de la base de datos

obten_colores();

function obten_colores() {
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
	
	$obtengo_colores = $conexion->query("SELECT * FROM ps_personaliza WHERE id='$id_tienda'");
	while($row = mysqli_fetch_assoc($obtengo_colores)) {
		$colores_para_iniciar[] = $row;
	}

	print json_encode($colores_para_iniciar);
	
}

//$conexion->close();
?>