<?php

function add_parent_styles() {

	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

}

add_action( 'wp_enqueue_scripts', 'add_parent_styles' );

function perry_script_enqueue() {

	wp_enqueue_style( 'perry-css', get_stylesheet_directory_uri() . '/css/perry.css' );

}

add_action( 'init', 'perry_script_enqueue' );

//Add cpt
function create_post_types() {

  register_post_type( 'opleidingen',
    array(
      'labels' => array(
        'name' => __( 'Opleidingen' ),
        'singular_name' => __( 'Opleiding' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'menu_icon'   => 'dashicons-welcome-learn-more',
    )
  );

  register_post_type( 'werkervaring',
    array(
      'labels' => array(
        'name' => __( 'Werkervaring' ),
        'singular_name' => __( 'Werkervaring' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 6,
      'menu_icon'   => 'dashicons-businessman',
    )
  );

  register_post_type( 'projecten',
    array(
      'labels' => array(
        'name' => __( 'Projecten' ),
        'singular_name' => __( 'Project' )
      ),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 7,
      'menu_icon'   => 'dashicons-portfolio',
    )
  );

}

add_action( 'init', 'create_post_types' );

//Add cpt to queries
// Show posts of 'post', 'page' and 'movie' post types on home page
function add_my_post_types_to_query( $query ) {
	if ( is_home() && $query->is_main_query() )
		$query->set( 'post_type', array( 'post', 'page', 'movie' ) );
	return $query;
}
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

?>