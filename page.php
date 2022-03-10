<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Powerful_Dragons
 */

get_header();
?>
	<section class="page-title mt-6 pl-5 pr-5">
		<div class="container">
			<h1 class="title is-1 is-uppercase has-text-centered"><?php the_title(); ?></h1>
		</div>
	</section>

	<main class="main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
