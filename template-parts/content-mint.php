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
	<div class="columns is-centered">
  		<div class="column is-half-tablet">
			<div class="mint-content mb-4">
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

		  	<?php echo $dragon_settings->display( 'mint_embed_code' ); ?>
  		</div>
	</div>
</div><!--container-->