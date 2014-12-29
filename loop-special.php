<?php
	
	$startDate = get_field('start_date');
	$endDate = get_field('end_date');

	$startDate = explode("-", $startDate);
	$endDate = explode("-", $endDate);

	$args = array( 
		'post_type' => 'post',
		'showposts' => 999,
		'cat' => 5,
		'date_query' => array(
			array(
				'after'    => array(
					'year'  => $startDate[0],
					'month' => $startDate[1],
					'day'   => $startDate[2],
				),
				'before'    => array(
					'year'  => $endDate[0],
					'month' => $endDate[1],
					'day'   => $endDate[2],
				),
				'inclusive' => true,
			),
		)
	);
	$the_query = new WP_Query( $args );

?>


<?php if ( $the_query->have_posts() ) : ?>
<ul class="container unstyled">
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

	<?php get_template_part( 'content', 'post' ); ?>			

<?php endwhile; ?>
</ul>
<?php else: ?>
	
	<?php get_template_part( 'error', 'entry' ); ?>

<?php endif; wp_reset_query(); ?>