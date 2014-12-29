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

<article id="post-<?php the_ID(); ?>" <?php post_class('entry-article animation_slide'); ?>>

	<div class="container">
	
		<div class="entry-container">
			<div class="row">

				<div class="col-4">
					
					<section class="entry-info">
							
						<div class="author-box">
							<?php include 'author.php'; ?>
						</div>
							
					</section>

				</div>
				<div class="col-8">

					<header class="entry-header">
					
						<h1 class="entry-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h1>
						<i class="fa fa-clock-o"></i> <?php the_time( get_option( 'date_format' ) ); ?>

					</header>
					
					<section class="entry-content">
						
						<?php the_content(); ?>

						<a class="btn" href="<?php the_permalink(); ?>">	
							Lees meer <i class="fa fa-angle-right"></i>
						</a>
						<?php edit_post_link(); ?>

					</section>

				</div>

			</div>

			<footer class="entry-footer">
				
			</footer>
		</div>

	</div>

</article><!-- Entry Article. -->

