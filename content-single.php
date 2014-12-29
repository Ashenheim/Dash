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

		
	<header class="entry-header <?php if ( $image ) { echo 'banner'; } ?>">
		
		<div class="entry-header-wrapper">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</div>

		<?php if ( $image ) : ?>
		<div class="entry-header-banner" style="background-image: url(<?php echo $imageLarge; ?>);">
			<img class="entry-header-banner--image" src="<?php echo $imageLarge; ?>" alt="<?php echo $imageTitle; ?>">
		</div>
		<?php endif; ?>

	</header>

	
		<div class="container">
			<div class="row">

				<div class="col-3 entry-info">
					<?php include 'author.php'; ?>

				</div>

				<div class="col-9">

					<section class="entry-content">

						<span class="entry"><?php the_content(); ?></span>

						<?php edit_post_link(); ?>

					</section>

					<footer class="entry-footer">
							
						<div class="social-media">

							<hr/>
							
							<span class="delta">
								Deel dit je vrienden:
							</span>

							<a class="social-twitter" href="<?php dash_twitter(); ?>">
								<i class="fa fa-twitter"></i>
							</a>
							<a class="social-facebook" href="<?php dash_facebook(); ?>">
								<i class="fa fa-facebook"></i>
							</a>
						</div>

					</footer>

				</div>

			</div>
		</div>
	</section>

</article>