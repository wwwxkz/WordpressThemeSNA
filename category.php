<?php get_header(); ?>

<?php
echo '<h2 class="categorias-header titulo">Parcerias e convênios</h2>';
echo '<h4 class="categorias-header">Selecione uma categoria para quais empresas ofereçam descontos aos associados</h4>';
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
