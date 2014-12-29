<?php 

	$args = array( 
		'post_type' => 'post',
		'author' => 3

	);
	$the_query = new WP_Query( $args );

?>

<?php if ( $the_query->have_posts() ) : ?>

<div class="article_container clearfix">

<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	<?php get_template_part( 'content', 'blog-post' ); ?>

<?php endwhile; ?>

</div>

<?php get_template_part( 'loop-navigation' ); ?>

<?php else: ?>

	<?php _e('Sorry, no posts to show'); ?>

<?php endif; wp_reset_query(); ?>