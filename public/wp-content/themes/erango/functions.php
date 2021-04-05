<?php

require get_stylesheet_directory() . '/blocks/sub-header/index.php';
require get_stylesheet_directory() . '/blocks/section/index.php';
require get_stylesheet_directory() . '/blocks/panel/index.php';
require get_stylesheet_directory() . '/blocks/masthead/index.php';
require get_stylesheet_directory() . '/blocks/feature-cards/index.php';
require get_stylesheet_directory() . '/blocks/feature-card/index.php';
require get_stylesheet_directory() . '/blocks/feature-list/index.php';
require get_stylesheet_directory() . '/blocks/feature-list-item/index.php';
require get_stylesheet_directory() . '/blocks/staff-list/index.php';
require get_stylesheet_directory() . '/blocks/staff-list-item/index.php';
require get_stylesheet_directory() . '/blocks/contact-links/index.php';

/**
 * Add Menus
 */
function olano_menus() {
	register_nav_menus(
	  array(
		'header-menu' => __( 'Header Menu' ),
		'footer-menu' => __( 'Footer Menu' )
	  )
	);
  }
  add_action('init', 'olano_menus');

function erango_css() {
	// get_stylesheet_directory_uri() => child theme
	// get_template_directory_uri() => parent theme
	// remove uri for filemtime as we want server rather than web address
	wp_enqueue_style('erango', get_stylesheet_directory_uri() . '/assets/css/style.css', array(),
	 filemtime(get_stylesheet_directory() . '/assets/css/style.css'), 'all');
}
add_action('wp_enqueue_scripts', 'erango_css');

function erango_numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<ul class="pagination">' . "\n";
 
    // if ( get_previous_posts_link() )
    //     printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
    // if ( get_next_posts_link() )
    //     printf( '<li>%s</li>' . "\n", get_next_posts_link() );
    echo '</ul>' . "\n";
}

add_filter( 'pre_option_link_manager_enabled', '__return_true' );


function erango_change_search_url() {
    if ( is_search() && ! empty( $_GET['s'] ) ) {
        wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );
        exit();
    }   
}
add_action('template_redirect', 'erango_change_search_url');

add_theme_support( 'editor-styles' );
add_editor_style( './assets/css/style-editor.css' );

add_theme_support( 'editor-font-sizes', array(
    array(
        'name' => 'S',
        'size' => 12,
        'slug' => 'small'
    ),
    array(
        'name' => 'R',
        'size' => 16,
        'slug' => 'regular'
    ),
    array(
        'name' => 'L',
        'size' => 20,
        'slug' => 'large'
    ),
    array(
        'name' => 'XL',
        'size' => 24,
        'slug' => 'xl'
    ),
    array(
        'name' => '2XL',
        'size' => 32,
        'slug' => '2xl'
    ),
    array(
        'name' => '3XL',
        'size' => 36,
        'slug' => '3xl'
    ),
    array(
        'name' => '4XL',
        'size' => 40,
        'slug' => '4xl'
    ),
    array(
        'name' => '5XL',
        'size' => 48,
        'slug' => '5xl'
    )
) );


add_theme_support(
    'editor-gradient-presets', array()
);

add_theme_support( 'editor-color-palette', array(
    array(
        'name' => 'Navy',
        'slug' => 'navy',
        'color' => '#16284c',
    ),
    array(
        'name' => 'Orange',
        'slug' => 'orange',
        'color' => '#f0a150',
    ),
    array(
        'name' => 'Stone',
        'slug' => 'stone',
        'color' => '#f5f5f5',
    ),
    array(
        'name' => 'Black',
        'slug' => 'black',
        'color' => '#000000',
    ),
    array(
        'name' => 'White',
        'slug' => 'white',
        'color' => '#ffffff',
    ),
    array(
        'name' => 'Grey',
        'slug' => 'grey',
        'color' => '#666666',
    )
) );

add_theme_support( 'wp-block-styles' );
add_theme_support( 'align-wide' );
add_theme_support( 'responsive-embeds' );
add_theme_support( 'custom-spacing' );
add_theme_support( 'experimental-link-color' );

// function erango_block_categories( $categories, $post ) {
// 	return array_merge(
// 		$categories,
// 		array(
// 			array(
// 				'slug' => 'erango-blocks',
// 				'title' => 'Erango Blocks',
// 			),
// 		)
// 	);
// }
// add_filter( 'block_categories', 'erango_block_categories', 10, 2);

add_theme_support( 'post-thumbnails' );

// Client Custom Post Type
function client_post_type() {	
	$labels = array(
		'name' => _x('Client', 'post type general name'),
		'singular_name' => _x('Client', 'post type singular name'),
		'add_new' => _x('Add New', 'client'),
		'add_new_item' => __('Add New Client'),
		'edit_item' => __('Edit Client'),
		'new_item' => __('New Client'),
		'view_item' => __('View Client'),
		'search_items' => __('Search Clients'),
		'not_found' =>  __('No Clients found'),
		'not_found_in_trash' => __('No Clients found in Trash'), 
		'parent_item_colon' => '',
		'menu_name' => 'Clients'
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true,
		'_builtin' => false,
		'_edit_link' => 'post.php?post=%d',
		'query_var' => true,
		'rewrite' => array('slug' => 'clients', 'with_front' => false),
		'capability_type' => 'post',
		'has_archive' => false, 
		'hierarchical' => false,
		'supports' => array('title', 'thumbnail'),
		'menu_position' => 5
	);
	
	register_post_type('client', $args);
}
add_action( 'init', 'client_post_type' );


// Client Slider (loads in the post types)
/* BUG... if you have less clients than the expected on the settings they don't show :( */
function client_slider() {
    $clients_html = '<div class="clients">';
    $clients_query = new WP_Query('post_type=client&posts_per_page=999');
    while ($clients_query->have_posts()) : $clients_query->the_post();
        $clients_html .= '<div class="client">' . (has_post_thumbnail() ? '<img src="'.get_the_post_thumbnail_url().'">' : get_the_title()) . '</div>';
    endwhile;
    $clients_html .= '</div>';
    return $clients_html;
}
function register_shortcodes(){
    add_shortcode('client-slider', 'client_slider');
}
add_action( 'init', 'register_shortcodes');