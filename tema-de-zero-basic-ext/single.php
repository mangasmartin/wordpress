<?php
//Aquest és el constructor d'entrades
//Si ni page.php ni single.php estan definides, el constructor serà singular.php 
?>

<?php get_header(); ?>

<main>

	<article>
		<h1>
			<?php the_title(); ?>
		</h1>
		<?php
		//Mostra la imatge destacada, si està establerta
		if (has_post_thumbnail()){
		?>	
		<img src="<?= get_the_post_thumbnail_url(); ?>">
		<?php
		}
		?>
		<div>
			<?php the_content(); ?>
		</div>
		<div>
		<?php
			the_tags(); //Mostra les etiquetes de l'entrada
			the_category(); //Mostra la categoria de l'entrada
			the_meta(); //Mostra un llistat dels camps personalitzats existents
		?>
		</div>
	</article>

</main>

<?php get_footer(); ?>