<?php
//Aquesta és la pàgina per defecte
?>

<?php get_header(); ?>

<main>

<h1>Pàgina principal</h1>

<?php
if (have_posts()) {
	while (have_posts()){
		the_post();
		?>
		<h2>
			<a href="<?php echo get_post()->post_name; ?>">
				<?php the_title(); ?>
			</a>
		</h2>
		<div id="content">
			<?php the_content(); ?>
		</div>
		<?php
	} 
} else {
	?>
	<p>No hi han articles</p>
	<?php
}
?>

</main>

<?php get_footer(); ?>