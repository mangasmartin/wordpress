<?php
//Aquest és el contructor del llistat d'entrades
//Només actúa si s'estableix que la pàgina principal és diferent a aquest llistat 
?>

<?php get_header(); ?>

<main>

<h1>Pàgina principal</h1>

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