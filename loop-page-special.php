<?php 

	$args = array( 
		'post_type' => 'page',
		'showposts' => 999,
		'meta_query' => array(
            array(
                'key' => '_wp_page_template',
                'value' => 'page-special.php', // template name as stored in the dB
            )
        )

	);
	$the_query = new WP_Query( $args );

?>

<?php if ( $the_query->have_posts() ) : ?>

<div class="contained">
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	<?php get_template_part( 'content', 'block' ); ?>

<?php endwhile; ?>
</div>

<?php else: ?>

	<?php _e('Excuses, niets hier te zien.'); ?>

<?php endif; wp_reset_query(); ?>