<?php

function erango_staff_list_register_block() {

	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}

	wp_register_script(
		'erango-staff-list',
		get_stylesheet_directory_uri() . '/blocks/staff-list/block.js',
		array( 'wp-blocks', 'wp-element', 'wp-block-editor' ),
		filemtime( get_stylesheet_directory() . '/blocks/staff-list/block.js' )
	);

	register_block_type( 'erango/erango-staff-list', array(
		'editor_script' => 'erango-staff-list', // enqueues the script after register
	) );

}
add_action( 'init', 'erango_staff_list_register_block' );