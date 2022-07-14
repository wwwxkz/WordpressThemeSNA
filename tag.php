<?php get_header(); ?>

<div class="noticias">
<h2 class="categorias-header titulo"><?php $id = single_tag_title() ?></h2>
	
<?php 
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
?>
</div>
<style>
	a {
		color: #666;
		text-decoration: none;
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


<?php get_footer(); ?>

