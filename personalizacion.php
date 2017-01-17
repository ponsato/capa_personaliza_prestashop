<?php
// Conecto con la base de datos de prestashop
	$hostname = 'localhost';
    $nombreUsuario = 'bn_prestashop';
    $contrasena = '4c2b5a4d28';
    $nombre_base_datos = 'tienda17';

    $conexion = mysqli_connect($hostname, $nombreUsuario , $contrasena, $nombre_base_datos);
    if($conexion->connect_error) {
		echo 'se jodio';
     //   die('Ha fallado la conexión: ' . $conexion->connect_error);
    }

// Recojo todas las tablas existentes en la BD para poder realizar comprobaciones
    $consulta = "SELECT TABLE_NAME as name FROM information_schema.TABLES";
    $sql= mysqli_query($conexion, $consulta) or die (mysqli_error());
    while($row = mysqli_fetch_array($sql)) {
        // Almaceno el nombre de las tablas existentes en un array
        $tablas[] = $row['name'];
    }

	// Obtengo la id de la tienda que se está mostrando mediante la url consultando en la tabla ps_shop_url
	$url_actual= $_SERVER["HTTP_HOST"];
	$consulta_id_tienda = "SELECT id_shop_url FROM ps_shop_url WHERE domain = '$url_actual'";
	$sql_consulta_id_tienda = mysqli_query($conexion, $consulta_id_tienda) or die (mysqli_error());
	while($rows = mysqli_fetch_assoc($sql_consulta_id_tienda)) {
		$recojo_id_tienda = $rows;
	}
	$id_tienda = implode("", $recojo_id_tienda);

    // Hago la comprobación, en el caso de que exista, se obtienen los valores y se aplican, y en el caso de que no exista se creará la tabla con valores predefinidos y la id de la tienda actual
    if(in_array('ps_personaliza', $tablas)) {
		// Compruebo que la fila correspondiente a la tienda esté creada, y en caso contrario la creo
		$consulta_fila_tienda = "SELECT * FROM ps_personaliza WHERE id = '$id_tienda'";
		$sql_consulta_fila_tienda = mysqli_query($conexion, $consulta_fila_tienda) or die (mysqli_error());
		if ($sql_consulta_fila_tienda->num_rows == 0) {
			//Id Tienda
            $creo_nueva_fila_valores = "INSERT INTO ps_personaliza VALUES ('$id_tienda',";
			// Barra de navegación
			$creo_nueva_fila_valores.= "'#fff','#000','#1737EB','#8A8A8A',";
			// Cabecera
			$creo_nueva_fila_valores.= "'#fff','#000','#000','#000','#fff',";
			// Cuerpo
			$creo_nueva_fila_valores.= "'#fff','#fff','Open Sans, sans-serif !important','#000','#000','#000','#aaa','#7d7d7d',";
			// Footer
			$creo_nueva_fila_valores.= "'#fff','#000','#000','#000','#aaa','#7d7d7d',";
			// Tipos
			$creo_nueva_fila_valores.= "'Open Sans, sans-serif !important',";
			// Otros
			$creo_fila_valores.= "'#2fb5d2','#f39d72')";
			
			//$creo_nueva_fila_valores = "INSERT INTO ps_personaliza VALUES ('$id_tienda','#fff','#fff','#fff','#fff','Open Sans, sans-serif','#fff','#000')";
			if($conexion->query($creo_nueva_fila_valores) === TRUE) {
                //echo ' y los valore SI se han añadido';
            } else {
                echo 'no se ha creado la nueva fila';
            }
		}
		// Incluyo el css mediante JavaScript, ya que con un simple include no le gusta a Prestashop
			include("themes/personaliza/css/css.php");
    } else {
    // La tabla ps_personalizada no existe, por lo que se crea con valores predefinidos
		// Id Tienda
        $tabla_personaliza = "CREATE TABLE ps_personaliza (id INT(6) NOT NULL PRIMARY KEY, ";
		// Barra de navegación
		$tabla_personaliza.= "color_header_nav VARCHAR(30) NOT NULL, link_header_nav VARCHAR(30) NOT NULL, link_header_nav_hover VARCHAR(30) NOT NULL, link_header_nav_visited VARCHAR(30) NOT NULL, "; 
		// Cabecera
		$tabla_personaliza.= "color_header_top VARCHAR(30) NOT NULL, link_header_top VARCHAR(30) NOT NULL, link_header_top_hover VARCHAR(30) NOT NULL, link_header_top_visited VARCHAR(30) NOT NULL, menu_drop_background VARCHAR(30) NOT NULL, ";
		// Cuerpo
		$tabla_personaliza.= "color_body_background VARCHAR(30) NOT NULL, color_section_wrapper VARCHAR(30) NOT NULL, tipo_body VARCHAR(120) NOT NULL, color_titles VARCHAR(30) NOT NULL, color_body_text VARCHAR(30) NOT NULL, link_body VARCHAR(30) NOT NULL, link_body_hover VARCHAR(30) NOT NULL, link_body_visited VARCHAR(30) NOT NULL, ";
		// Footer
		$tabla_personaliza.= "color_footer_background VARCHAR(30) NOT NULL, color_footer_text_color_h3 VARCHAR(30) NOT NULL, color_footer_text VARCHAR(30) NOT NULL, link_footer VARCHAR(30) NOT NULL, link_footer_hover VARCHAR(30) NOT NULL, link_footer_visited VARCHAR(30) NOT NULL, ";
		// Tipos 
		$tabla_personaliza.= "tipo_secundaria VARCHAR(120) NOT NULL, ";
		// Otros
		$tabla_personaliza.= "color_default_color VARCHAR(30) NOT NULL, color_default_secondary_color VARCHAR(30) NOT NULL)";
		
        if ($conexion->query($tabla_personaliza) === TRUE) {
			//Id Tienda
            $creo_fila_valores = "INSERT INTO ps_personaliza VALUES ('$id_tienda',";
			// Barra de navegación
			$creo_fila_valores.= "'#fff','#000','#000','#000',";
			// Cabecera
			$creo_fila_valores.= "'#fff','#000','#000','#000','#fff',";
			// Cuerpo
			$creo_fila_valores.= "'#fff','#fff','Open Sans, sans-serif !important','#000','#000','#000','#aaa','#7d7d7d',";
			// Footer
			$creo_fila_valores.= "'#fff','#000','#000','#000','#aaa','#7d7d7d',";
			// Tipos
			$creo_fila_valores.= "'Open Sans, sans-serif !important',";
			// Otros
			$creo_fila_valores.= "'#2fb5d2','#f39d72')";
			
            if($conexion->query($creo_fila_valores) === TRUE) {
                //echo ' y los valore SI se han añadido';
            } else {
                //echo ' pero los valores NO se han añadido';
            }
        } else {
            echo 'Fracaso al crear la tabla:' . $conexion->error;
        }
    }
 
// Detecto si el usuario se ha loggeado como administrador para mostrar el botón de personalizar
    $cookie = new Cookie('psAdmin');
    if ($cookie->id_employee) {
        // Pinto la rueda de personalización
		$host = $_SERVER["REQUEST_URI"];
		$largohost=strlen($host);
		if($host=='/' || $largohost == 4) {
			include("themes/personaliza/html.php");
		}
    }
// Cierro la conexión con la base de datos
$conexion->close();
?>