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

<li id="post-<?php the_ID(); ?>" <?php post_class('entry-list-item clearfix'); ?>>
	<div class="row">
		<h3 class="col-mob-5">
			<?php the_title(); ?>
		</h3>

		<p class="col-mob-5">
			<?php the_time( get_option( 'date_format' ) ); ?>
		</p>

		<p class="col-mob-2">
			<?php edit_post_link(); ?>
		</p>

		<hr>
	</div>
</li>