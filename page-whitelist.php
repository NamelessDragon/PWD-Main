<?php
/**
 * Template Name: Whitelist
 * @package Powerful_Dragons
 */
get_header();
?>

	<section class="page-title mt-6 pl-5 pr-5">
		<div class="container">
			<h1 class="title is-1 is-uppercase has-text-centered">Get Whitelisted</h1>
		</div>
	</section>

	<main class="main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'whitelist' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		
	</main><!-- #main -->

<?php
get_footer();
