<?php
/**
 * Custom One Column
 *
 * @package GroundLevel
 */

/**
 * Registers the block.
 */
function gl_content_hero() {
	if ( function_exists( 'acf_register_block_type' ) ) {
		$settings                    = array(
			'name'        => 'hero',
			'title'       => __( 'Hero', 'groundlevel' ),
			'description' => __( 'Displays a Hero section.', 'groundlevel' ),
			'category'    => 'content',
			'icon'        => array(
				'foreground' => '#ff1ca0',
				'src'        => 'id',
			),
			'keywords'    => array( 'Content', 'Hero' ),
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
		//renderComponentScripts( $settings['name'] );

	}
}
add_action( 'acf/init', 'gl_content_hero' );
