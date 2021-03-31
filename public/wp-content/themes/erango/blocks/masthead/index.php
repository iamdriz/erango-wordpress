<?php

function erango_masthead_register_block() {

	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}

	wp_register_script(
		'erango-masthead-block',
		get_stylesheet_directory_uri() . '/blocks/masthead/block.js',
		array( 'wp-blocks', 'wp-editor', 'wp-element' ),
		filemtime( get_stylesheet_directory() . '/blocks/masthead/block.js' )
	);

	register_block_type( 'erango/erango-masthead-block', array(
		'editor_script' => 'erango-masthead-block', // enqueues the script after register
	) );

}
add_action( 'init', 'erango_masthead_register_block' );