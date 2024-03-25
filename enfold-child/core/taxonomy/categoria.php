<?php 

// Register Custom Taxonomy
function register_taxonomy_category() {

	$labels = array(
		'name'                       => _x( 'Categorias', 'Categorias', 'goclap-child' ),
		'singular_name'              => _x( 'Categoria', 'Categoria', 'goclap-child' ),
		'menu_name'                  => __( 'Categoria', 'goclap-child' ),
		'all_items'                  => __( 'All Items', 'goclap-child' ),
		'parent_item'                => __( 'Parent Item', 'goclap-child' ),
		'parent_item_colon'          => __( 'Parent Item:', 'goclap-child' ),
		'new_item_name'              => __( 'New Item Name', 'goclap-child' ),
		'add_new_item'               => __( 'Add New Item', 'goclap-child' ),
		'edit_item'                  => __( 'Edit Item', 'goclap-child' ),
		'update_item'                => __( 'Update Item', 'goclap-child' ),
		'view_item'                  => __( 'View Item', 'goclap-child' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'goclap-child' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'goclap-child' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'goclap-child' ),
		'popular_items'              => __( 'Popular Items', 'goclap-child' ),
		'search_items'               => __( 'Search Items', 'goclap-child' ),
		'not_found'                  => __( 'Not Found', 'goclap-child' ),
		'no_terms'                   => __( 'No items', 'goclap-child' ),
		'items_list'                 => __( 'Items list', 'goclap-child' ),
		'items_list_navigation'      => __( 'Items list navigation', 'goclap-child' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'categoria', array( 'clap-product' ), $args );

}
add_action( 'init', 'register_taxonomy_category', 0 );


// register_new_terms
function register_new_terms() {
    $taxonomy = 'categoria';
    $terms = array (
        '0' => array (
            'name'          => 'Agricultura',
            'slug'          => 'agricultura',
            'description'   => '',
        ),
        '1' => array (
            'name'          => 'Transportes',
            'slug'          => 'transportes',
            'description'   => '',
        ),
        '2' => array (
            'name'          => 'Ambiente',
            'slug'          => 'ambiente',
            'description'   => '',
        ),
    );  

    foreach ( $terms as $term_key=>$term) {
        
        if( !term_exists( $term ) ) {    
            wp_insert_term(
                $term['name'],
                $taxonomy, 
                array(
                    'description'   => $term['description'],
                    'slug'          => $term['slug'],
                )
            );
        }
        unset( $term ); 
    }

}
//add_action( 'init', 'register_new_terms', 0 );