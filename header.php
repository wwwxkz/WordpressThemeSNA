<html>

<head>
	<!-- Wordpress deafult settings and headers -->
	<?php wp_head(); ?>
	<!-- Title -->
	<title>SNA</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- SEO -->
	<meta name="keywords" content="aeronautas, sindicato, avião, aeronauta">
	<meta name="rights" content="Sindicato Nacional dos Aeronautas - SNA">
	<meta name="description" content="Sindicato Nacional dos Aeronautas">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/landingpage.css'; ?>">
</head>

<body>
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		<?php
			wp_nav_menu(array(
				'container' => 'ul',
				'menu_class' => 'dropdown-menu dropdown-menu',
			));
		?>
	</div>

	<div id="navbar">
		<div id="navbar-container">
			<div id="navbar-left">
				<img onclick="openNav()" src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/menu-aberto.png'; ?>" />
				<img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/logo.png'; ?>" />
				<img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/lupa.png'; ?>" onclick="openSearch()" />
			</div>
			<div id="navbar-right">
				<img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/instagram.svg'; ?>" />
				<img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/play.svg'; ?>" />
				<img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/facebook.svg'; ?>" />
				<img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/twitter.svg'; ?>">
				<img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/flickr.svg'; ?>" />
				<button><a href="https://projetos.aeronautas.org.br/associe-se/">ASSOCIE-SE</a></button>
				<button><a href="https://portal.aeronautas.org.br/">PORTAL DO ASSOCIADO</a></button>
			</div>
		</div>
		<div id="navbar-progress">
			<div id="navbar-progress-container"></div>
		</div>
		<!-- Search bar -->
		<?php get_search_form(); ?>
	</div>
	<!-- Open div "container", and close in footer -->
	<div class="container">
		<div class="container-container">

<!-- Local scripts -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/script.js'; ?>"></script>