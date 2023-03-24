<?php
/**
 * Custom One Column
 *
 * @package GroundLevel
 */

/**
 * Registers the block.
 */
function gl_accordion_block() {
	if ( function_exists( 'acf_register_block_type' ) ) {
		$settings                    = array(
			'name'        => 'accordion',
			'title'       => __( 'Accordion', 'groundlevel' ),
			'description' => __( 'Displays a Accordion section.', 'groundlevel' ),
			'category'    => 'content',
			'icon'        => array(
				'foreground' => '#ff1ca0',
				'src'        => 'text',
			),
			'keywords'    => array( 'Accordion' ),
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
add_action( 'acf/init', 'gl_accordion_block' );
