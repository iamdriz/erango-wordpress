<?php

function erango_staff_list_item_register_block() {

	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}

	wp_register_script(
		'erango-staff-list-item',
		get_stylesheet_directory_uri() . '/blocks/staff-list-item/block.js',
		array( 'wp-blocks', 'wp-editor', 'wp-element', 'wp-block-editor', 'wp-components' ),
		filemtime( get_stylesheet_directory() . '/blocks/staff-list-item/block.js' )
	);

	register_block_type( 'erango/erango-staff-list-item', array(
		'editor_script' => 'erango-staff-list-item', // enqueues the script after register
	) );

}
add_action( 'init', 'erango_staff_list_item_register_block' );