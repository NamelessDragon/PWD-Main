<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Powerful_Dragons
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
	<?php wp_head(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3E5ST68YPX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3E5ST68YPX');
</script>
</head>

<body <?php body_class( 'has-navbar-fixed-top' ); ?>>
<?php wp_body_open(); ?>

	<div class="app test">
		
		<nav class="navbar is-fixed-top is-dark" aria-label="main navigation">
			<div class="container">
				<div class="navbar-brand">
					<?php the_custom_logo();?>
		
					<a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
					</a>
				</div>
		
				<div id="navMenu" class="navbar-menu">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'container'      => '',
								// 'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'menu_class'     => 'navbar-start navbar-start--centered',
								'add_li_class'  => 'navbar-item'
							)
						);
					?>

					<div class="navbar-item navbar-sep">//</div>

					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-2',
								'menu_id'        => 'social-menu',
								'container'      => '',
								// 'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								'menu_class'     => 'navbar-end',
								'add_li_class'  => 'navbar-item'
							)
						);
					?>

				</div><!--navbar-menu-->
			</div><!--container-->
		</nav>