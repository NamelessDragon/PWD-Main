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

			<div class="box marketplace p-3 is-flex">
				<img class="marketplace-logo is-align-self-center" src="<?php echo get_template_directory_uri(); ?>/assets/img/tofu-logo.png" alt="">
				<div class="marketplace-info ml-4">
					<h2 class="is-4 is-uppercase"><strong>tofuNFT is our official marketplace!</strong></h2>
					<a href="https://tofunft.com/collection/powerful-dragons/items" target="_blank">
						<strong>Trade PWD on tofunft.com</strong>
						<i class="fa-solid fa-arrow-right-long"></i>
					</a>
				</div>
			</div>
  		</div>
	</div>
</div><!--container-->