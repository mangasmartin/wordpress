<?php
//Aquest és el constructor de pàgines
//Si ni page.php ni single.php estan definides, el constructor serà singular.php
?>

<?php get_header(); ?>

<main>

	<article>
		<h1>
			<?php the_title(); ?>
		</h1>
		<div>
			<?php the_content(); ?>
		</div>
	</article>
		

</main>

<?php get_footer(); ?>