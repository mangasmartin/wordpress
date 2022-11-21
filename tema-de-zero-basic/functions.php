<?php
add_filter( 'show_admin_bar', '__return_false' ); //Amaga la barra d'administració davant un perfil autentificat

//Crea un shortcode
function el_meu_shortcode($params){
	$default = array(
		"nom" => "No has escrit un nom", //Exemple de valors per defecte de variables passades com a paràmetres
		"cognoms" => ""
	);
	$atributs = shortcode_atts( $default, $params );

	return "<p>Adiós, " . $atributs['nom'] . "</p>"; //Exemple de construcció que s'hi pot fer
}
add_shortcode('hola', 'el_meu_shortcode');
?>