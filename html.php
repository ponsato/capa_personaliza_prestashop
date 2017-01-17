<?php 
	if ($largohost == 4) {
		$prefijo = "../";
	} else {
		$prefijo = "";
	}
?>
<!-- Enlazo Jquery y Spectrum para la funcionalidad de la personalización -->
<script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo $prefijo ?>themes/personaliza/js/spectrum.js"></script>
<link rel="stylesheet" media="screen" type="text/css" href="<?php echo $prefijo ?>themes/personaliza/css/spectrum.css" />
<!-- Estilos css para personalización -->
<link rel="stylesheet" media="screen" type="text/css" href="<?php echo $prefijo ?>themes/personaliza/css/personaliza.css" />
<!-- Funcionalidad de la capa -->
<script type="text/javascript" src="<?php echo $prefijo ?>themes/personaliza/js/funciones.js"></script>

<div class='rueda_personaliza'>
    <img src="<?php echo $prefijo ?>themes/personaliza/img/personaliza.svg" />
</div>

<div class='capa_personaliza'>
  	<!-- Botón cerrar -->
    <div class='cierra_capa_personaliza'>
        <img src="<?php echo $prefijo ?>themes/personaliza/img/cierra_personaliza.svg" />
    </div>
    <!------------------>
   	<!-- Menú lateral -->
	<div class="sidenav">
		<span id="config_barra_navegacion">Barra de navegación</span>
		<span id="config_cabecera">Cabecera</span>
		<span id="config_cuerpo">Cuerpo</span>
		<span id="config_footer">Footer</span>
		<span id="config_tipos">Tipografías</span>
		<span id="config_otros">Otros</span>
		<hr>
		
		<div class="contiene_parametros">
			<!-- Barra de navegación -->
			<div class="parametros parametros_barra_navegacion">
				<div class='colores color_para_header_nav'>
					<h3>Color de fondo</h3>
					<input type='text' id="selector_header_nav" />
				</div>
				<div class='colores color_para_link_header_nav'>
					<h3>Color de los enlaces</h3>
					<input type='text' id="selector_link_header_nav" />
				</div>
				<div class='colores color_para_link_header_nav_hover'>
					<h3>Color de los enlaces al marcarse</h3>
					<input type='text' id="selector_link_header_nav_hover" />
				</div>
				<div class='colores color_para_link_header_nav_visited'>
					<h3>Color de los enlaces visitados</h3>
					<input type='text' id="selector_link_header_nav_visited" />
				</div>
			</div>
			<!-- Cabecera -->
			<div class="parametros parametros_cabecera">
				<div class='colores color_para_header_top'>
					<h3>Cabecera</h3>
					<input type='text' id="selector_header_top" />
				</div>
				<div class='colores color_para_link_header_top'>
					<h3>Color de los enlaces</h3>
					<input type='text' id="selector_link_header_top" />
				</div>
				<div class='colores color_para_link_header_top_hover'>
					<h3>Color de los enlaces al marcarse</h3>
					<input type='text' id="selector_link_header_top_hover" />
				</div>
				<div class='colores color_para_link_header_top_visited'>
					<h3>Color de los enlaces visitados</h3>
					<input type='text' id="selector_link_header_top_visited" />
				</div>
				<div class='colores color_para_menu_drop_background'>
					<h3>Color de fondo del menú desplegable</h3>
					<input type='text' id="selector_menu_drop_background" />
				</div>
			</div>
			<!-- Cuerpo -->
			<div class="parametros parametros_cuerpo">
				<div class='colores color_para_body_background'>
					<h3>Color de Body</h3>
					<input type='text' id="selector_body_background" />
				</div>
				
				<div class='colores color_para_section_wrapper'>
					<h3>Cuerpo de página</h3>
					<input type='text' id="selector_section_wrapper" />
				</div>
				<div class='colores color_para_titles'>
					<h3>Color de los títulos</h3>
					<input type='text' id="selector_color_titles" />
				</div>
				<div class='colores color_para_titles'>
					<h3>Color de texto</h3>
					<input type='text' id="selector_color_body_text" />
				</div>
				<div class='colores color_para_link_body'>
					<h3>Color de los enlaces</h3>
					<input type='text' id="selector_color_link_body" />
				</div>
				<div class='colores color_para_link_body_hover'>
					<h3>Color de los enlaces al marcarse</h3>
					<input type='text' id="selector_color_link_body_hover" />
				</div>
				<div class='colores color_para_link_body_visited'>
					<h3>Color de los enlaces visitados</h3>
					<input type='text' id="selector_color_link_body_visited" />
				</div>
			</div>
			<!-- Footer -->
			<div class="parametros parametros_footer">
				<div class='colores color_para_footer_background'>
					<h3>Color para Footer</h3>
					<input type='text' id="selector_footer_background" />
				</div>
				<div class='colores color_para_footer_h3'>
					<h3>Color para títulos de Footer</h3>
					<input type='text' id="selector_footer_h3" />
				</div>
				<div class='colores color_para_texto_footer'>
					<h3>Color para texto de Footer</h3>
					<input type='text' id="selector_texto_footer" />
				</div>
				<div class='colores color_para_link_footer'>
					<h3>Color de los enlaces</h3>
					<input type='text' id="selector_color_link_footer" />
				</div>
				<div class='colores color_para_link_footer_hover'>
					<h3>Color de los enlaces al marcarse</h3>
					<input type='text' id="selector_color_link_footer_hover" />
				</div>
				<div class='colores color_para_link_footer_visited'>
					<h3>Color de los enlaces visitados</h3>
					<input type='text' id="selector_color_link_footer_visited" />
				</div>
			</div>
			<!-- Tipografías -->
			<div class="parametros parametros_tipos">
				<div class='tipos tipografia_body'>
					<h3>General del sitio (Body): </h3>
					<select id="selecciona_tipo"></select>
					<!--<textarea id="texto_busca_fuente">Busca una fuente</textarea>-->
				</div>
				<div class='tipos tipografia_secundaria'>
					<h3>Barra de navegación, cabecera y footer: </h3>
					<select id="selecciona_tipo_secun"></select>
					<!--<textarea id="texto_busca_fuente">Busca una fuente</textarea>-->
				</div>
			</div>
			<!-- Otros -->
			<div class="parametros parametros_otros">
				<div class='colores color_para_default_color'>
					<h2>Colores por defecto:</h2>
					<p><em>Estos colores se aplican de forma generalizada a múltiples elementos de todo el sitio.</em></p>
					<h3>Primario</h3>
					<input type='text' id="selector_default_color" />
				</div>
				<div class='colores color_para_default_secondary_color'>
					<h3>Secundario</h3>
					<input type='text' id="selector_default_secondary_color" />
				</div>
			</div>
		</div>
		
		<div class="confirma_color" >Confirmar</div>
	</div>
</div>