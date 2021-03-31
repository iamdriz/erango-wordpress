<?php

function erango_sub_header_register_block() {

	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}

	wp_register_script(
		'erango-sub-header-block',
		get_stylesheet_directory_uri() . '/blocks/sub-header/block.js',
		array( 'wp-blocks', 'wp-editor', 'wp-element' ),
		filemtime( get_stylesheet_directory() . '/blocks/sub-header/block.js' )
	);

	register_block_type( 'erango/erango-sub-header-block', array(
		'editor_script' => 'erango-sub-header-block', // enqueues the script after register
	) );

}
add_action( 'init', 'erango_sub_header_register_block' );