<?php
	$author_email  = get_the_author_meta('user_email');
	$author_avatar = get_avatar( $author_email, $size = '120');
	$author_name   = get_the_author_meta('nickname');

	$twitter       = get_the_author_meta( 'twitter' );
?>

<section class="author">

	<div class="author-avatar">
		<?php echo $author_avatar; ?></p>
	</div>
	<div class="author-info">
		<h3><?php echo $author_name; ?></h3>

		<ul class="unstyled">
			<li>
				<span class="bullet">
					<i class="fa fa-map-marker"></i>
				</span>
				<?php the_author_meta('adress'); ?>
			</li>
			
			<li>
				<span class="bullet"></span>
				<?php the_author_meta('city'); ?>
			</li>

			<li>
				<span class="bullet">
					<i class="fa fa-link"></i>
				</span>
				<a href="<?php the_author_meta('url'); ?>">
					Website
				</a>	
			</li>
		</ul>
	</div>

</section>
