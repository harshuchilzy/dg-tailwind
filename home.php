<?php 
/* Template Name: Home Page */
get_header(); 

?>
<!-- Home Page Banner Section Start -->
<div class="home-banner-section">
	<div class="flex -mx-4">
		<div class="md:w-4/5 px-4 relative">
			<div class="banner-main ">
				<div class="banner-slider max-w-3xl mx-auto " style="background: url(<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/Deurstopper.png);">
					<div>
						<div class="banner-slide-block relative text-center pt-16 mb-7 inline-block">
							<a href="<?php echo get_field('watch_video_link_1') ?>" class="absolute top-32 right-9 text-orange text-lg font-bold uppercase flex items-center">
								WATCH VIDEO 
								<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/watch-video.png" alt="" class="-ml-5 w-16">
							</a>
							<img src="<?php echo get_field('slider_image_1') ?>" alt="" class="w-96 mx-auto"/>
							<div class="uppercase text-orange text-4xl font-bold ">
								<?php echo get_field('slider_title_1') ?>
							</div>
							<p class="text-grey text-lg font-normal mt-4">
								<?php echo get_field('slider_description_1') ?>
							</p>
						</div>
					</div>
					<div>
						<div class="banner-slide-block relative text-center pt-16 mb-7 inline-block">
							<a href="<?php echo get_field('watch_video_link_2') ?>" class="absolute top-32 right-9 text-orange text-lg font-bold uppercase flex items-center">
								WATCH VIDEO 
								<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/watch-video.png" alt="" class="-ml-5 w-16">
							</a>
							<img src="<?php echo get_field('slider_image_2') ?>" alt="" class="w-96 mx-auto">
							<div class="uppercase text-orange text-4xl font-bold ">
								<?php echo get_field('slider_title_2') ?>
							</div>
							<p class="text-grey text-lg font-normal mt-4">
								<?php echo get_field('slider_description_2') ?>
							</p>
						</div>
					</div>
					<div>
						<div class="banner-slide-block relative text-center pt-16 mb-7 inline-block">
							<a href="<?php echo get_field('watch_video_link_3') ?>" class="absolute top-32 right-9 text-orange text-lg font-bold uppercase flex items-center">
								WATCH VIDEO 
								<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/watch-video.png" alt="" class="-ml-5 w-16">
							</a>
							<img src="<?php echo get_field('slider_image_3') ?>" alt="" class="w-96 mx-auto">
							<div class="uppercase text-orange text-4xl font-bold">
								<?php echo get_field('slider_title_3') ?>
							</div>
							<p class="text-grey text-lg font-normal mt-4">
								<?php echo get_field('slider_description_3') ?>
							</p>
						</div>
					</div>
					<div>
						<div class="banner-slide-block relative text-center pt-16 mb-7 inline-block">
							<a href="<?php echo get_field('watch_video_link_4') ?>" class="absolute top-32 right-9 text-orange text-lg font-bold uppercase flex items-center">
								WATCH VIDEO 
								<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/watch-video.png" alt="" class="-ml-5 w-16">
							</a>
							<img src="<?php echo get_field('slider_image_4') ?>" alt="" class="w-96 mx-auto">
							<div class="uppercase text-orange text-4xl font-bold ">
								<?php echo get_field('slider_title_4') ?>
							</div>
							<p class="text-grey text-lg font-normal mt-4">
								<?php echo get_field('slider_description_4') ?>
							</p>
						</div>
					</div>	
				</div>
				<a href="<?php echo get_field('learn_more_link'); ?>" class="learn-more-btn flex items-center gap-2 absolute -right-8 px-5 py-5 bg-orange uppercase text-white text-base hover:bg-black">
					learn more  
					<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/arrow-white.png" alt="" class="w-6">
				</a>
			</div>
		</div>
		<div class="md:w-1/5 px-4">
			<div class="banner-sidebar-block text-center bg-light-grey px-16 py-5">
				<img src="<?php echo get_field('banner_sidebar_image_1'); ?>" alt="" class="w-36 mx-auto">
				<span class="text-black text-xl font-bold">
					<?php echo get_field('banner_image_title_1'); ?>
				</span>
				<p class="text-black text-base font-normal">
					<?php echo get_field('banner_image_description_1'); ?>
				</p>
			</div>
			<div class="banner-sidebar-block text-center bg-dark-grey px-16 py-5">
				<img src="<?php echo get_field('banner_sidebar_image_2'); ?>" alt="" class="w-52 mx-auto">
				<span class="text-white text-xl font-bold">
					<?php echo get_field('banner_image_title_2'); ?>
				</span>
				<p class="text-white text-base font-normal">
					<?php echo get_field('banner_image_description_2'); ?>
				</p>
			</div>
		</div>
	</div>
</div>
<!-- Home Page Banner Section End -->

<!-- Home Page Section 2 Start -->
<div class="home-section-2 py-16">
	<div class="container mx-auto">
		<div class="flex gap-4">
			<div class="md:w-1/2 hs2-first-block-mobile-hide">
				<div class="home-section-2-block relative bg-light-grey shadow shadow-gray-300 rounded-lg overflow-hidden">
					<img src="<?php echo get_field('section_2_left_image'); ?>" alt="">
					<div class="home-section-2-detail absolute flex justify-between flex-col top-0 left-0 bottom-0 right-0 p-8 ">
						<div>
							<span class="text-black text-3xl font-bold">
								<?php 
								$term = get_field('section_2_left_title');
								if( $term ): ?>
								<?php echo esc_html( $term->name ); ?>
								<?php endif; ?>
								
							</span>
							<p class="text-black text-base font-normal">
								<?php echo get_field('section_2_left_sub_title'); ?>
							</p>   
						</div>
						<div>
							<a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="home-section-2-btn rounded-2xl font-bold inline-block bg-white text-orange uppercase text-base px-5 py-3 hover:bg-orange-500 hover:text-white">SHOP NOW</a>
						</div>
					</div>
				</div>
			</div>
			<div class="md:w-1/2">
				<div class="grid grid-cols-2 grid-flow-row gap-4">
					<div class="hs2-first-block-hide">
						<div class="home-section-2-block relative bg-light-grey shadow shadow-gray-300 rounded-lg overflow-hidden">
							
							<img src="<?php echo get_field('section_2_left_image'); ?>" alt="">
							<div class="home-section-2-detail absolute flex justify-between flex-col top-0 left-0 bottom-0 right-0 p-8 ">
								<div>
									<span class="text-black text-3xl font-bold">
										<?php 
										$term = get_field('section_2_left_title');
										if( $term ): ?>
										<?php echo esc_html( $term->name ); ?>
										<?php endif; ?>
									</span>
									<p class="text-black text-base font-normal">
										<?php echo get_field('section_2_left_sub_title'); ?>
									</p>   
								</div>
								<div>
									<a href="<?php echo esc_url( get_term_link( $term ) ); ?>" class="home-section-2-btn rounded-2xl font-bold inline-block bg-white text-orange uppercase text-base px-5 py-3 hover:bg-orange-500 hover:text-white">SHOP NOW</a>
								</div>
							</div>
						</div>
					</div>
					<div >
						<div class="home-section-2-block relative bg-light-grey shadow shadow-gray-300 rounded-lg overflow-hidden">
							
							<img src="<?php echo get_field('section_2_right_image_1'); ?>" alt="">
							<div class="home-section-2-detail absolute flex justify-between flex-col top-0 left-0 bottom-0 right-0 p-5 ">
								<div>
									<span class="text-black text-lg font-bold">
										<?php 
										$term2 = get_field('section_2_right_title_1');
										if( $term2 ): ?>
										<?php echo esc_html( $term2->name ); ?>
										<?php endif; ?>
										
									</span>
									<p class="text-black text-xs font-normal">
										<?php echo get_field('section_2_right_subtitle_1'); ?>
									</p>   
								</div>
								<div>
									<a href="<?php echo esc_url( get_term_link( $term2 ) ); ?>" class="text-2xl">
										<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/arrow-black.png" alt="" class="w-7">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div >
						<div class="home-section-2-block relative bg-light-grey shadow shadow-gray-300 rounded-lg overflow-hidden">
							
							<img src="<?php echo get_field('section_2_right_image_2'); ?>" alt="">
							<div class="home-section-2-detail absolute flex justify-between flex-col top-0 left-0 bottom-0 right-0 p-5 ">
								<div>
									<span class="text-black text-lg font-bold">
										<?php 
										$term3 = get_field('section_2_right_title_2');
										if( $term3 ): ?>
										<?php echo esc_html( $term3->name ); ?>
										<?php endif; ?>
										
									</span>
									<p class="text-black text-xs font-normal">
										<?php echo get_field('section_2_right_subtitle_2'); ?>
									</p>   
								</div>
								<div>
									<a href="<?php echo esc_url( get_term_link( $term3 ) ); ?>" class="text-2xl">
										<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/arrow-black.png" alt="" class="w-7">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div >
						<div class="home-section-2-block relative bg-light-grey shadow shadow-gray-300 rounded-lg overflow-hidden">
							<img src="<?php echo get_field('section_2_right_image_3'); ?>" alt="">
							<div class="home-section-2-detail absolute flex justify-between flex-col top-0 left-0 bottom-0 right-0 p-5 ">
								<div>
									<span class="text-black text-lg font-bold">
										<?php 
										$term4 = get_field('section_2_right_title_3');
										if( $term4 ): ?>
										<?php echo esc_html( $term4->name ); ?>
										<?php endif; ?>
										
									</span>
									<p class="text-black text-xs font-normal">
										<?php echo get_field('section_2_right_subtitle_3'); ?>
									</p>   
								</div>
								<div>
									<a href="<?php echo esc_url( get_term_link( $term4 ) ); ?>" class="text-2xl">
										<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/arrow-black.png" alt="" class="w-7">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div >
						<div class="home-section-2-block relative bg-light-grey shadow shadow-gray-300 rounded-lg overflow-hidden">
							
							<img src="<?php echo get_field('section_2_right_image_4'); ?>" alt="">
							<div class="home-section-2-detail absolute flex justify-between flex-col top-0 left-0 bottom-0 right-0 p-5 ">
								<div>
									<span class="text-black text-lg font-bold">
										<?php 
										$term5 = get_field('section_2_right_title_4');
										if( $term5 ): ?>
										<?php echo esc_html( $term5->name ); ?>
										<?php endif; ?>
										
									</span>
									<p class="text-black text-xs font-normal">
										<?php echo get_field('section_2_right_subtitle_4'); ?>
									</p> 
								</div>
								<div>
									<a href="<?php echo esc_url( get_term_link( $term5 ) ); ?>" class="text-2xl">
										<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/arrow-black.png" alt="" class="w-7">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
</div>
<!-- Home Page Section 2 End -->

<!-- Home Page Section 3 Start -->
<div class="home-section-3 pb-16">
	<div class="max-w-5xl mx-auto">
		<div class="section-header text-center mb-16">
			<h1 class="text-black text-5xl uppercase font-bold">
				TOP SELLING <span class="text-orange">products</span>
			</h1>
		</div>
		<div class="grid grid-cols-3 grid-flow-row gap-8">
			<?php echo do_shortcode('[woocommerce_sellings_products]'); ?>
		</div>
	</div>
</div>
<!-- Home Page Section 3 End -->

<!-- Home Page Section 4 Start -->
<div class="home-section-4 py-32 " style="background-image: url(<?php echo get_field('home_section_4_bckground_image'); ?>);">
	<div class="container mx-auto">
		<div class="flex justify-end">
			<div class="w-3/5 text-center">
				<h4 class="font-normal text-3xl text-white">
					<?php echo get_field('home_section_4_upper_text'); ?>
				</h4>
				<div class="font-bold text-8xl text-white mb-12">
					<?php echo get_field('home_section_4_lower_text'); ?>
				</div>
				<a href="<?php echo get_field('home_section_4_button_link'); ?>" class="text-lg font-bold shadow shadow-gray-200  bg-white text-light-orange  hover:bg-black hover:text-white">
					Shop Now
				</a>
			</div>
		</div>
	</div>
</div>
<!-- Home Page Section 4 End -->

<!-- Home Page Deals Section Start -->
<div class="home-deals-section py-24">
	<div class="container mx-auto">
		<div class="flex gap-8">
			<div class="w-1/4">
				<div class="deal-of-weak rounded-lg shadow shadow-gray-200 overflow-hidden">
					<div class="deal-of-weak-header bg-orange p-4">
						<div class="font-bold text-white text-base">Deal of the week</div>
					</div>
					<div class="deal-of-weak-slider">
						<?php 
						global $product;
						$productId = get_field('deal_of_the_week_product');
						
						foreach($productId as $pprice){
							$product   = wc_get_product( $pprice );
							$prPrice = $product->get_sale_price();
							$price = '';
							if($prPrice){
								$price .= '<div class="p-price flex gap-3">
								<span class="p-regular-price font-normal text-orange text-base title-color line-through">
								   €'.$product->get_regular_price().'
								   </span>
								   <span class="p-regular-price font-bold text-light-orange text-lg">
								   €'.$product->get_sale_price().'
								   </span></div>';
							}
							else {
								$price .= '<div class="p-price flex gap-3">
								<span class="p-regular-price font-bold text-light-orange text-lg">
								   €'.$product->get_regular_price().'
								   </span></div>';
							}
						}
						$html = '';
						foreach($productId as $pid){
							$product   = wc_get_product( $pid );
							$image_id  = $product->get_image_id();
							$image_url = wp_get_attachment_image_url( $image_id, 'small' );
							$html .= '<div>
								<div class="deal-of-weak-block">
								<a href="'.get_permalink( $product->get_id() ).'" class="home-products-deal">
								<img src="'.$image_url.'" alt="" class="h-56 w-auto mx-auto my-5">
								<div class="dow-detail flex gap-4 items-center p-4">
								<div class="dow-detail-left">
                                   <h4 class="text-black text-lg font-medium">
								   '.$product->get_title().'
								   </h4>
								   '.$price.'
								   </div>
								   <div class="dow-detail-right">
								   		<div class="dow-discount bg-orange text-white text-xl font-bold rounded-full">
											40%<br/><small>Off</small> 
										 </div>
										</div>
									</div>
								</div>
                                </a>
                            </div>';
						}
						?>
						<?php echo $html; ?>
					</div>
				</div>
			</div>
			<div class="w-3/4">
				<div class="tabs-block">
					<div class="tabs-heading flex justify-between mb-5">
						<h3 class="black-2d font-bold text-2xl">Daily Deals! Get our best prices.</h3>
						<div class="tab flex gap-4">
							<button class="tablinks active font-bold text-lg" onclick="openCity(event, 'tab-1')">
								30% Offer
							</button>
							<button class="tablinks font-bold text-lg" onclick="openCity(event, 'tab-2')">
								70% Offer
							</button>
							<button class="tablinks font-bold text-lg" onclick="openCity(event, 'tab-3')">
								45% Offer
							</button>
						</div>
					</div>

					<div id="tab-1" class="tabcontent" style="display: block;">
						<div class="grid grid-cols-3 grid-flow-row gap-8">
							<?php
							global $product;
							$productId = get_field('daily_deals_30%_off');
							$offerProduct = '';
							foreach($productId as $pid){
								$product   = wc_get_product( $pid );
								$image_id  = $product->get_image_id();
								$image_url = wp_get_attachment_image_url( $image_id, 'small' );
								$offerProduct .= '<div class="home-products-block rounded-2xl shadow shadow-gray-300">
									<div class="home-product-image rounded-2xl p-5 shadow shadow-gray-300 relative">
									<a href="'.get_permalink( $product->get_id() ).'">
										<img src="'.$image_url.'" alt="" class="h-56 w-auto mx-auto">
										</a>
										<span class="product-rotate-text">
										 '.get_brands($product->get_id()).'
										</span>
									</div>
									<div class="home-product-detail p-5">
									<a href="'.get_permalink( $product->get_id() ).'">
										<div class="title-color font-normal text-base mb-4">
										'.$product->get_title().'
										</div>
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
												<span class="text-black font-bold text-base">
												€'.$product->get_regular_price().'
												</span>
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
							?>
							<?php echo $offerProduct; ?>
						</div>
					</div>

					<div id="tab-2" class="tabcontent">
						<div class="grid grid-cols-3 grid-flow-row gap-8">
							<?php
							global $product;
							$productId = get_field('daily_deals_70%_off');
							$offerProduct = '';
							foreach($productId as $pid){
								$product   = wc_get_product( $pid );
								$image_id  = $product->get_image_id();
								$image_url = wp_get_attachment_image_url( $image_id, 'small' );
								$offerProduct .= '<div class="home-products-block rounded-2xl shadow shadow-gray-300">
									<div class="home-product-image rounded-2xl p-5 shadow shadow-gray-300 relative">
									<a href="'.get_permalink( $product->get_id() ).'">
										<img src="'.$image_url.'" alt="" class="h-56 w-auto mx-auto">
										</a>
										<span class="product-rotate-text">
										'.get_brands($product->get_id()).'
										</span>
									</div>
									<div class="home-product-detail p-5">
									<a href="'.get_permalink( $product->get_id() ).'">
										<div class="title-color font-normal text-base mb-4"> 
										'.$product->get_title().'
										</div>
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
												<span class="text-black font-bold text-base">
												€'.$product->get_regular_price().'
												</span>
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
							?>
							<?php echo $offerProduct; ?>
						</div>
					</div>

					<div id="tab-3" class="tabcontent">
						<div class="grid grid-cols-3 grid-flow-row gap-8">
							<?php
							global $product;
							$productId = get_field('daily_deals_45%_off');
							$offerProduct = '';
							foreach($productId as $pid){
								$product   = wc_get_product( $pid );
								$image_id  = $product->get_image_id();
								$image_url = wp_get_attachment_image_url( $image_id, 'small' );
								$offerProduct .= '<div class="home-products-block rounded-2xl shadow shadow-gray-300">
									<div class="home-product-image rounded-2xl p-5 shadow shadow-gray-300 relative">
									<a href="'.get_permalink( $product->get_id() ).'">
										<img src="'.$image_url.'" alt="" class="h-56 w-auto mx-auto">
										</a>
										<span class="product-rotate-text">
										'.get_brands($product->get_id()).'
										</span>
									</div>
									<div class="home-product-detail p-5">
									<a href="'.get_permalink( $product->get_id() ).'">
										<div class="title-color font-normal text-base mb-4">
										'.$product->get_title().'
										</div>
										</a>
										<div class="home-product-shipping grid grid-cols-2 grid-flow-row gap-4">
											<div class="hps-left flex items-center gap-3">
												<span class="shadow shadow-gray-300 bg-white px-2">
												<img src="'.get_site_url().'/wp-content/themes/tailpress/images/truck.png" alt="" class="w-6">
												</span>
												<span class="text-xs title-color font-normal">Op <br/>voorraad</span>
											</div>
											<div class="hps-right">
												<span class="text-xs title-color font-normal text-left">
												Nu bested, dinsdag bezorgd
												</span>
											</div>	
										</div>
										<div class="home-product-bottom flex items-center justify-between mt-4">
											<div class="home-product-price">
												<span class="text-black font-bold text-base">
												€'.$product->get_regular_price().'
												</span>
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
							?>
							<?php echo $offerProduct; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Home Page Deals Section End -->

<!-- Home Page Section 5 Start -->
<div class="home-section-5 pt-16">
	<div class="home-section-4-inner bg-orange">
		<div class="container mx-auto">
			<div class="flex items-center">
				<div class="w-1/2">
					<div class="home-section-4-detail">
						<div class="text-6xl font-bold text-white">
							<?php echo get_field('home_section_5_upper_text'); ?>
						</div>
						<p class="text-3xl font-normal text-white my-4">
							<?php echo get_field('home_section_5_lower_text'); ?>
						</p>
						<a href="<?php echo get_field('home_section_5_button_link'); ?>" class="text-lg font-bold shadow shadow-gray-200  bg-white text-light-orange  hover:bg-black hover:text-white">Meld je aan!</a>
					</div>
				</div>
				<div class="w-1/2">
					<div class="home-section-4-image">
						<img src="<?php echo get_field('home_section_5_image'); ?>" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Home Page Section 5 End -->

<!-- Home Page Hot Deals Section Start -->
<div class="home-hotdeal-section py-24">
	<div class="container mx-auto">
		<div class="grid grid-cols-4 grid-flow-row gap-8">
			<div>
				<div class="hotdeal-first-block bg-orange py-9 px-4 shadow shadow-gray-200 rounded-lg">
					<h3 class="text-2xl font-bold text-white mb-7">
						<?php echo get_field('hot_deal_banner_text')?>
					</h3>
					<img src="<?php echo get_field('hot_deal_banner_image')?>" alt=""  class="h-56 w-auto mx-auto my-8">
					<a href="<?php echo get_field('hot_deal_shop_button_link')?>" class="text-light-orange text-base font-bold bg-white hover:bg-black hover:text-white shadow shadow-gray-100">Shop Now <span>&#8594;</span>
					</a>
				</div>
			</div>
			<div>
				<div class="hotdeal-block relative p-4 shadow shadow-gray-300 bg-white rounded-lg">
					<?php
						global $product;
						$htProdId1 = get_field('hot_deal_product_1');
						$product   = wc_get_product( $htProdId1 );
						$htProimage_id1  = $product->get_image_id();
						$htProductImage1 = wp_get_attachment_image_url( $htProimage_id1, 'full' );
						$htproductTitle1 = $product->get_title();
						$htProductLink1 = get_permalink( $htProdId1 );
					?>
					<span class="p-top-tag bg-orange text-white text-sm">
						<?php echo get_brands($htProdId1); ?>
					</span>
					<img src="<?php echo $htProductImage1; ?>" alt="" class="h-56 w-auto mx-auto my-8">
					<a href="<?php echo $htProductLink1; ?>">
						<div class="p-regular-price font-normal text-orange text-base title-color mb-4">
							<?php echo $htproductTitle1; ?>
						</div>
					</a>
					<span class="p-star">
						<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/star.png" alt="">
					</span>
					<div class="p-price flex gap-3 my-3">
						<?php if($product->get_sale_price() >> $product->get_regular_price()){?>
						<span class="p-regular-price font-bold text-light-orange text-lg">
							€<?php echo $product->get_sale_price(); ?>
						</span>
						<span class="p-regular-price font-normal text-orange text-base title-color line-through">
							€<?php echo $product->get_regular_price(); ?>
						</span>
							<?php }
						else {
							?>
						<span class="p-regular-price font-bold text-light-orange text-lg">
							€<?php echo $product->get_regular_price(); ?>
						</span>
					<?php	}?>
						
					</div>
					<div class="actiondiv">
					<a href="?add-to-cart=<?php echo $product->get_id(); ?>" data-quantity="1" class="flex gap-3 text-sm font-bold bg-orange items-center text-white hover:bg-black add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $product->get_id(); ?>" data-product_sku="<?php echo $product->get_sku(); ?>">
						<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/shopping-bag.png"> 
						Add To Cart
					</a>
					</div>
				</div>
			</div>
			<div>
				<div class="hotdeal-block relative p-4 shadow shadow-gray-300 bg-white rounded-lg">
					<?php
						global $product;
						$htProdId2 = get_field('hot_deal_product_2');
						$product   = wc_get_product( $htProdId2 );
						$htProimage_id2  = $product->get_image_id();
						$htProductImage2 = wp_get_attachment_image_url( $htProimage_id2, 'full' );
						$htproductTitle2 = $product->get_title();
						$htProductLink2 = get_permalink( $htProdId2 );
					?>
					<span class="p-top-tag bg-orange text-white text-sm">
						<?php echo get_brands($htProdId2); ?>
					</span>
					<img src="<?php echo $htProductImage2; ?>" alt="" class="h-56 w-auto mx-auto my-8">
					<a href="<?php echo $htProductLink2; ?>">
					<div class="p-regular-price font-normal text-orange text-base title-color mb-4">
						<?php echo $htproductTitle2; ?>
					</div>
					</a>
					<span class="p-star">
						<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/star.png" alt="">
					</span>
					<div class="p-price flex gap-3 my-3">
						<?php if($product->get_sale_price() >> $product->get_regular_price()){?>
						<span class="p-regular-price font-bold text-light-orange text-lg">
							€<?php echo $product->get_sale_price(); ?>
						</span>
						<span class="p-regular-price font-normal text-orange text-base title-color line-through">
							€<?php echo $product->get_regular_price(); ?>
						</span>
							<?php }
						else {
							?>
						<span class="p-regular-price font-bold text-light-orange text-lg">
							€<?php echo $product->get_regular_price(); ?>
						</span>
					<?php	}?>
						
					</div>
					<div class="actiondiv">
					<a href="?add-to-cart=<?php echo $product->get_id(); ?>" data-quantity="1" class="flex gap-3 text-sm font-bold bg-orange items-center text-white hover:bg-black add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $product->get_id(); ?>" data-product_sku="<?php echo $product->get_sku(); ?>">
						<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/shopping-bag.png"> 
						Add To Cart
					</a>
					</div>
				</div>
			</div>
			<div>
				<div class="hotdeal-block relative p-4 shadow shadow-gray-300 bg-white rounded-lg">
					<?php
						global $product;
						$htProdId3 = get_field('hot_deal_product_3');
						$product   = wc_get_product( $htProdId3 );
						$htProimage_id3  = $product->get_image_id();
						$htProductImage3 = wp_get_attachment_image_url( $htProimage_id3, 'full' );
						$htproductTitle3 = $product->get_title();
						$htProductLink3 = get_permalink( $htProdId3 );
					?>
					<span class="p-top-tag bg-orange text-white text-sm">
						<?php echo get_brands($htProdId3); ?>
					</span>
					<img src="<?php echo $htProductImage3; ?>" alt="" class="h-56 w-auto mx-auto my-8">
					<a href="<?php echo $htProductLink3; ?>">
					<div class="p-regular-price font-normal text-orange text-base title-color mb-4">
						<?php echo $htproductTitle3; ?>
					</div>
					</a>
					<span class="p-star">
						<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/star.png" alt="">
					</span>
					<div class="p-price flex gap-3 my-3">
						<?php if($product->get_sale_price() >> $product->get_regular_price()){?>
						<span class="p-regular-price font-bold text-light-orange text-lg">
							€<?php echo $product->get_sale_price(); ?>
						</span>
						<span class="p-regular-price font-normal text-orange text-base title-color line-through">
							€<?php echo $product->get_regular_price(); ?>
						</span>
							<?php }
						else {
							?>
						<span class="p-regular-price font-bold text-light-orange text-lg">
							€<?php echo $product->get_regular_price(); ?>
						</span>
					<?php	}?>
						
					</div>
					<div class="actiondiv">
					<a href="?add-to-cart=<?php echo $product->get_id(); ?>" data-quantity="1" class="flex gap-3 text-sm font-bold bg-orange items-center text-white hover:bg-black add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $product->get_id(); ?>" data-product_sku="<?php echo $product->get_sku(); ?>">
						<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/shopping-bag.png"> 
						Add To Cart
					</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Home Page Hot Deals Section End -->

<!-- Home Page Section 6 Start -->
<div class="home-section-6">
	<div class="container mx-auto">
		<div class="home-section-6-slider">
			<div>
				<div class="hs6-block rounded-2xl bg-orange px-5 py-9">
					<div class="flex gap-8 items-center">
						<div class="w-2/5">
							<div class="hs6-image">
								<img src="<?php echo get_field('home_section_6_slider_image_1'); ?>" alt="">
							</div>
						</div>
						<div class="w-3/5">
							<div class="hs6-detail pr-9">
								<h2 class="text-5xl text-white font-bold mb-4">
									<?php echo get_field('home_section_6_slider_title_1'); ?>
								</h2>
								<p class="text-lg text-white font-normal">
									<?php echo get_field('home_section_6_slider_desc_1'); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div>
				<div class="hs6-block rounded-2xl bg-orange px-5 py-9">
					<div class="flex gap-8 items-center">
						<div class="w-2/5">
							<div class="hs6-image">
								<img src="<?php echo get_field('home_section_6_slider_image_2'); ?>" alt="">
							</div>
						</div>
						<div class="w-3/5">
							<div class="hs6-detail pr-9">
								<h2 class="text-5xl text-white font-bold mb-4">
									<?php echo get_field('home_section_6_slider_title_2'); ?>
								</h2>
								<p class="text-lg text-white font-normal">
									<?php echo get_field('home_section_6_slider_desc_2'); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div>
				<div class="hs6-block rounded-2xl bg-orange px-5 py-9">
					<div class="flex gap-8 items-center">
						<div class="w-2/5">
							<div class="hs6-image">
								<img src="<?php echo get_field('home_section_6_slider_image_3'); ?>" alt="">
							</div>
						</div>
						<div class="w-3/5">
							<div class="hs6-detail pr-9">
								<h2 class="text-5xl text-white font-bold mb-4">
									<?php echo get_field('home_section_6_slider_title_3'); ?>
								</h2>
								<p class="text-lg text-white font-normal">
									<?php echo get_field('home_section_6_slider_desc_3'); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Home Page Section 6 End -->

<!-- Home Page Section 7 Start -->
<div class="home-section-7 py-16">
	<div class="container mx-auto px-10">
		<div class="grid grid-cols-3 grid-flow-row gap-8">
			<div class="hs7-block flex items-center gap-6">
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/door-handle.png" alt="" class="h-11 w-auto">   
				<span>
					<div class="text-lg font-normal text-black">2000+ artikelen uit voorraad</div>
					<p class="text-sm font-normal title-color">leverbaar</p>
				</span>
			</div>

			<div class="hs7-block flex items-center gap-6">
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/key.png" alt="" class="h-11 w-auto">   
				<span>
					<div class="text-lg font-normal text-black">boven €100,- gratis</div>
					<p class="text-sm font-normal title-color">verzending</p>
				</span>
			</div>

			<div class="hs7-block flex items-center gap-6">
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/calendar.png" alt="" class="h-11 w-auto">   
				<span>
					<div class="text-lg font-normal text-black">30 dagen recht op</div>
					<p class="text-sm font-normal title-color">retour</p>
				</span>
			</div>
		</div>
	</div>
</div>
<!-- Home Page Section 7 End -->
<?php
get_footer(); 
?>
