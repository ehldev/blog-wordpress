<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	<!-- Animations -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<?php wp_head(); ?>
</head>
<body>
	<!-- Header -->
	<header id="header" class="header">
		<div class="header__container">
			<div class="header__social">
				<span class="icon icon--header">
					<a href="" class="icon__link" target="_blank">
						<i class="fab fa-facebook-f"></i>
					</a>
				</span>
				<span class="icon icon--header">
					<a href="" class="icon__link" target="_blank">
						<i class="fab fa-instagram"></i>
					</a>
				</span>
				<span class="icon icon--header">
					<a href="" class="icon__link" target="_blank">
						<i class="fab fa-twitter"></i>
					</a>
				</span>
			</div>
			<div class="header__logo-container">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php echo getImage('logo.png'); ?>" alt="Logo de blog" class="logo">
				</a>
			</div>
			<button id="hamburger" class="hamburger hamburger--collapse" type="button">
			  <span class="hamburger-box">
			    <span class="hamburger-inner"></span>
			  </span>
			</button>
			<nav id="nav" class="nav">
				
				<?php get_search_form(); ?>

				<?php if(has_nav_menu('main_menu')): ?>
					<?php 
						wp_nav_menu(array(
							'theme_location' => 'main_menu',
							'menu_class' => 'nav__list',
							'container' => false
						));
					?>
				<?php else: ?>
					<ul class="nav__list">
						<li class="nav__item">
							<a href="" class="nav__link">Sobre mí</a>
						</li>
						<li class="nav__item">
							<a href="" class="nav__link">Blog</a>
						</li>
						<li class="nav__item">
							<a href="" class="nav__link">Contacto</a>
						</li>
					</ul>
				<?php endif; ?>
			</nav>
		</div>
	</header>
	<!-- End header -->