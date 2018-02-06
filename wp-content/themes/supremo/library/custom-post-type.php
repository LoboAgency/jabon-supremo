<?php
// Flush rewrite rules for custom post types
add_action( 'after_switch_theme', 'ted_flush_rewrite_rules' );

// Flush your rewrite rules
function ted_flush_rewrite_rules()
{
	flush_rewrite_rules();
}

// let's create the function for the custom type
function custom_post_example()
{ 
	register_post_type( 'tiempo',
		array( 'labels' => array(
				'name' 					=> __( 'Tiempo', 'ted' ),
				'singular_name' 		=> __( 'Tiempo', 'ted' ),
				'all_items' 			=> __( 'Todas Las Tiempo', 'ted' ),
				'add_new' 				=> __( 'Nueva Receta', 'ted' ),
				'add_new_item' 			=> __( 'Nueva Receta', 'ted' ),
				'edit' 					=> __( 'Editar', 'ted' ),
				'edit_item' 			=> __( 'Editar Tiempo', 'ted' ),
				'new_item' 				=> __( 'Nueva Tiempo', 'ted' ),
				'view_item' 			=> __( 'Ver Tiempo', 'ted' ),
				'search_items' 			=> __( 'Buscar Tiempo', 'ted' ),
				'not_found' 			=>  __( 'No se encontro en la Database.', 'ted' ),
				'not_found_in_trash' 	=> __( 'Nada encontrado en la basura', 'ted' ),
				'parent_item_colon' 	=> ''
			),
			'description' 		=> __( 'tiempo', 'ted' ),
			'public' 			=> true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'show_ui' 			=> true,
			'query_var' 		=> true,
			'menu_position' 	=> 8,
			'menu_icon' 		=> get_stylesheet_directory_uri() . '/library/images/icons/ico-recipe.png',
			'rewrite'			=> array( 'slug' => 'tiempo', 'with_front' => false ),
			'has_archive' 		=> 'tiempo',
			'capability_type' 	=> 'post',
			'hierarchical' 		=> false,
			'supports' 			=> array( 'title', 'editor', 'thumbnail')
		)
	);

	register_post_type( 'hogar',
		array( 'labels' => array(
				'name' 					=> __( 'Hogar', 'ted' ),
				'singular_name' 		=> __( 'Hogar', 'ted' ),
				'all_items' 			=> __( 'Todas Las Hogar', 'ted' ),
				'add_new' 				=> __( 'Nueva Receta', 'ted' ),
				'add_new_item' 			=> __( 'Nueva Receta', 'ted' ),
				'edit' 					=> __( 'Editar', 'ted' ),
				'edit_item' 			=> __( 'Editar Hogar', 'ted' ),
				'new_item' 				=> __( 'Nueva Hogar', 'ted' ),
				'view_item' 			=> __( 'Ver Hogar', 'ted' ),
				'search_items' 			=> __( 'Buscar Hogar', 'ted' ),
				'not_found' 			=>  __( 'No se encontro en la Database.', 'ted' ),
				'not_found_in_trash' 	=> __( 'Nada encontrado en la basura', 'ted' ),
				'parent_item_colon' 	=> ''
			),
			'description' 		=> __( 'hogar', 'ted' ),
			'public' 			=> true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'show_ui' 			=> true,
			'query_var' 		=> true,
			'menu_position' 	=> 8,
			'menu_icon' 		=> get_stylesheet_directory_uri() . '/library/images/icons/ico-recipe.png',
			'rewrite'			=> array( 'slug' => 'hogar', 'with_front' => false ),
			'has_archive' 		=> 'hogar',
			'capability_type' 	=> 'post',
			'hierarchical' 		=> false,
			'supports' 			=> array( 'title', 'editor', 'thumbnail')
		)
	);
	
	register_taxonomy_for_object_type( 'category', 'custom_type' );
	register_taxonomy_for_object_type( 'post_tag', 'custom_type' );
}

add_action( 'init', 'custom_post_example');

register_taxonomy( 'tiempo_cat', 
	array('tiempo'),
	array('hierarchical' => true,
		'labels' => array(
			'name' 				=> __( 'Categorías tiempo', 'ted' ),
			'singular_name' 	=> __( 'Categoría tiempo', 'ted' ),
			'search_items' 		=>  __( 'Buscar Categorías', 'ted' ),
			'all_items' 		=> __( 'Nueva Categoría', 'ted' ),
			'parent_item' 		=> __( 'Padre de la Categoría', 'ted' ),
			'parent_item_colon' => __( 'Padre de la Categoría:', 'ted' ),
			'edit_item' 		=> __( 'Editar Categoría', 'ted' ),
			'update_item' 		=> __( 'Actualizar Categoría', 'ted' ),
			'add_new_item' 		=> __( 'Nueva Categoría', 'ted' ),
			'new_item_name' 	=> __( 'Nueva Categoría', 'ted' )
		),
		'show_admin_column' => true, 
		'show_ui' 		=> true,
		'query_var' 	=> true,
		'rewrite' 		=> array( 'slug' => 'tiempo_slug' ),
	)
);

register_taxonomy( 'hogar_cat', 
	array('hogar'),
	array('hierarchical' => true,
		'labels' => array(
			'name' 				=> __( 'Categorías hogar', 'ted' ),
			'singular_name' 	=> __( 'Categoría hogar', 'ted' ),
			'search_items' 		=>  __( 'Buscar Categorías', 'ted' ),
			'all_items' 		=> __( 'Nueva Categoría', 'ted' ),
			'parent_item' 		=> __( 'Padre de la Categoría', 'ted' ),
			'parent_item_colon' => __( 'Padre de la Categoría:', 'ted' ),
			'edit_item' 		=> __( 'Editar Categoría', 'ted' ),
			'update_item' 		=> __( 'Actualizar Categoría', 'ted' ),
			'add_new_item' 		=> __( 'Nueva Categoría', 'ted' ),
			'new_item_name' 	=> __( 'Nueva Categoría', 'ted' )
		),
		'show_admin_column' => true, 
		'show_ui' 		=> true,
		'query_var' 	=> true,
		'rewrite' 		=> array( 'slug' => 'hogar_slug' ),
	)
);
