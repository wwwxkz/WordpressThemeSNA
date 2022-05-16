<?php 

get_header(); 

if ( have_posts() ) {
	while ( have_posts() ) :
		the_post();
		the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
	endwhile;
	get_template_part( 'partials/pagination' );
} 

get_footer(); 
?>
