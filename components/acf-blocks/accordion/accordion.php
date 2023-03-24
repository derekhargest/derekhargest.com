<?php //phpcs:ignore
/**
 * Accordion Block
 *
 * @package ptc-redesign
 */

$accordion_items = get_field( 'accordion_items' );
$heading         = get_field( 'accordion_heading' );
$intro           = get_field( 'accordion_intro' );

?>

<div class="component accordion" id="accordion_block">
	<div class="container accordion__container">

		<?php if ( $intro ) : ?>
			<div class="accordion__intro">
				<?php if ( $heading ) : ?>
					<h2 class="accordion__heading">
						<?php echo esc_html( $heading ); ?>
					</h2>
				<?php endif; ?>
				<p><?php echo esc_html( $intro ); ?></p>
			</div>
		<?php endif; ?>

		<?php

		if ( have_rows( 'accordion_items' ) ) :
			$count = 1;
			?>
			<div class="accordion__accordion" id="accordion">
			<?php
			while ( have_rows( 'accordion_items' ) ) :
				the_row();
				$heading_id           = 'heading_' . $count;
				$collapse_id          = 'collapse_' . $count;
				$accordion_item_title = get_sub_field( 'accordion_item_title' );
				$accordion_text       = get_sub_field( 'accordion_text' );
				?>
					<div class="accordion-item">
						<h2 class="accordion-header" id="<?php echo esc_attr( $heading_id ); ?>">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
								data-bs-target="#<?php echo esc_attr( $collapse_id ); ?>" aria-expanded="true"
								aria-controls="<?php echo esc_attr( $collapse_id ); ?>">
								<?php echo esc_html( $accordion_item_title ); ?>
							</button>
						</h2>

						<div id="<?php echo esc_attr( $collapse_id ); ?>" class="accordion-collapse collapse"
							aria-labelledby="<?php echo esc_attr( $collapse_id ); ?>"
							data-bs-parent="<?php echo esc_attr( '#accordion' ); ?>">
							<div class="accordion-body">
								<?php echo esc_html( $accordion_text ); ?>
							</div>
						</div>
					</div>

				<?php
				$count++;
			endwhile;
			?>
		</div>
		<?php endif; ?>
	</div>
</div>
