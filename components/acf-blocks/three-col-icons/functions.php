<?php
/**
 * Custom One Column
 *
 * @package GroundLevel
 */

/**
 * Registers the block.
 */
function gl_content_three_col_icons_block() {
	if ( function_exists( 'acf_register_block_type' ) ) {
		$settings                    = array(
			'name'        => 'three-col-icons',
			'title'       => __( 'Three Columns - Icons', 'groundlevel' ),
			'description' => __( 'Displays a content block with one column.', 'groundlevel' ),
			'category'    => 'content',
			'icon'        => array(
				'foreground' => '#ff1ca0',
				'src'        => 'text',
			),
			'keywords'    => array( 'Content', 'Three Column Icons' ),
			'mode'        => 'auto',
			'supports'    => array(
				'align'    => false,
				'mode'     => true,
				'multiple' => true,
				'jsx'      => false,
			),
		);
		$settings['render_template'] = gl_block_render_template_assets( $settings['name'], $settings['name'] );
		acf_register_block_type( $settings );
		// renderComponentScripts( $settings['name'] );

	}
}
add_action( 'acf/init', 'gl_content_three_col_icons_block' );
