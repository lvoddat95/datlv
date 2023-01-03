<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package write
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<!-- End - Google font -->

	<!-- Load CSS -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/utils/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/utils/jquery-ui/themes/base/autocomplete.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/utils/slick-carousel/slick/slick.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/utils/slick-carousel/slick/slick-theme.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/utils/owl.carousel/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/utils/sweetalert2/dist/sweetalert2.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/utils/@fancyapps/fancybox/dist/jquery.fancybox.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/utils/hc-offcanvas-nav/dist/hc-offcanvas-nav.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/utils/select2/dist/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/utils/datatables/datatables.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/utils/tipsy/tipsy.min.css">

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/assets/css/style.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/assets/css/responsive.css">
	<!-- Load CSS -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<div id="page" class="site">

		<div class="site-branding d-none">
			<?php
			the_custom_logo();
			if (is_front_page() && is_home()) :
			?>
				<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
			<?php
			endif;
			$write_description = get_bloginfo('description', 'display');
			if ($write_description || is_customize_preview()) :
			?>
				<p class="site-description">
					<?php
					// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
					echo $write_description;
					?>
				</p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<header id="ci-header" class="ci-header">
			<nav class="navbar px-3 p-xl-0 ">
				<div class="container">
					<button class="navbar-toggle d-block d-xl-none" type="button">
						<b class="icon-bar"></b>
						<b class="icon-bar"></b>
						<b class="icon-bar"></b>
					</button>

					<a class="navbar-brand" href="<?php echo esc_url(home_url('/oxanh/trang-chu/')); ?>">
						<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/assets/img/logo/logo-text.png" alt="Logo" width="130px">
					</a>

					<div class="navbar-user d-block d-xl-none">
						<div class="dropdown">
							<button class="dropdown-toggle dropdown-hide-arrow" data-bs-toggle="dropdown">
								<i class="fal fa-circle-user"></i>
							</button>
							<ul class="dropdown-menu dropdown-menu-end">
								<li>
									<a class="dropdown-item" href="<?php echo esc_url(home_url('/oxanh/tai-khoan/')); ?>">
										<i class="far fa-user me-3"></i>Quản lý tài khoản
									</a>
								</li>
								<li>
									<a class="dropdown-item" href="<?php echo esc_url(home_url('/oxanh//')); ?>">
										<i class="far fa-lock-keyhole me-3"></i>Đăng nhập
									</a>
								</li>
								<li>
									<a class="dropdown-item" href="<?php echo esc_url(home_url('/oxanh//')); ?>">
										<i class="far fa-key-skeleton me-3"></i>Đăng kí
									</a>
								</li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="tel:0339869338">Hotline: 0339.869.338</a></li>
							</ul>
						</div>
					</div>

					<?php wp_nav_menu(
						array(
							'theme_location' 	=> 'main-menu',
							'menu_id'        	=> 'main-menu',
							'menu_class'     	=> 'nav navbar-nav me-auto',
							'container'			=> false,
						)
					); ?>

					<div class="navbar-right d-none d-xl-block">
						<form class="d-flex align-items-center">
							<div class="ci-menu-link d-flex align-items-center me-5">
								<div class="ci-menu-link__item">
									<svg class="ci-menu-user-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z">
										</path>
									</svg>
									<div class="ci-menu-link__item">
										<a href="<?php echo HTTP_PATH . 'pages/dang-nhap2.php'; ?>">
											Đăng nhập
										</a>
									</div>
								</div>

								<span class="ci-menu-link__separator"></span>
								<div class="ci-menu-link__item">
									<a href="<?php echo HTTP_PATH . 'pages/dang-ky2.php'; ?>">
										Đăng kí
									</a>
								</div>
							</div>
							<div class="ci-header-phone">
								<a class="ci-btn ci-btn-main" href="tel:0978240990">
									<i class="fal fa-phone-volume fz-20 me-3"></i>0978 240 990
								</a>
							</div>
							<!-- <button class="ci-btn ci-btn-main ci-btn-mua-bh" type="button">MUA </button> -->
						</form>
					</div>

				</div>
			</nav>
		</header>