<?php /* Template Name: Shipping Page */
get_header(); ?>
<div class="shipping-page-main">
	<div class="container mx-auto">
		<div class="flex gap-8">
			<div class="w-1/2">
				<div class="shipping-detail">
					<div class="header-search">
						<form action="<?= site_url();?>" method="get">
							<input type="text" name="s" id="search" placeholder="What can we help with?" value="<?php the_search_query(); ?>" />
							<button type="submit">
								<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/loupe.png"  alt="" width="50" height="50">
							</button>
						</form>
					</div> 
					<div class="shipping-tag-map-toggle">
						<div class="shipping-tag">
							<a href="#">Lorem ipsum</a> 
							<a href="#">Lorem ipsum</a> 
							<a href="#">...</a>
						</div>
						<div class="map-show-hide">
							<label>Show map</label>
							<div class="map-show-hode-toggle">
								<input type="checkbox" value="">
								<span></span>
							</div>
						</div>    
					</div> 
					<div class="shipping-detail-title">
						<h2>Lorem ipsum <small>Lorem ipsum</small></h2>
					</div>
					<div class="shipping-product-block">
						<?php 
						$all_ids = get_posts( array(
							'post_type' => 'product',
							'numberposts' => 3,
							'post_status' => 'publish',
							'fields' => 'ids',
							'tax_query' => array(
								array(
									'taxonomy' => 'product_cat',
									'field' => 'slug',
									'terms' => get_field('select_categories'), /*category name*/
									'operator' => 'IN',
								)
							),
						));
						$html = '';
						foreach ( $all_ids as $id ) {
							$product   = wc_get_product( $id );
							$image_id  = $product->get_image_id();
							$image_url = wp_get_attachment_image_url( $image_id, 'small' );
							$title = $product->get_title();
							$price = $product->get_regular_price();
							$permalink = $product->get_permalink();
// 							echo '<li>'.$id.'</li>';
							$html .= '<div class="shipping-product-row">
							<div class="shipping-product-image">
							<a href="'.$permalink.'">
								<img src="'.$image_url.'" alt="" width="100" height="100">
								</a>
							</div>   
							<div class="shipping-product-detail">
								<div class="spd-top">
									<div class="spd-top-left">
										<a href="#" class="popular">popular</a>
										<a href="#" class="premium">premium</a>
									</div>  
									<div class="spd-top-right">
										<a href="#">
										<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/heart.png"  alt="" width="15" height="15">
										</a>
										<a href="#">
										<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/dots.png"  alt="" width="15" height="15">
										</a>
									</div>    
								</div>
								<div class="spd-midle">
									<a href="'.$permalink.'">'.$title.'</a>
									<p>Nu bested, dinsdag bezorgd</p>
								</div>    
								<div class="spd-bottom">
									<div class="spd-bottom-left">
										'.do_shortcode('[get_average_rating]').'
									</div>
									<div class="spd-bottom-right">
										<span>€'.$price.'</span>
										<small>/ Per stuk</small>
									</div>    
								</div>    
							</div>    
						</div>';
						}
						?>
						<?php echo $html; ?>
						
						
					</div>    
				</div> 
			</div> 
			<div class="w-1/2">
				<div class="cs1-image-map11 w-full inline-block11 relative11" id="shipping_map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3156.9904156973384!2d144.92588431509785!3d-37.69642413511075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65af021e39501%3A0x63c70d2e1977824b!2s90%20Glen%20St%2C%20Glenroy%20VIC%203046%2C%20Australia!5e0!3m2!1sen!2sin!4v1646025117149!5m2!1sen!2sin" width="600" height="900" style="border:0; border-radius:42px;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>	


		</div> 

	</div>
	<div class="shipping-page-bottom">
		<div class="container mx-auto">
			<div class="grid grid-cols-3 grid-flow-row gap-8">
				<div class="spb-block spb-first-block">
					<h3><?php the_field('first_box_content_title'); ?></h3>
					<p><?php the_field('first_box_content_description'); ?></p>

				</div>

				<div class="spb-block spb-center-block">
					<h3>showroom timing</h3>
					<p><strong>Monday to thursday</strong> <br/>09:00 AM to 10:00 PM</p>
					<p><strong>Friday to sunday</strong> <br/>09:00 AM to 05:00 PM</p> 
				</div>

				<div class="spb-block spb-last-block">
					<h3>Kunnen we je ergens mee helpen?</h3>
					<p>Bel, Mail, App Of Chat Met Ons. Wij Staan Je Graag Te Woord!</p>
					<p>Contactmogelijkheden</p>
				</div>
			</div>    
		</div>    
	</div>  
	<style>
		.show_map .map-show-hode-toggle span {
			left: 17.5px !important;
		}
		.show_map div#shipping_map {
			display: block !important;
		}
		div#shipping_map {
			display: none;
		}
		.page-template-shipping-page .star-rating::before {
			content: "sssss";
			color: #d3ced2;
			float: left;
			top: 0;
			left: 0;
			position: absolute;
		}
		.page-template-shipping-page .star-rating {
			width: 8.5em;
		}
		.page-template-shipping-page .star-rating span {
			overflow: hidden;
			float: left;
			top: auto;
			left: auto;
			position: absolute;
			padding-top: 1.5em;
		}
		.page-template-shipping-page .star-rating span::before {
			content: "SSSSS";
			top: 0;
			position: absolute;
			left: 0;
		}
	</style>
<script>	
let showMap = localStorage.getItem('showMap'); 
const showMapToggle = document.querySelector('.map-show-hode-toggle input[type="checkbox"]');
const enableshowMap = () => {
  // 1. Add the class to the body
  document.body.classList.add('show_map');
  // 2. Update showMap in localStorage
  localStorage.setItem('showMap', 'enabled');
}
const disableshowMap = () => {
  // 1. Remove the class from the body
  document.body.classList.remove('show_map');
  // 2. Update showMap in localStorage 
  localStorage.setItem('showMap', null);
} 
// If the user already visited and enabled showMap
// start things off with it on
if (showMap === 'enabled') {
  enableshowMap();
}
// When someone clicks the button
showMapToggle.addEventListener('click', () => {
  // get their showMap setting
  showMap = localStorage.getItem('showMap');   
  // if it not current enabled, enable it
  if (showMap !== 'enabled') {
    enableshowMap();
  // if it has been enabled, turn it off  
  } else {  
    disableshowMap(); 
  }
});
</script>
<?php
get_footer(); ?>