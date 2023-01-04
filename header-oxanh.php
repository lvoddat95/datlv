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

	<?php 
	// wp_body_open(); 
	?>

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
		</div>

		<header id="ci-header" class="ci-header">
			<nav class="navbar px-3 p-xl-0 ">
				<div class="container">
					<button class="navbar-toggle d-block d-xl-none" type="button">
						<b class="icon-bar"></b>
						<b class="icon-bar"></b>
						<b class="icon-bar"></b>
					</button>

					<a class="navbar-brand ms-5 ms-sm-0" href="<?php echo esc_url(home_url('/oxanh/trang-chu/')); ?>">
						<img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/oxanh/assets/img/logo/logo-text.png" alt="Logo" width="130px">
					</a>

					<?php wp_nav_menu(
						array(
							'theme_location' 	=> 'main-menu',
							'menu_id'        	=> 'main-menu',
							'menu_class'     	=> 'nav navbar-nav m-auto',
							'container'			=> false,
						)
					); ?>

					<div class="navbar-right d-flex align-items-center">

						<div class="navbar-nu navbar-notification">
							<div class="dropdown">
								<button class="dropdown-toggle dropdown-hide-arrow navbar-icon" data-bs-toggle="dropdown">
									<i class="fal fa-bell"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-end">
									<h3 class="notifi-top">Tin nhắn hệ thông</h3>
									<div class="notifi-middle">
										<a class="notifi-item" href="">
											<p>Cập nhật đối với tài khoản Lê Văn A </p>
											<span>Thay đổi liên quan đến "Gói G2" Vào ngày 28/11/2022 11:33</span>
										</a>
										<a class="notifi-item" href="">
											<p>Cập nhật đối với tài khoản Lê Văn A </p>
											<span>Thay đổi liên quan đến "Gói G2" Vào ngày 28/11/2022 11:33</span>
										</a>
										<a class="notifi-item" href="">
											<p>Cập nhật đối với tài khoản Lê Văn A </p>
											<span>Thay đổi liên quan đến "Gói G2" Vào ngày 28/11/2022 11:33</span>
										</a>
										<a class="notifi-item" href="">
											<p>Cập nhật đối với tài khoản Lê Văn A </p>
											<span>Thay đổi liên quan đến "Gói G2" Vào ngày 28/11/2022 11:33</span>
										</a>
									</div>
									<a class="notifi-bottom" href="">
										Xem tất cả
									</a>
								</div>
							</div>
						</div>

						<div class="navbar-nu navbar-user">
							<div class="dropdown d-flex align-items-center">
								<a class="navbar-icon" href="<?php echo esc_url(home_url('/oxanh/dang-nhap/')); ?>">
									<i class="fal fa-circle-user"></i>
									<span class="ms-3 d-none d-sm-block">Đăng nhập</span>
								</a>
							</div>
						</div>

						<div class="ci-header-phone d-none d-xl-block ms-4">
							<a class="ci-btn ci-btn-main" href="tel:0339869338">
								<i class="fal fa-phone-volume fz-20 me-3"></i>0339.869.338
							</a>
						</div>
					</div>

				</div>
			</nav>
		</header>