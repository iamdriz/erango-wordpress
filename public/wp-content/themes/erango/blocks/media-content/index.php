<?php

function erango_media_content_register_block() {

	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}

	wp_register_script(
		'erango-media-content-block',
		get_stylesheet_directory_uri() . '/blocks/media-content/block.js',
		array( 'wp-blocks', 'wp-editor', 'wp-element' ),
		filemtime( get_stylesheet_directory() . '/blocks/media-content/block.js' )
	);

	register_block_type( 'erango/erango-media-content-block', array(
		'editor_script' => 'erango-media-content-block', // enqueues the script after register
	) );

}
add_action( 'init', 'erango_media_content_register_block' );