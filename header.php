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
<!-- Local scripts -->
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/script.js'; ?>"></script>

<body>
	<!-- Navbar (SNA logo) -->
	<nav class="navbar navbar-light bg-light fixed-top">
		<div class="container-fluid">
			<div class="navbrand-container">
				<button onclick="pesquisa_esconder()" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/imgs/menu-aberto.png'; ?>"></img>
				</button> &nbsp &nbsp &nbsp
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
			<!-- Header menu (link to pages) -->
			<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasNavbarLabel">SNA Off</h5>
					<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<!-- Retrieve wordpress menu created by admin -->
					<?php
						wp_nav_menu(array( 
							'menu_class' => 'wp-menu',
						)); 
					?>
				</div>
			</div>
		</div>
	</nav>
	<!-- Pesquisa bar -->
	<nav class="desktop navbar fixed-top" id="pesquisa-container">
		<div class="container-fluid">
			<div style="flex-grow: 1;">
				<div class="input-group flex-nowrap">
					<input type="text" class="form-control" placeholder="Faça aqui sua pesquisa por notícias e assuntos">
					<span class="desktop input-group-text"><i class="fas fa-search input-icon"></i></span>
				</div>
			</div>
		</div>
	</nav>
	<!-- Progress bar -->
	<div class="progress-bar-container sticky-top">
		<div id="progress-bar"></div>
	</div>
	<!-- Open div "container", and close in footer -->
	<div class="container">