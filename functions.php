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

function custom_scripts_method() {

	wp_register_style( 'jquery_table_css', 'http://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css' );
	wp_enqueue_style('jquery_table_css');

	wp_register_script( 'jquery_table_js', 'http://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js', null, null, true );
	wp_enqueue_script('jquery_table_js');

    wp_enqueue_script( 'custom-script-export', get_stylesheet_directory_uri() . '/js/jquery.table2excel.min.js', array( 'jquery' ) , '1.0.0' );
    
	wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/delaer-excel.js', array( 'jquery' ) , '1.8.9' );

	wp_localize_script( 'custom-script', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ))); 

}
add_action( 'admin_enqueue_scripts', 'custom_scripts_method' );

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
	if($review_count > 1){
		$review = 'Reviews';
	}
	else {
		$review = 'Review';
	}
    return '<a href="#reviews" class="woocommerce-review-link flex" rel="nofollow">
			<div class="star-rating">
			<span style="width:'.( ( $average / 5 ) * 100 ) . '%" title="'. $average.'">
			<strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'
			</span>                    
            </div>'.'
            <span>'. $review_count .'  '.$review.'</span></a>';
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
		<span class="product-rotate-text">
		'.get_brands($product->get_id()).'
		</span>
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



add_shortcode('woocommerce_recent_products', 'recent_products');
function recent_products(){
	global $woocommarce;
	$argsrec = array(
		'post_type' => 'product',
		'orderby' => 'date',
		'order' => 'DESC',
		'posts_per_page' => 3,
	);

	$looprec = new WP_Query( $argsrec );
	
	$recentProducts = "";
	while( $looprec->have_posts() ) : $looprec->the_post(); 
	global $product; 
	$image = $product->get_image();?>
	<div class="home-products-block rounded-2xl shadow shadow-gray-300">
	<div class="home-product-image rounded-2xl p-5 shadow shadow-gray-300 relative">
	<a href="<?php echo $product->get_permalink(); ?>">
	<?php echo $image; ?>
	</a>
		<span class="product-rotate-text"><?php echo get_brands($product->get_id()) ?></span>
	</div>
	<div class="home-product-detail p-5">
	<a href="<?php echo $product->get_permalink(); ?>">
		<div class="title-color font-normal text-base mb-4"><?php echo $product->get_title() ?></div>
		</a>
		<div class="home-product-shipping grid grid-cols-2 grid-flow-row gap-4">
			<div class="hps-left flex items-center gap-3">
				<span class="shadow shadow-gray-300 bg-white px-2">
					<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/truck.png" alt="" class="w-6">
				</span>
				<span class="text-xs title-color font-normal">Op <br/>voorraad</span>
			</div>
			<div class="hps-right">
				<span class="text-xs title-color font-normal text-left">Nu bested, dinsdag bezorgd</span>
			</div>	
		</div>
		<div class="home-product-bottom flex items-center justify-between mt-4">
			<div class="home-product-price">
				<span class="text-black font-bold text-base">€<?php echo $product->get_regular_price(); ?></span>
				<p class="title-color font-normal text-sm">Per stuk</p>
			</div>
			<div class="flex gap-1">
				<div class="quantity buttons_added">
					<input type="button" value="-" class="minus">
					<input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
					<input type="button" value="+" class="plus">
				</div>
				<div class="actiondiv">
					<a href="?add-to-cart=<?php echo $product->get_id(); ?>" data-quantity="1" class="px-8 py-1 rounded-sm uppercase text-sm bg-orange text-white font-normal hover:bg-black add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $product->get_id(); ?>" data-product_sku="<?php echo $product->get_sku(); ?>" aria-label="Add “WC haakje Stout RVS 47x16mm” to your cart" rel="nofollow">bestel</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; 
 wp_reset_query(); 
	return $recentProducts;

}

 

// Creating a Deals Custom Post Type
function faq_custom_post_type() {
	$labels = array(
		'name'                => __( 'FAQ' ),
		'singular_name'       => __( 'FAQ'),
		'menu_name'           => __( 'FAQ'),
		'all_items'           => __( 'All FAQS'),
		'view_item'           => __( 'View FAQ'),
		'add_new_item'        => __( 'Add New FAQ'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit FAQ'),
		'update_item'         => __( 'Update FAQ'),
		'search_items'        => __( 'Search FAQ')
	);
	$args = array(
		'label'               => __( 'FAQ'),
		'description'         => __( 'FAQ'),
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
	register_post_type( 'faqs', $args );
}
add_action( 'init', 'faq_custom_post_type', 0 );
// Creating a Deals Custom Post Type
function knowledge_base_custom_post_type() {
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
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', 'comments'),
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


// Let us create Taxonomy for Custom Post Type
add_action( 'init', 'knowledge_base_custom_taxonomy', 0 );
 
//create a custom taxonomy name it "type" for your posts
function knowledge_base_custom_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Category', 'Category' ),
    'singular_name' => _x( 'Type', 'Category' ),
    'search_items' =>  __( 'Search Categories' ),
    'all_items' => __( 'All Categories' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Edit Category' ), 
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'menu_name' => __( 'Categories' ),
  ); 	
 
  register_taxonomy('knowledge-base-category',array('knowledge-base'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'knowledge-base-category' ),
  ));
}


add_action( 'woocommerce_product_bulk_edit_end', 'wcerbe_woocommerce_product_bulk_edit_end' );
function wcerbe_woocommerce_product_bulk_edit_end() {
    $output = '<label><span class="title">' . esc_html__( "Enable reviews", "woocommerce" ) . '?</span>';
    $output .= '<span class="input-text-wrap"><select class="reviews_allowed" name="_reviews_allowed">';
    $options = array(
        ''    => __( '— No change —', 'woocommerce' ),
        'yes' => __( 'Yes', 'woocommerce' ),
        'no'  => __( 'No', 'woocommerce' ),
    );
    foreach ( $options as $key => $value ) {
        $output .= '<option value="' . esc_attr( $key ) . '">' . esc_html( $value ) . '</option>';
    }
    $output .= '</select></span></label>';
    echo $output;
}
add_action( 'woocommerce_product_bulk_edit_save', 'wcerbe_woocommerce_product_bulk_edit_save', 10, 1 );
function wcerbe_woocommerce_product_bulk_edit_save( $product ) {
    // Enable reviews
    if ( ! empty( $_REQUEST['_reviews_allowed'] ) ) {
        if ( 'yes' === $_REQUEST['_reviews_allowed'] ) {
            $product->set_reviews_allowed( 'yes' );
        } else {
            $product->set_reviews_allowed( '' );
        }
    }
    $product->save();
}

include_once get_theme_file_path( '/includes/dayz-customize.php' );
include_once get_theme_file_path( '/includes/holiday-calendar.php' );

add_action( 'woocommerce_single_product_summary', 'wc_ninja_add_brand_to_product_page', 19 );
function wc_ninja_add_brand_to_product_page() {
	echo do_shortcode('[product_brand width="64px" height="64px" class="alignright"]');
}
function wc_custom_brands_breadcrumb( $crumbs, $breadcrumb ){

   // The ID for the page that you want to act as the brands top archive
   $page_url = get_the_permalink(14);

   foreach( $crumbs as $key => $crumb ){
      if( $crumb[0] === __('Brands') ) {
         $crumbs[$key][1] = $page_url;
      }
   }

   return $crumbs;
}
 add_filter( 'woocommerce_get_breadcrumb', 'wc_custom_brands_breadcrumb', 20, 2 );
function shortcode_init(){
	add_shortcode( 'ctabutton', 'ctabutton_handler' );
}
add_action('init', 'shortcode_init');
function ctabutton_handler() {
	$knowledge_base = array(
		'post_type' => 'knowledge-base',
		'post_status' => 'publish',
		'orderby'=> 'title',
		'order' => 'ASC',
		'posts_per_page' => 4
	);
	$the_query = new WP_Query($knowledge_base);
	
	$post_short = ''; 
	if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) { $the_query->the_post();  									
$post_short .= '<div class="fs3-block rounded-2xl shadow shadow-gray-300 overflow-hidden">
	<div class="fs3-image rounded-2xl shadow shadow-gray-300 overflow-hidden relative">
		<a href="'.get_permalink().'">
			<img src="'.get_the_post_thumbnail_url().'" alt="" width="300" height="200" class="h-56 w-full object-cover">
		</a>                      
	</div>
	<div class="fs3-detail p-5">
		<div class="flex gap-5">
			<div class="w-4/6">
				<a href="'.get_permalink().'">
					<h3 class="text-black text-lg font-bold font-proxima">
						'.get_the_title().'
					</h3>
				</a>
 				<p class="text-8a text-base font-normal font-proxima">
				'.get_the_content().'
 				</p>
			
			</div>
			<div class="w-1/3">
				<span class="text-8a text-sm font-light font-proxima text-right w-full inline-block">
					'.get_the_date('d/m/Y').' 
				</span>
			</div>
		</div>
		<div class="fs3-comment-like flex items-center justify-between mt-3">
			<a href="'. get_permalink().'" class="fs3-comments flex items-center gap-3 text-8a font-normal font-proxima text-sm hover:text-orange-400">
				<img src="'.get_site_url().'/wp-content/themes/tailpress/images/chat.png" alt="" width="15" height="15"> 
				('.$post->comment_count.') comments
			</a>
			'.do_shortcode('[posts_like_dislike]').'
		</div>
	</div>
</div>';
		} }		
	return $post_short;
}
add_shortcode('lessons', 'navigation_lessons');
function navigation_lessons(){
	$argslesson = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'orderby'=> 'title',
		'order' => 'ASC',
		'posts_per_page' => 4
	);
	$the_query = new WP_Query($argslesson);
	$lessons = ''; 
	if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) { 
		$the_query->the_post();
		$lessons .= '<a href="'.get_permalink().'" class="plbb-block" target="_blank">
				<div class="plbb-block-left">
					<img src="'.get_the_post_thumbnail_url().'" alt="">
				</div>        
				<div class="plbb-block-right">
					<h3>'.get_the_title().'</h3>
					<span>'.get_the_date('d/m/Y').'</span>
					<p>'.get_the_excerpt().'</p>
				</div>        
			</a>';							 
	}
	}
	return $lessons;
}

add_shortcode('inspiratie', 'navigation_inspiratie');
function navigation_inspiratie(){
	$argsInspiratie = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'orderby'=> 'title',
		'order' => 'ASC',
		'posts_per_page' => 3
	);
	$the_query = new WP_Query($argsInspiratie);
	$Inspiratie = ''; 
	if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) { 
		$the_query->the_post();
		$Inspiratie .= '<a href="'.get_permalink().'" class="plbb-block" target="_blank">      
				<div class="plbb-block-right" style="background: url('.get_the_post_thumbnail_url().'); background-size: cover;">
					<h3>'.get_the_title().'</h3>
				</div>        
			</a>';							 
	}
	}
	return $Inspiratie;
}

add_action('rest_api_init', function () {
	register_rest_route('dg-holidays/v1', 'get-holidays', array(
		'methods'  => 'GET',
		'callback' => array(new Holidays, 'get_dg_holidays')
	));
});

add_action( 'woocommerce_checkout_create_order_line_item', 'custom_checkout_create_order_line_item', 20, 4 );
function custom_checkout_create_order_line_item( $item, $cart_item_key, $values, $order ) {
    $eta = delivery_eta($item->get_product_id());
    if ( !empty( $eta ) ){
        $item->update_meta_data( '_delivery_eta', $eta );
    }
}