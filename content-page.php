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

<article id="post-<?php the_ID(); ?>" <?php post_class('entry-page'); ?>>
	
	<header class="entry-header">
		
		<div class="entry-header_wrapper">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</div>

		<?php if ( $image ) : ?>
		<div class="entry-header_banner-image overlay" style="background-image: url(<?php echo $imageLarge; ?>);">
			<img class="entry-header_banner-image_img" src="<?php echo $imageLarge; ?>" alt="<?php echo $imageTitle; ?>">
		</div>
		<?php endif; ?>

	</header>

	<section class="entry-content">
		<div class="container">
			
			<?php the_content(); ?>

		</div>
	</section>

	<footer class="entry-footer">
		<div class="container">
			<?php edit_post_link(); ?>
		</div>
	</footer>

</article>