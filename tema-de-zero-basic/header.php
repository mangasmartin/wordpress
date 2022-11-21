<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo get_bloginfo(); ?></title>
	<link rel="icon" type="image/x-icon" href="">
	<link rel="stylesheet" href="http://localhost/wordpress/wp-content/themes/basica/assets/estils.css">
	<script src=""></script>
	<?php wp_head(); ?>
</head>
<body>

<header id="cap">
	<a href="<?= get_bloginfo('url') ?>">El meu blog</a>
</header>