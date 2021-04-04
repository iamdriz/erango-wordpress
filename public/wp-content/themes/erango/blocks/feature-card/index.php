<?php

function erango_feature_card_register_block() {

	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}

	wp_register_script(
		'erango-feature-card',
		get_stylesheet_directory_uri() . '/blocks/feature-card/block.js',
		array( 'wp-blocks', 'wp-editor', 'wp-element', 'wp-block-editor' ),
		filemtime( get_stylesheet_directory() . '/blocks/feature-card/block.js' )
	);

	register_block_type( 'erango/erango-feature-card', array(
		'editor_script' => 'erango-feature-card', // enqueues the script after register
	) );

}
add_action( 'init', 'erango_feature_card_register_block' );