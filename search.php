<?php

get_header();

echo '<div class="noticias">';
echo '<h2 class="categorias-header titulo">Pesquisa</h2>';
echo do_shortcode( '[searchandfilter fields="search,category,post_tag"]' );
if ( have_posts() ) {
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
			.noticias select, .noticias input {
				border-radius: 10px;
			}
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
			
			/* Search & Filter Styles */
			.searchandfilter p
			{
				margin-top: 1em;
				display:inline-block;
			}
			.searchandfilter ul
			{
				padding-left: 0;
				display:inline-block;
			}
			.searchandfilter li
			{
				list-style: none;
				display:inline-block;
				padding-right:10px;
			}

			/* If in a widget area make a single column by adding display block  */
			.widget-area .searchandfilter li, .widget-area .searchandfilter p
			{
				display:block;
			}
			.searchandfilter label
			{
				display:block;
			}
			.searchandfilter h4
			{
				margin:15px 0;
				font-size:16px;
			}
			.searchandfilter ul > li > ul:not(.children)
			{
				margin-left:0;
			}
			@media (max-width: 780px) {
				.searchandfilter li {
					margin-bottom: 5px;
					width: 100%;
				}
				.searchandfilter li > input, select {
				    width: 100%;
				}
			}
    </style>
    ';

get_footer();

?>
