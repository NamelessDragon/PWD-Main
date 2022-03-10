<div class="section-team columns is-tablet is-multiline">

<?php
	$args = array(
		'post_type' => 'member'
	);
	$the_query = new WP_Query( $args ); 
?>

<?php if ( $the_query->have_posts() ) : ?>

	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<?php
			$handle = get_post_meta( get_the_ID(), 'handle', true ); 
			$twitter_url = get_post_meta( get_the_ID(), 'twitter_url', true );
			$twitter_handle = get_post_meta( get_the_ID(), 'twitter_handle', true );
			
			$linkedin_url = get_post_meta( get_the_ID(), 'linkedin_url', true );
			$linkedin_handle = get_post_meta( get_the_ID(), 'linkedin_handle', true );
		?>

		<div class="column is-half-tablet is-one-third-desktop">
			<div class="box p-0">
				<figure>
				<img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
				</figure>
				<div class="box-content p-5">
					<h4 class="title is-uppercase mb-5"><?php the_title();?></h4>
					<h5 class="subtitle is-uppercase mb-4">
						<?php if ($handle == ''): ?>
							<span></span>
						<?php else: ?>
							<?php echo $handle; ?> | 
						<?php endif; ?>
						<?php echo get_post_meta( get_the_ID(), 'job', true ); ?>
					</h5>
					<p class="mb-5"><?php echo get_the_excerpt(); ?></p>
					<div class="team-socials">
						<?php if ($twitter_url == ''): ?>
							 
						<?php else: ?>
							<a class="team-link mr-5"" href="<?php echo $twitter_url; ?>" target="_blank">
								<i class="fa-brands fa-twitter"></i>  <?php echo $twitter_handle; ?>
							</a>
						<?php endif; ?>

						<?php if ($linkedin_url == ''): ?>
							 
						<?php else: ?>
							<a class="team-link" href="<?php echo $linkedin_url; ?>" target="_blank">
								<i class="fa-brands fa-linkedin"></i>  <?php echo $linkedin_handle; ?>
							</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div><!--column-->
	<?php endwhile; ?>

	<?php wp_reset_postdata(); ?>

<?php endif; ?>

</div><!--columns-->