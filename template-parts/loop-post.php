<?php 
/**
 * Loop Post
 *
 * @package 
 */

?>
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>" class="container">
	<?php the_content(); ?>
</div>
