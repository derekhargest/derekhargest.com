<?php 
/**
 * Loop Post
 *
 * @package 
 */

?>
<li <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<h2 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<div class="post__excerpt wysiwyg"><?php the_excerpt(); ?></div>
	<?php the_content(); ?>
</li>
