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
		  	<?php echo $dragon_settings->display( 'mint_embed_code' ); ?>
  		</div>
	</div>
</div><!--container-->