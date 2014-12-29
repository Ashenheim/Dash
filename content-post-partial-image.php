<?php
	$image = get_field('banner_image');

	if( !empty($image) ):
		// vars
		$imageURL = $image['url'];
		$imageTitle = $image['title'];

		$imageThumb = $image['sizes']['thumbnail'];
		$imageLarge = $image['sizes']['large'];

	endif;
?>

<div class="entry-container">

	<div class="row">

		<div class="col-6">

			<header class="entry-header">
				
				<h1 class="entry-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h1>
				<i class="fa fa-clock-o"></i> <?php the_time( get_option( 'date_format' ) ); ?>

			</header>

			<section class="entry-content">
					
				<div class="author-box">
					<?php include 'author.php'; ?>
				</div>

				<a class="btn" href="<?php the_permalink(); ?>">	
					Lees meer <i class="fa fa-angle-right"></i>
				</a>
				<?php edit_post_link(); ?>
					
			</section>

		</div>

		<?php if ( $image ) : ?>
		<div class="col-6">
			<div class="entry-cover" style="background-image: url(<?php echo $imageLarge; ?>);">
				<img class="entry-cover-image" src="<?php echo $imageLarge; ?>" alt="<?php echo $imageTitle; ?>">
			</div>
		</div>
		<?php endif; ?>
		
	</div>

	<footer class="entry-footer">
		
	</footer>

</div>