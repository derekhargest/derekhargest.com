<?php 

	$includes = array_merge(
		glob( get_theme_root() . '/' . get_template() . '/inc/*.php' ),
		glob( get_theme_root() . '/' . get_template() . '/types/*.php' ),
		glob( get_theme_root() . '/' . get_template() . '/taxonomies/*.php' ),
		glob( get_theme_root() . '/' . get_template() . '/components/acf-blocks/**/functions.php' )
	);

	if ( $includes ) {
		foreach ( $includes as $include ) {
			include_once $include;
		}
	}

	function gl_block_render_template_assets( $name, $directory = '' ) {
		if ( ! empty( $directory ) ) {
			$relative_path = "/components/acf-blocks/{$directory}/{$name}.php";
		} else {
			$relative_path = "/components/acf-blocks/{$name}.php";
		}
	
		$css_relative_path = "/dist/styles/{$name}.css";
		$js_relative_path  = "/dist/js	/{$name}.min.js";
	
		if ( file_exists( get_theme_file_path( $relative_path ) ) ) {
			wp_enqueue_style( $name, get_stylesheet_directory_uri() . $css_relative_path, array(), null );
			wp_enqueue_script( $name, get_stylesheet_directory_uri() . $js_relative_path, array(), null, true );
			return get_theme_file_path( $relative_path );
		}
	
		return '';
	}
	

function get_flexible_layout_fields() {
    global $post;
    
    // Get all the flexible content fields for the current page
    $flexible_fields = get_field( 'content_one-col', $post->ID );
    
    // Create an array to hold the flexible layout fields
    $flexible_layout_fields = array();
    
    // Loop through the flexible content fields
    if ( $flexible_fields ) {
        foreach ( $flexible_fields as $field ) {
            // Get the name of the layout
            $layout_name = $field['acf_fc_layout'];
            
            // Get the fields for the layout
            $layout_fields = $field[ $layout_name ];
            
            // Add the layout fields to the array
            $flexible_layout_fields[ $layout_name ] = $layout_fields;
        }
    }
    
    return $flexible_layout_fields;
}

	// 