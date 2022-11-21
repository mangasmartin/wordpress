<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= get_bloginfo(); ?></title>
	<link rel="icon" type="image/x-icon" href="">
	<?php 
	// Amb get_bloginfo('template_directory') cridem a la part de la URI on figura el tema actual de Wordpress

	//Exemples:
	?>
	<link rel="stylesheet" href="<?= get_bloginfo('template_directory') ?>/assets/estils.css">
	<script src="<?= get_bloginfo('template_directory') ?>/assets/scripts.css"></script>
	
	<?php wp_head(); ?>
</head>
<body>

<header id="cap">
	<a href="<?= get_bloginfo('url') ?>">El meu blog</a>
</header>