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
    echo the_title('<h4><a href="' . get_permalink() . '">', '</a></h4>');
    echo the_post_thumbnail();
    echo '<h5>"' . get_the_excerpt() . '"</h5>';
    echo '</div>';
  endwhile;
  echo '</div>';
}
?>

<?php get_footer(); ?>
