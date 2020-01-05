<?php
/*
Plugin Name: Gourmet Artistry Post Types & Taxonomies
Plugin URI:
Description: Adds Custom Post Types to site
Version: 1.0
Author: Gabriel S Valdivia
License: GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/
add_action( 'init', 'ga_recipe_post_type', 0 );

function ga_recipe_post_type() {
  $labels = array(
		'name'                => _x( 'Recipes', 'Post Type General Name', 'gourmet-artist' ),
		'singular_name'       => _x( 'Recipe', 'Post Type Singular Name', 'gourmet-artist' ),
		'menu_name'           => __( 'Recipes', 'gourmet-artist' ),
		'parent_item_colon'   => __( 'Parent Recipe', 'gourmet-artist' ),
		'all_items'           => __( 'All Recipes', 'gourmet-artist' ),
		'view_item'           => __( 'View Recipe', 'gourmet-artist' ),
		'add_new_item'        => __( 'Add New Recipe', 'gourmet-artist' ),
		'add_new'             => __( 'Add New Recipe', 'gourmet-artist' ),
		'edit_item'           => __( 'Edit Recipe', 'gourmet-artist' ),
		'update_item'         => __( 'Update Recipe', 'gourmet-artist' ),
		'search_items'        => __( 'Search Recipe', 'gourmet-artist' ),
		'not_found'           => __( 'No Recipes Found', 'gourmet-artist' ),
		'not_found_in_trash'  => __( 'No Recipes found in trash', 'gourmet-artist' ),
	);

  // Another Customization
  $args = array(
    'label' => __('Recipes', 'gourmet-artist'),
    'description' => __('Recipes for Gourmet Artistry', 'gourmet-artist'),
    'labels' => $labels,
    'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
    'hierarchial' => false,
    'public' => true,
    'show_ui' => true,
    'show_in_menus' => true,
    'show_in_nav_menus' => true,
    'show_in_admin_bar' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-admin-page',
    'can_export' => true,
    'has_archive' => true,
    'exclude_from_search' => false,
    'capability_type' => 'page',
  );

  //register the post type
  register_post_type( 'recipes', $args );
}
