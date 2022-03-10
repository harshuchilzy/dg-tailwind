<?php 

if( is_product_category() || is_shop() ) {
 $paged = ($_GET['product-page']) ? $_GET['product-page'] : 1;
?>

<div class="collection-main my-16">
    <div class="container mx-auto">
            <div class="flex gap-8">
                <div class="w-1/5">
                    <div class="collection-filter-block">
                    <?php dynamic_sidebar( 'cat_left_1' ); ?>
                    </div>
                </div>
                <div class="w-4/5">
    <?php if($paged < 2){ ?>                
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
                                       <?php  global $wp_query;
                                        $catid = $wp_query->get_queried_object_id();
                                        $thumbnail_id = get_woocommerce_term_meta( $catid, 'thumbnail_id', true );
                                        $image  = wp_get_attachment_url( $thumbnail_id ); ?>
                                        <img src="<?= $image; ?>" alt="">
                                    </div>
                            </div>
                        </div>
                    </div>
    <?php } ?>
                    <div class="collection-breadcrumb py-16">
                        <?php
	$args = array(
            'delimiter'   => '<img src="https://eancodewebshop.nl/wp-content/themes/tailpress/images/arrow-grey.png" alt="" class="w-auto h-2">',
            'wrap_before' => '<ul class="flex gap-3 items-center">',
            'wrap_after'  => '</ul>',
            'before'      => '<li class="flex gap-3 items-center text-black font-normal text-xs font-proxima"> ',
            'after'       => '</li>',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
            
        );
?>
<?php woocommerce_breadcrumb( $args ); ?>
                        <!--<ul class="flex gap-3 items-center">-->
                        <!--    <li class="flex gap-3 items-center"><a href="#" class="text-black font-normal text-xs font-proxima">Home</a> <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/arrow-grey.png" alt="" class="w-auto h-2"></li>-->
                        <!--    <li class="flex gap-3 items-center"><a href="#" class="text-black font-normal text-xs font-proxima">Deurbeslog</a> <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/arrow-grey.png" alt="" class="w-auto h-2"></li>-->
                        <!--    <li><a href="#" class="rounded-sm bg-orange text-white text-xs py-1 px-4 font-normal font-proxima hover:bg-black">Beldrukker</a></li>-->
                        <!--</ul>-->
                    </div>
		<?php the_content(); ?>

					<?php if( get_field('bottom_text') != "" ): ?>
					<div class="collection-bottom-banner py-16">
						<div class="container mx-auto">
							<div class="cbb-block pr-12 ">
								<div class="flex items-center gap-8 bg-orange rounded-2xl shadow shadow-gray-200 py-12 px-10">
									<div class="w-4/5">
										<div class="cbb-detail">
											<?php echo get_field('bottom_text'); ?>
										</div>
									</div>
									<div class="w-1/5">
										<div class="cbb-image">
											<img src="<?php echo get_field('bottom_text_image'); ?>" alt="">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endif; ?>
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
		
</div>
</div>
</div>
<?php }else{ ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header mb-4 test23">
		<?php the_title( sprintf( '<h1 class="entry-title text-2xl lg:text-5xl font-extrabold leading-tight mb-1"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-gray-700"><?php echo get_the_date(); ?></time>
	</header>

	<div class="entry-content tst43">
		<?php the_content(); 
				
			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tailpress' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tailpress' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
		

		?>

	</div>

</article>

<?php } ?>
