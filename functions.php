<?php
/**
 * GENERAL FUNCTIONS
 ***********************************/

// Hide admin bar
add_filter('show_admin_bar', '__return_false');

// Active thumbnails
add_theme_support( 'post-thumbnails' );

// Active menus
/*
register_nav_menus( array(
  'menutop' => 'Top Menu',
));
*/



/**
 * WORDPRESS POPULAR POSTS
 ***********************************/
function my_custom_popular_posts_html_list( $mostpopular, $instance ){
	$output = '';

	foreach( $mostpopular as $popular ) {
		$output .= '<div class="popular-post">';
			$output .= '<div class="container-img-popular-post">';
				$output .= '<a href="'.get_the_permalink($popular->id).'">';
	        		$output .= '<img class="img-popular-post" src="'.get_the_post_thumbnail_url($popular->id).'" alt="">';
				$output .= '</a>';
	      	$output .= '</div>';
			$output .= '<div class="text-popular-post">';
				$output .= '<div class="container-icon-popular-post">';
					$output .= '<img class="icon-popular-post" src="'.get_template_directory_uri().'/assets/img/desayunos.svg" alt="">';
				$output .= '</div>';
				$output .= '<p class="name-popular-post"><a href="'.get_the_permalink($popular->id).'">'.$popular->title.'</a></p>';
			$output .= '</div>';
	    $output .= '</div>';
	}
	

	return $output;
}

add_filter( 'wpp_custom_html', 'my_custom_popular_posts_html_list', 10, 2 );




			
/**
 * CREATE CPT
 ***********************************/

function custom_unregister_theme_post_types(){
	global $wp_post_types;

	if (isset($wp_post_types['receta'])){
		unset($wp_post_types['receta']);
	}
}

/*
if (post_type_exists('receta') && is_admin()) {
	add_action( 'init', 'custom_unregister_theme_post_types', 20 );
}
*/

add_action( 'init', 'receta_post_type', 0 );
add_action( 'admin_init', 'add_receta_caps');

register_taxonomy( 'cocinas', 'receta', array(
	'label' => 'Cocinas',
	'show_admin_column' => true,
));

function receta_post_type() {
 
	// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => 'Recetas',
		'singular_name'       => 'Receta',
		'menu_name'           => 'Recetas',
		'parent_item_colon'   => 'Parent receta',
		'all_items'           => 'Recetas',
		'view_item'           => 'See receta',
		'add_new_item'        => 'New receta',
		'add_new'             => 'New receta',
		'edit_item'           => 'Edit receta',
		'update_item'         => 'Update receta',
		'search_items'        => 'Search receta',
		'not_found'           => 'Not found',
		'not_found_in_trash'  => 'Not found',
	);
 
	// Set other options for Custom Post Type
	$args = array(
		'label'               => 'receta',
		'description'         => 'Recetas',
		'labels'              => $labels,
		'hierarchical'        => false,
		'taxonomies'          => array('cocinas'),
		'supports'      	  => array('title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 7,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
        'rewrite' 			  => array('slug' => 'receta',),
		'capabilities' => array(
			'edit_post' => 'edit_receta',
			'edit_posts' => 'edit_recetas',
			'edit_others_posts' => 'edit_other_recetas',
			'publish_posts' => 'publish_recetas',
			'read_post' => 'read_receta',
			'read_private_posts' => 'read_private_recetas',
			'delete_post' => 'delete_receta'
		),
		'map_meta_cap' => true
	);
 
	// Registering your Custom Post Type
	register_post_type( 'receta', $args );
	flush_rewrite_rules();
}

function add_receta_caps() {
    $admins = get_role( 'administrator' );
    $editors = get_role( 'editor' );
    $authors = get_role( 'author' );
 
    $admins->add_cap( 'edit_receta' );
    $admins->add_cap( 'edit_recetas' );
    $admins->add_cap( 'edit_other_recetas' );
    $admins->add_cap( 'publish_recetas' );
    $admins->add_cap( 'read_receta' );
    $admins->add_cap( 'read_private_recetas' );
    $admins->add_cap( 'delete_receta' );
 
    $editors->add_cap( 'read_receta' );
    $editors->add_cap( 'edit_receta' );
    $editors->add_cap( 'edit_recetas' );
 
    $authors->add_cap( 'read_receta' );
    $authors->add_cap( 'edit_receta' );
    $authors->add_cap( 'edit_recetas' );
 
}

?>