<?php

function erango_feature_cards_register_block() {

	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}

	wp_register_script(
		'erango-feature-cards',
		get_stylesheet_directory_uri() . '/blocks/feature-cards/block.js',
		array( 'wp-blocks', 'wp-element', 'wp-block-editor' ),
		filemtime( get_stylesheet_directory() . '/blocks/feature-cards/block.js' )
	);

	register_block_type( 'erango/erango-feature-cards', array(
		'editor_script' => 'erango-feature-cards', // enqueues the script after register
	) );

}
add_action( 'init', 'erango_feature_cards_register_block' );