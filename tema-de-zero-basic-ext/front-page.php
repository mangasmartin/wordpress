<?php
//Aquest és el contructor de la pàgina principal
//Només actúa si s'estableix que la pàgina principal és diferent al llistat d'entrades
?>

<?php get_header(); ?>

<main>

<?php the_content(); ?>

</main>

<?php get_footer(); ?>