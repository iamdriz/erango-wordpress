<?php

function erango_panel_register_block() {

	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}

	wp_register_script(
		'erango-panel-block',
		get_stylesheet_directory_uri() . '/blocks/panel/block.js',
		array( 'wp-blocks', 'wp-element', 'wp-block-editor' ),
		filemtime( get_stylesheet_directory() . '/blocks/panel/block.js' )
	);

	register_block_type( 'erango/erango-panel-block', array(
		'editor_script' => 'erango-panel-block', // enqueues the script after register
	) );

}
add_action( 'init', 'erango_panel_register_block' );