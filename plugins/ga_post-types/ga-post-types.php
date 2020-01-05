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
add_action( 'init', 'ga_recipe_post_type');

function ga_recipe_post_type() {
  register_post_type( 'recipe',
    array(
      'labels' => array(
        'name' => __('Recipe'),
        'singular_name' => __('Recipe')
      ),
      'public' => true,
      'has_archive' => true
    )
  );
}
