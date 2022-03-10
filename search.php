<?php get_header(); ?>
<div class="w-full inline-block py-16">
   <div class="container mx-auto">
       	
<h2 class="text-4xl font-bold font-proxima mb-3">Search Result for <?php /* Search Count */ $allsearch = new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>');  //echo $count . ' '; _e('articles'); wp_reset_query(); ?></h2>
     <div class="flex gap-7">
       <div class="mobile_search_results grid grid-cols-4 grid-flow-row gap-7">
<?php
				if ( have_posts() ) { 
                              while ( have_posts() ) { the_post();  ?>
                        <div class="fs3-block rounded-2xl shadow shadow-gray-300 overflow-hidden">
                            <div class="fs3-image rounded-2xl shadow shadow-gray-300 overflow-hidden relative">
                                <a href="<?php echo get_permalink(); ?>">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" width="300" height="200" class="h-56 w-full object-cover"></a>
                                
                            </div>
                            <div class="fs3-detail p-5">
                               <div class="flex gap-5">
                                    <div class="w-4/6">
										<a href="<?php echo get_permalink(); ?>">
											<h3 class="text-black text-lg font-bold font-proxima"><?php echo get_the_title();?></h3></a>
                                        <p class="text-8a text-base font-normal font-proxima"><?php echo the_content(); ?></p>
                                    </div>
                                    <div class="w-1/3">
                                        <span class="text-8a text-sm font-light font-proxima text-right w-full inline-block"><?php echo get_the_date('d/m/Y'); ?></span>
                                    </div>
                               </div>
                               <div class="fs3-comment-like flex items-center justify-between mt-3">
                                    <a href="<?php echo get_permalink(); ?>" class="fs3-comments flex items-center gap-3 text-8a font-normal font-proxima text-sm hover:text-orange-400"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/chat.png" alt="" width="15" height="15"> (<?php echo $post->comment_count; ?>) comments</a>
								   <?php echo do_shortcode('[posts_like_dislike]');?>
<!--                                     <a href="#" class="fs3-comments flex items-center gap-3 text-8a font-normal font-proxima text-sm hover:text-orange-400"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/like.png" alt="" width="15" height="15"> (52) likes</a> -->
                               </div>

                            </div>
                        </div> 
                     <?php     
                }}
?>     
       </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>