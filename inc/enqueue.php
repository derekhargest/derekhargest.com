<?php

function groundlevel_load_scripts() {
	wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/dist/styles/styles.css', false, null );
	wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/dist/js/index.min.js', null, true );
}

add_action(
	'wp_enqueue_scripts',
	'groundlevel_load_scripts',
	100
);

function enqueue_acf_component_assets($field) {
	// get an acf's field parent field
// Get the ACF field object for the sub-field
$sub_field_object = get_field_object( 'content_one_column_heading' );

// Get the ACF field object for the parent field
$parent_field_object = $sub_field_object['parent'];

// Do something with the parent field object
if ( ! empty( $parent_field_object ) ) {
    // Parent field object is not empty, do something with it
}

}