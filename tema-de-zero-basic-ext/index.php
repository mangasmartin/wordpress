<?php
//Aquesta és la pàgina per defecte si falten d'altres com home.php, singular.php, single.php, page.php o front-page.php
?>

<?php get_header(); ?>

<main>

<h1>Pàgina principal</h1>

<?php
if (have_posts()) {
	while (have_posts()){
		the_post();
		//print_r(get_post()); //Mostra tots els atributs de l'entrada

		//Per exemple es fa una lectura de totes les entrades
		?>
		<article>
			<h2>
				<a href="<?= get_post()->post_name; ?>">
					<?php the_title(); ?>
				</a>
			</h2>
			<div>
				<?php the_excerpt(); ?>
			</div>
		</article>
		<?php
	} 
}
?>

</main>

<?php get_footer(); ?>