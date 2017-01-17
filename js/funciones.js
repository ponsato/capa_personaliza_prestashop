var valor_tipo_selected;
var valor_tipo_selected_secun;
var datos;
var host = window.location.pathname;
host = host.length;
var prefijo_rutas;
if(host == 4) {
	prefijo_rutas = '../';
} else {
	prefijo_rutas = '';
}
$.noConflict();
jQuery(document).ready(function($) {
	// Activo la capa de personalización
	$('.rueda_personaliza').on('click', function(){
		$('a').bind('click', function(e){ e.preventDefault(); });
		$(this).fadeOut(500);
		$('.sidenav').css({'visibility':'visible'});
		$('body').animate({'width':'65%', 'margin-left':'35%'},500);
		var palette_colors = [["#000","#444","#666","#999","#ccc","#eee","#f3f3f3","#fff"],
							  ["#f00","#f90","#ff0","#0f0","#0ff","#00f","#90f","#f0f"],
							  ["#f4cccc","#fce5cd","#fff2cc","#d9ead3","#d0e0e3","#cfe2f3","#d9d2e9","#ead1dc"],
							  ["#ea9999","#f9cb9c","#ffe599","#b6d7a8","#a2c4c9","#9fc5e8","#b4a7d6","#d5a6bd"],
							  ["#e06666","#f6b26b","#ffd966","#93c47d","#76a5af","#6fa8dc","#8e7cc3","#c27ba0"],
							  ["#c00","#e69138","#f1c232","#6aa84f","#45818e","#3d85c6","#674ea7","#a64d79"],
							  ["#900","#b45f06","#bf9000","#38761d","#134f5c","#0b5394","#351c75","#741b47"],
							  ["#600","#783f04","#7f6000","#274e13","#0c343d","#073763","#20124d","#4c1130"]];
		
		// Consulto los colores aplicados anteriormente para inicializarlos
		$.ajax({
			url: prefijo_rutas + 'themes/personaliza/preserve_colors.php',
			type: 'POST',
			dataType: 'json',
			beforeSend: function() {
				$('.confirma_color').html("Un seg...");
			}, 
			success: function(output_string) {
				datos = output_string[0];
				valor_tipo_selected = datos.tipo_body;
				valor_tipo_selected_secun = datos.tipo_secundaria;
				aplica_colores(datos);
				$('.confirma_color').html("Confirmar");
			}
		});
		
		function aplica_colores(datos) {
			// Barra de navegación
			$("#selector_header_nav").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.color_header_nav,
				palette: palette_colors,
				move: function (color) {
					$('nav.header-nav, #header div.nav').css({'background':color});
				},
			});
			$("#selector_link_header_nav").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.link_header_nav,
				palette: palette_colors,
				move: function (color) {
					$('main #header .header-nav a, #header div.nav a, #header div.nav span strong').css({'color':color});
				},
			});
			$("#selector_link_header_nav_hover").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.link_header_nav_hover,
				palette: palette_colors,
				move: function (color) {
					$('main #header .header-nav a, div.header-container header#header div.nav a').mouseover( function(){ $(this).css({'color':color}); });
					$('main #header .header-nav a, div.header-container header#header div.nav a').mouseout( function(){ var color_antes = $("#selector_link_header_nav").spectrum("get"); $(this).css({'color': color_antes.toHexString()}); });
				},
			});
			$("#selector_link_header_nav_visited").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.link_header_nav_visited,
				palette: palette_colors,
				move: function (color) {
					$('main #header .header-nav a:visited, #header div.nav a:visited').css({'color':color});
				},
			});
			
			// Cabecera
			$("#selector_header_top").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.color_header_top,
				palette: palette_colors,
				move: function (color) {
					$('main #header div.header-top, #page .header-container #header').css({'background':color});
				}
			});
			$("#selector_link_header_top").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.link_header_top,
				palette: palette_colors,
				move: function (color) {
					$('main #header div.header-top a, #page .header-container #header a, .sf-menu li li li a').css({'color':color});
				},
			});
			$("#selector_link_header_top_hover").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.link_header_top_hover,
				palette: palette_colors,
				move: function (color) {
					$('main #header div.header-top a, #page .header-container #header a, .sf-menu li li li a').mouseover( function(){ $(this).css({'color':color}); });
					$('main #header div.header-top a, #page .header-container #header a, .sf-menu li li li a').mouseout( function(){ var color_antes = $("#selector_link_header_top").spectrum("get"); $(this).css({'color': color_antes.toHexString()}); });
				},
			});
			$("#selector_link_header_top_visited").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.link_header_top_visited,
				palette: palette_colors,
				move: function (color) {
					$('main #header div.header-top a:visited, #page .header-container #header a:visited, .sf-menu li li li a:visited').css({'color':color});
				},
			});
			$("#selector_menu_drop_background").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.menu_drop_background,
				palette: palette_colors,
				move: function (color) {
					$('ul#top-menu li .popover, .sf-menu ul').css({'background':color});
				},
			});
			
			// Cuerpo
			$("#selector_body_background").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.color_body_background,
				palette: palette_colors,
				move: function (color) {
					$('html body, #page .columns-container').css({'background':color});
				}
			});
			$("#selector_section_wrapper").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.color_section_wrapper,
				palette: palette_colors,
				move: function (color) {
					$('main section#wrapper, .columns-container #columns.container').css({'background':color});
				}
			});
			$("#selector_color_titles").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.color_titles,
				palette: palette_colors,
				move: function (color) {
					$('#main h1, #main h2, #main h3, #main h4, #main h5, #main h6, #main .h1, #main .h2, #main .h3, #main .h4, #main .h5, #main .h6, #homepage-slider .homeslider-description h2, .right-block h5, #cmsinfo_block h3').css({'color':color});
				}
			});
			$("#selector_color_body_text").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.color_body_text,
				palette: palette_colors,
				move: function (color) {
					$('#custom-text p, p').css({'color':color});
				}
			});
			$("#selector_color_link_body").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.link_body,
				palette: palette_colors,
				move: function (color) {
					$('section#wrapper a, .right-block h5 a').css({'color':color});
				}
			});
			$("#selector_color_link_body_hover").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.link_body_hover,
				palette: palette_colors,
				move: function (color) {
					$('section#wrapper a, .right-block h5 a').mouseover( function(){ $(this).css({'color':color}); });
					$('section#wrapper a, .right-block h5 a').mouseout( function(){ var color_antes = $("#selector_color_link_body").spectrum("get"); $(this).css({'color': color_antes.toHexString()}); });
				}
			});
			$("#selector_color_link_body_visited").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.link_body_visited,
				palette: palette_colors,
				move: function (color) {
					$('section#wrapper a:visited, .right-block h5 a:visited').css({'color':color});
				}
			});
			
			// Footer
			$("#selector_footer_background").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.color_footer_background,
				palette: palette_colors,
				move: function (color) {
					$('body main footer#footer, #page .footer-container, #page .footer-container footer#footer').css({'background':color});
				}
			});
			$("#selector_footer_h3").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.color_footer_text_color_h3,
				palette: palette_colors,
				move: function (color) {
					$('body main footer#footer h3.h3, body main footer#footer .wrapper h3 a, body main footer#footer h4.h4, #footer .row h4, #footer .row h3').css({'color':color});
				}
			});
			$("#selector_texto_footer").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.color_footer_text,
				palette: palette_colors,
				move: function (color) {
					$('body main footer#footer p, ul.toggle-footer li').css({'color':color});
				}
			});
			$("#selector_color_link_footer").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.link_footer,
				palette: palette_colors,
				move: function (color) {
					$('body main footer#footer ul li a, .footer-container #footer ul li a').css({'color':color});
				}
			});
			$("#selector_color_link_footer_hover").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.link_footer_hover,
				palette: palette_colors,
				move: function (color) {
					$('body main footer#footer ul li a, .footer-container #footer ul li a').mouseover( function(){ $(this).css({'color':color}); });
					$('body main footer#footer ul li a, .footer-container #footer ul li a').mouseout( function(){ var color_antes = $("#selector_color_link_footer").spectrum("get"); $(this).css({'color': color_antes.toHexString()}); });
				}
			});
			$("#selector_color_link_footer_visited").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.link_footer_visited,
				palette: palette_colors,
				move: function (color) {
					$('body main footer#footer ul li a:visited, .footer-container #footer ul li a:visited').css({'color':color});
				}
			});
			
			// Otros
			$("#selector_default_color").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.color_default_color,
				palette: palette_colors,
				move: function (color) {
					$('#products .product-miniature .product-flags .new, #products .product-miniature .online-only, #products .product-miniature .on-sale, .featured-products .product-miniature .product-flags .new, .featured-products .product-miniature .online-only, .featured-products .product-miniature .on-sale, .product-accessories .product-miniature .product-flags .new, .product-accessories .product-miniature .online-only, .product-accessories .product-miniature .on-sale, .product-miniature .product-miniature .product-flags .new, .product-miniature .product-miniature .online-only, .product-miniature .product-miniature .on-sale, .btn-primary').css({'background':color});
					$('.search-widget form input[type=text], .block_newsletter form input[type=text]').focus(function(){$(this).css({'outline':'3px solid' + color})});
				}
			});
			$("#selector_default_secondary_color").spectrum({
				preferredFormat: "hex",
				showInput: true,
				showPalette: true,
				color: datos.color_default_secondary_color,
				palette: palette_colors,
				move: function (color) {
					$('#products .product-miniature .product-flags .new.discount-percentage, #products .product-miniature .online-only.discount-percentage, #products .product-miniature .on-sale.discount-percentage, #products .product-miniature .discount-percentage.discount-percentage, .featured-products .product-miniature .product-flags .new.discount-percentage, .featured-products .product-miniature .online-only.discount-percentage, .featured-products .product-miniature .on-sale.discount-percentage, .featured-products .product-miniature .discount-percentage.discount-percentage, .product-accessories .product-miniature .product-flags .new.discount-percentage, .product-accessories .product-miniature .online-only.discount-percentage, .product-accessories .product-miniature .on-sale.discount-percentage, .product-accessories .product-miniature .discount-percentage.discount-percentage, .product-miniature .product-miniature .product-flags .new.discount-percentage, .product-miniature .product-miniature .online-only.discount-percentage, .product-miniature .product-miniature .on-sale.discount-percentage, .product-miniature .product-miniature .discount-percentage.discount-percentage').css({'background':color});
				}
			});
			
			// Tipografía cuerpo
			var script_fonts = document.createElement('script');
			script_fonts.src = 'https://www.googleapis.com/webfonts/v1/webfonts?key=AIzaSyAiBrFUoO6lwPcw87b9KqpJC0MFb4KzQQo&callback=SetFonts';
			document.body.appendChild(script_fonts);
			$('#selecciona_tipo').on('change', function() {
				var tipo_cuerpo_provisional = $("#selecciona_tipo").val();
				$('style').prepend('@import url(http://fonts.googleapis.com/css?family='+tipo_cuerpo_provisional+');');
				tipo_cuerpo_provisional = '"' + tipo_cuerpo_provisional + '", sans-serif';
				$('html head + body#index').css({'font-family': tipo_cuerpo_provisional});
			});
			$('#selecciona_tipo_secun').on('change', function() {
				var tipo_secun_provisional = $("#selecciona_tipo_secun").val();
				$('style').prepend('@import url(http://fonts.googleapis.com/css?family='+tipo_secun_provisional+');');
				tipo_secun_provisional = '"' + tipo_secun_provisional + '", sans-serif';
				$('#header, footer#footer').css({'font-family': tipo_secun_provisional});
			});
		}
	});
	
	$('.cierra_capa_personaliza').on('click', function() {
		$('a').unbind('click');
		$('.rueda_personaliza').fadeIn();
		$('.sidenav').css({'visibility':'hidden'});
		$('body').animate({'width':'100%', 'margin-left':'0%'},500);
	});
	
	// Obtengo el valor de los colores y los paso a hexadecimal
	$('.confirma_color').on('click', function(){
		$('a').unbind('click');
		// Barra de navecación
		var new_color_header_nav = $("#selector_header_nav").spectrum("get");
		new_color_header_nav.toHexString();
		var new_link_header_nav = $("#selector_link_header_nav").spectrum("get");
		new_link_header_nav.toHexString();
		var new_link_header_nav_hover = $("#selector_link_header_nav_hover").spectrum("get");
		new_link_header_nav_hover.toHexString();
		var new_link_header_nav_visited = $("#selector_link_header_nav_visited").spectrum("get");
		new_link_header_nav_visited.toHexString();
		
		// Cabecera
		var new_color_header_top = $("#selector_header_top").spectrum("get");
		new_color_header_top.toHexString();
		var new_link_header_top = $("#selector_link_header_top").spectrum("get");
		new_link_header_top.toHexString();
		var new_link_header_top_hover = $("#selector_link_header_top_hover").spectrum("get");
		new_link_header_top_hover.toHexString();
		var new_link_header_top_visited = $("#selector_link_header_top_visited").spectrum("get");
		new_link_header_top_visited.toHexString();
		var new_menu_drop_background = $("#selector_menu_drop_background").spectrum("get");
		new_menu_drop_background.toHexString();
		
		// Cuerpo
		var new_color_body_background = $("#selector_body_background").spectrum("get");
		new_color_body_background.toHexString();
		var new_color_section_wrapper = $("#selector_section_wrapper").spectrum("get");
		new_color_section_wrapper.toHexString();
		var new_color_titles = $("#selector_color_titles").spectrum("get");
		new_color_titles.toHexString();
		var new_color_body_text = $("#selector_color_body_text").spectrum("get");
		new_color_body_text.toHexString();
		var new_link_body = $("#selector_color_link_body").spectrum("get");
		new_link_body.toHexString();
		var new_link_body_hover = $("#selector_color_link_body_hover").spectrum("get");
		new_link_body_hover.toHexString();
		var new_link_body_visited = $("#selector_color_link_body_visited").spectrum("get");
		new_link_body_visited.toHexString();
		
		// Footer
		var new_color_footer_background = $("#selector_footer_background").spectrum("get");
		new_color_footer_background.toHexString();
		var new_color_footer_h3 = $("#selector_footer_h3").spectrum("get");
		new_color_footer_h3.toHexString();
		var new_color_footer_text = $("#selector_texto_footer").spectrum("get");
		new_color_footer_text.toHexString();
		var new_link_footer = $("#selector_color_link_footer").spectrum("get");
		new_link_footer.toHexString();
		var new_link_footer_hover = $("#selector_color_link_footer_hover").spectrum("get");
		new_link_footer_hover.toHexString();
		var new_link_footer_visited = $("#selector_color_link_footer_visited").spectrum("get");
		new_link_footer_visited.toHexString();
		
		// Tipografías
		var new_tipografia_body = $("#selecciona_tipo").val();
		var new_tipografia_secundaria = $("#selecciona_tipo_secun").val();
		
		// Otros 
		var new_color_default_color = $("#selector_default_color").spectrum("get");
		new_color_default_color.toHexString();
		var new_color_default_secondary_color = $("#selector_default_secondary_color").spectrum("get");
		new_color_default_secondary_color.toHexString();
		
		$.ajax({
			type: 'POST',
			data: {color_header_nav: new_color_header_nav.toString(), 
				   link_header_nav: new_link_header_nav.toString(), 
				   link_header_nav_hover: new_link_header_nav_hover.toString(), 
				   link_header_nav_visited: new_link_header_nav_visited.toString(), 
				   color_header_top: new_color_header_top.toString(), 
				   link_header_top: new_link_header_top.toString(), 
				   link_header_top_hover: new_link_header_top_hover.toString(), 
				   link_header_top_visited: new_link_header_top_visited.toString(), 
				   menu_drop_background : new_menu_drop_background.toString(), 
				   color_body_background: new_color_body_background.toString(),  
				   color_section_wrapper: new_color_section_wrapper.toString(),
				   color_titles: new_color_titles.toString(),
				   color_body_text: new_color_body_text.toString(),
				   tipografia_body: new_tipografia_body, 
				   link_body: new_link_body.toString(),
				   link_body_hover: new_link_body_hover.toString(),
				   link_body_visited: new_link_body_visited.toString(),
				   color_footer_background: new_color_footer_background.toString(), 
				   color_footer_text_color_h3: new_color_footer_h3.toString(), 
				   color_footer_text: new_color_footer_text.toString(), 
				   link_footer: new_link_footer.toString(),
				   link_footer_hover: new_link_footer_hover.toString(),
				   link_footer_visited: new_link_footer_visited.toString(),
				   tipografia_secundaria: new_tipografia_secundaria,
				   color_default_color: new_color_default_color.toString(),
				   color_default_secondary_color: new_color_default_secondary_color.toString()},
			url: prefijo_rutas + 'themes/personaliza/update_colors.php',
			beforeSend: function() {
				$('.confirma_color').html("Un seg...");
			},
			success: function(response) {	
				//alert(response);
				$('.confirma_color').html("Cambiado");
				obtengo_estilos('theme.css', datos.color_default_color, new_color_default_color.toString(), datos.color_default_secondary_color, new_color_default_secondary_color.toString());
				location.reload();
			}
		});
	});
	
	// Funciones de configuración
	$("#config_barra_navegacion").on('click', function(){ config_barra_navegacion(); });
	$('#config_cabecera').on("click", function(){ config_cabecera(); });
	$('#config_cuerpo').on("click", function(){ config_cuerpo(); });
	$('#config_footer').on("click", function(){ config_footer(); });
	$('#config_tipos').on("click", function(){ config_tipos(); });
	$('#config_otros').on("click", function(){ config_otros(); });
	
	function config_barra_navegacion () {
		$('#config_barra_navegacion').css({"color":"#fff", "font-weight":"bold"});
		$('#config_cabecera, #config_cuerpo, #config_footer, #config_tipos, #config_otros').css({"color":"#bbb", "font-weight":"normal"});
		
		// Muestro sus parámetros correspondientes
		$('.parametros_cabecera, .parametros_cuerpo, .parametros_footer, .parametros_tipos, .parametros_otros').fadeOut(0, function(){ $('.parametros_barra_navegacion').fadeIn(); });
	}
	function config_cabecera () {
		$('#config_cabecera').css({"color":"#fff", "font-weight":"bold"});
		$('#config_barra_navegacion, #config_cuerpo, #config_footer, #config_tipos, #config_otros').css({"color":"#bbb", "font-weight":"normal"});
		
		// Muestro sus parámetros correspondientes
		$('.parametros_barra_navegacion, .parametros_cuerpo, .parametros_footer, .parametros_tipos, .parametros_otros').fadeOut(0, function(){ $('.parametros_cabecera').fadeIn(); });
	}
	function config_cuerpo () {
		$('#config_cuerpo').css({"color":"#fff", "font-weight":"bold"});
		$('#config_barra_navegacion, #config_cabecera, #config_footer, #config_tipos, #config_otros').css({"color":"#bbb", "font-weight":"normal"});
		
		// Muestro sus parámetros correspondientes
		$('.parametros_barra_navegacion, .parametros_cabecera, .parametros_footer, .parametros_tipos, .parametros_otros').fadeOut(0, function(){ $('.parametros_cuerpo').fadeIn(); });
	}
	function config_footer () {
		$('#config_footer').css({"color":"#fff", "font-weight":"bold"});
		$('#config_barra_navegacion, #config_cabecera, #config_cuerpo, #config_tipos, #config_otros').css({"color":"#bbb", "font-weight":"normal"});
		
		// Muestro sus parámetros correspondientes
		$('.parametros_barra_navegacion, .parametros_cabecera, .parametros_cuerpo, .parametros_tipos, .parametros_otros').fadeOut(0, function(){ $('.parametros_footer').fadeIn(); });
	}
	function config_tipos () {
		$('#config_tipos').css({"color":"#fff", "font-weight":"bold"});
		$('#config_barra_navegacion, #config_cabecera, #config_cuerpo, #config_footer, #config_otros').css({"color":"#bbb", "font-weight":"normal"});
		
		// Muestro sus parámetros correspondientes
		$('.parametros_barra_navegacion, .parametros_cabecera, .parametros_cuerpo, .parametros_footer, .parametros_otros').fadeOut(0, function(){ $('.parametros_tipos').fadeIn(); });
	}
	function config_otros () {
		$('#config_otros').css({"color":"#fff", "font-weight":"bold"});
		$('#config_barra_navegacion, #config_cabecera, #config_cuerpo, #config_footer, #config_tipos').css({"color":"#bbb", "font-weight":"normal"});
		
		// Muestro sus parámetros correspondientes
		$('.parametros_barra_navegacion, .parametros_cabecera, .parametros_cuerpo, .parametros_footer, .parametros_tipos').fadeOut(0, function(){ $('.parametros_otros').fadeIn(); });
	}
	
	
});
// API GoogleFonts
	function SetFonts(fonts) { 
		var valores_fuentes = [];
		for(var i = 0; i < fonts.items.length; i++){
			valores_fuentes[i] = fonts.items[i].family;
			$('#selecciona_tipo, #selecciona_tipo_secun').append($("<option></option>").attr("value", fonts.items[i].family).text(fonts.items[i].family));
			if(fonts.items[i].family == valor_tipo_selected) {
				$('#selecciona_tipo option').prop("selected","selected");
			}
			if(fonts.items[i].family == valor_tipo_selected_secun) {
				$('#selecciona_tipo_secun option').prop("selected","selected");
			}
		}
		
		// Para buscardor de fuentes de google fonts
		/*$('#texto_busca_fuente').on('change', function(){
			 $('#texto_busca_fuente').val(function(_,v){alert(v);
				 if(jQuery.inArray(v, valores_fuentes) !== -1){alert('dentro de if');
					 $("#selecciona_tipo option:selected").attr("selected", false);
					 $("#selecciona_tipo option[value='" + v + "']").attr("selected", true);
				 } else {
					 alert('Dentro de else');
				 }
			 });
		});*/
	}

// Cambiar colores primarios
function obtengo_estilos(nombre_hoja, color_primario, nuevo_color_primario, color_secundario, nuevo_color_secundario) {
	for(i = 1; i < document.styleSheets.length; i++){
		if(document.styleSheets[i].href.toString().includes(nombre_hoja)) {
			document.styleSheets[i].href.toString();
			var ruta_hoja_estilos = document.styleSheets[i].href;
			$.ajax({
				type: 'POST',
				url: prefijo_rutas + 'themes/personaliza/corporative_colors.php',
				data: {ruta_para_color : ruta_hoja_estilos.toString(),
					   color_primario : color_primario.toString(),
					   nuevo_color_primario : nuevo_color_primario.toString(),
					   color_secundario : color_secundario.toString(),
					   nuevo_color_secundario : nuevo_color_secundario.toString()},
				success: function(data){
					console.log('css modificado');
				}
			});
		}
	}
}