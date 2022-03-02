<?php

add_filter( 'manage_edit-shop_order_columns', 'dayz_add_new_order_admin_list_column' );
 
function dayz_add_new_order_admin_list_column( $columns ) {
    $columns['good_of_cost'] = 'Good of Cost';
    return $columns;
}
 
add_action( 'manage_shop_order_posts_custom_column', 'dayz_add_new_order_admin_list_column_content' , 10 ,2);
 
function dayz_add_new_order_admin_list_column_content( $column , $order_id) {
    if ( 'good_of_cost' === $column ) {
        // Iterating through each WC_Order_Item_Product objects
        $the_order = wc_get_order($order_id);
        $purchase_price = 0;
        foreach ($the_order->get_items() as $item_key => $item ):
            $product_id = $item->get_product_id();
            $quantity = $item->get_quantity();
            $purchase_price += floatval( get_post_meta( $product_id , 'purchase_price', true ) * $quantity);
        endforeach;
        if($purchase_price){
            $order_without_tax = number_format( (float) $the_order->get_total() - $the_order->get_total_tax() - $the_order->get_total_shipping(), wc_get_price_decimals(), '.', '' );
            $total_price = number_format( (float) $order_without_tax - $purchase_price , wc_get_price_decimals(), '.', '' );
            echo wc_price( $total_price );
        }
    }
}

/* Create b2b User Role */
add_role( 'b2b', __( 'B2B'  ), // Display name of the role.
    array(
        'read'  => true,
        'delete_posts'  => true,
        'delete_published_posts' => true,
        'edit_posts'   => true,
        'publish_posts' => true,
        'upload_files'  => true,
        'edit_pages'  => true,
        'edit_published_pages'  =>  true,
        'publish_pages'  => true,
        'delete_published_pages' => false, // This user will NOT be able to  delete published pages.
    )
);

function b2b_price_single_page() {
   global $product;
   $user = wp_get_current_user();
   if ( in_array( 'b2b', $user->roles ) ) {
   $product_id = $product->get_id();
   $b2b_price = get_post_meta($product_id , 'b2b_price', true);
   echo 'dealer price :' ;
   echo $b2b_price;
   }
}
add_action( 'woocommerce_before_single_product', 'b2b_price_single_page' , 30);

function minimum_buy_for_discount_single_page() {
    global $product;
   
    $product_id = $product->get_id();
    $minimum_buy_for_discount = get_post_meta($product_id , 'minimum_buy_for_discount', true);
    echo 'minimum buy for discount :' ;
    echo $minimum_buy_for_discount;
    
 }
 add_action( 'woocommerce_before_single_product', 'minimum_buy_for_discount_single_page' , 30);
 
/**
 * @snippet       Add Custom Field to Product Variations - WooCommerce
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 4.6
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
 
// -----------------------------------------
// 1. Add custom field input @ Product Data > Variations > Single Variation
 
add_action( 'woocommerce_variation_options_pricing', 'dayz_add_custom_field_to_variations', 10, 3 );
 
function dayz_add_custom_field_to_variations( $loop, $variation_data, $variation ) {
   woocommerce_wp_text_input( array(
    'id' => 'supplier_article_number[' . $loop . ']',
    'class' => 'short',
    'label' => __( 'Supplier Article Number', 'woocommerce' ),
    'value' => get_post_meta( $variation->ID, 'supplier_article_number', true ),
   ) );
   woocommerce_wp_text_input( array(
    'id' => 'delivery_sort_order_if_stock[' . $loop . ']',
    'class' => 'short',
    'label' => __( 'Delivery Sort Order if Stock', 'woocommerce' ),
    'value' => get_post_meta( $variation->ID, 'delivery_sort_order_if_stock', true )
   ) );
   woocommerce_wp_text_input( array(
    'id' => 'delivery_sort_order_if_no_stock[' . $loop . ']',
    'class' => 'short',
    'label' => __( 'Delivery sort order if no stock', 'woocommerce' ),
    'value' => get_post_meta( $variation->ID, 'delivery_sort_order_if_no_stock', true )
   ) );
}
 
// -----------------------------------------
// 2. Save custom field on product variation save
 
add_action( 'woocommerce_save_product_variation', 'bbloomer_save_custom_field_variations', 10, 2 );
 
function bbloomer_save_custom_field_variations( $variation_id, $i ) {
   $supplier_article_number = $_POST['supplier_article_number'][$i];
   if ( isset( $supplier_article_number ) ) update_post_meta( $variation_id, 'supplier_article_number', esc_attr( $supplier_article_number ) );

   $delivery_sort_order_if_stock = $_POST['delivery_sort_order_if_stock'][$i];
   if ( isset( $delivery_sort_order_if_stock ) ) update_post_meta( $variation_id, 'delivery_sort_order_if_stock', esc_attr( $delivery_sort_order_if_stock ) );

   $delivery_sort_order_if_no_stock = $_POST['delivery_sort_order_if_no_stock'][$i];
   if ( isset( $delivery_sort_order_if_no_stock ) ) update_post_meta( $variation_id, 'delivery_sort_order_if_no_stock', esc_attr( $delivery_sort_order_if_no_stock ) );
}
 
// -----------------------------------------
//3. Store custom field value into variation data
 
// add_filter( 'woocommerce_available_variation', 'bbloomer_add_custom_field_variation_data');
 
// function bbloomer_add_custom_field_variation_data( $variations ) {
//    $variations['supplier_article_number'] = '<div class="woocommerce_custom_field">Supplier Article Number : <span>' . get_post_meta( $variations[ 'variation_id' ], 'supplier_article_number', true ) . '</span></div>';
//    return $variations;
// }

function speed_delivery_single_page() {
    global $product;
   
    $product_id = $product->get_id();
    $speed_delivery_cost = get_post_meta($product_id , 'speed_delivery_charge', true);
    echo '<br>';
    echo 'speed delivery cost :' ;
    echo $speed_delivery_cost;
    
 }
 add_action( 'woocommerce_before_single_product', 'speed_delivery_single_page' , 30);


 //add to cart speed delivery start
 //** notice:  content-single-product.php add custom html for get data **//
add_action('wp_ajax_wdm_add_user_custom_data_options', 'wdm_add_user_custom_data_options_callback');
add_action('wp_ajax_nopriv_wdm_add_user_custom_data_options', 'wdm_add_user_custom_data_options_callback');

function wdm_add_user_custom_data_options_callback()
{
      //Custom data - Sent Via AJAX post method
      $product_id = $_POST['id']; //This is product ID
      $user_custom_data_values =  $_POST['speed_delivery']; //This is User custom value sent via AJAX
      session_start();
      $_SESSION['wdm_user_custom_data'] = $user_custom_data_values;
      die();
}

add_filter('woocommerce_add_cart_item_data','wdm_add_item_data',1,2);
 
if(!function_exists('wdm_add_item_data'))
{
    function wdm_add_item_data($cart_item_data,$product_id)
    {
        /*Here, We are adding item in WooCommerce session with, wdm_user_custom_data_value name*/
        global $woocommerce;
        session_start();    
        if (isset($_SESSION['wdm_user_custom_data'])) {
            $option = $_SESSION['wdm_user_custom_data'];       
            $new_value = array('wdm_user_custom_data_value' => $option);
        }
        if(empty($option))
            return $cart_item_data;
        else
        {    
            if(empty($cart_item_data))
                return $new_value;
            else
                return array_merge($cart_item_data,$new_value);
        }
        unset($_SESSION['wdm_user_custom_data']); 
        //Unset our custom session variable, as it is no longer needed.
    }
}
add_filter('woocommerce_get_cart_item_from_session', 'wdm_get_cart_items_from_session', 1, 3 );
if(!function_exists('wdm_get_cart_items_from_session'))
{
    function wdm_get_cart_items_from_session($item,$values,$key)
    {
        if (array_key_exists( 'wdm_user_custom_data_value', $values ) )
        {
        $item['wdm_user_custom_data_value'] = $values['wdm_user_custom_data_value'];
        }       
        return $item;
    }
}

add_filter('woocommerce_checkout_cart_item_quantity','wdm_add_user_custom_option_from_session_into_cart',1,3);  
add_filter('woocommerce_cart_item_price','wdm_add_user_custom_option_from_session_into_cart',1,3);
if(!function_exists('wdm_add_user_custom_option_from_session_into_cart'))
{
 function wdm_add_user_custom_option_from_session_into_cart($values, $cart_item_key )
    {
        /*code to add custom data on Cart & checkout Page*/    
        if(is_null($values))
        {
            $return_string .= "<table class='wdm_options_table' id='" . $values['product_id'] . "'>";
            $return_string .= "<tr> <td>Speed Delivery : yes </td> </tr>";
            $return_string .= "</table></dl>"; 
            return $return_string;
        }
        else
        {
            return 'Delevery speed : no';
        }
    }
}

add_action('woocommerce_add_order_item_meta','wdm_add_values_to_order_item_meta',1,2);
if(!function_exists('wdm_add_values_to_order_item_meta'))
{
  function wdm_add_values_to_order_item_meta($item_id, $values)
  {
        global $woocommerce,$wpdb;
        $user_custom_values = $values['wdm_user_custom_data_value'];
        if(!empty($user_custom_values))
        {
            wc_add_order_item_meta($item_id,'wdm_user_custom_data',$user_custom_values);  
        }
  }
}

add_action('woocommerce_before_cart_item_quantity_zero','wdm_remove_user_custom_data_options_from_cart',1,1);
if(!function_exists('wdm_remove_user_custom_data_options_from_cart'))
{
    function wdm_remove_user_custom_data_options_from_cart($cart_item_key)
    {
        global $woocommerce;
        // Get cart
        $cart = $woocommerce->cart->get_cart();
        // For each item in cart, if item is upsell of deleted product, delete it
        foreach( $cart as $key => $values)
        {
        if ( $values['wdm_user_custom_data_value'] == $cart_item_key )
            unset( $woocommerce->cart->cart_contents[ $key ] );
        }
    }
}
 //speed delivery ends

 //delaer excel
 function custom_menu() { 

    add_menu_page( 
        'Delear Perchers Orders', 
        'Orders Excel', 
        'edit_posts', 
        'menu_slug', 
        'my_delaer_excel_contents', 
        'dashicons-media-spreadsheet' 
       );
  }

  add_action('admin_menu', 'custom_menu');
  //delaer table frontend data table function 
    include get_template_directory() . '/includes/dealer-table-excel.php'; 
  //end functions

  function add_order_item_meta() {
    $list_of_ids = $_POST['id_list'];
    foreach ($list_of_ids as $item_id) {
     woocommerce_add_order_item_meta($item_id, 'downloaded', true);
    } 
    echo 'success!';
    wp_die();
   }
   add_action("wp_ajax_add_order_item_meta" , "add_order_item_meta");
 // delear excel ends