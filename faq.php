<?php /* Template Name: faq Page */
get_header(); ?>
<div class="faq-page-main" >
    <div class="faq-secton-1 w-full inline-block py-16 bg-no-repeat bg-center bg-cover" style="background: url(<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/fs1-bg.png);">
        <div class="container mx-auto">
            <div class="fs1-detail w-2/3 inline-block">
                <h2 class="uppercase text-4xl font-bold text-white font-proxima mb-3">Knowledge <span class="text-orange">base</span></h2>
                <p class="text-base font-normal text-df font-proxima mb-4">Lorem Ipsum is simply dummy text of the printing and <br/>typesetting industry. Lorem Ipsum has been the industry's </p>
                <div class="header-search">
						<form action="<?= site_url();?>" method="get">
							<input type="text" name="s" id="search" placeholder="What can we help with?" value="<?php the_search_query(); ?>" />
							<input type="hidden" name="post_type" value="knowledge-base" />
							<button type="submit"><img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/loupe.png"  alt="" width="50" height="50"></button>
						</form>
				</div>
            </div>
        </div>
    </div>
    <div class="faq-section-2 w-full inline-block py-16">
        <div class="container mx-auto">
            <div class="grid grid-cols-5 grid-flow-row gap-8">
				<?php  
			             $terms = get_terms( array(
                                    'taxonomy' => 'knowledge-base-category',
                                    'hide_empty' => false,
                                     ) );
						 foreach($terms as $taxval){
							$taxo_nmame = $taxval->name;
						    $taxo_slug = $taxval->slug;
							 		?>
                <div class="flex gap-5 items-center">
                    <img src="<?php echo get_site_url(); ?>/wp-content/themes/tailpress/images/cloud.png"  alt="" width="50" height="50" class="w-10" >
                    <span>
                        <h4 class="text-3b font-bold text-lg font-proxima"><?php echo $taxo_nmame; ?></h4>
                        <a href="<?=site_url(); ?>/knowledge-base-category/<?=$taxo_slug;?>" class="text-3b font-light text-base font-proxima hover:text-orange-400">View section <span>&#8594;</span></a>
                    </span>
                </div>
 <?php } ?>

            </div>
        </div>
    </div>

    <div class="faq-section-3 w-full inline-block pb-16">
        <div class="container mx-auto">
            <div class="flex gap-7">
                <div class="w-3/5">
                    <div class="grid grid-cols-2 grid-flow-row gap-7">
						<?php  
						 $knowledge_base = array(
                                                  'post_type' => 'knowledge-base',
                                                  'post_status' => 'publish',
                                                  'orderby'=> 'title',
									              'order' => 'ASC',
                                                  'posts_per_page' => -1
                                               );
						$query = new WP_Query($knowledge_base);
						if ( $query->have_posts() ) { 
                              while ( $query->have_posts() ) { $query->the_post();  
						 ?>
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
                               </div>

                            </div>
                        </div> 
<?php 	  } }  ?>
                    </div>
                </div>
                <div class="w-2/5">
                    <div class="blog-sidebar w-full inline-block shadow shadow-gray-300 px-7 py-12 bg-white rounded-2xl">
                          <h2 class="font-proxima uppercase text-orange text-4xl text-center font-bold mb-9">FAQ's</h2>
                          <div class="sidebar-accordion">
							  <?php
							      $faq_blog = array(
                                                  'post_type' => 'faq',
                                                  'post_status' => 'publish',
                                                  'orderby'=> 'title',
									              'order' => 'ASC',
                                                  'posts_per_page' => -1
                                               );
						$query = new WP_Query($faq_blog);
						if ( $query->have_posts() ) { 
                              while ( $query->have_posts() ) { $query->the_post();  
						  ?>
                              <div class="sidebar-accordion-block"> 
                                    <button class="accordion"><?php echo get_the_title(); ?></button>
                                    <div class="panel">
                                    <p<?php the_content(); ?></p>
                                    </div>
                               </div> 
							  <?php }}  ?>

                          </div>
                          
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
<?php
get_footer(); ?>