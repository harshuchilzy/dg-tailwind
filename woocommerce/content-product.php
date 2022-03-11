<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>
<div class="home-products-block rounded-2xl shadow shadow-gray-300">
	<div class="home-product-image rounded-2xl p-5 shadow shadow-gray-300 relative">
		<a href="<?php echo get_permalink($product_id); ?>">
			<?php if (has_post_thumbnail($product->id)) {
				$attachment_ids[0] = get_post_thumbnail_id($product->id);
				$attachment = wp_get_attachment_image_src($attachment_ids[0], 'full'); ?>
				<img src="<?php echo $attachment[0]; ?>" alt="" class="h-56 w-auto mx-auto">
			<?php } ?>
		</a>
		<span class="product-rotate-text"><?php //echo get_brands( $product->ID );
											$productBrandTerm = wp_get_post_terms($product->id, 'product_brand', array("fields" => "all"));
											echo $productBrandTerm[0]->name;
											?>
		</span>
	</div>
	<div class="home-product-detail p-5">
		<a href="<?php echo get_permalink($product_id); ?>">
			<?php the_title('<div class="title-color font-normal text-base mb-4">', '</div>'); ?>
		</a>
		<div class="home-product-shipping grid grid-cols-2 grid-flow-row gap-4">
			<div class="hps-left flex items-center gap-3">
				<span class="shadow shadow-gray-300 bg-white px-2">
					<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/truck.png" class="w-6">
				</span>
				<?php
				$numleft  = $product->get_stock_status();
				if ($numleft == 'instock') { ?>
					<span class="text-xs title-color font-normal">Op <br />voorraad</span>
				<?php } ?>
			</div>
			<?php
			$age = array("Sun" => "zondag", "Mon" => "maandag", "Tue" => "dinsdag", "Wed" => "woensdag", "Thu" => "donderdag", "Fri" => "vrijdag", "Sat" => "zaterdag");
			$date = date();
			?>
			<div class="hps-right">
				<span class="text-xs title-color font-normal text-left">
					Nu bested, <?php echo $age[date('D', strtotime($date . ' + 4 days'))]; ?> bezorgd
				</span>
			</div>
		</div>
		<div class="text-center text-xs">
			<?php do_action('delivery_eta_notice'); ?>		
		</div>
		<div class="home-product-bottom flex items-center justify-between mt-4">
			<div class="home-product-price">
				<h4 class="text-black font-bold text-base">
					<?php echo $product->get_price_html(); ?>
				</h4>
				<p class="title-color font-normal text-sm">Per stuk</p>
			</div>
			<div class="flex gap-1 add-cart">
				<div class="quantity buttons_added">
					<input type="button" value="-" class="minus btnqty">
					<input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
					<input type="button" value="+" class="plus btnqty">
				</div>
				<div class="actiondiv">
					<a href="?add-to-cart=<?php echo $product->get_id(); ?>" data-quantity="1" class="px-8 py-1 rounded-sm uppercase text-sm bg-orange text-white font-normal hover:bg-black add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $product->get_id(); ?>" data-product_sku="<?php echo $product->get_sku(); ?>" aria-label="Add “WC haakje Stout RVS 47x16mm” to your cart" rel="nofollow">bestel</a>
				</div>
			</div>
		</div>
	</div>
</div>