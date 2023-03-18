<?php

$heading = get_field('content_one_column_heading');
$subheading = get_field('content_one_column_subheading');
$text = get_field('content_one_column_text');
$buttons = get_field('content_one_column_buttons');
$image = get_field('content_one_column_image');
$custom_class = get_field('custom_class');
$button_align = get_field('button_align');

$class = '';
$button_align_class = '';

if ($custom_class) {
	$class = $custom_class;
};

?>

<div class="component content_one-col 
<?
if ($class) {
	echo esc_html($class);
}
?>
">

	<div class="container content_one-col__container">
		<div class="content_one-col__inner">
			<?php if ($heading): ?>
				<div class="content_one-col__heading">
					<h2>
						<?php echo wp_kses_post($heading); ?>
					</h2>
				</div>
			<?php endif; ?>
			<?php if ($subheading): ?>
				<div class="content_one-col__subheading">
					<h5>
						<?php echo esc_html($subheading); ?>
					</h5>
				</div>
			<?php endif; ?>
			<?php if ($text): ?>
				<div class="content_one-col__text">
					<p>
						<?php echo wp_kses_post($text); ?>
					</p>
				</div>
				<?php
			endif;

			if (!empty($image)):
				?>

				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

			<?php endif; ?>

			<?php if (have_rows('content_one_column_buttons')): ?>
				<div class="actions <?php echo esc_html($button_align_class); ?>">
					<?php
					while (have_rows('content_one_column_buttons')):
						the_row();
						$button = get_sub_field('content_one_column_button');
						if ($button):
							$button_url = $button['url'];
							$button_title = $button['title'];
							$button_target = $button['target'] ? $button['target'] : '_self';
							?>
							<a href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"
								class="button"><?php echo esc_html($button_title); ?></a>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
