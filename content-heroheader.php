<?php
/**
 * Content structure for the Blog posts
 */

	$image = get_field('banner_image');

	if( !empty($image) ):
		// vars
		$imageURL = $image['url'];
		$imageTitle = $image['title'];

		$imageThumb = $image['sizes']['thumbnail'];
		$imageLarge = $image['sizes']['large'];

	endif;

	// Calculates days left until End Date
	$end_date = get_field('end_date');

	$now = time(); // or your date as well
	$your_date = strtotime( $end_date );
	$datediff = $your_date - $now;
	// Echo this	
	$daysLeft = floor( $datediff / ( 60*60*24 ) + 1 );

?>

<header class="home-header animation_fade" style="background-image: url(<?php echo $imageLarge; ?>);">
	<div class="container">
	<div class="row">
		
		<div class="col-6">
			
			<h1 class="entry-title">
				<?php the_title(); ?>
			</h1>

			<?php the_excerpt(); ?>

			<p>
				Nog <strong><?php echo $daysLeft; ?></strong> dagen over om uw idee op te sturen!
			</p>
			

		</div>
		<div class="col-6">
			
		</div>

	</div>
	<div class="row">
		<div class="col-6 col-push-6">
			
			<p class="align-center">
				<a class="cta-btn" href="<?php the_permalink(); ?>">
					Zie actie "<?php the_title(); ?>"
				</a>
			</p>

		</div>
	</div>
</header>