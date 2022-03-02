<?php /* Template Name: Collection Page */
get_header(); ?>

<div class="collection-main my-16">
    <div class="container mx-auto">
            <div class="flex gap-8">
                <div class="w-1/5">
                    filter
                </div>
                <div class="w-4/5">
                    <div class="collection-banner-header bg-orange rounded-2xl shadow shadow-gray-200 p-10">
                        <div class="flex gap-7">
                            <div class="w-3/4">
                                    <div class="collection-banner-detail">
                                        <h2 class="font-bold text-4xl text-white font-proxima mb-6">Beldrukkers: <br/>ons assortiment</h2>
                                        <p class="font-normal text-lg text-white font-proxima">Beldrukkers: ze zijn mateloos populair in onze webshop. Wij verkopen vooral elegante beldrukkers van het portugese designmerk JNF, maar ook messing beldrukkers van Mi Satori zijn erg gewild. In onze webshop vind je zowel ronde, ovale als vierkante exemplaren. Al onze producten komen inclusief bevestigingsmateriaal. Meer weten over beldrukkers? Bekijk hier alles over beldrukkers in onze blog.</p>
                                    </div>
                            </div>
                            <div class="w-1/4">
                                    <div class="collection-banner-image">
                                        <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/collection-banner-image.png" alt="">
                                    </div>
                            </div>
                        </div>
                    </div>

                    <div class="collection-breadcrumb py-16">
                        <ul class="flex gap-3 items-center">
                            <li class="flex gap-3 items-center"><a href="#" class="text-black font-normal text-xs font-proxima">Home</a> <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/arrow-grey.png" alt="" class="w-auto h-2"></li>
                            <li class="flex gap-3 items-center"><a href="#" class="text-black font-normal text-xs font-proxima">Deurbeslog</a> <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/arrow-grey.png" alt="" class="w-auto h-2"></li>
                            <li><a href="#" class="rounded-sm bg-orange text-white text-xs py-1 px-4 font-normal font-proxima hover:bg-black">Beldrukker</a></li>
                        </ul>
                    </div>

                    <div class="collection-products">
                            <div class="grid grid-cols-3 grid-flow-row gap-8">
								<div class="home-products-block rounded-2xl shadow shadow-gray-300">
									<div class="home-product-image rounded-2xl p-5 shadow shadow-gray-300 relative">
										<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/p-1.png" alt="" class="h-56 w-auto mx-auto">
										<span class="product-rotate-text">G-Bonomi-Figli</span>
									</div>
									<div class="home-product-detail p-5">
										<h3 class="title-color font-normal text-base mb-4">Beldrukker Opdek Ovaal 65x30mm RVS</h3>
										<div class="home-product-shipping grid grid-cols-2 grid-flow-row gap-4">
											<div class="hps-left flex items-center gap-3">
												<span class="shadow shadow-gray-300 bg-white px-2"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/truck.png" alt="" class="w-6"></span>
												<h5 class="text-xs title-color font-normal">Op <br/>voorraad</h5>
											</div>
											<div class="hps-right">
												<h5 class="text-xs title-color font-normal text-left">Nu bested, dinsdag bezorgd</h5>
											</div>	
										</div>
										<div class="home-product-bottom flex items-center justify-between mt-4">
											<div class="home-product-price">
												<h4 class="text-black font-bold text-base">€24.20</h4>
												<p class="title-color font-normal text-sm">Per stuk</p>
											</div>
											<div class="flex gap-1">
												<div class="quantity buttons_added">
													<input type="button" value="-" class="minus">
													<input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
													<input type="button" value="+" class="plus">
												</div>
												<a href="#" class="px-8 py-1 rounded-sm uppercase text-sm bg-orange text-white font-normal hover:bg-black">bestel</a>
											</div>
										</div>
									</div>
								</div>
							
								<div class="home-products-block rounded-2xl shadow shadow-gray-300">
									<div class="home-product-image rounded-2xl p-5 shadow shadow-gray-300 relative">
										<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/p-2.png" alt="" class="h-56 w-auto mx-auto">
										<span class="product-rotate-text">G-Bonomi-Figli</span>
									</div>
									<div class="home-product-detail p-5">
										<h3 class="title-color font-normal text-base mb-4">Beldrukker Opdek Ovaal 65x30mm RVS</h3>
										<div class="home-product-shipping grid grid-cols-2 grid-flow-row gap-4">
											<div class="hps-left flex items-center gap-3">
												<span class="shadow shadow-gray-300 bg-white px-2"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/truck.png" alt="" class="w-6"></span>
												<h5 class="text-xs title-color font-normal">Op <br/>voorraad</h5>
											</div>
											<div class="hps-right">
												<h5 class="text-xs title-color font-normal text-left">Nu bested, dinsdag bezorgd</h5>
											</div>	
										</div>
										<div class="home-product-bottom flex items-center justify-between mt-4">
											<div class="home-product-price">
												<h4 class="text-black font-bold text-base">€24.20</h4>
												<p class="title-color font-normal text-sm">Per stuk</p>
											</div>
											<div class="flex gap-1">
												<div class="quantity buttons_added">
													<input type="button" value="-" class="minus">
													<input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
													<input type="button" value="+" class="plus">
												</div>
												<a href="#" class="px-8 py-1 rounded-sm uppercase text-sm bg-orange text-white font-normal hover:bg-black">bestel</a>
											</div>
										</div>
								    </div>
							    </div>
								<div class="home-products-block rounded-2xl shadow shadow-gray-300">
									<div class="home-product-image rounded-2xl p-5 shadow shadow-gray-300 relative">
										<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/p-3.png" alt="" class="h-56 w-auto mx-auto">
										<span class="product-rotate-text">G-Bonomi-Figli</span>
									</div>
									<div class="home-product-detail p-5">
										<h3 class="title-color font-normal text-base mb-4">Beldrukker Opdek Ovaal 65x30mm RVS</h3>
										<div class="home-product-shipping grid grid-cols-2 grid-flow-row gap-4 ">
											<div class="hps-left flex items-center gap-3">
												<span class="shadow shadow-gray-300 bg-white px-2"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/truck.png" alt="" class="w-6"></span>
												<h5 class="text-xs title-color font-normal">Op <br/>voorraad</h5>
											</div>
											<div class="hps-right">
												<h5 class="text-xs title-color font-normal text-left">Nu bested, dinsdag bezorgd</h5>
											</div>	
										</div>
										<div class="home-product-bottom flex items-center justify-between mt-4">
											<div class="home-product-price">
												<h4 class="text-black font-bold text-base">€24.20</h4>
												<p class="title-color font-normal text-sm">Per stuk</p>
											</div>
											<div class="flex gap-1">
												<div class="quantity buttons_added">
													<input type="button" value="-" class="minus">
													<input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
													<input type="button" value="+" class="plus">
												</div>
												<a href="#" class="px-8 py-1 rounded-sm uppercase text-sm bg-orange text-white font-normal hover:bg-black">bestel</a>
											</div>
										</div>
									</div>
								</div>	
								
								<div class="home-products-block rounded-2xl shadow shadow-gray-300">
									<div class="home-product-image rounded-2xl p-5 shadow shadow-gray-300 relative">
										<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/p-1.png" alt="" class="h-56 w-auto mx-auto">
										<span class="product-rotate-text">G-Bonomi-Figli</span>
									</div>
									<div class="home-product-detail p-5">
										<h3 class="title-color font-normal text-base mb-4">Beldrukker Opdek Ovaal 65x30mm RVS</h3>
										<div class="home-product-shipping grid grid-cols-2 grid-flow-row gap-4 ">
											<div class="hps-left flex items-center gap-3">
												<span class="shadow shadow-gray-300 bg-white px-2"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/truck.png" alt="" class="w-6"></span>
												<h5 class="text-xs title-color font-normal">Op <br/>voorraad</h5>
											</div>
											<div class="hps-right">
												<h5 class="text-xs title-color font-normal text-left">Nu bested, dinsdag bezorgd</h5>
											</div>	
										</div>
										<div class="home-product-bottom flex items-center justify-between mt-4">
											<div class="home-product-price">
												<h4 class="text-black font-bold text-base">€24.20</h4>
												<p class="title-color font-normal text-sm">Per stuk</p>
											</div>
											<div class="flex gap-1">
												<div class="quantity buttons_added">
													<input type="button" value="-" class="minus">
													<input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
													<input type="button" value="+" class="plus">
												</div>
												<a href="#" class="px-8 py-1 rounded-sm uppercase text-sm bg-orange text-white font-normal hover:bg-black">bestel</a>
											</div>
										</div>
									</div>
								</div>	

								<div class="home-products-block rounded-2xl shadow shadow-gray-300">
									<div class="home-product-image rounded-2xl p-5 shadow shadow-gray-300 relative">
										<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/p-2.png" alt="" class="h-56 w-auto mx-auto">
										<span class="product-rotate-text">G-Bonomi-Figli</span>
									</div>
									<div class="home-product-detail p-5">
										<h3 class="title-color font-normal text-base mb-4">Beldrukker Opdek Ovaal 65x30mm RVS</h3>
										<div class="home-product-shipping grid grid-cols-2 grid-flow-row gap-4 ">
											<div class="hps-left flex items-center gap-3">
												<span class="shadow shadow-gray-300 bg-white px-2"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/truck.png" alt="" class="w-6"></span>
												<h5 class="text-xs title-color font-normal">Op <br/>voorraad</h5>
											</div>
											<div class="hps-right">
												<h5 class="text-xs title-color font-normal text-left">Nu bested, dinsdag bezorgd</h5>
											</div>	
										</div>
										<div class="home-product-bottom flex items-center justify-between mt-4">
											<div class="home-product-price">
												<h4 class="text-black font-bold text-base">€24.20</h4>
												<p class="title-color font-normal text-sm">Per stuk</p>
											</div>
											<div class="flex gap-1">
												<div class="quantity buttons_added">
													<input type="button" value="-" class="minus">
													<input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
													<input type="button" value="+" class="plus">
												</div>
												<a href="#" class="px-8 py-1 rounded-sm uppercase text-sm bg-orange text-white font-normal hover:bg-black">bestel</a>
											</div>
										</div>
									</div>
								</div>	

								<div class="home-products-block rounded-2xl shadow shadow-gray-300">
									<div class="home-product-image rounded-2xl p-5 shadow shadow-gray-300 relative">
										<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/p-3.png" alt="" class="h-56 w-auto mx-auto">
										<span class="product-rotate-text">G-Bonomi-Figli</span>
									</div>
									<div class="home-product-detail p-5">
										<h3 class="title-color font-normal text-base mb-4">Beldrukker Opdek Ovaal 65x30mm RVS</h3>
										<div class="home-product-shipping grid grid-cols-2 grid-flow-row gap-4 ">
											<div class="hps-left flex items-center gap-3">
												<span class="shadow shadow-gray-300 bg-white px-2"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/truck.png" alt="" class="w-6"></span>
												<h5 class="text-xs title-color font-normal">Op <br/>voorraad</h5>
											</div>
											<div class="hps-right">
												<h5 class="text-xs title-color font-normal text-left">Nu bested, dinsdag bezorgd</h5>
											</div>	
										</div>
										<div class="home-product-bottom flex items-center justify-between mt-4">
											<div class="home-product-price">
												<h4 class="text-black font-bold text-base">€24.20</h4>
												<p class="title-color font-normal text-sm">Per stuk</p>
											</div>
											<div class="flex gap-1">
												<div class="quantity buttons_added">
													<input type="button" value="-" class="minus">
													<input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode="">
													<input type="button" value="+" class="plus">
												</div>
												<a href="#" class="px-8 py-1 rounded-sm uppercase text-sm bg-orange text-white font-normal hover:bg-black">bestel</a>
											</div>
										</div>
									</div>
								</div>	

							</div>
                    </div>

                </div>
            </div>

            
    </div>
    <div class="collection-bottom-banner py-16">
        <div class="container mx-auto">
            <div class="cbb-block pr-12 ">
                <div class="flex items-center gap-8 bg-orange rounded-2xl shadow shadow-gray-200 py-12 px-10">
                    <div class="w-4/5">
                        <div class="cbb-detail">
                             <h2 class="font-bold text-4xl text-white font-proxima mb-5">Lorem Ipsum</h2>
                             <p class="font-normal text-lg text-white font-proxima mb-5">Ben je op zoek naar een beldrukker die helemaal past bij de rest van de voordeur of de stijl die je voor ogen hebt? Wij bieden verschillende hoogwaardige beldrukkers aan van prachtige materialen en uiteenlopende vormen en stijlen. Met ons assortiment beldrukkers ben je verzekerd dat jouw voordeur een unieke uitstraling krijgt en de beldrukker zal opvallen.</p>
                             <p class="font-normal text-lg text-white font-proxima">De beldrukkers zijn er in verschillende hoogwaardige materialen. Wat dacht je van prachtig</p>

                        </div>
                    </div>
                    <div class="w-1/5">
                        <div class="cbb-image">
                            <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/cbb-image.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-section-7 section-boder-hide">
		<div class="container mx-auto">
			<div class="grid grid-cols-4 grid-flow-row gap-8">
			   <div class="hs7-block flex items-center gap-6">
				 <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/box.png" alt="" class="h-11 w-auto">   
				 <span>
					<h3 class="text-lg font-normal text-black">No-Contact Delivery</h3>
					<p class="text-sm font-normal title-color">Free On Order Over $100</p>
				 </span>
			   </div>

			   <div class="hs7-block flex items-center gap-6">
				 <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/return.png" alt="" class="h-11 w-auto">   
				 <span>
					<h3 class="text-lg font-normal text-black">Fast, Free Returns</h3>
					<p class="text-sm font-normal title-color">Easy With Original Receipt</p>
				 </span>
			   </div>

			   <div class="hs7-block flex items-center gap-6">
				 <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/bubble-chat.png" alt="" class="h-11 w-auto">   
				 <span>
					<h3 class="text-lg font-normal text-black">Chat With Us</h3>
					<p class="text-sm font-normal title-color">Talk To Our Team Via Chat</p>
				 </span>
			   </div>

               <div class="hs7-block flex items-center gap-6">
				 <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/credit-card.png" alt="" class="h-11 w-auto">   
				 <span>
					<h3 class="text-lg font-normal text-black">Buy Now, Pay Later</h3>
					<p class="text-sm font-normal title-color">Finance Interest-Free Today</p>
				 </span>
			   </div>

			</div>
		</div>
	</div>

</div>

<?php
get_footer(); ?>