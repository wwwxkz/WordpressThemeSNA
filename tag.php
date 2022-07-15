<?php get_header(); ?>

<div class="noticias">
	<div id="sidebar-2">
		<?php dynamic_sidebar('sidebar-1'); ?>
	</div>
	<div>
		<h2 class="categorias-header titulo"><?php $id = single_tag_title() ?></h2>
		<br>
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
</div>
<style>
	.noticias {
		display: flex;
		flex-direction: row-reverse;
	}
	.noticias > div:last-child {
    	flex-grow: 1;
	}
	#sidebar-2 {
		border: 1px solid #d3d2d1;
		border-radius: 10px;
		padding: 20px;
		padding-top: 20px;
		margin-left: 30px;
		width: 20%;
		height: max-content;
		box-shadow: inset 0 0 .2em #e5e5e5;
	}
	@media (max-width: 780px) {
		#sidebar-2 {
			display: none;
		}
	}
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

