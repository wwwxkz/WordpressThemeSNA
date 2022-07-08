<?php

get_header();

if ( have_posts() ) {
	echo '<div class="noticias">';
	echo '<h2 class="categorias-header titulo">Pesquisa</h2>';
	echo('<br>');
	while ( have_posts() ) :
		the_post();

		echo "<ul class='noticia-grupo'>";
		echo "<li>";
		the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' );
		echo "</li>";
				echo "<p>";
	        the_time('j F, Y');
	       	echo ' - ';
	        the_category(' ', ' ');
				echo "</p>";
		echo "</ul>";
	endwhile;
	echo '<br><br>';
	get_template_part( 'partials/pagination' );


}
	echo '</div>';

    echo '
    <style>
			a {
				text-decoration: none !Important;
    			color: #666;
			}
			.noticia-grupo > li > a {
				font-size: var(--wp--preset--font-size--medium);
			}
			.noticia-grupo > p {
				font-size: var(--wp--preset--font-size--small);
				color: #1768b1;
			}
			.noticia-grupo {
				border-bottom: solid #e5e5e5 1px;
				margin-bottom: 15px;
			}
    </style>
    ';

get_footer();

?>
