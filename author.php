<?php
	$author_email  = get_the_author_meta('user_email');
	$author_avatar = get_avatar( $author_email, $size = '120');
	$author_name   = get_the_author_meta('display_name');
?>


<p>
	<?php echo $author_name; ?>
</p>
<p>
	<?php echo $author_avatar; ?>
</p>