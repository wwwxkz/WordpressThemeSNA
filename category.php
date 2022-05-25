<?php get_header(); ?>

<?php

single_cat_title('<h2 class="categorias-header titulo">','</h2>');
if ( have_posts() ) {
  echo '<div class="categorias">';
	while ( have_posts() ) :
    echo '<div class="categoria">';
		the_post();
    echo '<br>';
    echo the_title('<h6><a href="' . get_permalink() . '">', '</a></h6>');
    echo the_post_thumbnail('thumbnail');
    echo '<a href="' . get_permalink() . '">';
    echo '<h6>"' . get_the_excerpt() . '"</h6>';
    echo '</a>';
    echo '</div>';
  endwhile;
  echo '</div>';
}
?>

<?php get_footer(); ?>
