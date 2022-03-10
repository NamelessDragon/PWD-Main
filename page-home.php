<?php
/**
 * Template Name: Dragons Homepage
 * @package Powerful_Dragons
 */
get_header();
?>

	<?php 
		$dragon_settings = pods( 'dragon_settings' );
	?>

	<header class="header">
		<div class="header-logo">
			<img src="<?php echo $dragon_settings->display( 'header_logo_art' ); ?>" alt="Powerful Dragons Logo Art">
		</div>

		<div class="owl-carousel is-hidden-tablet" id="home-banner-mobile">
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/head-mobile/head-mobile-power.png" alt="Powerful Dragons - Power">
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/head-mobile/head-mobile-solar.png" alt="Powerful Dragons - Solar">
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/head-mobile/head-mobile-hydro.png" alt="Powerful Dragons - Hydro">
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/head-mobile/head-mobile-wind.png" alt="Powerful Dragons - Wind">
			</div>
			<div class="item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/head-mobile/head-mobile-nuclear.png" alt="Powerful Dragons - Nuclear">
			</div>
		</div><!--owl-carousel-->
		
		<img class="header-banner" src="<?php echo $dragon_settings->display( 'header_banner_image_wide' ); ?>" alt="Powerful Dragons Banner Wide">
	</header>

	<main class="main">
		
		<section class="section-intro">
			<div class="container">
				<div class="columns">
					<div class="column">
						<h1 class="title title-intro is-uppercase mb-4">
							<span>
								<?php echo $dragon_settings->display( 'intro_title_count' ); ?>
							</span> <br> 
							<?php echo $dragon_settings->display( 'intro_title_main_title' ); ?>
						</h1>
						<h2 class="subtitle subtitle-intro is-uppercase">
							<?php echo $dragon_settings->display( 'intro_subtitle' ); ?>
						</h2>
						<p><?php echo $dragon_settings->display( 'intro_introduction' ); ?></p>
					</div><!--column-->

					<div class="column">
						<div class="box mt-4">
							<h3 class="title is-3 is-uppercase mb-3"><?php echo $dragon_settings->display( 'home_wl_title' ); ?></h3>
							<p class=" mb-4"><?php echo $dragon_settings->display( 'home_wl_description' ); ?></p>
							<a href="<?php echo $dragon_settings->display( 'home_discord_invite' ); ?>" class="button is-discord" target="_blank">
								<i class="fa-brands fa-discord mr-2"></i>	
								Join Discord
							</a>
						</div>
					</div><!--column-->
				</div><!--columns-->
			</div><!--container-->
		</section>

		<section class="section-features">
			<div class="container">
				<h2 class="title is-1 is-uppercase has-text-centered mb-3"><?php echo $dragon_settings->display( 'features_title' ); ?></h2>
				<h3 class="subtitle is-3 is-uppercase has-text-centered"><?php echo $dragon_settings->display( 'features_subtitle' ); ?></h3>

				<div class="owl-carousel owl-theme" id="home-features">

					<?php
						$args = array(
							'post_type' => 'feature'
						);
						$the_query = new WP_Query( $args ); 
					?>

					<?php if ( $the_query->have_posts() ) : ?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="item">
							<div class="box mt-4">
								<h4 class="title is-4 is-uppercase mb-3"><?php the_title(); ?></h4>
								<?php the_content();?>
							</div>
						</div>
						<?php endwhile; ?>

						<?php wp_reset_postdata(); ?>

					<?php endif; ?>

				</div><!--owl-carousel-->

				<div class="slider_nav">
					<button class="am-prev button is-outlined is-primary mr-3">
						<i class="fa-solid fa-long-arrow-left"></i>
					</button>
					<button class="am-next button is-outlined is-primary">
						<i class="fa-solid fa-long-arrow-right"></i>
					</button>
				</div>
			</div><!--container-->
		</section>

		<section class="section-faq">
			<div class="container">
				<h2 class="title is-1 is-uppercase has-text-centered mb-5">Frequently Asked Questions</h2>
				
				<ul class="accordion">

					<?php
						$args = array(
							'post_type' => 'faq'
						);
						$the_query = new WP_Query( $args ); 
					?>

					<?php if ( $the_query->have_posts() ) : ?>

						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<li class="box mb-3 p-0">
							<h4 class="accordion-title accordion-toggle"><?php the_title(); ?></h4>
							<div class="accordion-content">
								<?php the_content();?>
							</div>
						</li>
						<?php endwhile; ?>

						<?php wp_reset_postdata(); ?>

					<?php endif; ?>

				</ul>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
