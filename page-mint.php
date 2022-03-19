<?php
/**
 * Template Name: Minting Dapp
 * @package Powerful_Dragons
 */
get_header();
?>
	<?php 
		$dragon_settings = pods( 'dragon_settings' );
	?>

	<main class="main" style="background-image: url('<?php echo $dragon_settings->display( 'mint_banner_image' ); ?>')">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'mint' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		
	</main><!-- #main -->

<?php
get_footer();
