<?php 
//custom post types
function fire_color_post_type()
{
	register_post_type(
		'fire_color',
		array(
			'labels'      => array(
				'name'          => __('colors', 'textdomain'),
				'singular_name' => __('color', 'textdomain'),
				'archives'              => __('color Archives', 'text_domain'),
				'attributes'            => __('color Attributes', 'text_domain'),
				'parent_item_colon'     => __('Parent color:', 'text_domain'),
				'all_items'             => __('All colors', 'text_domain'),
				'add_new_item'          => __('Add New color', 'text_domain'),
				'add_new'               => __('Add New', 'text_domain'),
				'new_item'              => __('New color', 'text_domain'),
				'edit_item'             => __('Edit color', 'text_domain'),
				'update_item'           => __('Update color', 'text_domain'),
				'view_item'             => __('View color', 'text_domain'),
				'view_items'            => __('View colors', 'text_domain'),
				'search_items'          => __('Search color', 'text_domain'),
				'not_found'             => __('Not found', 'text_domain'),
				'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
				'featured_image'        => __('color Image', 'text_domain'),
				'set_featured_image'    => __('Set colorimage', 'text_domain'),
				'remove_featured_image' => __('Remove color image', 'text_domain'),
				'use_featured_image'    => __('Use as color image', 'text_domain'),
				'insert_into_item'      => __('Insert into color', 'text_domain'),
				'uploaded_to_this_item' => __('Uploaded to this color', 'text_domain'),
				'items_list'            => __('colors list', 'text_domain'),
				'items_list_navigation' => __('colors list navigation', 'text_domain'),
				'filter_items_list'     => __('Filter colors list', 'text_domain'),
			),
			'public'      => true,
			'has_archive' => false,
			'supports'    => array('title'),
			'rewrite'     => array('slug' => 'color'), // my custom slug
			// 'taxonomies'            => array('category', 'post_tag'),
			'hierarchical'          => false,
			'public'                => true,
			'color_ui'               => true,
			'color_in_menu'          => true,
            'menu_position'         => 8,
            'menu_icon'             => 'dashicons-tickets-alt',
			'color_in_admin_bar'     => true,
			'color_in_nav_menus'     => true,
			'can_export'            => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true
		)
	);
}
add_action('init', 'fire_color_post_type');
function fire_reference_post_type()
{
	register_post_type(
		'fire_reference',
		array(
			'labels'      => array(
				'name'          => __('References', 'textdomain'),
				'singular_name' => __('Reference', 'textdomain'),
				'archives'              => __('Reference Archives', 'text_domain'),
				'attributes'            => __('Reference Attributes', 'text_domain'),
				'parent_item_colon'     => __('Parent Reference:', 'text_domain'),
				'all_items'             => __('All References', 'text_domain'),
				'add_new_item'          => __('Add New Reference', 'text_domain'),
				'add_new'               => __('Add New', 'text_domain'),
				'new_item'              => __('New Reference', 'text_domain'),
				'edit_item'             => __('Edit Reference', 'text_domain'),
				'update_item'           => __('Update Reference', 'text_domain'),
				'view_item'             => __('View Reference', 'text_domain'),
				'view_items'            => __('View References', 'text_domain'),
				'search_items'          => __('Search Reference', 'text_domain'),
				'not_found'             => __('Not found', 'text_domain'),
				'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
				'featured_image'        => __('Reference Image', 'text_domain'),
				'set_featured_image'    => __('Set Reference image', 'text_domain'),
				'remove_featured_image' => __('Remove Reference image', 'text_domain'),
				'use_featured_image'    => __('Use as Reference image', 'text_domain'),
				'insert_into_item'      => __('Insert into Reference', 'text_domain'),
				'uploaded_to_this_item' => __('Uploaded to this Reference', 'text_domain'),
				'items_list'            => __('References list', 'text_domain'),
				'items_list_navigation' => __('References list navigation', 'text_domain'),
				'filter_items_list'     => __('Filter References list', 'text_domain'),
			),
			'public'      => true,
			'has_archive' => 'c7y8c0s2a8',
			'supports'    => array('title', 'thumbnail',),
			'rewrite'     => array('slug' => 'reference'), // my custom slug
			// 'taxonomies'            => array('category', 'post_tag'),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
            'menu_position'         => 8,
            'menu_icon'             => 'dashicons-groups',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true
		)
	);
}
add_action('init', 'fire_reference_post_type');

//shows


function fire_show_post_type()
{
	register_post_type(
		'fire_show',
		array(
			'labels'      => array(
				'name'          => __('Shows', 'textdomain'),
				'singular_name' => __('Show', 'textdomain'),
				'archives'              => __('Show Archives', 'text_domain'),
				'attributes'            => __('Show Attributes', 'text_domain'),
				'parent_item_colon'     => __('Parent Show:', 'text_domain'),
				'all_items'             => __('All Shows', 'text_domain'),
				'add_new_item'          => __('Add New Show', 'text_domain'),
				'add_new'               => __('Add New', 'text_domain'),
				'new_item'              => __('New Show', 'text_domain'),
				'edit_item'             => __('Edit Show', 'text_domain'),
				'update_item'           => __('Update Show', 'text_domain'),
				'view_item'             => __('View Show', 'text_domain'),
				'view_items'            => __('View Shows', 'text_domain'),
				'search_items'          => __('Search Show', 'text_domain'),
				'not_found'             => __('Not found', 'text_domain'),
				'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
				'featured_image'        => __('Show Image', 'text_domain'),
				'set_featured_image'    => __('Set Showimage', 'text_domain'),
				'remove_featured_image' => __('Remove Show image', 'text_domain'),
				'use_featured_image'    => __('Use as Show image', 'text_domain'),
				'insert_into_item'      => __('Insert into Show', 'text_domain'),
				'uploaded_to_this_item' => __('Uploaded to this Show', 'text_domain'),
				'items_list'            => __('Shows list', 'text_domain'),
				'items_list_navigation' => __('Shows list navigation', 'text_domain'),
				'filter_items_list'     => __('Filter Shows list', 'text_domain'),
			),
			'public'      => true,
			'has_archive' => 'c7y2c8s0a8',
			'supports'    => array('title','thumbnail','page-attributes'),
			'rewrite'     => array('slug' => 'show'), // my custom slug
			// 'taxonomies'            => array('category', 'post_tag'),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
            'menu_position'         => 8,
            'menu_icon'             => 'dashicons-tickets-alt',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true
		)
	);
}
add_action('init', 'fire_show_post_type');
 /**news custom post type */
 function fire_news_post_type()
 {
     register_post_type(
         'fire_news',
         array(
             'labels'      => array(
                 'name'          => __('News', 'textdomain'),
                 'singular_name' => __('News', 'textdomain'),
                 'archives'              => __('Item Archives', 'text_domain'),
                 'attributes'            => __('Item Attributes', 'text_domain'),
                 'parent_item_colon'     => __('Parent Item:', 'text_domain'),
                 'all_items'             => __('All News', 'text_domain'),
                 'add_new_item'          => __('Add New News', 'text_domain'),
                 'add_new'               => __('Add New', 'text_domain'),
                 'new_item'              => __('New News', 'text_domain'),
                 'edit_item'             => __('Edit News', 'text_domain'),
                 'update_item'           => __('Update News', 'text_domain'),
                 'view_item'             => __('View News', 'text_domain'),
                 'view_items'            => __('View News', 'text_domain'),
                 'search_items'          => __('Search News', 'text_domain'),
                 'not_found'             => __('Not found', 'text_domain'),
                 'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
                 'featured_image'        => __('Featured Image', 'text_domain'),
                 'set_featured_image'    => __('Set featured image', 'text_domain'),
                 'remove_featured_image' => __('Remove featured image', 'text_domain'),
                 'use_featured_image'    => __('Use as featured image', 'text_domain'),
                 'insert_into_item'      => __('Insert into News', 'text_domain'),
                 'uploaded_to_this_item' => __('Uploaded to this News', 'text_domain'),
                 'items_list'            => __('News list', 'text_domain'),
                 'items_list_navigation' => __('News list navigation', 'text_domain'),
                 'filter_items_list'     => __('Filter news list', 'text_domain'),
             ),
             'public'      => true,
             'has_archive' => 'c0y4c5s8a3',
             'supports'    => array('title', 'thumbnail','page-attributes','excerpt'),
             'rewrite'     => array('slug' => 'news'), // my custom slug
             'hierarchical'          => false,
             'public'                => true,
             'show_ui'               => true,
             'show_in_menu'          => true,
             'menu_position'         => 8,
             'menu_icons'            => 'dashicons-analytics',
             'show_in_admin_bar'     => true,
             'show_in_nav_menus'     => true,
             'can_export'            => true,
             'exclude_from_search'   => false,
             'publicly_queryable'    => true
         )
     );
 }
 add_action('init', 'fire_news_post_type');
 function fire_carousel_post_type()
 {
     register_post_type(
         'fire_carousel',
         array(
             'labels'      => array(
                 'name'          => __('Carousel', 'textdomain'),
                 'singular_name' => __('Carousel', 'textdomain'),
                 'archives'              => __('Item Archives', 'text_domain'),
                 'attributes'            => __('Item Attributes', 'text_domain'),
                 'parent_item_colon'     => __('Parent Item:', 'text_domain'),
                 'all_items'             => __('All Carousel', 'text_domain'),
                 'add_new_item'          => __('Add New Carousel', 'text_domain'),
                 'add_new'               => __('Add New', 'text_domain'),
                 'new_item'              => __('New Carousel', 'text_domain'),
                 'edit_item'             => __('Edit Carousel', 'text_domain'),
                 'update_item'           => __('Update Carousel', 'text_domain'),
                 'view_item'             => __('View Carousel', 'text_domain'),
                 'view_items'            => __('View Carousel', 'text_domain'),
                 'search_items'          => __('Search Carousel', 'text_domain'),
                 'not_found'             => __('Not found', 'text_domain'),
                 'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
                 'featured_image'        => __('Carousel Image', 'text_domain'),
                 'set_featured_image'    => __('Set carousel image', 'text_domain'),
                 'remove_featured_image' => __('Remove carouselimage', 'text_domain'),
                 'use_featured_image'    => __('Use as carousel image', 'text_domain'),
                 'insert_into_item'      => __('Insert into Carousel', 'text_domain'),
                 'uploaded_to_this_item' => __('Uploaded to this Carousel', 'text_domain'),
                 'items_list'            => __('Carousel list', 'text_domain'),
                 'items_list_navigation' => __('Carousel list navigation', 'text_domain'),
                 'filter_items_list'     => __('Filter carousel list', 'text_domain'),
             ),
             'public'      => true,
             'has_archive' => 'c7y5c8s8a1',
             'supports'    => array('title', 'thumbnail'),
             'rewrite'     => array('slug' => 'carousel'), // my custom slug
             'hierarchical'          => false,
             'public'                => true,
             'show_ui'               => true,
             'show_in_menu'          => true,
             'menu_position'         => 8,
             'menu_icon'             => 'dashicons-images-alt2',
             'show_in_admin_bar'     => true,
             'show_in_nav_menus'     => true,
             'can_export'            => true,
             'exclude_from_search'   => false,
             'publicly_queryable'    => true
         )
     );
 }
 add_action('init', 'fire_carousel_post_type');
 function create_carousel_taxonomies()
 	{
	 $labels = array(
		 'name'              => _x('Categories', 'taxonomy general name'),
		 'singular_name'     => _x('Category', 'taxonomy singular name'),
		 'search_items'      => __('Search Categories'),
		 'all_items'         => __('All Categories'),
		 'parent_item'       => __('Parent Category'),
		 'parent_item_colon' => __('Parent Category:'),
		 'edit_item'         => __('Edit Category'),
		 'update_item'       => __('Update Category'),
		 'add_new_item'      => __('Add New Category'),
		 'new_item_name'     => __('New Category Name'),
		 'menu_name'         => __('Categories'),
	 );
 
	 $args = array(
		 'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
		 'labels'            => $labels,
		 'show_ui'           => true,
		 'show_admin_column' => true,
		 'query_var'         => true,
		 'rewrite'           => array('slug' => 'categories'),
	 );
 
	 register_taxonomy('carousel_categories', array('fire_carousel'), $args);
 }
 add_action('init', 'create_carousel_taxonomies', 0);
 //news category
 function create_news_taxonomies()
	{
	$labels = array(
		'name'              => _x('Categories', 'taxonomy general name'),
		'singular_name'     => _x('Category', 'taxonomy singular name'),
		'search_items'      => __('Search Categories'),
		'all_items'         => __('All Categories'),
		'parent_item'       => __('Parent Category'),
		'parent_item_colon' => __('Parent Category:'),
		'edit_item'         => __('Edit Category'),
		'update_item'       => __('Update Category'),
		'add_new_item'      => __('Add New Category'),
		'new_item_name'     => __('New Category Name'),
		'menu_name'         => __('Categories'),
	);

	$args = array(
		'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'categories'),
	);

	register_taxonomy('news_categories', array('fire_news'), $args);
}
add_action('init', 'create_news_taxonomies', 0);


//testimonials
function fire_testimonial_post_type()
 	{
     register_post_type(
         'fire_testimonial',
         array(
             'labels'      => array(
                 'name'          => __('Testimonials', 'textdomain'),
                 'singular_name' => __('Testimonials', 'textdomain'),
                 'archives'              => __('Item Archives', 'text_domain'),
                 'attributes'            => __('Item Attributes', 'text_domain'),
                 'parent_item_colon'     => __('Parent Item:', 'text_domain'),
                 'all_items'             => __('All Testimonials', 'text_domain'),
                 'add_new_item'          => __('Add New Testimonial', 'text_domain'),
                 'add_new'               => __('Add New', 'text_domain'),
                 'new_item'              => __('New Testimonials', 'text_domain'),
                 'edit_item'             => __('Edit Testimonial', 'text_domain'),
                 'update_item'           => __('Update Testimonial', 'text_domain'),
                 'view_item'             => __('View Testimonial', 'text_domain'),
                 'view_items'            => __('View Testimonials', 'text_domain'),
                 'search_items'          => __('Search Testimonials', 'text_domain'),
                 'not_found'             => __('Not found', 'text_domain'),
                 'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
                 'featured_image'        => __('Featured Image', 'text_domain'),
                 'set_featured_image'    => __('Set featured image', 'text_domain'),
                 'remove_featured_image' => __('Remove featured image', 'text_domain'),
                 'use_featured_image'    => __('Use as featured image', 'text_domain'),
                 'insert_into_item'      => __('Insert into Testimonial', 'text_domain'),
                 'uploaded_to_this_item' => __('Uploaded to this Testimonial', 'text_domain'),
                 'items_list'            => __('Testimonial list', 'text_domain'),
                 'items_list_navigation' => __('Testimonial list navigation', 'text_domain'),
                 'filter_items_list'     => __('FilterTestimonial list', 'text_domain'),
             ),
             'public'      => true,
             'has_archive' => 'c7y8c0s7a8',
             'supports'    => array('title', 'thumbnail'),
             'rewrite'     => array('slug' => 'testimonial'), // my custom slug
             'hierarchical'          => false,
             'public'                => true,
             'show_ui'               => true,
             'show_in_menu'          => true,
             'menu_position'         => 8,
             'menu_icon'             => 'dashicons-format-status',
             'show_in_admin_bar'     => true,
             'show_in_nav_menus'     => true,
             'can_export'            => true,
             'exclude_from_search'   => false,
             'publicly_queryable'    => true
         )
     );
 }
 add_action('init', 'fire_testimonial_post_type');

 //news category
 function create_testimonial_taxonomies()
	{
	$labels = array(
		'name'              => _x('Categories', 'taxonomy general name'),
		'singular_name'     => _x('Category', 'taxonomy singular name'),
		'search_items'      => __('Search Categories'),
		'all_items'         => __('All Categories'),
		'parent_item'       => __('Parent Category'),
		'parent_item_colon' => __('Parent Category:'),
		'edit_item'         => __('Edit Category'),
		'update_item'       => __('Update Category'),
		'add_new_item'      => __('Add New Category'),
		'new_item_name'     => __('New Category Name'),
		'menu_name'         => __('Categories'),
	);

	$args = array(
		'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'categories'),
	);

	register_taxonomy('testimonial_categories', array('fire_testimonial'), $args);
}
add_action('init', 'create_testimonial_taxonomies', 0);

//casees
 function fire_cases_post_type()
 {
     register_post_type(
         'fire_cases',
         array(
             'labels'      => array(
                 'name'          => __('Cases', 'textdomain'),
                 'singular_name' => __('Case', 'textdomain'),
                 'attributes'            => __('Item Attributes', 'text_domain'),
                 'parent_item_colon'     => __('Parent Case:', 'text_domain'),
                 'all_items'             => __('All Cases', 'text_domain'),
                 'add_new_item'          => __('Add New Case', 'text_domain'),
                 'add_new'               => __('Add New', 'text_domain'),
                 'new_item'              => __('New Case', 'text_domain'),
                 'edit_item'             => __('Edit Case', 'text_domain'),
                 'update_item'           => __('Update Case', 'text_domain'),
                 'view_item'             => __('View Case', 'text_domain'),
                 'view_items'            => __('View Cases', 'text_domain'),
                 'search_items'          => __('Search Cases', 'text_domain'),
                 'not_found'             => __('Not found', 'text_domain'),
                 'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
                 'featured_image'        => __('Featured Image', 'text_domain'),
                 'set_featured_image'    => __('Set featured image', 'text_domain'),
                 'remove_featured_image' => __('Remove featured image', 'text_domain'),
                 'use_featured_image'    => __('Use as featured image', 'text_domain'),
                 'insert_into_item'      => __('Insert into Case', 'text_domain'),
                 'uploaded_to_this_item' => __('Uploaded to this Case', 'text_domain'),
                 'items_list'            => __('Cases list', 'text_domain'),
                 'items_list_navigation' => __('Cases list navigation', 'text_domain'),
                 'filter_items_list'     => __('Filter Cases list', 'text_domain'),
             ),
             'public'      => true,
             'has_archive' => 'c7y8c8s8a8',
             'supports'    => array('title', 'thumbnail','page-attributes','excerpt'),
             'rewrite'     => array('slug' => 'cases'), // my custom slug
             'hierarchical'          => false,
             'public'                => true,
             'show_ui'               => true,
             'show_in_menu'          => true,
             'menu_position'         => 8,
             'menu_icon'             => 'dashicons-analytics',
             'show_in_admin_bar'     => true,
             'show_in_nav_menus'     => true,
             'can_export'            => true,
             'exclude_from_search'   => false,
             'publicly_queryable'    => true
         )
     );
 }
 add_action('init', 'fire_cases_post_type');

 //news category
 function create_cases_taxonomies()
{
	$labels = array(
		'name'              => _x('Categories', 'taxonomy general name'),
		'singular_name'     => _x('Category', 'taxonomy singular name'),
		'search_items'      => __('Search Categories'),
		'all_items'         => __('All Categories'),
		'parent_item'       => __('Parent Category'),
		'parent_item_colon' => __('Parent Category:'),
		'edit_item'         => __('Edit Category'),
		'update_item'       => __('Update Category'),
		'add_new_item'      => __('Add New Category'),
		'new_item_name'     => __('New Category Name'),
		'menu_name'         => __('Categories'),
	);

	$args = array(
		'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array('slug' => 'categories'),
	);

	register_taxonomy('cases_categories', array('fire_cases'), $args);
}
add_action('init', 'create_cases_taxonomies', 0);

//products
function fire_product_post_type()
 {
     register_post_type(
         'fire_product',
         array(
             'labels'      => array(
                 'name'          => __('Product', 'textdomain'),
                 'singular_name' => __('Product', 'textdomain'),
                 'archives'              => __('Item Archives', 'text_domain'),
                 'attributes'            => __('Item Attributes', 'text_domain'),
                 'parent_item_colon'     => __('Parent Item:', 'text_domain'),
                 'all_items'             => __('All Product', 'text_domain'),
                 'add_new_item'          => __('Add New Product', 'text_domain'),
                 'add_new'               => __('Add New', 'text_domain'),
                 'new_item'              => __('New Product', 'text_domain'),
                 'edit_item'             => __('Edit Product', 'text_domain'),
                 'update_item'           => __('Update Product', 'text_domain'),
                 'view_item'             => __('View Product', 'text_domain'),
                 'view_items'            => __('View Product', 'text_domain'),
                 'search_items'          => __('Search Product', 'text_domain'),
                 'not_found'             => __('Not found', 'text_domain'),
                 'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
                 'featured_image'        => __('Featured Product Image', 'text_domain'),
                 'set_featured_image'    => __('Set product image', 'text_domain'),
                 'remove_featured_image' => __('Remove productimage', 'text_domain'),
                 'use_featured_image'    => __('Use as product image', 'text_domain'),
                 'insert_into_item'      => __('Insert into Product', 'text_domain'),
                 'uploaded_to_this_item' => __('Uploaded to this Product', 'text_domain'),
                 'items_list'            => __('Product list', 'text_domain'),
                 'items_list_navigation' => __('Product list navigation', 'text_domain'),
                 'filter_items_list'     => __('Filter product list', 'text_domain'),
             ),
             'public'      => true,
             'has_archive' => 'c7y9c8s8a8',
             'supports'    => array('title','thumbnail'),
             'rewrite'     => array('slug' => 'product'), // my custom slug
             'hierarchical'          => false,
             'public'                => true,
             'show_ui'               => true,
             'show_in_menu'          => true,
             'menu_position'         => 8,
             'show_in_admin_bar'     => true,
             'show_in_nav_menus'     => true,
             'can_export'            => true,
             'menu_icon'             => 'dashicons-products',
             'exclude_from_search'   => false,
             'publicly_queryable'    => true
         )
     );
}
 
add_action('init', 'fire_product_post_type');
 
function create_product_taxonomies()
 	{
	 $labels = array(
		 'name'              => _x('Categories', 'taxonomy general name'),
		 'singular_name'     => _x('Category', 'taxonomy singular name'),
		 'search_items'      => __('Search Categories'),
		 'all_items'         => __('All Categories'),
		 'parent_item'       => __('Parent Category'),
		 'parent_item_colon' => __('Parent Category:'),
		 'edit_item'         => __('Edit Category'),
		 'update_item'       => __('Update Category'),
		 'add_new_item'      => __('Add New Category'),
		 'new_item_name'     => __('New Category Name'),
		 'menu_name'         => __('Categories'),
	 );
 
	 $args = array(
		 'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)
		 'labels'            => $labels,
		 'show_ui'           => true,
		 'show_admin_column' => true,
		 'query_var'         => true,
		 'rewrite'           => array('slug' => 'categories'),
	 );
 
	 register_taxonomy('product_categories', array('fire_product'), $args);
}
 add_action('init', 'create_product_taxonomies', 0);

function fire_contact_post_type()
{
     register_post_type(
         'fire_contact',
         array(
             'labels'      => array(
                 'name'          => __('Contact', 'textdomain'),
                 'singular_name' => __('Contact', 'textdomain'),
                 'archives'              => __('Item Archives', 'text_domain'),
                 'attributes'            => __('Item Attributes', 'text_domain'),
                 'parent_item_colon'     => __('Parent Item:', 'text_domain'),
                 'all_items'             => __('All Contact', 'text_domain'),
                 'add_new_item'          => __('Add New Contact', 'text_domain'),
                 'add_new'               => __('Add New', 'text_domain'),
                 'new_item'              => __('New Contact', 'text_domain'),
                 'edit_item'             => __('Edit Contact', 'text_domain'),
                 'update_item'           => __('Update Contact', 'text_domain'),
                 'view_item'             => __('View Contact', 'text_domain'),
                 'view_items'            => __('View Contact', 'text_domain'),
                 'search_items'          => __('Search Contact', 'text_domain'),
                 'not_found'             => __('Not found', 'text_domain'),
                 'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
                 'featured_image'        => __('Featured Country Image', 'text_domain'),
                 'set_featured_image'    => __('Set country image', 'text_domain'),
                 'remove_featured_image' => __('Remove country image', 'text_domain'),
                 'use_featured_image'    => __('Use as country image', 'text_domain'),
                 'insert_into_item'      => __('Insert into Contact', 'text_domain'),
                 'uploaded_to_this_item' => __('Uploaded to this Contact', 'text_domain'),
                 'items_list'            => __('Contact list', 'text_domain'),
                 'items_list_navigation' => __('Contact list navigation', 'text_domain'),
                 'filter_items_list'     => __('Filter contact list', 'text_domain'),
             ),
             'public'      => true,
             'has_archive' => 'c7y8c8s8a6',
             'supports'    => array('title','thumbnail'),
             'rewrite'     => array('slug' => 'contact'), // my custom slug
             'hierarchical'          => false,
             'public'                => true,
             'show_ui'               => true,
             'show_in_menu'          => true,
             'menu_position'         => 8,
             'show_in_admin_bar'     => true,
             'show_in_nav_menus'     => true,
             'can_export'            => true,
             'menu_icon'             => 'dashicons-phone',
             'exclude_from_search'   => false,
             'publicly_queryable'    => true
         )
     );
}
 
add_action('init', 'fire_contact_post_type');


function fire_forms_post_type()
 {
     register_post_type(
         'fire_forms',
         array(
             'labels'      => array(
                 'name'          => __('Forms', 'textdomain'),
                 'singular_name' => __('Forms', 'textdomain'),
                 'archives'              => __('Item Archives', 'text_domain'),
                 'attributes'            => __('Item Attributes', 'text_domain'),
                 'parent_item_colon'     => __('Parent Item:', 'text_domain'),
                 'all_items'             => __('All Forms', 'text_domain'),
                 'add_new_item'          => __('Add New Forms', 'text_domain'),
                 'add_new'               => __('Add New', 'text_domain'),
                 'new_item'              => __('New Forms', 'text_domain'),
                 'edit_item'             => __('Edit Forms', 'text_domain'),
                 'update_item'           => __('Update Forms', 'text_domain'),
                 'view_item'             => __('View Forms', 'text_domain'),
                 'view_items'            => __('View Forms', 'text_domain'),
                 'search_items'          => __('Search Forms', 'text_domain'),
                 'not_found'             => __('Not found', 'text_domain'),
                 'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
                 'featured_image'        => __('Featured Coountry Image', 'text_domain'),
                 'set_featured_image'    => __('Set country image', 'text_domain'),
                 'remove_featured_image' => __('Remove country image', 'text_domain'),
                 'use_featured_image'    => __('Use as country image', 'text_domain'),
                 'insert_into_item'      => __('Insert into Forms', 'text_domain'),
                 'uploaded_to_this_item' => __('Uploaded to this Forms', 'text_domain'),
                 'items_list'            => __('Forms list', 'text_domain'),
                 'items_list_navigation' => __('Forms list navigation', 'text_domain'),
                 'filter_items_list'     => __('Filter forms list', 'text_domain'),
             ),
             'public'      => true,
             'has_archive' => 'c7y8c8s4a8',
             'supports'    => array('title'),
             'rewrite'     => array('slug' => 'forms'), // my custom slug
             'hierarchical'          => false,
             'public'                => true,
             'show_ui'               => true,
             'show_in_menu'          => true,
             'menu_position'         => 8,
             'show_in_admin_bar'     => true,
             'show_in_nav_menus'     => true,
             'can_export'            => true,
             'exclude_from_search'   => false,
             'menu_icon'             => 'dashicons-media-spreadsheet',
             'publicly_queryable'    => true
         )
     );
}
 
add_action('init', 'fire_forms_post_type');

//functions
function fire_function_post_type()
 {
     register_post_type(
         'fire_function',
         array(
             'labels'      => array(
                 'name'          => __('Functions', 'textdomain'),
                 'singular_name' => __('Function', 'textdomain'),
                 'archives'              => __('Item Archives', 'text_domain'),
                 'attributes'            => __('Item Attributes', 'text_domain'),
                 'parent_item_colon'     => __('Parent Item:', 'text_domain'),
                 'all_items'             => __('All function', 'text_domain'),
                 'add_new_item'          => __('Add New function', 'text_domain'),
                 'add_new'               => __('Add New', 'text_domain'),
                 'new_item'              => __('New function', 'text_domain'),
                 'edit_item'             => __('Edit function', 'text_domain'),
                 'update_item'           => __('Update function', 'text_domain'),
                 'view_item'             => __('View function', 'text_domain'),
                 'view_items'            => __('View function', 'text_domain'),
                 'search_items'          => __('Search function', 'text_domain'),
                 'not_found'             => __('Not found', 'text_domain'),
                 'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
                 'featured_image'        => __('Featured function Image', 'text_domain'),
                 'set_featured_image'    => __('Set function image', 'text_domain'),
                 'remove_featured_image' => __('Remove functionimage', 'text_domain'),
                 'use_featured_image'    => __('Use as function image', 'text_domain'),
                 'insert_into_item'      => __('Insert into function', 'text_domain'),
                 'uploaded_to_this_item' => __('Uploaded to this function', 'text_domain'),
                 'items_list'            => __('function list', 'text_domain'),
                 'items_list_navigation' => __('function list navigation', 'text_domain'),
                 'filter_items_list'     => __('Filter function list', 'text_domain'),
             ),
             'public'      => true,
             'has_archive' => 'c7y8c8s8a8',
             'supports'    => array('title','thumbnail','editor'),
             'rewrite'     => array('slug' => 'function'), // my custom slug
             'hierarchical'          => false,
             'public'                => true,
             'show_ui'               => true,
             'show_in_menu'          => true,
             'menu_position'         => 8,
             'show_in_admin_bar'     => true,
             'show_in_nav_menus'     => true,
             'can_export'            => true,
             'menu_icon'             => 'dashicons-forms',
             'exclude_from_search'   => false,
             'publicly_queryable'    => true
         )
     );
}
 
add_action('init', 'fire_function_post_type');
?>
