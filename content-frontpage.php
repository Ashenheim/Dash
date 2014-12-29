<?php
/**
 * Content structure for the Front Page Hero Banner
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

	
<?php get_template_part( 'loop-page', 'special-single'); ?>
<?php get_template_part( 'loop-page', 'special' ); ?>

<div class="container">
	<?php the_content(); ?>
</div>

