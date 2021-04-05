<?php

function erango_feature_list_item_register_block() {

	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}

	wp_register_script(
		'erango-feature-list-item',
		get_stylesheet_directory_uri() . '/blocks/feature-list-item/block.js',
		array( 'wp-blocks', 'wp-editor', 'wp-element', 'wp-block-editor' ),
		filemtime( get_stylesheet_directory() . '/blocks/feature-list-item/block.js' )
	);

	register_block_type( 'erango/erango-feature-list-item', array(
		'editor_script' => 'erango-feature-list-item', // enqueues the script after register
	) );

}
add_action( 'init', 'erango_feature_list_item_register_block' );