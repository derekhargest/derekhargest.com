<?php
/**
 * Custom One Column
 *
 * @package GroundLevel
 */

/**
 * Registers the block.
 */
function gl_about_me_block() {
	if ( function_exists( 'acf_register_block_type' ) ) {
		$settings                    = array(
			'name'        => 'about-me',
			'title'       => __( 'About Me', 'groundlevel' ),
			'description' => __( 'Displays a About Me section.', 'groundlevel' ),
			'category'    => 'content',
			'icon'        => array(
				'foreground' => '#ff1ca0',
				'src'        => 'text',
			),
			'keywords'    => array( 'About Me' ),
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
add_action( 'acf/init', 'gl_about_me_block' );
