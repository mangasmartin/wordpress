<?php
add_filter( 'show_admin_bar', '__return_false' ); //Amaga la barra d'administració davant un perfil autentificat
add_theme_support( 'post-thumbnails' ); //Mostra el quadre per a afegir una imatge destacada

//Shotcode
function el_meu_shortcode($params){
	$default = array(
		"nom" => "No has escrit un nom", //Exemple de valors per defecte de variables passades com a paràmetres
		"cognoms" => ""
	);
	$atributs = shortcode_atts( $default, $params );
	return "<p>Hola, " . $atributs['nom'] . "</p>"; //Exemple de construcció que s'hi pot fer
}
add_shortcode('hola', 'el_meu_shortcode');
?>