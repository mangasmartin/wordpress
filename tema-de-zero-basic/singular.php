<?php
//Aquesta és la pàgina per defecte per a entrades i pàgines
?>

<?php get_header(); ?>

<main>

<?php
//print_r(get_post()); //Mostra tots els atributs de l'entrada o pàgina
?>
<h1>
	<?php the_title(); ?>
</h1>
<div>
<?php the_content(); ?>
</div>	

</main>

<?php get_footer(); ?>