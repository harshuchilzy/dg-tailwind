<?php /* Template Name: Contact Page */
get_header(); ?>
<div class="contact-page-main w-full inline-block py-9">
    <div class="contact-section-1">
        <div class="container mx-auto">
            <div class="flex gap-8">
                <div class="w-2/5">
                    <div class="cs1-detail w-full inline-block">
                        <h5 class="text-orange uppercase font-proxima text-base font-bold">Fell free to contact us</h5>
                        <h2 class="text-black uppercase font-proxima text-5xl font-bold mb-16">Do you have any <br/>questions?</h2>
                        <p class="text-black font-proxima text-base font-normal">Street 90 Lorem Ipsum st <br/>
                        Melbourne, Victoria 9000,<br/>
                        Australia</p>
                        <br/>
                        <a href="tel:0578760509" class="w-full inline-block text-black font-proxima text-base font-normal hover:text-orange-400">0578-760509</a>
                        <a href="mailto:info@deurbeslaggigant.nl" class="w-full inline-block text-black font-proxima text-base font-normal hover:text-orange-400">info@deurbeslaggigant.nl</a>
                        <br/>
                        <h4 class="text-black font-proxima text-sm uppercase font-normal mb-4">OPENING HOURSE</h4>
                        <p class="text-8a font-proxima text-sm font-normal">Monday - Friday:</p>
                        <p class="text-8a font-proxima text-sm font-normal">06:00 AM - 10:00 PM</p>
                        <br/>
                        <p class="text-8a font-proxima text-sm font-normal">Saturday - Sunday:</p>
                        <p class="text-8a font-proxima text-sm font-normal">08:00 AM - 08:00 PM</p>
                    </div>
                </div>
                <div class="w-3/5">
                    <div class="cs1-image w-full inline-block">
                            <div class="cs1-social flex gap-3 justify-end mb-7">
                                <a href="#" class="social-link"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/facebook-icon.png" alt=""></a>
                                <a href="#" class="social-link"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/instagram-icon.png" alt=""></a>
                                <a href="#" class="social-link"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/whats-app-icon.png" alt=""></a>
                                <a href="#" class="social-link"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/twiter-icon.png" alt=""></a>
                                <a href="#" class="social-link"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/linked-in.png" alt=""></a>
                            </div>
                            <div class="cs1-image-map w-full inline-block relative">
                             
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3156.9904156973384!2d144.92588431509785!3d-37.69642413511075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65af021e39501%3A0x63c70d2e1977824b!2s90%20Glen%20St%2C%20Glenroy%20VIC%203046%2C%20Australia!5e0!3m2!1sen!2sin!4v1646025117149!5m2!1sen!2sin" width="750" height="500" style="border:0; border-radius:42px;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-form-section">
        <div class="container mx-auto">
            <div class="section-header text-center mb-16">
                <h6>LOREM IPSUM DOLOR SIT</h6>
				<h2 class="text-black text-5xl uppercase font-bold">Send us a <span class="text-orange">message</span></h2>
			</div>
			<div class="contact-form-detail">
			    <?php echo do_shortcode('[contact-form-7 id="19069" title="Contact form 1"]'); ?>
			</div>    
        </div>    
    </div>    
    <div class="contact-section-3 w-full inline-block pt-16 pb-6">
        <div class="container mx-auto">
                    <div class="grid grid-cols-3 grid-flow-row gap-14">
						<?php
						// global $blog;
				           $blogId = get_field('blog_post_under_contact_page');
						foreach($blogId as $blog){
						     $blog_title = get_post( $blog )->post_title;
						     $pl = get_permalink( $blog );
						     $dpl	= get_the_time('d/m/Y', $blog);
						    $dlmage = wp_get_attachment_url( get_post_thumbnail_id($blog));
						?>
                        <div class="fs3-block rounded-2xl shadow shadow-gray-300 overflow-hidden">
                            <div class="fs3-image rounded-2xl shadow shadow-gray-300 overflow-hidden relative">
                               <a href="<?php echo $pl; ?>">
								<img src="<?php echo $dlmage; ?>" alt="" width="300" height="200" class="h-56 w-full object-cover">
								</a>
                                
                            </div>
                            <div class="fs3-detail p-5">
                               <div class="flex gap-5">
                                    <div class="w-4/6">
										<a href="<?php echo $pl; ?>">
											<h3 class="text-black text-lg font-bold font-proxima">
												<?php echo $blog_title; ?>
											</h3>
										</a>
                                        <p class="text-8a text-base font-normal font-proxima">
											<?php echo get_field('content_1', $blog); ?>
										</p>
                                    </div>
                                    <div class="w-1/3">
                                        <span class="text-8a text-sm font-light font-proxima text-right w-full inline-block">
											<?php echo $dpl ;?>
										</span>
                                    </div>
                               </div>
                               <div class="fs3-comment-like flex items-center justify-between mt-3">
                                    <a href="<?php echo $pl; ?>" class="fs3-comments flex items-center gap-3 text-8a font-normal font-proxima text-sm hover:text-orange-400">
										<img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/chat.png" alt="" width="15" height="15"> (<?php echo get_post( $blog )->comment_count; ?>) comments</a>
								   <?php echo do_shortcode('[posts_like_dislike id='.$blog.']');?>
                               </div>

                            </div>
                        </div> 
						
<?php } ?>


                        
                    </div>
        </div>
    </div>

</div>
<?php
get_footer(); ?>