<?php

function erango_feature_list_register_block() {

	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}

	wp_register_script(
		'erango-feature-list',
		get_stylesheet_directory_uri() . '/blocks/feature-list/block.js',
		array( 'wp-blocks', 'wp-element', 'wp-block-editor' ),
		filemtime( get_stylesheet_directory() . '/blocks/feature-list/block.js' )
	);

	register_block_type( 'erango/erango-feature-list', array(
		'editor_script' => 'erango-feature-list', // enqueues the script after register
	) );

}
add_action( 'init', 'erango_feature_list_register_block' );