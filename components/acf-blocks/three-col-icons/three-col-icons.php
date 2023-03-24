<?php

$content_blocks = get_field('3_column_icons_content_blocks');

$class = '';
$button_align_class = '';
$custom_class = '';

if ($custom_class) {
	$class = $custom_class;
}
;

?>

<div class="component three-col-icons 
<?
if ($class) {
	echo esc_html($class);
}
?>
">

	<div class="container three-col-icons__container">
		<?php if (have_rows('3_column_icons_content_blocks')): ?>
			<div class="three-col-icons__blocks">
			<?php

			// Loop through rows.
			while (have_rows('3_column_icons_content_blocks')):
				the_row();

				// Load sub field value.
				$icon = get_sub_field('icon');
				$heading = get_sub_field('heading');
				$text = get_sub_field('text');
				?>

				<div class="three-col-icons__block">
					<div class="three-col-icons__top">
						<div class="three-col-icons__heading">
							<?php echo wp_kses_post($heading); ?>
						</div>
					<div class="three-col-icons__icon">
						<?php echo wp_kses_post($icon); ?>
					</div>
					</div>
					<div class="three-col-icons__text">
						<?php echo wp_kses_post($text); ?>
					</div>
				</div>

				<?php
			endwhile;

			// No value.
		else:
			// Do something...
		endif;
		?>
		</div>
	</div>
</div>
