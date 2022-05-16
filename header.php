<html>
<head>
	<!-- Wordpress deafult settings and headers -->
	<?php wp_head(); ?>
	<!-- Title -->
	<title>SNA</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/wordpress.css'; ?>">
	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<!-- Icons and still bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Fonts  -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

<body>
	<!-- Navbar (SNA logo) -->
	<nav class="navbar navbar-light bg-light fixed-top">
		<div class="container-fluid">
			<div class="navbrand-container">
				<!-- Header menu icon -->
				<div class="dropdown">
					<button onblur="gerenciar_opacidade(true);" onclick="pesquisa_esconder(); gerenciar_opacidade();" type="button" data-bs-toggle="dropdown" aria-expanded="true" style="background: none; border: none;">
						<img class="menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/menu-aberto.png'; ?>"/>
						<img class="menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/menu-fechado.png'; ?>" style="display: none;"/>
					</button>
					<?php
						wp_nav_menu(array( 
							'container' => 'ul',
							'menu_class' => 'dropdown-menu dropdown-menu',
						)); 
					?>
				</div> &nbsp &nbsp &nbsp
				<!-- Desktop navbar -->
				<a class="desktop navbar-brand" href="#">
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/logo.png'; ?>">
				</a>
			</div>
			<!-- Mobile navbar -->
			<a class="mobile navbar-brand" href="#">
				<img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/logo.png'; ?>">
			</a>
			<img class="mobile" onclick="pesquisa_visibilidade()" src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/lupa.png'; ?>"></img>
			<div class="desktop botoes">
			<!-- Social icons -->
				<div class="social">
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/instagram.svg'; ?>"></img> &nbsp
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/play.svg'; ?>"></img> &nbsp
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/facebook.svg'; ?>"></img> &nbsp
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/twitter.svg'; ?>"></img> &nbsp
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/flickr.svg'; ?>"></img> &nbsp
				</div> &nbsp &nbsp
				<button class="btn btn-success">ASSOCIE-SE</button> &nbsp &nbsp
				<button class="btn btn-primary">PORTAL DO ASSOCIADO</button>
			</div>
		</div>
	</nav>
	<!-- Search bar -->
	<?php get_search_form(); ?>
	<!-- Progress bar -->
	<div class="progress-bar-container sticky-top">
		<div id="progress-bar"></div>
	</div>
	<!-- Open div "container", and close in footer -->
	<div class="container">

<!-- Local scripts -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/script.js'; ?>"></script>
