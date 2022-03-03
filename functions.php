<?php

/**
 * Theme setup.
 */
function tailpress_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Enqueue theme assets.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', tailpress_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', tailpress_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function tailpress_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );

function wpdocs_my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__( 'Search' ) .'" />
    </div>
    </form>';
 
    return $form;
}
add_filter( 'get_search_form', 'wpdocs_my_search_form' );

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Left sidebar',
		'id'            => 'cat_left_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

// Get star rating of product
function get_star_rating() {
    global $woocommerce, $product;  
    $average      = $product->get_average_rating();
    $review_count = $product->get_review_count();

    return '<div class="star-rating">
                <span style="width:'.( ( $average / 5 ) * 100 ) . '%" title="'. $average.'">
                    <strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span>                    
            </div>'.'
            <a href="#reviews" class="woocommerce-review-link" rel="nofollow">' . $review_count .'  Reviews</a>';
}
function custom_shortcode() {
	return get_star_rating();
}
add_shortcode( 'get_average_rating', 'custom_shortcode' );
add_filter( 'woocommerce_add_to_cart_fragments', 'iconic_cart_count_fragments', 10, 1 );

function iconic_cart_count_fragments( $fragments ) {
    
    $fragments['span.header-cart-count'] = '<span class="header-cart-count">' . WC()->cart->get_cart_contents_count() . '</span>';
    
    return $fragments;
    
}
add_shortcode('woocommerce_sellings_products', 'sellings_products');
function sellings_products(){
	global $woocommarce;
	$args34 = array(
		'post_type' => 'product',
		'meta_key' => 'total_sales',
		'orderby' => 'meta_value_num',
		'posts_per_page' => 3,
	);
	$loop34 = get_posts( $args34 );
	$_pf = new WC_Product_Factory(); 
	$sellingProducts = "";
foreach( $loop34 as $itm ){ 
 $product = $_pf->get_product($itm->ID);
	$image = $product->get_image();
	$sellingProducts .= '<div class="home-products-block rounded-2xl shadow shadow-gray-300">
	<div class="home-product-image rounded-2xl p-5 shadow shadow-gray-300 relative">
	<a href="'.$product->get_permalink().'">
	'.$image.'
	</a>
		<span class="product-rotate-text">G-Bonomi-Figli</span>
	</div>
	<div class="home-product-detail p-5">
	<a href="'.$product->get_permalink().'">
		<div class="title-color font-normal text-base mb-4">'.$product->get_title().'</div>
		</a>
		<div class="home-product-shipping grid grid-cols-2 grid-flow-row gap-4">
			<div class="hps-left flex items-center gap-3">
				<span class="shadow shadow-gray-300 bg-white px-2">
					<img src="'.get_site_url().'/wp-content/themes/tailpress/images/truck.png" alt="" class="w-6">
				</span>
				<span class="text-xs title-color font-normal">Op <br/>voorraad</span>
			</div>
			<div class="hps-right">
				<span class="text-xs title-color font-normal text-left">Nu bested, dinsdag bezorgd</span>
			</div>	
		</div>
		<div class="home-product-bottom flex items-center justify-between mt-4">
			<div class="home-product-price">
				<span class="text-black font-bold text-base">€'.$product->get_regular_price().'</span>
				<p class="title-color font-normal text-sm">Per stuk</p>
			</div>
			<div class="flex gap-1">
				<div class="quantity buttons_added">
					<input type="button" value="-" class="minus">
					<input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
					<input type="button" value="+" class="plus">
				</div>
				<div class="actiondiv">
					<a href="?add-to-cart='.$product->get_id().'" data-quantity="1" class="px-8 py-1 rounded-sm uppercase text-sm bg-orange text-white font-normal hover:bg-black add_to_cart_button ajax_add_to_cart" data-product_id="'.$product->get_id().'" data-product_sku="'.$product->get_sku().'" aria-label="Add “WC haakje Stout RVS 47x16mm” to your cart" rel="nofollow">bestel</a>
				</div>
			</div>
		</div>
	</div>
</div>';
}
	return $sellingProducts;	
}

// Creating a Deals Custom Post Type
function crunchify_deals_custom_post_type() {
	$labels = array(
		'name'                => __( 'Knowledge Base' ),
		'singular_name'       => __( 'Knowledge Base'),
		'menu_name'           => __( 'Knowledge Base'),
		'parent_item_colon'   => __( 'Parent Knowledge Base'),
		'all_items'           => __( 'All Knowledge Base'),
		'view_item'           => __( 'View Knowledge Base'),
		'add_new_item'        => __( 'Add New Knowledge Base'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Knowledge Base'),
		'update_item'         => __( 'Update Knowledge Base'),
		'search_items'        => __( 'Search Knowledge Base')
	);
	$args = array(
		'label'               => __( 'Knowledge Base'),
		'description'         => __( 'Knowledge Base'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'taxonomies' 	      => array('post_tag'),
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'knowledge-base', $args );
}
add_action( 'init', 'knowledge_base_custom_post_type', 0 );

//DayZ Customizations 
// include get_template_directory() . '/includes/dayz-customize.php'; 
//End of DayZ Customizations