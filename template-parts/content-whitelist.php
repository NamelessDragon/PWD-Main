<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Powerful_Dragons
 */

?>
	<?php 
		$dragon_settings = pods( 'dragon_settings' );
	?>

<div class="container">
	<div class="columns is-mobile is-centered">
  		<div class="column is-half-desktop">

			<div class="box">
				<h3 class="title is-3 is-uppercase mb-3">Check if you are whitelisted</h3>
				<?php echo FrmViewsDisplaysController::get_shortcode( array( 'id' => 170 ) ); ?>
			</div>

			<div class="box">
				<h3 class="title is-3 is-uppercase mb-3">Join Whitelist</h3>
				
			<?php
				the_content();
				
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pwdr' ),
						'after'  => '</div>',
					)
				);
			?>
			</div>

			<!-- <div class="box">
				<h3 class="title is-3 is-uppercase mb-3"><?php echo $dragon_settings->display( 'whitelist_info_box_title' ); ?></h3>
				<?php echo $dragon_settings->display( 'whitelist_info_box_instructions' ); ?>
				<a href="<?php echo $dragon_settings->display( 'whitelist_info_box_invite_url' ); ?>" class="button is-discord mt-4" target="_blank">
					<i class="fa-brands fa-discord mr-2"></i>	
					Join Discord
				</a>
			</div> -->
			
			<?php if ( get_edit_post_link() ) : ?>
				<footer class="entry-footer">
					<?php
					edit_post_link(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Edit <span class="screen-reader-text">%s</span>', 'pwdr' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post( get_the_title() )
						),
						'<span class="edit-link">',
						'</span>'
					);
					?>
				</footer><!-- .entry-footer -->
			<?php endif; ?>

  		</div>
	</div>
</div><!--container-->