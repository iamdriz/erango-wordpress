<?php

function erango_contact_links_register_block() {

	if ( ! function_exists( 'register_block_type' ) ) {
		return;
	}

	wp_register_script(
		'erango-contact-links',
		get_stylesheet_directory_uri() . '/blocks/contact-links/block.js',
		array( 'wp-blocks', 'wp-editor', 'wp-element' ),
		filemtime( get_stylesheet_directory() . '/blocks/contact-links/block.js' )
	);

	register_block_type( 'erango/erango-contact-links', array(
		'editor_script' => 'erango-contact-links', // enqueues the script after register
	) );

}
add_action( 'init', 'erango_contact_links_register_block' );