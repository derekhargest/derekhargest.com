<?php
/**
 * Custom One Column
 *
 * @package GroundLevel
 */

/**
 * Registers the block.
 */
function gl_content_one_col_block() {
	if ( function_exists( 'acf_register_block_type' ) ) {
		$settings                    = array(
			'name'        => 'content_one-col',
			'title'       => __( 'Content - One Column', 'square-one' ),
			'description' => __( 'Displays a content block with one column.', 'square-one' ),
			'category'    => 'content',
			'icon'        => array(
				'foreground' => '#ff1ca0',
				'src'        => 'text',
			),
			'keywords'    => array( 'Content', 'One Column' ),
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
add_action( 'acf/init', 'gl_content_one_col_block' );
// write a function to get the names of all of the flexible content fields used on the current page
