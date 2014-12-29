<?php
/**
  *
  * This only inserts the post, edit content-post to change the blog articles structure"
  * The basic template for all pages.
  *
  * */

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


get_header(); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php get_template_part('loop', 'blog'); ?>

		</main>
	</div>

<?php get_footer(); ?>