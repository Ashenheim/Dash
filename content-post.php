<?php
/**
 * Content structure for the Blog posts
 */

$image = get_field('banner_image');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('entry-article animation_slide'); ?>>

	<div class="container">
	
	<?php if( $image ): ?>
		<?php get_template_part( 'content-post-partial', 'image' ) ?>
	<?php else : ?>
		<?php get_template_part( 'content-post-partial' ) ?>
	<?php endif; ?>

	</div>

</article><!-- Entry Article. -->