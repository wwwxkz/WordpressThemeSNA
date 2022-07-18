<?php get_header(); ?>

<?php
if (is_page(4205) || is_page(4039) || is_page(4075) || is_page(4212) || is_page(4205)) {
	get_header();
    the_content();
	get_footer();
} else {
	echo '
		<div id="container-container-sidebar">
			<div id="sidebar-1">
				'; 
	dynamic_sidebar('sidebar-2');
		echo '
			</div>
			<div id="content">
				';
	the_content();
		
		echo '
			</div>
			<div id="sidebar-2">
				';
	dynamic_sidebar('sidebar-1'); 
		echo '
			</div>
		</div>
		<style> 
		#container-container-sidebar {
			display: flex; 
			flex-direction: row;
		}
		#sidebar-1, #sidebar-2 {
			border: 1px solid #d3d2d1;
			border-radius: 10px;
			padding: 20px;
			padding-top: 0;
			margin-right: 30px;
			width: 20%;
			height: max-content;
			box-shadow: inset 0 0 .2em #e5e5e5;
		}
		#sidebar-1 a, #sidebar-2 a {
			color: #666;
			text-decoration: none;
		}
		#sidebar-2 {
			padding-top: 20px;
			margin-right: 0px;
			margin-left: 30px;
		}
		#content {
			width: 60%;
		}
		@media (max-width: 780px) {
			#sidebar-1, #sidebar-2{
				display: none;
			}
			#container-container-sidebar {
				flex-direction: column;
			}
			#content {
				width: 100%;
			}
		}
		</style>
	';
	get_footer();

}
?>


