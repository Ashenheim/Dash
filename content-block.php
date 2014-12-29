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
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('entry-block'); ?>>

	<a href="<?php the_permalink(); ?>">
	<header class="entry-header <?php if ( $image ) { echo 'banner'; } ?>">
				
		<div class="entry-header-wrapper">
			<?php the_title('<h1>', '</h1>'); ?>

			<p>
				Van <?php the_field('start_date'); ?> tot <?php the_field('end_date'); ?>
			</p>
		</div>
		
		<div class="entry-header-banner" style="background-image: url(<?php echo $imageLarge; ?>);">
			<img class="entry-header-banner--image" src="<?php echo $imageLarge; ?>" alt="<?php echo $imageTitle; ?>">
		</div>


	</header>
	</a>

</article>