<?php
//Llista les entrades d'una categoria
?>

<?php get_header(); ?>

<main>

<h1>Entrades de la categoria <?= single_cat_title(); ?></h1>

<?php
if (have_posts()) {
	while (have_posts()){
		the_post();
		?>
		<article>
			<h2>
				<a href="<?= get_post()->post_name; ?>">
					<?php the_title(); ?>
				</a>
			</h2>
			<?php
			if (has_post_thumbnail()){
			?>	
			<img src="<?= get_the_post_thumbnail_url(); ?>">
			<?php
			}
			?>
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